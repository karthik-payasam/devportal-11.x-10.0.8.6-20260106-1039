<?php

namespace Drupal\content_synchronizer\Processors\Type;

/**
 * Default type processor.
 *
 * @package Drupal\content_synchronizer\Processors\Type
 */
class DefaultTypeProcessor extends EmbedEntitiesTypeProcessorBase {

  /**
   * {@inheritdoc}
   */
  public function getPluginId() {
    return 'type_processor_default';
  }

  /**
   * {@inheritdoc}
   */
  public function getPluginDefinition() {
    return [];
  }

}
