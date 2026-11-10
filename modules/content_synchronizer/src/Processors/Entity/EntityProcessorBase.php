<?php

namespace Drupal\content_synchronizer\Processors\Entity;

use Drupal\Component\Uuid\UuidInterface;
use Drupal\content_synchronizer\Errors\BundleDoesNotExistsException;
use Drupal\content_synchronizer\Errors\NotContentEntity;
use Drupal\content_synchronizer\Events\ImportEvent;
use Drupal\content_synchronizer\Processors\ExportEntityWriter;
use Drupal\content_synchronizer\Processors\ExportProcessor;
use Drupal\content_synchronizer\Processors\ImportProcessor;
use Drupal\content_synchronizer\Service\EntityPublisherInterface;
use Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface;
use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\TranslatableInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Plugin\PluginBase;
use Drupal\Core\Entity\ContentEntityType;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\content_synchronizer\Processors\Type\TypeProcessorPluginManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * The entity processor base.
 */
class EntityProcessorBase extends PluginBase implements EntityProcessorInterface, ContainerFactoryPluginInterface {

  const KEY_TRANSLATIONS = 'translations';

  const EXPORT_HOOK = 'content_synchronizer_export_data';

  const IMPORT_HOOK = 'content_synchronizer_import_entity';

  /**
   * Ids not to export.
   *
   * @var array|null
   */
  protected ?array $propertyIdsNotToExport;

  /**
   * Ids not to import.
   *
   * @var array|null
   */
  protected ?array $propertyIdsNotToImport;

  /**
   * The global reference manager service.
   *
   * @var \Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface
   */
  protected GlobalReferenceManagerInterface $globalReferenceManager;

  /**
   * The type processor manager service.
   *
   * @var \Drupal\content_synchronizer\Processors\Type\TypeProcessorPluginManager
   */
  protected TypeProcessorPluginManager $typeProcessorManager;

  /**
   * The entity processor manager service.
   *
   * @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager
   */
  protected EntityProcessorPluginManager $entityProcessorManager;

  /**
   * The entity publisher service.
   *
   * @var \Drupal\content_synchronizer\Service\EntityPublisherInterface
   */
  protected EntityPublisherInterface $entityPublisher;

  /**
   * The current entity type.
   *
   * @var string
   */
  protected string $entityType;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  /**
   * The entity field manager.
   *
   * @var \Drupal\Core\Entity\EntityFieldManagerInterface
   */
  protected EntityFieldManagerInterface $entityFieldManager;

  /**
   * The entity repository.
   *
   * @var \Drupal\Core\Entity\EntityRepositoryInterface
   */
  protected EntityRepositoryInterface $entityRepository;

  /**
   * The uuid.
   *
   * @var \Drupal\Component\Uuid\UuidInterface
   */
  protected UuidInterface $uuid;

