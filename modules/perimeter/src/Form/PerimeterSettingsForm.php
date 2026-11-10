<?php

namespace Drupal\perimeter\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * The perimeter settings form.
 *
 * @package Drupal\perimeter\Form
 */
class PerimeterSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'perimeter.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'perimeter_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('perimeter.settings');
    $form['not_found_exception_patterns'] = [
      '#type' => 'textarea',
      '#title' => $this->t('URL banning patterns'),
      '#default_value' => implode("\n", $config->get('not_found_exception_patterns')),
      '#access' => $this->currentUser()->hasPermission('administer perimeter url patterns'),
      '#description' => $this->t('A list of regex patterns, each pattern on a separate line. Perimeter will ban any user that generates a "404 - File not found" for requesting any of the defined url patterns.<br>IPs are banned by adding an entry to the Drupal Core Ban module. You can manage / unblock the blocked IP addresses on the <a href="@link">IP address bans</a> page.', ['@link' => Url::fromRoute('ban.admin_page')->toString()]),
      '#required' => TRUE,
    ];
    $form['whitelisted_ips'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Whitelisted IPs / IP-Ranges'),
      '#default_value' => implode("\n", $config->get('whitelisted_ips')),
      '#access' => $this->currentUser()->hasPermission('administer perimeter ip whitelist'),
      '#description' => $this->t('A list of allowed IPs and IP-Ranges, that will never be blocked. Each IP on a separate line.<br>Supports ranges such as `192.168.1.0/24`, `192.168.0.0/16` or `192.0.0.0/8`.'),
    ];
    $form['flood_threshold'] = [
      '#type' => 'number',
      '#title' => $this->t('Flood threshold'),
      '#default_value' => $config->get('flood_threshold') ?? 0,
      '#min' => 0,
      '#description' => $this->t('Specifies the amount of attempts a user can request a banned url, before their IP is banned. Setting this to "0" will immediately ban the IP.<br>Setting this value to "2" for example, will allow a user to do two requests without a ban and then they will get banned on the third request.<br><strong>Note:</strong> The per user failed attempts are only counted, if the user visits different banned URLs (due to caching). If the user visits the same banned url multiple times, it will only count as one attempt.'),
    ];
    $form['flood_window'] = [
      '#type' => 'number',
      '#title' => $this->t('Flood window'),
      '#default_value' => $config->get('flood_window') ?? 3600,
      '#min' => 1,
      '#description' => $this->t('The time window being assessed for the flood threshold to take affect (Checking the amount of times the IP address connected in the specified time frame). Default is 3600 seconds (1 hour).'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('perimeter.settings')
      ->set('not_found_exception_patterns', explode("\n", $form_state->getValue('not_found_exception_patterns')))
      ->set('whitelisted_ips', explode("\n", $form_state->getValue('whitelisted_ips')))
      ->set('flood_threshold', $form_state->getValue('flood_threshold'))
      ->set('flood_window', $form_state->getValue('flood_window'))
      ->save();

    // @todo In functional tests, invalidating the page cache was required
    //   after adding a pattern to ban anonymous users who already have a
    //   session. Should we invalidate the page cache here?
  }

}
