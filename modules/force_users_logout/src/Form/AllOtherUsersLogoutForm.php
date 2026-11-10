<?php

namespace Drupal\force_users_logout\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\Role;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Form to log out all other users.
 */
class AllOtherUsersLogoutForm extends ConfigFormBase {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs entity type manager service.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'force_users_logout.allotherusers_logout_form',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'allotherusers_force_logout_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['confirm_logout'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Log out all non-admin users'),
      '#default_value' => 0,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Force Logout'),
    ];

    return $form;
  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state){
   // parent::submitForm($form, $form_state);

    if (!$form_state->getValue('confirm_logout')) {
      $this->messenger()->addWarning($this->t('Please check the box to confirm logout.'));
      return;
    }

    $uids = \Drupal::entityQuery('user')
      ->condition('status', 1)
      ->accessCheck()
      ->execute();

    // Create batch operations.
    $operations = [];
    $chunks = array_chunk($uids, 500);
    foreach ($chunks as $chunk) {
      $operations[] = [
        [static::class, 'logoutUsersBatch'],
        [$chunk],
      ];
    }
    $batch = [
      'title' => $this->t('Logging out users...'),
      'operations' => $operations,
      'finished' => [static::class, 'batchFinished'],
      'init_message' => $this->t('Starting user logout process...'),
      'progress_message' => $this->t('Logging out non admin users.'),
      'error_message' => $this->t('An error occurred during logout.'),
    ];
    \Drupal::logger('FORCE_LOGOUT')->notice('All other users logout initiated');
    batch_set($batch);
  }

  /**
   * Batch operation callback: logs out a batch of users.
   */
  public static function logoutUsersBatch(array $uids, array &$context){
    $result = \Drupal::entityTypeManager()->getStorage('user')->loadMultiple($uids);
    $session_manager = \Drupal::service('session_manager');
    /** @var \Drupal\user\UserInterface $user */
    foreach ($result as $user) {
      if ($user->id() != 1 || !in_array('administrator', $user->getRoles())) {
        if ($user->isAuthenticated()) {
          $session_manager->delete($user->id());
        }
      }
    }
    $context['message'] = t('Logged out a batch of users.');
  }

  /**
   * Batch finished callback.
   */
  public static function batchFinished($success, array $results, array $operations) {
    if ($success) {
      \Drupal::messenger()->addStatus(t('All non-admin users have been logged out.'));
      \Drupal::logger('FORCE_LOGOUT')->notice('All non-admin users have been force logged out');
    }
    else {
      \Drupal::messenger()->addError(t('Some errors occurred while logging out users.'));
    }
  }
}
