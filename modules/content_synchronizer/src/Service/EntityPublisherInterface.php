<?php

namespace Drupal\content_synchronizer\Service;

use Drupal\Core\Entity\EntityInterface;

/**
 * The entity publisher service.
 */
interface EntityPublisherInterface {

  /**
   * Service name.
   *
   * @const string
   */
  const SERVICE_NAME = 'content_synchronizer.entity_publisher';

  /**
   * Save the entity after import.
   *
   * If the entity is revisionable, it creates a new revision.
   * If the entity is new and is a root entity, then it is unpublished.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to save.
   * @param string $gid
   *   The gid of the entity.
   * @param \Drupal\Core\Entity\EntityInterface $existingEntity
   *   The existing entity.
   * @param array $dataToImport
   *   The data to import.
   */
  public function saveEntity(EntityInterface $entity, $gid = NULL, EntityInterface $existingEntity = NULL, array $dataToImport = []);

}
