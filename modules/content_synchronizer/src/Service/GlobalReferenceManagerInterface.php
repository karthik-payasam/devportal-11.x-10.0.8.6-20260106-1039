<?php

namespace Drupal\content_synchronizer\Service;

use Drupal\Core\Entity\EntityInterface;

/**
 * The global reference manager.
 */
interface GlobalReferenceManagerInterface {

  /**
   * Service name.
   *
   * @const string
   */
  const SERVICE_NAME = 'content_synchronizer.global_reference_manager';

  // GID DATA.
  const GID_TABLE_NAME = 'content_synchronizer_global_reference';
  const FIELD_GID = 'gid';
  const FIELD_ENTITY_ID = 'entity_id';
  const FIELD_ENTITY_TYPE = 'entity_type';

  // BUFFER DATA.
  const BUFFER_TABLE_NAME = 'content_synchronizer_reference_buffer';
  const FIELD_PARENT_ENTITY_ID = 'entity_gid';
  const FIELD_REFERENCED_ENTITY_ID = 'referenced_entity_gid';
  const FIELD_FIELD_NAME = 'field_name';
  const FIELD_ORDER = 'item_order';

  /**
   * Get the global id of the entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return string|null
   *   The gid.
   */
  public function getEntityGlobalId(EntityInterface $entity);

  /**
   * Create GID.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return string
   *   The gid.
   */
  public function createEntityGlobalId(EntityInterface $entity);

  /**
   * Get the entity by is gid.
   *
   * @param string $gid
   *   The gid.
   *
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The entity.
   */
  public function getEntityByGid($gid);

  /**
   * Return the entity type from the gid.
   *
   * @param string $gid
   *   THe gid.
   *
   * @return string
   *   The entity type id.
   */
  public function getEntityTypeFromGid($gid);

  /**
   * Create GID from entity and gid.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   * @param string $gid
   *   THe gid.
   */
  public function createGlobalEntityByImportingEntityAndGid(EntityInterface $entity, $gid);

  /**
   * Delete the gid on entity deletion.
   */
  public function onEntityDelete(EntityInterface $entity);

  /**
   * Return the entity by gid and uuid.
   */
  public function getExistingEntityByGidAndUuid($gid, $uuid, $bundle);

}
