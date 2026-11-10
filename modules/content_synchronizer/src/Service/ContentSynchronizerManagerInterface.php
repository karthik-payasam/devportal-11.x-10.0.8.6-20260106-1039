<?php

namespace Drupal\content_synchronizer\Service;

use Drupal\content_synchronizer\Entity\ImportEntityInterface;
use Drupal\content_synchronizer\Processors\ImportProcessor;

/**
 * Content Synchronizer manager service.
 */
interface ContentSynchronizerManagerInterface {

  /**
   * Service name.
   *
   * @const string
   */
  const SERVICE_NAME = 'content_synchronizer.manager';

  /**
   * Create an import entity from a tar.gz file.
   *
   * @param string $tarGzFilePath
   *   The tar.gz file path.
   *
   * @return \Drupal\content_synchronizer\Entity\ImportEntityInterface|null
   *   The import entity.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function createImportFromTarGzFilePath(string $tarGzFilePath): ?ImportEntityInterface;

  /**
   * Clean temporary files.
   *
   * @return array
   *   The list of deleted files.
   */
  public function cleanTemporaryFiles();

  /**
   * Launch the specified export.
   *
   * @param int $exportId
   *   The id of the export to launch.
   * @param string $destination
   *   The path of the created file.
   *
   * @return array
   *   The destination data.
   */
  public function launchExport(int $exportId, string $destination = '');

  /**
   * Export a single entity.
   *
   * @param string $entityTypeId
   *   The entity type id.
   * @param int $id
   *   The entity id.
   * @param string $destination
   *   The entity id.
   *
   * @return array
   *   The destination data.
   */
  public function exportEntity(string $entityTypeId, int $id, string $destination = '');

  /**
   * Add content entities to an export entity
   *
   * @param string $exportId
   *   The id of the export entity.
   * @param string $entityTypeId
   *   The entity type id.
   * @param array $ids
   *   Array of entity ids.
   *
   */
  public function addEntitiesToExport($exportId, $entityTypeId, $ids): void;

  /**
   * Remove content entities to an export entity
   *
   * @param string $exportId
   *   The id of the export entity.
   * @param string $entityTypeId
   *   The entity type id.
   * @param array $ids
   *   Array of entity ids.
   *
   */
  public function removeEntitiesFromExport($exportId, $entityTypeId, $ids): void;

  /**
   * Create a tar.gz file.
   *
   * @param array $entitiesToExport
   *   The entities list.
   * @param string|bool $label
   *   The id of the export.
   * @param string $destination
   *   The destination.
   *
   * @return array
   *   The data of the export.
   */
  public function createExportFile(array &$entitiesToExport = [], $label = FALSE, string $destination = '');

  /**
   * Launch import from import id.
   */
  public function launchImport($importId, $publishType = ImportProcessor::DEFAULT_PUBLICATION_TYPE, $updateType = ImportProcessor::DEFAULT_UPDATE_TYPE);

  /**
   * Return true if export id exists.
   *
   * @param string|int $id
   *   The export id.
   *
   * @return string|int
   *   The id if exists.
   *
   * @throws \Exception
   */
  public function exportIdExists($id);

  /**
   * Check if entity type exists.
   *
   * @param string $value
   *   The value.
   *
   * @return string
   *   The value.
   *
   * @throws \Exception
   */
  public function entityTypeExists(string $value): ?string;

  /**
   * Check if entity exists.
   *
   * @param string $value
   *   The value.
   * @param string $entityTypeId
   *   The entity type id.
   *
   * @return string|null
   *   The value.
   *
   * @throws \Exception
   */
  public function entityExists(string $value, string $entityTypeId): ?string;

  /**
   * Test if tar.gz exists.
   *
   * @param string $path
   *   The path.
   *
   * @return string
   *   The path
   */
  public function tarGzExists(string $path): ?string;

}
