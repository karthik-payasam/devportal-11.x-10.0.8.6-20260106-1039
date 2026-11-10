<?php

namespace Drupal\custom_mfa\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MfaModalForm extends FormBase {

  public function getFormId() {
    return 'custom_mfa_modal_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $user = \Drupal::currentUser();
    $email = $user->getEmail();

    // Dynamic masking supporting .bank.in, .co.in, .org, etc.
    $parts = explode('@', $email);
    $username = $parts[0];
    $domain = $parts[1] ?? '';

    $user_len = strlen($username);
    $masked_user = substr($username, 0, 3) . str_repeat('*', min(10, max(3, $user_len - 3)));

    $domain_parts = explode('.', $domain);
    $main_domain = $domain_parts[0];
    $extension = implode('.', array_slice($domain_parts, 1));

    $masked_domain_name = substr($main_domain, 0, 3) . '**';
    $masked_email = $masked_user . '@' . $masked_domain_name . '.' . $extension;

    $session = \Drupal::request()->getSession();
    $otp_generated = $form_state->get('otp_generated') || !empty($session->get('mfa_code'));

    $form['#attached']['library'][] = 'core/drupal.dialog.ajax';
    $form['#attached']['library'][] = 'custom_mfa/mfa-styling';

    $form['#theme'] = 'custom_mfa_form';
    $form['#masked_email'] = $masked_email;
    $form['#otp_generated'] = $otp_generated;

    $form['status_messages'] = [
      '#type' => 'status_messages',
      '#weight' => -99,
    ];

    $form['otp_code'] = [
      '#type' => 'password',
      '#maxlength' => 6,
      '#size' => 6,
      '#attributes' => [
        'id' => 'edit-otp',
        'class' => ['form-text', 'form-control'],
        'inputmode' => 'numeric',
        'pattern' => '[0-9]*',
        'oninput' => "this.value = this.value.replace(/[^0-9]/g, '')",
        'onkeypress' => "return event.charCode >= 48 && event.charCode <= 57",
      ],
    ];

    $generate_label = $otp_generated ? $this->t('Resend OTP') : $this->t('Generate OTP');

    $form['actions']['generate'] = [
      '#type' => 'submit',
      '#value' => $generate_label,
      '#submit' => ['::resendOtp'],
      '#limit_validation_errors' => [],
      '#attributes' => [
        'class' => ['button', 'js-form-submit', 'form-submit', 'btn-default', 'btn'],
        'id' => 'edit-generate-otp',
      ],
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Proceed'),
      '#disabled' => !$otp_generated,
      '#attributes' => [
        'class' => ['button', 'js-form-submit', 'form-submit', 'page-load-progress-submit', 'btn-default', 'btn'],
        'id' => 'edit-submit',
      ],
    ];

    $form['actions']['cancel'] = [
      '#type' => 'submit',
      '#value' => $this->t('Cancel and Logout'),
      '#submit' => ['::cancelAndLogout'],
      '#limit_validation_errors' => [],
      '#attributes' => [
        'class' => ['btn', 'button'],
        'id' => 'mfa-cancel__btn',
      ],
    ];

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $trigger = $form_state->getTriggeringElement()['#parents'][0] ?? '';

    if ($trigger === 'submit') {
      $session = \Drupal::request()->getSession();
      $stored_otp = $session->get('mfa_code');
      $user_otp = trim($form_state->getValue('otp_code'));

      if (empty($stored_otp)) {
        $form_state->setError($form, $this->t('Please generate an OTP code first.'));
        return;
      }

      if ($user_otp === '') {
        $form_state->setError($form, $this->t('Please enter the OTP code sent to your registered email.'));
        return;
      }

      if ($user_otp != $stored_otp) {
        $form_state->setError($form, $this->t('Invalid OTP code. Please check your email or request a new code.'));
      }
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $session = \Drupal::request()->getSession();
    $session->set('mfa_verified', TRUE);
    $session->remove('mfa_code');
    $session->remove('mfa_otp_attempts');

    \Drupal::messenger()->addStatus($this->t('Authentication successful.'));
    $form_state->setRedirect('<front>');
  }

  public function resendOtp(array &$form, FormStateInterface $form_state) {
    $session = \Drupal::request()->getSession();
    $attempts = (int) $session->get('mfa_otp_attempts', 0);

    if ($attempts >= 3) {
      \Drupal::messenger()->addError($this->t('Maximum limit exceeded. You can only generate an OTP up to 3 times.'));
      $form_state->setRebuild();
      return;
    }

    $attempts++;
    $session->set('mfa_otp_attempts', $attempts);

    $otp = rand(100000, 999999);
    $session->set('mfa_code', $otp);

    $user = \Drupal::currentUser();
    $mailManager = \Drupal::service('plugin.manager.mail');
$params['message'] = 'Dear User,<br><br>'
  . 'Your 6 digit OTP is <strong>' . $otp . '</strong>. Do not share the OTP with anyone.<br><br>'
  . 'Regards,<br>'
  . 'CSB Bank Ltd.<br><br><br>'
  . '***** This is a system generated communication and does not require Signature *****';
    $mailManager->mail('custom_mfa', 'mfa_otp', $user->getEmail(), $user->getPreferredLangcode(), $params, NULL, TRUE);

    $form_state->set('otp_generated', TRUE);

    \Drupal::messenger()->addStatus(
      $this->t('Please enter OTP sent to your registered email ID. (Attempt @count of 3)', [
        '@count' => $attempts,
      ])
    );

    $form_state->setRebuild();
  }

  public function cancelAndLogout(array &$form, FormStateInterface $form_state) {
    $session = \Drupal::request()->getSession();
    $session->remove('mfa_otp_attempts');
    user_logout();
    $form_state->setRedirect('user.login');
  }

}
