<?php

namespace Drupal\restrict_by_ip\EventSubscriber;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\restrict_by_ip\LoginFirewallInterface;

/**
 * Triggers the restrict by IP login firewall.
 *
 * @package Drupal\restrict_by_ip
 */
class FirewallSubscriber implements EventSubscriberInterface {

  /**
   * Drupal\restrict_by_ip\LoginFirewallInterface definition.
   *
   * @var Drupal\restrict_by_ip\LoginFirewallInterface
   */
  protected $loginFirewall;

  /**
   * Drupal\Core\Session\AccountInterface definition.
   *
   * @var Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * Constructor.
   */
  public function __construct(LoginFirewallInterface $login_firewall, AccountInterface $current_user) {
    $this->loginFirewall = $login_firewall;
    $this->currentUser = $current_user;
  }

  /**
   * Registers the methods in this class that should be listeners.
   *
   * @return array
   *   An array of event listener definitions.
   */
  public static function getSubscribedEvents() {
    // The event priority ensures this runs before cached response
    // subscribers (e.g., dynamic page cache).
    $events[KernelEvents::REQUEST] = ['loginFirewall', 35];

    return $events;
  }

  /**
   * This method is called whenever the kernel.request event is dispatched.
   *
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   The event.
   */
  public function loginFirewall(RequestEvent $event) {
    if ($response = $this->loginFirewall->execute($this->currentUser)) {
      $event->setResponse($response);
    }
  }

}
