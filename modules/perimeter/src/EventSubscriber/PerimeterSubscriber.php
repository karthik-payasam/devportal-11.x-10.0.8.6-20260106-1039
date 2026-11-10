<?php

namespace Drupal\perimeter\EventSubscriber;

use Drupal\ban\BanIpManagerInterface;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Flood\FloodInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\IpUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Drupal\Core\Site\Settings;

/**
 * On page not found events, ban the IP if the request is suspicious.
 */
class PerimeterSubscriber implements EventSubscriberInterface {

  /**
   * The logger factory.
   *
   * @var \Drupal\Core\Logger\LoggerChannelFactoryInterface
   */
  protected $loggerFactory;

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;

  /**
   * The Ban manager.
   *
   * @var \Drupal\ban\BanIpManagerInterface
   */
  protected $banManager;

  /**
   * Flood service.
   *
   * @var \Drupal\Core\Flood\FloodInterface
   */
  protected FloodInterface $flood;

  /**
   * Key for the flood check.
   *
   * @var string
   */
  protected $floodKey = 'perimeter.not_found_attempt_ip';

  /**
   * Perimeter Subscriber.
   *
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $logger_factory
   *   The logger factory.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory.
   * @param \Drupal\Core\Session\AccountProxyInterface $current_user
   *   The current user.
   * @param \Drupal\ban\BanIpManagerInterface $ban_manager
   *   The ban manager service.
   * @param \Drupal\Core\Flood\FloodInterface|null $flood
   *   The flood service.
   */
  public function __construct(LoggerChannelFactoryInterface $logger_factory, ConfigFactoryInterface $config_factory, AccountProxyInterface $current_user, BanIpManagerInterface $ban_manager, ?FloodInterface $flood = NULL) {
    $this->loggerFactory = $logger_factory;
    $this->configFactory = $config_factory;
    $this->currentUser = $current_user;
    $this->banManager = $ban_manager;
    if (!$flood) {
      // @see https://www.drupal.org/project/perimeter/issues/3395160#comment-15279015
      // @codingStandardsIgnoreLine
      $flood = \Drupal::service('flood');
    }
    $this->flood = $flood;
  }

  /**
   * {@inheritdoc}
   *
   * Note, that the events won't trigger on already cached pages and therefore
   * accessing cached pages won't trigger bans.
   */
  public static function getSubscribedEvents() {
    // Originally, we used "onKernelResponse" in addition to "onKernelException"
    // for fast404 module compatibility. But there were a couple of problems
    // with that approach, see:
    // https://www.drupal.org/project/perimeter/issues/3470229 and
    // https://www.drupal.org/project/perimeter/issues/3470557
    // Therefore, we removed the "onKernelResponse" event and now only use
    // "onKernelException", which seems to be compatible with the default
    // installation of the fast404 module.
    $events[KernelEvents::EXCEPTION][] = ['onKernelException'];
    return $events;
  }

  /**
   * Handle the perimeter ban logic on page not event exceptions.
   */
  public function onKernelException(ExceptionEvent $event) {
    if ($event->getThrowable() instanceof NotFoundHttpException) {
      $this->handleBannedUrls($event->getRequest());
    }
  }

  /**
   * Ban the IP if the request is suspicious.
   */
  protected function handleBannedUrls(Request $request) {
    $clientIp = $request->getClientIp();
    $whitelist = Settings::get('reverse_proxy_addresses', []) ;
    if ($this->currentUser->hasPermission('bypass perimeter defence rules') || $this->isWhitelisted($clientIp) || in_array($clientIp, $whitelist)) {
      return;
    }
    $request_path = $request->getPathInfo();
    $config = $this->configFactory->get('perimeter.settings');
    $bannedPatterns = $config->get('not_found_exception_patterns');
    $flood_threshold = $config->get('flood_threshold');
    $flood_window = $config->get('flood_window');
    if (!empty($bannedPatterns) && !empty($request_path) && (bool)\Drupal::state()->get('ibm_apim.ip_ban_enabled', true)) {
      foreach ($bannedPatterns as $pattern) {
        $pattern = trim($pattern);
        if (!empty($pattern) && preg_match($pattern, $request_path)) {
          // If flood is enabled, allow attempts up to the threshold.
          if ($flood_threshold > 0) {
            // We allow one more attempt than the threshold, because
            // we are banning the ip on the request AFTER the threshold is
            // reached.
            if ($this->flood->isAllowed($this->floodKey, $flood_threshold, $flood_window)) {
              $this->flood->register($this->floodKey, $flood_window);
              return;
            }
          }

          $this->banManager->banIp($clientIp);
          $this->loggerFactory->get('Perimeter')->notice('Banned: %ip for requesting %pattern <br />Source: %source <br /> User Agent: %browser',
            [
              '%ip' => $clientIp,
              '%pattern' => Xss::filter($request_path),
              '%source' => isset($_SERVER['HTTP_REFERER']) ? Xss::filter($_SERVER['HTTP_REFERER']) : '',
              '%browser' => isset($_SERVER['HTTP_USER_AGENT']) ? Xss::filter($_SERVER['HTTP_USER_AGENT']) : '',
            ]);

          // Remove flood records after banning, so that if the user gets
          // unbanned it will again respect the threshold.
          $this->flood->clear($this->floodKey);
          break;
        }
      }
    }
  }

  /**
   * Check if the IP address is whitelisted.
   *
   * @param string $clientIp
   *   The client's ip address.
   *
   * @return bool
   *   Whether the client's ip address is whitelisted.
   */
  protected function isWhitelisted($clientIp) {
    $allowed_ips = $this->configFactory->get('perimeter.settings')->get('whitelisted_ips') ?? [];
    foreach ($allowed_ips as $allowed_ip) {
      if (IpUtils::checkIp($clientIp, $allowed_ip)) {
        return TRUE;
      }
    }
    return FALSE;
  }

}
