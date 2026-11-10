<?php

/**
 * @file
 * Contains \Drupal\restrict_by_ip\Session\AccountProxy.
 */

namespace Drupal\restrict_by_ip\Session;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Session\AccountProxy;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\Core\Session\AnonymousUserSession;
use Drupal\restrict_by_ip\RoleFirewallInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * When the current user is loaded, remove any roles that are restricted based
 * on IP whitelists. Proxy all other method calls to the original current_user
 * service.
 */
class RestrictedAccountProxy extends AccountProxy {

  /**
   * The original current_user service.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $original;

  /**
   * Entity Type Manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Role Firewall.
   *
   * @var \Drupal\restrict_by_ip\RoleFirewallInterface
   */
  protected $roleFirewall;

  /**
   * Construct a RestrictedAccountProxy object.
   *
   * @param \Drupal\Core\Session\AccountProxyInterface $original
   *   The original current_user we're decorating.
   * @param \Symfony\Contracts\EventDispatcher\EventDispatcherInterface $eventDispatcher
   *   Event Dispatcher.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   Entity Type Manager.
   * @param \Drupal\restrict_by_ip\RoleFirewallInterface $role_firewall
   *   Role Firewall.
   */
  public function __construct(
    AccountProxyInterface      $original,
    EventDispatcherInterface   $eventDispatcher,
    EntityTypeManagerInterface $entityTypeManager,
    RoleFirewallInterface      $role_firewall) {
    parent::__construct($eventDispatcher);
    $this->original = $original;
    $this->entityTypeManager = $entityTypeManager;
    $this->roleFirewall = $role_firewall;
  }

  /**
   * Return roles for this user, less any that are restricted.
   *
   * @param bool $exclude_locked_roles
   *   (optional) If TRUE, locked roles (anonymous/authenticated) are not returned.
   *
   * @return array
   *   List of role IDs.
   */
  public function getRoles($exclude_locked_roles = FALSE) {
    $roles = $this->getAccount()->getRoles($exclude_locked_roles);
    $remove_roles = $this->roleFirewall->rolesToRemove();

    return array_diff($roles, $remove_roles);
  }

  /**
   * {@inheritdoc}
   *
   * We need to duplicate this method instead of pointing at the original
   * because $this->id doesn't get set on the original.
   */
  public function getAccount() {
    if (!isset($this->account)) {
      if ($this->id) {
        // After the container is rebuilt, DrupalKernel sets the initial
        // account to the id of the logged in user. This is necessary in order
        // to refresh the user account reference here.
        $this->setAccount($this->loadUserEntity($this->id));
      }
      else {
        $this->account = new AnonymousUserSession();
      }
    }

    return $this->account;
  }

  /**
   * {@inheritdoc}
   */
  public function hasPermission($permission) {
    // User #1 has all privileges.
    if ((int) $this->id() === 1) {
      return TRUE;
    }

    return $this->getRoleStorage()->isPermissionInRoles($permission, $this->getRoles());
  }

  /**
   * Returns the role storage object.
   *
   * @return \Drupal\Core\Entity\EntityStorageInterface
   *   The role storage object.
   */
  protected function getRoleStorage() {
    return $this->entityTypeManager->getStorage('user_role');
  }

}
