<?php

namespace Drupal\content_synchronizer\Service;

use Drupal\Core\Entity\EntityInterface;

/**
 * The global reference  manager.
 */
class GlobalReferenceManager implements GlobalReferenceManagerInterface {

  /**
   * Get the global id of the entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return string|null
   *   The gid.
   */
  public function getEntityGlobalId(EntityInterface $entity) {

    $query = \Drupal::database()->select(self::GID_TABLE_NAME)
      ->fields(self::GID_TABLE_NAME, [self::FIELD_GID])
      ->condition(self::FIELD_ENTITY_TYPE, $entity->getEntityTypeId())
      ->condition(self::FIELD_ENTITY_ID, $entity->id());

    if ($result = $query->execute()->fetchField()) {
      return $result;
    }
    return NULL;
  }

  /**
   * Create GID.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return string
   *   The gid.
   */
  public function createEntityGlobalId(EntityInterface $entity) {
    $gid = ((int) (microtime(TRUE) * 100)) . '.' . $entity->getEntityTypeId() . '.' . $entity->id();

    $data = [
      self::FIELD_GID         => $gid,
      self::FIELD_ENTITY_ID   => $entity->id(),
      self::FIELD_ENTITY_TYPE => $entity->getEntityTypeId(),
    ];

    \Drupal::database()->insert(self::GID_TABLE_NAME)
      ->fields(array_keys($data))
      ->values($data)
      ->execute();
    return $gid;
  }

  /**
   * Get the entity by is gid.
   *
   * @param string $gid
   *   The gid.
   *
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The entity.
   */
  public function getEntityByGid($gid) {

    $query = \Drupal::database()->select(self::GID_TABLE_NAME)
      ->fields(self::GID_TABLE_NAME, [
        self::FIELD_ENTITY_TYPE,
        self::FIELD_ENTITY_ID,
      ])
      ->condition(self::FIELD_GID, $gid);

    if ($result = $query->execute()->fetchAssoc()) {
      return \Drupal::entityTypeManager()
        ->getStorage($result[self::FIELD_ENTITY_TYPE])
        ->load($result[self::FIELD_ENTITY_ID]);
    }
    return NULL;
  }

  /**
   * Checks if there is already a gid linked to the entity type and id.
   *
   * @param string $entityType
   *   The entityType.
  * @param string $entityId
   *   The entityId.
   *
   * @return bool
   *   If a reference exists.
   */
  public function doesEntityHaveAReference($entityType, $entityId) {

    $query = \Drupal::database()->select(self::GID_TABLE_NAME)
      ->fields(self::GID_TABLE_NAME, [
        self::FIELD_ENTITY_TYPE,
        self::FIELD_ENTITY_ID,
      ])
      ->condition(self::FIELD_ENTITY_TYPE, $entityType)
      ->condition(self::FIELD_ENTITY_ID, $entityId);

    $result = $query->execute()->fetchAssoc();

    return !empty($result);
  }

  /**
   * Checks if there is already a gid with a entity type and id already linked to another entity id
   *
   * @param string $gid
   *   The gid
   *
   * @return bool
   *   If a reference exists.
   */
  public function hasEntityBeenImportedBefore($gid) {
    $entityIdAndType = trim(substr($gid, strpos($gid, '.') + 1));
    $query = \Drupal::database()->select(self::GID_TABLE_NAME)
      ->fields(self::GID_TABLE_NAME, [
        self::FIELD_ENTITY_TYPE,
        self::FIELD_ENTITY_ID,
      ])
      ->condition(self::FIELD_GID, '.*'.$entityIdAndType.'$', 'REGEXP');

    $result = $query->execute()->fetchAssoc();

    return !empty($result);
  }

  /**
   * Return the entity type from the gid.
   *
   * @param string $gid
   *   THe gid.
   *
   * @return string
   *   The entity type id.
   */
  public function getEntityTypeFromGid($gid) {
    $entityTypeId = explode('.', $gid)[1];
    return $entityTypeId;
  }

  /**
   * Return the entity id from the gid.
   *
   * @param string $gid
   *   THe gid.
   *
   * @return string
   *   The entity type id.
   */
  public function getEntityIdFromGid($gid) {
    $entityId = explode('.', $gid)[2];
    return $entityId;
  }


  /**
   * Create GID from entity and gid.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   * @param string $gid
   *   THe gid.
   */
  public function createGlobalEntityByImportingEntityAndGid(EntityInterface $entity, $gid) {
    $data = [
      self::FIELD_GID         => $gid,
      self::FIELD_ENTITY_ID   => $entity->id(),
      self::FIELD_ENTITY_TYPE => $entity->getEntityTypeId(),
    ];

    try {
      \Drupal::database()->insert(self::GID_TABLE_NAME)
        ->fields(array_keys($data))
        ->values($data)
        ->execute();
    }
    catch (\Exception $e) {
      // Mute exception...
    }
  }

  /**
   * Delete the gid on entity deletion.
   */
  public function onEntityDelete(EntityInterface $entity) {
    \Drupal::database()->delete(self::GID_TABLE_NAME)
      ->condition(self::FIELD_ENTITY_ID, $entity->id())
      ->condition(self::FIELD_ENTITY_TYPE, $entity->getEntityTypeId())
      ->execute();
  }

  /**
   * Return the entity by gid and uuid.
   */
  public function getExistingEntityByGidAndUuid($gid, $uuid, $bundle) {
    // Load by gid for already imported or exported data :
    if ($existing = $this->getEntityByGid($gid)) {
      return [ $existing, 'update' ];
    }

    // Load by uuid :
    try {
      $entityType = $this->getEntityTypeFromGid($gid);
      $query = \Drupal::entityQuery($entityType)->condition('uuid', $uuid);

      $result = $query->accessCheck(TRUE)->execute();
      if (!empty($result)) {
        // Get the entity.
        $entity = \Drupal::entityTypeManager()
          ->getStorage($entityType)
          ->load(reset($result));

        if ($entity->bundle() != $bundle) {
          return [ NULL, 'newids'];
        }

        // Create the global reference association.
        $this->createGlobalEntityByImportingEntityAndGid($entity, $gid);

        return [ $entity, 'update' ];
      }

      $entityId = $this->getEntityIdFromGid($gid);
      $entity = \Drupal::entityTypeManager()
          ->getStorage($entityType)
          ->load($entityId);

      if(($entity && $entity->bundle() == $bundle) && $this->hasEntityBeenImportedBefore($gid)) {
        $this->createGlobalEntityByImportingEntityAndGid($entity, $gid);
        return [ $entity, 'overwrite' ];
      }

      if($this->doesEntityHaveAReference($entityType, $entityId)) {
        return [ NULL, 'newids'];
      }

      if ($entity && $entity->bundle() != $bundle) {
        return [ NULL, 'newids'];
      }

      if ($entity) {
        $this->createGlobalEntityByImportingEntityAndGid($entity, $gid);
        return [ $entity, 'overwrite' ];
      }
    }
    catch (\Exception $e) {
      // Mute exception.
    }

    return NULL;
  }

}
