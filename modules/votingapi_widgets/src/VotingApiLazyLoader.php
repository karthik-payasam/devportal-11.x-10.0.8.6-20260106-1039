<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets;

use Drupal\Core\Security\TrustedCallbackInterface;
use Drupal\votingapi_widgets\Plugin\VotingApiWidgetManager;

/**
 * Implements lazy loading.
 */
class VotingApiLazyLoader implements TrustedCallbackInterface {

  /**
   * The VotingApiLazyLoader constructor.
   *
   * @param \Drupal\votingapi_widgets\Plugin\VotingApiWidgetManager $widgetManager
   *   The votingapi_widget widget manager.
   */
  public function __construct(
    protected VotingApiWidgetManager $widgetManager,
  ) {}

  /**
   * Builds the rating form.
   */
  public function buildForm($plugin_id, $entity_type, $entity_bundle, $entity_id, $vote_type, $field_name, $settings): array {
    $definitions = $this->widgetManager->getDefinitions();

    /** @var \Drupal\votingapi_widgets\Plugin\VotingApiWidgetInterface $plugin */
    $plugin = $this->widgetManager->createInstance($plugin_id, $definitions[$plugin_id]);

    return $plugin->buildForm($entity_type, $entity_bundle, $entity_id, $vote_type, $field_name, unserialize($settings));
  }

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks(): array {
    return ['buildForm'];
  }

}
