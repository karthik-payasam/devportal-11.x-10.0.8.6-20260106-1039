<?php

namespace Drupal\graphql_twig\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Configure graphql twig settings.
 *
 * @internal
 */
class GraphQLTwigSettingsForm extends ConfigFormBase {

  /**
   * GraphQL server storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected \Drupal\Core\Entity\EntityStorageInterface $graphQlServerStorage;

  /**
   * Constructs a SiteInformationForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager.
   */
  public function __construct(
    ConfigFactoryInterface $config_factory,
    EntityTypeManagerInterface $entityTypeManager
  ) {
    parent::__construct($config_factory);
    $this->graphQlServerStorage = $entityTypeManager->getStorage('graphql_server');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('entity_type.manager'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'graphql_twig_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['graphql_twig.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $site_config = $this->config('graphql_twig.settings');

    $servers = [];
    foreach ($this->graphQlServerStorage->loadMultiple() as $server) {
      $servers[$server->id()] = $server->label();
    }
    $form['graphql_server_id'] = [
      '#type' => 'select',
      '#title' => $this->t('GraphQL server'),
      '#options' => ['' => $this->t('- None -')] + $servers,
      '#default_value' => $site_config->get('graphql_server_id'),
      '#required' => TRUE,
    ];

    $debug_placement = $site_config->get('debug_placement');
    $form['debug'] = [
      '#type' => 'details',
      '#title' => t('Debug'),
      '#open' => TRUE,
    ];
    $form['debug']['debug_placement'] = [
      '#type' => 'select',
      '#title' => t('Debug placement'),
      '#options' => [
        'wrapped' => $this->t('wrapped'),
        'inside' => $this->t('inside'),
      ],
      '#default_value' => $debug_placement,
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('graphql_twig.settings')
      ->set('graphql_server_id', $form_state->getValue('graphql_server_id'))
      ->set('debug_placement', $form_state->getValue('debug_placement'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
