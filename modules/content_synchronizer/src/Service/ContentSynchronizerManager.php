<?php

namespace Drupal\content_synchronizer\Service;

use Drupal\content_synchronizer\Entity\ExportEntity;
use Drupal\content_synchronizer\Entity\ImportEntity;
use Drupal\content_synchronizer\Entity\ImportEntityInterface;
use Drupal\content_synchronizer\Form\LaunchImportForm;
use Drupal\content_synchronizer\Processors\ExportEntityWriter;
use Drupal\content_synchronizer\Processors\ExportProcessor;
use Drupal\content_synchronizer\Processors\ImportProcessor;
use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\file\Entity\File;

/**
 * Content Synchronizer manager service.
 */
class ContentSynchronizerManager implements ContentSynchronizerManagerInterface {

  use StringTranslationTrait;

  /**
   * Singleton quick access.
   *
   * @return static
   *   Singleton.
   */
  public static function me() {
    return \Drupal::service(static::SERVICE_NAME);
  }

  /**
   * The date formatter.
   *
   * @var \Drupal\Core\Datetime\DateFormatterInterface
   */
  protected DateFormatterInterface $dateFormatter;

  /**
   * The file system service.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected FileSystemInterface $fileSystem;

  /**
   * EntityTypeManager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  /**
   * App root.
   *
   * @var string
   */
  protected string $appRoot;

  /**
   * The APIs Taxonomy ID.
   *
   * @var string
   */
  protected string $apisTaxonomyID;

  /**
   * Constructs a ContentSynchronizerManager object.
   *
   * @param \Drupal\Core\Datetime\DateFormatterInterface $date_formatter
   *   The date formatter.
   * @param \Drupal\Core\File\FileSystemInterface $file_system
   *   The file system service.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type.
   * @param string $appRoot
   *   The app root.
   */
  public function __construct(DateFormatterInterface $date_formatter, FileSystemInterface $file_system, EntityTypeManagerInterface $entityTypeManager, $appRoot) {
    $this->dateFormatter = $date_formatter;
    $this->fileSystem = $file_system;
    $this->entityTypeManager = $entityTypeManager;
    $this->appRoot = $appRoot;
    $this->apisTaxonomyID = '';
  }

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
  public function createImportFromTarGzFilePath(string $tarGzFilePath): ?ImportEntityInterface {
    $importEntity = NULL;
    if (file_exists($tarGzFilePath)) {
      $extensionMIMEtype = mime_content_type($tarGzFilePath);
      if ((str_ends_with($extensionMIMEtype, 'gzip') || str_ends_with($extensionMIMEtype, 'tar.gz') || str_ends_with($extensionMIMEtype, 'tgz') || str_ends_with($extensionMIMEtype, 'tar'))) {
        $privateDir = ImportEntity::ARCHIVE_DESTINATION;
        $this->fileSystem->prepareDirectory($privateDir, FileSystemInterface::CREATE_DIRECTORY);
        $uri = $this->fileSystem->saveData(file_get_contents($tarGzFilePath), ImportEntity::ARCHIVE_DESTINATION . '/' . basename($tarGzFilePath));
        $this->fileSystem->chmod($uri, 775);
        $file = File::create([
          'uri' => $uri,
          'status' => 0,
        ]);

        if ($file) {
          $name = strip_tags($this->t('Drush import - %date', [
            '%date' => $this->dateFormatter->format(time()),
          ]));
          $importEntity = ImportEntity::create(
            [
              'name' => $name,
              ImportEntity::FIELD_ARCHIVE => $file,
            ]
          );
          $importEntity->save();
        }
      }
      else {
        throw new \Error('The file is not a .tar.gz or .tgz archive');
      }
    }
    else {
      throw new \Error('No file found');
    }

    return $importEntity;
  }

  /**
   * Clean temporary files.
   *
   * @return array
   *   The list of deleted files.
   */
  public function cleanTemporaryFiles() {
    $deletedFiles = [];
    $path = $this->fileSystem->realpath(ExportEntityWriter::getGeneratorDir());
    foreach (glob($path . '/*') as $file) {
      if (is_dir($file)) {
        $this->fileSystem->deleteRecursive($file);
        $deletedFiles[] = $file;
      }
    }

    return $deletedFiles;
  }

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
  public function launchExport($exportId, $destination = '') {
    $export = ExportEntity::load($exportId);
    if (!$export) {
      throw new \Exception('No export with the ID ' . $exportId . ' found');
    }

    return $this->createExportFile($export->getEntitiesList(), $export->label(), $destination);
  }

