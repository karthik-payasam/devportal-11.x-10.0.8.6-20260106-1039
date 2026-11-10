<?php

namespace Drupal\content_synchronizer\Plugin\content_synchronizer\type_processor;

use Drupal\content_synchronizer\Events\ImportEvent;
use Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager;
use Drupal\content_synchronizer\Processors\ImportProcessor;
use Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\TypedData\TypedData;
use Drupal\Core\Field\EntityReferenceFieldItemList;
use Drupal\content_synchronizer\Processors\Type\TypeProcessorBase;

/**
 * Plugin implementation For the type processor.
 *
 * @TypeProcessor(
 *   id = "cs_entity_reference_field_item_list_type_processor",
 *   fieldType = "Drupal\Core\Field\EntityReferenceFieldItemList"
 * )
 */
class EntityReferenceFieldItemListProcessor extends TypeProcessorBase {

  /**
   * List of dependencies.
   *
   * @var array
   */
  protected static array $dependenciesBuffer = [];

  /**
   * The APIs Taxonomy ID.
   *
   * @var string
   */
  protected string $apisTaxonomyID;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    // Listen import event.
    /** @var \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher $dispatcher */
    $dispatcher = \Drupal::service('event_dispatcher');
    $dispatcher->addListener(ImportEvent::ON_ENTITY_IMPORTER, [
      $this,
      'onImportedEntity',
    ]);
  }

  /**
   * Return export data array.
   *
   * @param \Drupal\Core\TypedData\TypedData $property_data
   *   The propertyData.
   *
   * @return array
   *   export data.
   */
  public function getExportedData(TypedData $property_data) {
    $data = [];

    // Init processor service.
    /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager $entity_processor_manager */
    $entity_processor_manager = \Drupal::service(EntityProcessorPluginManager::SERVICE_NAME);

    $order = 0;

    /** @var \Drupal\Core\Entity\EntityInterface $entity */
    foreach ($property_data->referencedEntities() as $entity) {
      if($this->isBlocked($entity->getEntityTypeId()) || $this->isBlocked($entity->bundle())) {
        continue;
      }
      if(($entity->getEntityTypeId() == 'taxonomy_term' && $this->isBlockedTaxonomyTerm($entity->id())) || ($entity->getEntityTypeId() == 'node' && $entity->bundle() == 'forum' && $this->isBlockedTaxonomyTerm($entity->get('taxonomy_forums')->getString()))) {
        continue;
      }
      /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorBase $plugin */
      $plugin = $entity_processor_manager->getInstanceByEntityType($entity->getEntityTypeId());
      if (get_class($entity) != "Drupal\user\Entity\User") {
        if ($gid = $plugin->export($entity)) {
          $data[$order] = $gid;
          $order++;
        }
      }
    }

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

  /**
   * {@inheritdoc}
   */
  public function initImportedEntity(EntityInterface $entity_to_import, $property_id, array $data) {
    /** @var \Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface $reference_manager */
    $reference_manager = \Drupal::service(GlobalReferenceManagerInterface::SERVICE_NAME);

    /** @var \Drupal\content_synchronizer\Processors\ImportProcessor $import_processor */
    $import_processor = ImportProcessor::getCurrentImportProcessor();

    /** @var \Drupal\content_synchronizer\Entity\ImportEntity $import */
    $import = $import_processor->getImport();

    /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager $plugin_manager */
    $plugin_manager = \Drupal::service(EntityProcessorPluginManager::SERVICE_NAME);

    /** @var \Drupal\Core\Field\EntityReferenceFieldItemList $reference_field */
    $reference_field = $entity_to_import->get($property_id);

    // Parse list of entities :
    if (array_key_exists($property_id, $data) && is_array($data[$property_id])) {

      // Empty previous references.
      while ($reference_field->count() > 0) {
        $reference_field->removeItem(0);
      }

      foreach ($data[$property_id] as $order => $entityGid) {

        // If the entity to reference is currently importing, then we cannot
        // add it to the reference because it probably do not have an id yet.
        if ($import->gidIsCurrentlyImporting($entityGid)) {
          $reference_field->appendItem(NULL);
          $this->addDependencie($entityGid, $reference_field, $order);
        }
        // The entity has already been imported, so we add it to the field.
        elseif ($import->gidHasAlreadyBeenImported($entityGid)) {
          $reference_field->appendItem($reference_manager->getEntityByGid($entityGid));
        }
        // The entity has not been imported yet, so we import it.
        else {
          // Get the plugin of the entity :
          /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorBase $plugin */
          $plugin = $plugin_manager->getInstanceByEntityType($reference_manager->getEntityTypeFromGid($entityGid));
          $entity_data = $import->getEntityDataFromGid($entityGid);
          if ($entity_data) {
            $referencedEntity = $plugin->import($entity_data);
            $reference_field->appendItem($referencedEntity);
          }
        }
      }
    }
  }

  /**
   * Add dependencies to importing data.
   *
   * @param string $gid
   *   The gid.
   * @param \Drupal\Core\Field\EntityReferenceFieldItemList $field
   *   The field.
   * @param int $order
   *   The order.
   */
  public function addDependencie(string $gid, EntityReferenceFieldItemList $field, int $order) {
    self::$dependenciesBuffer[$gid][] = [
      'field' => $field,
      'order' => $order,
    ];
  }

  /**
   * Action on Entity import end.
   *
   * @param \Drupal\content_synchronizer\Events\ImportEvent $event
   *   The event.
   */
  public function onImportedEntity(ImportEvent $event) {
    $gid = $event->getGid();
    $entity = $event->getEntity();
    if (array_key_exists($gid, self::$dependenciesBuffer)) {
      foreach (self::$dependenciesBuffer[$gid] as $parent) {
        $parent['field'][$parent['order']] = $entity;
      }
    }
  }

}
