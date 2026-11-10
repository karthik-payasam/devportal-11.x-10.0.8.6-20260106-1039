<?php

namespace Drupal\votingapi_widgets\Plugin;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\votingapi_widgets\Attribute\VotingApiWidget;

/**
 * Provides the Voting API widget plugin manager.
 *
 * @see \Drupal\votingapi_widgets\Plugin\VotingApiWidgetInterface
 */
class VotingApiWidgetManager extends DefaultPluginManager {

  /**
   * {@inheritdoc}
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/VotingApiWidget', $namespaces, $module_handler, VotingApiWidgetInterface::class, VotingApiWidget::class, 'Drupal\votingapi_widgets\Annotation\VotingApiWidget');
    $this->alterInfo('votingapi_widgets_voting_api_widget_info');
    $this->setCacheBackend($cache_backend, 'votingapi_widgets_voting_api_widget_plugins');
  }

}
