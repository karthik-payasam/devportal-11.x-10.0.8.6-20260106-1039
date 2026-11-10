<?php

namespace Drupal\content_synchronizer\Errors;

use Drupal\Core\Entity\EntityTypeInterface;

/**
 * No content entity exception.
 */
class BundleDoesNotExistsException extends \Exception {

  /**
   * Constructor.
   *
   * @param string $bundle_name
   *   The bundle name.
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
   *   The entity type.
   */
  public function __construct(string $bundle_name, EntityTypeInterface $entity_type) {
    $this->message = sprintf('Bundle type "%s" is not a valid bundle for entity type %s (%s). Please check the entity configuration.', $bundle_name, $entity_type->getLabel(), $entity_type->id());
  }

}
