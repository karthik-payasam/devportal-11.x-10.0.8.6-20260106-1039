<?php

namespace Drupal\content_synchronizer\Processors\Type;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\TypedData\TypedData;

/**
 * The type processor interface.
 */
interface TypeProcessorInterface extends PluginInspectionInterface {

  /**
   * Get the data to export.
   *
   * @param \Drupal\Core\TypedData\TypedData $propertyData
   *   The property data to export.
   *
   * @return array
   *   The field data to export.
   */
  public function getExportedData(TypedData $propertyData);

  /**
   * Init the $propertyId value in the entity to import.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity_to_import
   *   The entity to import.
   * @param string $property_id
   *   THe property id.
   * @param array $data
   *   The data to import.
   */
  public function initImportedEntity(EntityInterface $entity_to_import, $property_id, array $data);

}
