<?php

namespace Drupal\content_synchronizer\Service;

use Drupal\Core\Entity\EntityInterface;

/**
 * The export manager.
 */
interface ExportManagerInterface {

  /**
   * Service name.
   *
   * @const string
   */
  const SERVICE_NAME = 'content_synchronizer.export_manager';

  /**
   * Return the list of export checkboxes options.
   *
   * @return array
   *   The export list options.
   */
  public function getExportsListOptions();

  /**
   * Return the list of export for an entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return array
   *   THe list of exports.
   */
  public function getEntitiesExport(EntityInterface $entity);

  /**
   * Action after delete entity.
   */
  public function onEntityDelete(EntityInterface $entity);

}