  /**
   * Export a single entity.
   *
   * @param string $entityTypeId
   *   The entity type id.
   * @param array $ids
   *   Array of entity ids.
   * @param string $destination
   *   The entity id.
   *
   * @return array
   *   The destination data.
   */
  public function exportEntity($entityTypeId, $ids, $destination = '') {
    /** @var \Drupal\Core\Entity\EntityStorageInterface $entityTypeManager */
    $entityTypeManager = $this->entityTypeManager->getStorage($entityTypeId);
    if (!$entityTypeManager) {
      throw new \Exception('No entity type "' . $entityTypeId . '" found');
    }

    $entities = [];
    foreach ($ids as $id) {
      if($entityTypeId == 'taxonomy_term' && $this->isBlockedTaxonomyTerm($id)) {
        throw new \Exception('This taxonomy term has been blocked from being exported.');
      }
      /** @var \Drupal\Core\Entity\EntityInterface $entity */
      $entity = $entityTypeManager->load($id);
      if (!$entity) {
        throw new \Exception('No entity found [type:' . $entityTypeId . ', id:' . $id . ']');
      }
      if($entityTypeId == 'node' && $entity->bundle() == 'forum' && $this->isBlockedTaxonomyTerm($entity->get('taxonomy_forums')->getString())) {
        throw new \Exception('This forum has been blocked from being exported.');
      }
      if($this->isBlocked($entity->getEntityTypeId()) || $this->isBlocked($entity->bundle())) {
        $blockedType = $entity->bundle() ?? $entity->getEntityTypeId();
        throw new \Exception('This Entity type has been blocked. ' . $blockedType);
      }

      $entities[] = $entity;
    }

    return $this->createExportFile($entities, NULL, $destination);
  }

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
  public function addEntitiesToExport($exportId, $entityTypeId, $ids): void {
    $exportEntity = ExportEntity::load($exportId);
    if (!$exportEntity) {
      throw new \Exception('No export entity "' . $exportId . '" found');
    }

    /** @var \Drupal\Core\Entity\EntityStorageInterface $entityTypeManager */
    $entityTypeManager = $this->entityTypeManager->getStorage($entityTypeId);
    if (!$entityTypeManager) {
      throw new \Exception('No entity type "' . $entityTypeId . '" found');
    }

    foreach ($ids as $id) {
      /** @var \Drupal\Core\Entity\EntityInterface $entity */
      if($entityTypeId == 'taxonomy_term' && $this->isBlockedTaxonomyTerm($id)) {
        throw new \Exception('This taxonomy term has been blocked from being exported.');
      }
      $entity = $entityTypeManager->load($id);
      if (!$entity) {
        throw new \Exception('No entity found [type:' . $entityTypeId . ', id:' . $id . ']');
      }
      if($entityTypeId == 'node' && $entity->bundle() == 'forum' && $this->isBlockedTaxonomyTerm($entity->get('taxonomy_forums')->getString())) {
        throw new \Exception('This forum has been blocked from being exported.');
      }
      if($this->isBlocked($entity->getEntityTypeId()) || $this->isBlocked($entity->bundle())) {
        $blockedType = $entity->bundle() ?? $entity->getEntityTypeId();
        throw new \Exception('This Entity type has been blocked. ' . $blockedType . ' - ' . $id);
      }
      if (!$exportEntity->hasEntity($entity)) {
        $exportEntity->addEntity($entity);
      }
    }

    $exportEntity->save();
  }

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
  public function removeEntitiesFromExport($exportId, $entityTypeId, $ids): void {
    $exportEntity = ExportEntity::load($exportId);
    if (!$exportEntity) {
      throw new \Exception('No export entity "' . $exportId . '" found');
    }

    /** @var \Drupal\Core\Entity\EntityStorageInterface $entityTypeManager */
    $entityTypeManager = $this->entityTypeManager->getStorage($entityTypeId);
    if (!$entityTypeManager) {
      throw new \Exception('No entity type "' . $entityTypeId . '" found');
    }

    foreach ($ids as $id) {
      /** @var \Drupal\Core\Entity\EntityInterface $entity */
      $entity = $entityTypeManager->load($id);
      if (!$entity) {
        throw new \Exception('No entity found [type:' . $entityTypeId . ', id:' . $id . ']');
      }
      if ($exportEntity->hasEntity($entity)) {
        $exportEntity->removeEntity($entity);
      }
    }

    $exportEntity->save();
  }

