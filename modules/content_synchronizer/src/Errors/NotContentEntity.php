<?php

namespace Drupal\content_synchronizer\Errors;

use Drupal\Core\Entity\EntityInterface;

/**
 * No content entity exception.
 */
class NotContentEntity extends \Exception {

  /**
   * Constructor.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   */
  public function __construct(EntityInterface $entity) {
    $this->message = sprintf('Entity of type %s is not a content entity and therefor can not be exported.', $entity->getEntityTypeId());
  }

}
