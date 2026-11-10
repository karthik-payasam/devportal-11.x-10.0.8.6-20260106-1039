<?php

namespace Drupal\encrypted_login\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Core\State\StateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a controller for handling RSA public key retrieval.
 */
class EncryptedLoginController extends ControllerBase {

  /**
   * The state service.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * Constructs a new EncryptedLoginController.
   *
   * @param \Drupal\Core\State\StateInterface $state
   *   The state service.
   */
  public function __construct(StateInterface $state) {
    $this->state = $state;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('state')
    );
  }

  /**
   * Retrieves the RSA public key for client-side encryption.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   A JSON response containing the RSA public key or an error message.
   */
  public function getPublicKey(): JsonResponse {
    // Fetch the RSA public key from Drupal's state API.
    $public_key = $this->state->get('encrypted_login.rsa_public_key');

    if ($public_key) {
      return new JsonResponse(['public_key' => $public_key]);
    }

    return new JsonResponse(['error' => 'RSA public key not found.'], 500);
  }

}