  /**
   * Export a single entity.
   *
   * @param string $destination
   *   The entity id.
   *
   * @return array
   *   The destination data.
   */
  public function exportAll($destination = '') {
    $contentTypes = \Drupal::service('entity_type.repository')->getEntityTypeLabels(TRUE)['Content'];
    $contentTypes = array_filter($contentTypes, function($x) { return !$this->isBlocked($x); });
    $blockedTypes = [ "user", "api", "application", "consumerorg", "product", "event_log", "consumerorg_payment_method", "apic_app_application_subs",
                  "apic_app_application_creds", "avatars_preview", "comment", "contact_message", "search_api_task", "vote", "vote_result", "vote_type" ];

    $allExports = [];
    $count = 0;

    foreach($contentTypes as $key => $contentType) {
      if($this->isBlocked($key)) {
        continue;
      }
      $entityTypeManager = $this->entityTypeManager->getStorage($key);
      if (!$entityTypeManager) {
        continue;
      }
      $bundleKey = $entityTypeManager->getEntityType()->getKey('bundle');
      if ($bundleKey) {
        $allExportIds = $entityTypeManager->getQuery()->accessCheck()->condition($bundleKey, $blockedTypes, 'NOT IN');

        // Dont export APIs taxonomy or any of its children and these are generated from APIs and should not be imported/exported
        if ($key == 'taxonomy_term' || $key == 'node' ) {
          if (empty($this->apisTaxonomyID)) {
            $result = \Drupal::entityQuery('taxonomy_term')
            ->condition('name', 'APIs')
            ->condition('parent', 'forums')
            ->accessCheck()
            ->execute();
            $this->apisTaxonomyID = !empty($result) ? array_shift($result) : '';
          }
          if (!empty($this->apisTaxonomyID)) {
            if ($key == 'node') {
              $apiTaxonomy = \Drupal::entityQuery('taxonomy_term')
              ->condition('parent', $this->apisTaxonomyID)
              ->accessCheck()
              ->execute();

              $orGroup = \Drupal::entityQuery('node')->orConditionGroup()
              ->condition('taxonomy_forums', $apiTaxonomy, 'NOT IN')
              ->notExists('taxonomy_forums');

              $allExportIds->condition($orGroup);
            }
            if ($key == 'taxonomy_term') {
              $allExportIds->condition('parent', $this->apisTaxonomyID, 'NOT IN');
              $allExportIds->condition('tid', $this->apisTaxonomyID, 'NOT IN');
            }
          }
        }

        $allExportIds = $allExportIds->execute();
        $allExports[$key] = $allExportIds;
        $count += count($allExportIds);
      }
    }

    $processor = $this->createProcessor(NULL);
    $exportKey = 0;
    foreach($allExports as $key => $exportIds) {
      foreach(array_chunk($exportIds, 50) as $ids) {
        $this->batchExportEntities($ids, $key, $count, $exportKey, $processor, $data);
        $exportKey += count($ids);
      }
    }

    $this->finishBatchExport($processor, $destination, $data);

    return $data;
  }

  public function isBlocked(string $entity): bool {
    $blockedTypes = [ "crop", "user", "api", "application", "consumerorg", "product", "event_log", "consumerorg_payment_method", "apic_app_application_subs",
                  "apic_app_application_creds", "avatars_preview", "comment", "contact_message", "search_api_task", "vote", "vote_result", "vote_type" ];
    return in_array($entity, $blockedTypes);
  }

  public function isBlockedTaxonomyTerm(string $taxonomyID): bool {
    if (empty($this->apisTaxonomyID)) {
      $result = \Drupal::entityQuery('taxonomy_term')
            ->condition('name', 'APIs')
            ->condition('parent', 'forums')
            ->accessCheck()
            ->execute();
      $this->apisTaxonomyID = !empty($result) ? array_shift($result) : '';
    }

    if (!empty($this->apisTaxonomyID)) {
      return empty(\Drupal::entityQuery('taxonomy_term')
      ->condition('tid', $this->apisTaxonomyID, 'NOT IN')
      ->condition('tid', $taxonomyID)
      ->condition('parent', $this->apisTaxonomyID, 'NOT IN')
      ->accessCheck()
      ->execute());
    }

    return false;
  }