  /**
   * The event dispatcher.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  protected EventDispatcherInterface $eventDispatcher;

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected ModuleHandlerInterface $moduleHandler;

  /**
   * The entity processor plugin manager.
   *
   * @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager
   */
  protected EntityProcessorPluginManager $entityProcessorPluginManager;

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
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->entityTypeManager = $entity_type_manager;
    $this->entityFieldManager = $entity_field_manager;
    $this->entityRepository = $entity_repository;
    $this->uuid = $uuid;
    $this->eventDispatcher = $event_dispatcher;
    $this->moduleHandler = $module_handler;
    $this->globalReferenceManager = $global_reference_manager;
    $this->typeProcessorManager = $type_processor_manager;
    $this->entityProcessorPluginManager = $entity_processor_plugin_manager;
    $this->entityPublisher = $entity_publisher;
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
    );
  }


  /**
   * Export the entity and return the gid if exists, else  false.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entityToExport
   *   The entity to export.
   *
   * @return bool|string
   *   The gid if exported, False either
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   */
  final public function export(EntityInterface $entityToExport) {
    if (!$this->canExportEntity($entityToExport)) {
      throw new NotContentEntity($entityToExport);
    }
    // If entity is exportable (content entity).
    // Get the entity gid.
    $gid = $this->getEntityGlobalReference($entityToExport);

    if (isset($entityToExport->contentSynchronizerIsExporting)) {
      return $gid;
    }
    else {
      $dataToExport = [];
      foreach ($this->getEntityTranslations($entityToExport) as $languageId => $translation) {

        // Tag the current entity has exporting in order to avoid
        // circular dependencies.
        $translation->contentSynchronizerIsExporting = TRUE;
        $dataToExport[self::KEY_TRANSLATIONS][$languageId] =
          $this->getDataToExport($translation);

        // Add changed time.
        if (method_exists($translation, 'getChangedTime')) {
          $dataToExport[self::KEY_TRANSLATIONS][$languageId][ExportEntityWriter::FIELD_CHANGED] =
            $translation->getChangedTime();
        }

        // Custom alter data.
        $this->moduleHandler
          ->alter(self::EXPORT_HOOK, $dataToExport[self::KEY_TRANSLATIONS][$languageId], $translation);
      }

      if (!empty($dataToExport)) {
        $entityToExport->contentSynchronizerGid = $dataToExport[ExportEntityWriter::FIELD_GID] = $gid;
        $dataToExport[ExportEntityWriter::FIELD_UUID] = $entityToExport->uuid();
        $dataToExport[ExportEntityWriter::FIELD_BUNDLE] = $entityToExport->bundle();
        ExportProcessor::getCurrentExportProcessor()
          ->getWriter()
          ->write($entityToExport, $dataToExport);

        return $gid;
      }
    }
    return FALSE;
  }

  /**
   * Return the data of the default language of the passed data.
   */
  public function getDefaultLanguageData(array $data, $filterOnEntityDefinition = TRUE) {
    if (count($data[self::KEY_TRANSLATIONS]) > 1) {
      foreach ($data[self::KEY_TRANSLATIONS] as $translationData) {
        if (array_key_exists('default_langcode', $translationData) && $translationData['default_langcode'][0]['value'] == 1) {
          return $translationData;
        }
      }
    }

    // Get default data :
    $defaultData = reset($data[self::KEY_TRANSLATIONS]);

    if ($filterOnEntityDefinition) {
      // Filter on reference data field.
      $entityTypeId = $this->getGlobalReferenceManager()
        ->getEntityTypeFromGid($data[ExportEntityWriter::FIELD_GID]);

      // Get the bundle of the entity.
      $entityDefinition =
        $this->entityTypeManager
          ->getDefinition($entityTypeId);
      $bundleKey = $entityDefinition->getKey('bundle');
      $bundle = $defaultData[$bundleKey];
      // Sometimes the bundle is stored in an array of objects with the key as value.
      // If we see an array try and get the string value stored in value
      if (is_array($bundle)) {
        $bundle = isset($bundle[0]->value) ? $bundle[0]->value : $data[ExportEntityWriter::FIELD_BUNDLE];
      }

      // Get field definitions.
      $fieldDefinitions = $this->entityFieldManager
        ->getFieldDefinitions($entityTypeId, $bundle);

      return array_intersect_key($defaultData, $fieldDefinitions);
    }
    else {
      return $defaultData;
    }

  }

  /**
   * Return the entity translations.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return array|\Drupal\Core\Language\LanguageInterface[]
   *   The array of translations.
   */
  protected function getEntityTranslations(EntityInterface $entity) {
    $translations = [];
    if ($entity instanceof TranslatableInterface) {
      foreach ($entity->getTranslationLanguages() as $languageId => $data) {
        $translations[$languageId] = $this->entityRepository
          ->getTranslationFromContext($entity, $languageId);
      }
    }
    else {
      $defaultLangcode = $entity->language()->getId();
      $translations[$defaultLangcode] = $this->entityRepository
        ->getTranslationFromContext($entity, $defaultLangcode);
    }

    return array_filter($translations, function ($entity) {
      return $entity->id();
    });
  }

  /**
   * Return a translation.
   *
   * @param string $languageId
   *   The language id.
   * @param \Drupal\Core\Entity\EntityInterface $existingEntity
   *   The entity to translate.
   * @param array $dataToImport
   *   The data to import.
   */
  protected function createNewTranslation(string $languageId, EntityInterface $existingEntity, array $dataToImport = []) {
    if ($existingEntity->isTranslatable()) {
      if ($existingEntity->language()->getId() == $languageId) {
        return $existingEntity;
      }
      else {
        $translation = $existingEntity->addTranslation($languageId);
        $translation->uuid = $this->uuid->generate();

        return $translation;
      }
    }

    return $existingEntity;
  }

  /**
   * Create or update entity with data :.
   *
   * @param array $dataToImport
   *   The data to import.
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   */
  final public function import(array $dataToImport) {
    $gid = $dataToImport[ExportEntityWriter::FIELD_GID];
    $uuid = $dataToImport[ExportEntityWriter::FIELD_UUID];
    $bundle = $dataToImport[ExportEntityWriter::FIELD_BUNDLE];

    // If the entity has already been imported, we don't have to do it again.
    $import = ImportProcessor::getCurrentImportProcessor()->getImport();
    if ($import->gidHasAlreadyBeenImported($gid)) {
      return $this->getGlobalReferenceManager()->getEntityByGid($gid);
    }

    // Tag as importing.
    ImportProcessor::getCurrentImportProcessor()
      ->getImport()
      ->tagHasImporting($gid);

    $existingEntity = $this->getGlobalReferenceManager()->getExistingEntityByGidAndUuid($gid, $uuid, $bundle);
    // Get the previous entity by gid.
    if(!empty($existingEntity) && $existingEntity[0]) {
      $existingEntity = $existingEntity[0];
      if ($existingEntity) {
        $backup = clone($existingEntity);
      }
      /** @var \Drupal\Core\Entity\EntityInterface $entity */
      $entity = $this->getEntityToImport($dataToImport, $existingEntity);
      if ($entity) {
        $this->setChangedTime($entity, $dataToImport);
        $this->getEntityPublisher()
          ->saveEntity($entity, $gid, $backup, $dataToImport);
      }
    }
    else {
      /** @var \Drupal\Core\Entity\EntityInterface $entity */
      $entity = $this->getEntityToImport($dataToImport, NULL);
      if ($entity) {
        $this->checkBundle($entity, TRUE);

        $this->setChangedTime($entity, $dataToImport);
        $this->getEntityPublisher()
          ->saveEntity($entity, $gid, NULL, $dataToImport);

        $this->getGlobalReferenceManager()
          ->createGlobalEntityByImportingEntityAndGid($entity, $gid);
      }
    }

    if ($entity) {
      // Tag as imported.
      ImportProcessor::getCurrentImportProcessor()
        ->getImport()
        ->tagHasImported($gid);

      $this->onEntityImported($gid, $entity);
    }

    return $entity;
  }

  /**
   * Check if entity's bundle exist, create-it.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   * @param bool $force_create
   *   Force creation.
   */
  private function checkBundle(EntityInterface $entity, $force_create = FALSE) {
    $bundle_type = $entity->getEntityType()->getBundleEntityType();
    if ($bundle_type == '') {
      return;
    }
    $bundle_name = $entity->bundle();
    $bundle = $this->entityTypeManager
      ->getStorage($bundle_type)
      ->load($bundle_name);

    if ($bundle == NULL && $force_create === TRUE) {
      throw new BundleDoesNotExistsException($bundle_name, $entity->getEntityType());
    }
  }

  /**
   * Update the changed time form the data array.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to update.
   * @param array $dataToImport
   *   THe data to import.
   */
  protected function setChangedTime(EntityInterface $entity, array $dataToImport) {
    $dataToImport = array_key_exists('translations', $dataToImport) ? $dataToImport['translations'][$entity->language()
      ->getId()] : $dataToImport;
    if (isset($dataToImport[ExportEntityWriter::FIELD_CHANGED])) {
      if (method_exists($entity, 'setChangedTime')) {
        $entity->setChangedTime($dataToImport[ExportEntityWriter::FIELD_CHANGED]);
      }
    }
  }

  /**
   * Callback when the entity has been imported.
   */
  protected function onEntityImported($gid, EntityInterface $entity) {
    $event = new ImportEvent();
    $event->setEntity($entity);
    $event->setGid($gid);

    $this->eventDispatcher->dispatch($event, ImportEvent::ON_ENTITY_IMPORTER);
  }

  /**
   * Return the data to export.
   *
   * Get the array of data to export in array format :
   * [
   *    "property_1"=>[ "value1", "value2"]
   *    "property_2"=>[ "value1"]
   * ].
   *
   * @param \Drupal\Core\Entity\EntityInterface $entityToExport
   *   The entity to export.
   *
   * @return array|bool
   *   The data to export.
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   */
  public function getDataToExport(EntityInterface $entityToExport) {
    $dataToExport = $entityToExport->toArray();

    // Get entity type keys :
    $contentEntityTypeKeys = $entityToExport->getEntityType()->getKeys();

    // Init properties not to export.
    $propertyIdsNotToExport = $this->getPropertiesIdsNotToExportList();
    $propertyIdsNotToExport += array_intersect_key($contentEntityTypeKeys, array_flip($propertyIdsNotToExport));

    // Init keys like bundles.
    foreach ($contentEntityTypeKeys as $key => $name) {
      if (!in_array($name, $propertyIdsNotToExport) && method_exists($entityToExport, $key)) {
        $dataToExport[$name] = $entityToExport->$key();
      }
    }

    foreach ($entityToExport->getTypedData()
               ->getProperties() as $propertyId => $propertyData) {
      // Check properties to export:
      if (!in_array($propertyId, $propertyIdsNotToExport)) {
        /** @var \Drupal\content_synchronizer\Processors\Type\TypeProcessorBase $plugin */
        if ($plugin = $this->getTypeProcessorManager()
          ->getInstanceByFieldType(get_class($propertyData))
        ) {
          try {
            $dataToExport[$propertyId] = $plugin->getExportedData($entityToExport->get($propertyId));
          }
          catch (\Exception $e) {
            // Do not export data.
          }
        }
      }
    }

    return $dataToExport;
  }

  /**
   * Return the entity to import.
   *
   * @param array $data
   *   The data to import.
   * @param \Drupal\Core\Entity\EntityInterface $entityToImport
   *   The existing entity to update.
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   */
  public function getEntityToImport(array $data, EntityInterface $entityToImport = NULL) {
    if ($entityToImport) {
      $backup = clone($entityToImport);
    }

    // Properties not to import.
    $propertyIdsNotToImport = $this->getPropertiesIdsNotToImportList();

    // Create Entity.
    if (is_null($entityToImport)) {
      try {
        $typeId = $this->getGlobalReferenceManager()
          ->getEntityTypeFromGid($data[ExportEntityWriter::FIELD_GID]);
        $defaultData = $this->getDefaultLanguageData($data);

        // Get type manager.
        /** @var \Drupal\Core\Entity\ContentEntityType $typeManager */
        $typeManager = $this->entityTypeManager->getDefinition($typeId);
        $bundleKey = $typeManager->getKey('bundle');

        $baseDefinitions = $this->entityFieldManager->getFieldDefinitions($typeId, $data[$bundleKey]);
        $createData = array_intersect_key($defaultData, $baseDefinitions);

        foreach ($propertyIdsNotToImport as $bannedProperty) {
          unset($createData[$bannedProperty]);
        }

        // Unset any field that is of type entity_reference_revisions as we can't create the entity with the reference data in.
        $fieldDefinitions = array_filter($baseDefinitions, function($v) {
          return $v->getType() === 'entity_reference_revisions';
        });
  
        foreach ($fieldDefinitions as $name => $value) {
          unset($createData[$name]);
        }

        $entityToImport = $this->entityTypeManager
          ->getStorage($typeId)
          ->create($createData);
      }
      catch (\Exception $e) {
        $this->messenger()
          ->addError('Import Process : ' . $e->getMessage() . ' in "' . __METHOD__ . '()"');

        return NULL;
      }
    }

    // Get the existing translations.
    $alreadyExistingEntityTranslations = $this->getEntityTranslations($entityToImport);

    // Update data for each translation.
    foreach ($data[self::KEY_TRANSLATIONS] as $languageId => $translationData) {
      if (!array_key_exists($languageId, $alreadyExistingEntityTranslations)) {
        if ($translation = $this->createNewTranslation($languageId, $entityToImport, $translationData)) {
          $alreadyExistingEntityTranslations[$languageId] = $translation;
        }
        else {
          continue;
        }
      }

      $entityToUpdate = $alreadyExistingEntityTranslations[$languageId];

      // Parse each property of the entity.
      foreach ($entityToUpdate->getTypedData()
                 ->getProperties() as $propertyId => $propertyData) {
        // Check properties to import :
        if (!in_array($propertyId, $propertyIdsNotToImport)) {

          /** @var \Drupal\content_synchronizer\Processors\Type\TypeProcessorBase $plugin */
          if ($plugin = $this->getTypeProcessorManager()
            ->getInstanceByFieldType(get_class($propertyData))
          ) {
            $plugin->initImportedEntity($entityToUpdate, $propertyId, $translationData);
          }
        }
      }

      // Save translation.
      if ($entityToImport->language()->getId() != $entityToUpdate->language()->getId()) {
        $this->setChangedTime($entityToImport, $translationData);
        $this->getEntityPublisher()
          ->saveEntity($entityToUpdate, NULL, $backup ?? NULL, $translationData);
      }
    }

    return $entityToImport;
  }

  /**
   * Get the array of the property of the entity not to export.
   *
   * @return array
   *   The property not to export.
   */
  public function getPropertiesIdsNotToExportList() {
    return $this->propertyIdsNotToExport;
  }

  /**
   * Get the array of the property no to import
   *
   * @return array
   *   The properties not to import.
   */
  public function getPropertiesIdsNotToImportList() {
    return $this->propertyIdsNotToImport;
  }

  /**
   * Get the global reference entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entityToExport
   *   The entity to export.
   *
   * @return string
   *   The gid.
   */
  protected function getEntityGlobalReference(EntityInterface $entityToExport) {
    $gid = $this->getGlobalReferenceManager()
      ->getEntityGlobalId($entityToExport);
    if (!$gid) {
      $gid = $this->getGlobalReferenceManager()
        ->createEntityGlobalId($entityToExport);
    }

    return $gid;
  }

  /**
   * Get the contentSyncManager.
   *
   * @return \Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface
   *   The global reference manager service.
   */
  final protected function getGlobalReferenceManager() {
    return $this->globalReferenceManager;
  }

  /**
   * Get the TypeProcessor plugin manager.
   *
   * @return \Drupal\content_synchronizer\Processors\Type\TypeProcessorPluginManager
   *   The type processor manager service.
   */
  protected function getTypeProcessorManager() {
    return $this->typeProcessorManager;
  }

  /**
   * Get the EntityProcessor plugin manager.
   *
   * @return \Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager
   *   The entity processor manager service.
   */
  protected function getEntityProcessorManager() {
    return $this->entityProcessorPluginManager;
  }

  /**
   * Return the current entity type.
   */
  public function getEntityType() {
    return $this->entityType;
  }

  /**
   * Set the current entity type.
   */
  public function setEntityType($entityType) {
    $this->entityType = $entityType;

    $definition = $this->entityTypeManager->getDefinition($entityType);

    $this->propertyIdsNotToExport = [
      'status',
      'revision_timestamp',
      'revision_uid',
      'revision_log',
      'revision_translation_affected',
      $definition->getKey('id'),
      $definition->getKey('revision'),
    ];

    $this->propertyIdsNotToImport = array_merge(
      $this->propertyIdsNotToExport,
      [
        $definition->getKey('default_langcode'),
        $definition->getKey('revision_translation_affected'),
      ]
    );
  }

  /**
   * Return the entity saver service.
   *
   * @return \Drupal\content_synchronizer\Service\EntityPublisherInterface
   *   The Entity publisher service.
   */
  public function getEntityPublisher() {
    return $this->entityPublisher;
  }

  /**
   * Return if the entity can be exported.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   THe entity.
   *
   * @return bool
   *   The status for export.
   */
  public function canExportEntity(EntityInterface $entity) {
    return $entity->getEntityType() instanceof ContentEntityType;
  }

  public function importPathAlias(array $dataToImport){
    $gid = $dataToImport[ExportEntityWriter::FIELD_GID];
    $uuid = $dataToImport[ExportEntityWriter::FIELD_UUID];
    $bundle = $dataToImport[ExportEntityWriter::FIELD_BUNDLE];
    $existingEntity = $this->getGlobalReferenceManager()->getExistingEntityByGidAndUuid($gid, $uuid, $bundle);
    if(!empty($existingEntity) && $existingEntity[0]) {
      $existingEntity = $existingEntity[0];
      $translationData=$dataToImport[self::KEY_TRANSLATIONS][$existingEntity ->language()->getId()];
        if($translationData && array_key_exists('path', $translationData) && $existingEntity instanceof ContentEntityInterface && $existingEntity->hasField('path')){
          $pathInfo=$translationData['path'];
          $url=$existingEntity->toUrl()->toString();
          if(isset($pathInfo[0]['alias'])){
            if(!empty($url) &&  strpos($url, 'node')!=false){
              $alreadyExistingEntityTranslations = $this->getEntityTranslations($existingEntity); 
              if(count($alreadyExistingEntityTranslations)>1){
                $lid='und';
              }else{
                $lid=$existingEntity ->language()->getId();
              }
              $path_alias = $this->entityTypeManager->getStorage('path_alias')->create([
                'path' =>$url,
                 'alias' =>$pathInfo[0]['alias'],
                 'langcode'=>$lid,
               ]);
                $path_alias->save();
            }
          }
        }
    }
  }


}
