<?php

namespace Drupal\content_synchronizer\Plugin\content_synchronizer\entity_processor;

use Drupal\Component\Uuid\UuidInterface;
use Drupal\content_synchronizer\Base\JsonWriterTrait;
use Drupal\content_synchronizer\Processors\Entity\EntityProcessorBase;
use Drupal\content_synchronizer\Processors\Entity\EntityProcessorInterface;
use Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager;
use Drupal\content_synchronizer\Processors\ExportProcessor;
use Drupal\content_synchronizer\Processors\ImportProcessor;
use Drupal\content_synchronizer\Processors\Type\TypeProcessorPluginManager;
use Drupal\content_synchronizer\Service\EntityPublisherInterface;
use Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface;
use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\file\Entity\File;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Plugin implementation of the 'accordion' formatter.
 *
 * @EntityProcessor(
 *   id = "content_synchronizer_file_processor",
 *   entityType = "file"
 * )
 */
class FileProcessor extends EntityProcessorBase implements EntityProcessorInterface, ContainerFactoryPluginInterface {
  use JsonWriterTrait;

  const DIR_ASSETS = "assets";

  /**
   * Export assets directory path.
   *
   * @var string
   */
  protected $exportAssetsDirPath;

  /**
   * Import assets directory path.
   *
   * @var string
   */
  protected $importAssetsDirPath;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    EntityTypeManagerInterface $entity_type_manager,
    EntityFieldManagerInterface $entity_field_manager,
    EntityRepositoryInterface $entity_repository,
    UuidInterface $uuid,
    EventDispatcherInterface $event_dispatcher,
    ModuleHandlerInterface $module_handler,
    GlobalReferenceManagerInterface $global_reference_manager,
    TypeProcessorPluginManager $type_processor_manager,
    EntityProcessorPluginManager $entity_processor_plugin_manager,
    EntityPublisherInterface $entity_publisher,
    FileSystemInterface $file_system,
  ) {
    parent::__construct(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $entity_type_manager,
      $entity_field_manager,
      $entity_repository,
      $uuid,
      $event_dispatcher,
      $module_handler,
      $global_reference_manager,
      $type_processor_manager,
      $entity_processor_plugin_manager,
      $entity_publisher
    );
    $this->fileSystem = $file_system;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager'),
      $container->get('entity_field.manager'),
      $container->get('entity.repository'),
      $container->get('uuid'),
      $container->get('event_dispatcher'),
      $container->get('module_handler'),
      $container->get(GlobalReferenceManagerInterface::SERVICE_NAME),
      $container->get(TypeProcessorPluginManager::SERVICE_NAME),
      $container->get(EntityProcessorPluginManager::SERVICE_NAME),
      $container->get(EntityPublisherInterface::SERVICE_NAME),
      $container->get('file_system'),
    );
  }

  /**
   * Return the data to export.
   */
  public function getDataToExport(EntityInterface $entityToExport) {
    $this->addFileToAssets($entityToExport);
    return parent::getDataToExport($entityToExport);
  }

  /**
   * Add file to assets dir.
   */
  protected function addFileToAssets(File $file) {
    $assetsDir = $this->getExportAssetsDir();

    $destination = $this->createDirTreeForFileDest(str_replace('://', '/', $file->getFileUri()), $assetsDir);

    // Copy file in destination directory.
    $this->fileSystem->copy($this->fileSystem->realpath($file->getFileUri()), $destination);
  }

  /**
   * Return the export assets path.
   */
  protected function getExportAssetsDir() {
    if (!$this->exportAssetsDirPath) {
      $writer = ExportProcessor::getCurrentExportProcessor()->getWriter();
      $this->exportAssetsDirPath = $writer->getDirPath() . '/' . self::DIR_ASSETS;
      $this->createDirectory($this->exportAssetsDirPath);
    }
    return $this->exportAssetsDirPath;
  }

  /**
   * Return the import assets path.
   */
  protected function getImportAssetsDir() {
    if (!$this->importAssetsDirPath) {
      $this->importAssetsDirPath = ImportProcessor::getCurrentImportProcessor()->getImport()->getArchiveFilesPath() . '/' . self::DIR_ASSETS;
    }
    return $this->importAssetsDirPath;
  }

  /**
   * Return the entity to import.
   *
   * @param array $data
   *   The data to import.
   * @param \Drupal\Core\Entity\EntityInterface|null $entityToImport
   *   The entity to import.
   *
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The entity to import.
   */
  public function getEntityToImport(array $data, EntityInterface $entityToImport = NULL) {
    /** @var \Drupal\file\Entity\File|null $file */
    $file = parent::getEntityToImport($data, $entityToImport);
    if ($file) {
      $assetsFile = $this->getImportAssetsDir() . '/' . str_replace('://', '/', $file->getFileUri());
      if (file_exists($assetsFile)) {

        if (strpos($file->getFileUri(), '://')) {
          [$root, $destination] = explode('://', $file->getFileUri());
          $root .= '://';
        }
        else {
          [$root, $destination] = [$file->getFileUri(), '/'];
        }

        $this->createDirTreeForFileDest($destination, $root);

        $result = copy($assetsFile, $file->getFileUri());
        if ($result) {
          return $file;
        }
      }
    }

    return NULL;
  }

}