  public function createProcessor($label = NULL) {
    $writer = new ExportEntityWriter();
    $writer->initFromId(($label ?: time()));
    return new ExportProcessor($writer);
  }

  public function batchExportEntities($entitiesToExport, $entityType, $count, $exportKey, &$processor, &$data = ['destination' => '', 'entities' => []] ) {
    // Loop for log.
    foreach($entitiesToExport as $exportId) {
      $entityTypeManager = $this->entityTypeManager->getStorage($entityType);
      $loadedEntity = $entityTypeManager->load($exportId);
      try {
        $processor->exportEntity($loadedEntity);
        $status = $this->t('Exported');
      }
      catch (\Exception $error) {
        $status = $this->t('Error');
      }

      $label = ExportEntityWriter::getEntityLabel($loadedEntity);
      $type = $loadedEntity->getEntityTypeId();
      if (empty($label) && ($type == 'file' || $type == 'crop')) {
        $label = $loadedEntity->uri->value ? basename($loadedEntity->uri->value) : "";
      }

      $type = $loadedEntity->bundle() != $type ? $type . '.' . $loadedEntity->bundle() : $type;
      $data['entities'][] = [
        '@key' => $exportKey + 1,
        '@count' => $count,
        '@id' =>  $loadedEntity->id(),
        '@label' => $label,
        '@type' => $type,
        '@status' => $status,
      ];
      $exportKey++;
    }
  }

  public function finishBatchExport(&$processor, $destination, &$data) {
    $tempArchive = $this->fileSystem->realpath($processor->closeProcess());
    // Deplace archive.
    $data['destination'] = $this->setDestination($destination, $tempArchive);
  }

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
  public function createExportFile(array &$entitiesToExport = [], $label = FALSE, string $destination = '') {
    $writer = new ExportEntityWriter();
    $writer->initFromId(($label ?: time()));
    $processor = new ExportProcessor($writer);

    // Loop for log.
    $count = count($entitiesToExport);
    $data = [
      'destination' => '',
      'entities' => [],
    ];
    foreach (array_values($entitiesToExport) as $key => $entity) {
      try {
        $processor->exportEntity($entity);
        $status = $this->t('Exported');
      }
      catch (\Exception $error) {
        $status = $this->t('Error');
      }

      $label = ExportEntityWriter::getEntityLabel($entity);
      $type = $entity->getEntityTypeId();
      if (empty($label) && ($type == 'file' || $type == 'crop')) {
        $label = $entity->uri->value ? basename($entity->uri->value) : "";
      }

      $type = $entity->bundle() != $type ? $type . '.' . $entity->bundle() : $type;
      $data['entities'][] = [
        '@key' => $key + 1,
        '@count' => $count,
        '@id' =>  $entity->id(),
        '@label' => $label,
        '@type' => $type,
        '@status' => $status,
      ];
    }

    $tempArchive = $this->fileSystem->realpath($processor->closeProcess());
    // Deplace archive.
    $data['destination'] = $this->setDestination($destination, $tempArchive);

    return $data;
  }

  /**
   * {@inheritdoc}
   */
  public function launchImport($importId, $publishType = ImportProcessor::DEFAULT_PUBLICATION_TYPE, $updateType = ImportProcessor::DEFAULT_UPDATE_TYPE) {
    // Check import id.
    $import = ImportEntity::load($importId);
    if (!$import) {
      throw new \Exception('No import entity found with id ' . $importId);
    }

    // Check publish type.
    $allowedCreateTypes = LaunchImportForm::getCreateOptions();
    if (!in_array($publishType, array_keys($allowedCreateTypes))) {
      throw new \Exception("Publish option must be in : " . implode('|', $allowedCreateTypes));
    }

    // Check update type.
    $allowedUpdateTypes = LaunchImportForm::getUpdateOptions();
    if (!in_array($updateType, array_keys($allowedUpdateTypes))) {
      throw new \Exception("Update option must be in : " . implode('|', $allowedUpdateTypes));
    }

    // Create import process.
    $importProcessor = new ImportProcessor($import);
    $importProcessor->setCreationType($publishType);
    $importProcessor->setUpdateType($updateType);

    // Loop into root entities.
    $rootEntities = $import->getRootsEntities();
    $count = count($rootEntities);
    $importData = [
      'entities' => [],
    ];
    foreach ($rootEntities as $key => $rootEntityData) {
      try {
        $entity = $importProcessor->importEntityFromRootData($rootEntityData);
        $status = '';
        switch($rootEntityData['status']) {
          case 'overwrite':
            $status = 'Overridden';
            break;
          case 'update':
            $status = 'Updated';
            break;
          case 'create':
            $status = 'Created';
            break;
        }
      }
      catch (\Exception $error) {
        $errorMessage = $error->getMessage();
        $status = $this->t('Error');
      }

      $label = $rootEntityData['label'];
      $type = $entity->getEntityTypeId();
      if (empty($label) && ($type == 'file' || $type == 'crop')) {
        $label = $entity->uri->value ? basename($entity->uri->value) : "";
      }
      $type = $entity->bundle() != $type ? $type . '.' . $entity->bundle() : $type;

      $importData['entities'][] = [
        '@key' => $key + 1,
        '@count' => $count,
        '@status' => $status,
        '@id' =>  $entity->id(),
        '@label' => $label,
        '@type' => $type,
        '@url' => (isset($entity) && $entity->hasLinkTemplate('canonical')) ? $entity->toUrl()
          ->setAbsolute(TRUE)
          ->toString() : '',
        '@errorMessage' => $errorMessage ?? '',
      ];
    }
    foreach($rootEntities as $key => $rootEntityData){
      $importProcessor->importPathAlias($rootEntityData);
      
    }
    // Close process.
    $import->removeArchive();

    return $importData;
  }

  /**
   * Update destination.
   *
   * @param string $destination
   *   The destination.
   * @param string $tempArchive
   *   The real path archive.
   *
   * @return string
   *   The final destination.
   */
  protected function setDestination($destination, $tempArchive) {
    $absolutePath = NULL;
    $resultDestination = NULL;

    if ($destination !== '') {
      $baseName = basename($destination);
      $path = str_replace($baseName, '', $destination);

      // Relative.
      if ($destination[0] !== '/') {
        $path = $destination[0] === '.' ? substr($path, 1) : $path;

        // Get options.
        $root = getopt('r:')['r'] ?: getopt('', ['root:'])['root'];
        if ($root) {
          $absolutePath = $root . '/' . $path;
        }
        elseif ($_SERVER && array_key_exists('PWD', $_SERVER)) {
          $absolutePath = $_SERVER['PWD'] . '/' . $path;
        }
      }
      // Absolute.
      else {
        $absolutePath = $destination;
      }

      if ($absolutePath) {
        if (is_dir($absolutePath)) {
          $resultDestination = $absolutePath . '/' . $baseName;
        } else {
          $resultDestination = $absolutePath;
        }
      }
    }
    // Try destination.
    copy($tempArchive, $resultDestination);
    if (!file_exists($resultDestination)) {
      // Try root.
      $resultDestination = $this->appRoot . '/' . ($baseName ?? basename($tempArchive));
      copy($tempArchive, $resultDestination);
      if (!file_exists($resultDestination)) {
        // Destination is tmp.
        $resultDestination = $tempArchive;
      }
    }

    return $resultDestination;
  }

  /**
   * {@inheritdoc}
   */
  public function exportIdExists($id): string {
    if (is_null(ExportEntity::load($id))) {
      throw new \Exception('Export id [' . $id . '] does not exists');
    }
    return $id;
  }

  /**
   * {@inheritdoc}
   */
  public function entityTypeExists(string $value): ?string {
    $this->entityTypeManager->getStorage($value);
    return $value;
  }

  /**
   * {@inheritdoc}
   */
  public function entityExists(string $value, string $entityTypeId): ?string {
    $storage = $this->entityTypeManager->getStorage($entityTypeId);
    if (is_null($storage->load($value))) {
      throw new \Exception('Entity does not exist');
    }
    return $value;
  }

  /**
   * {@inheritdoc}
   */
  public function tarGzExists(string $path): ?string {
    if (!file_exists($path)) {
      throw new \Exception($path . ' does not exist');
    }
    if (strpos($path, '.tar.gz') === FALSE) {
      throw new \Exception($path . ' is not a .tar.gz file');
    }

    return $path;
  }

}
