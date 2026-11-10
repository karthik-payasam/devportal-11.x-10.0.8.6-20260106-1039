<?php

namespace Drupal\content_synchronizer\Plugin\content_synchronizer\type_processor;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\TypedData\TypedData;
use Drupal\content_synchronizer\Processors\Type\TypeProcessorBase;
use Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager;
use Drupal\content_synchronizer\Processors\ImportProcessor;
use Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface;
use Drupal\block_content\Entity\BlockContent;
use Drupal\layout_builder\Section;
use Drupal\layout_builder\SectionComponent;

/**
 * Plugin implementation For the type processor .
 *
 * @TypeProcessor(
 *   id = "content_synchronzer_layout_builder_processor",
 *   fieldType = "Drupal\layout_builder\Field\LayoutSectionItemList"
 * )
 */
class LayoutBuilderProcessor extends TypeProcessorBase {

  /**
   * {@inheritdoc}
   */
  public function getExportedData(TypedData $propertyData) {
    $datas = [];

    // Init processor service.
    /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager $entityProcessorManager */
    $entityProcessorManager = \Drupal::service(EntityProcessorPluginManager::SERVICE_NAME);

    /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorBase $plugin */
    $plugin = $entityProcessorManager->getInstanceByEntityType('block_content');

    foreach ($propertyData as $item) {
      $value = $item->getValue();
      if (isset($value['section'])) {
        $data = $value['section']->toArray();

        foreach ($data['components'] as $uuid => $component_data) {
          if (isset($component_data['configuration']['block_revision_id'])) {
            $block = BlockContent::load($component_data['configuration']['block_revision_id']);
            $gid = $plugin->export($block);
            $data['components'][$uuid]['gid'] = $gid;
          }
        }
        $datas[] = $data;
      }

    }
    return $datas;
  }

  /**
   * {@inheritdoc}
   */
  public function initImportedEntity(EntityInterface $entity_to_import, $property_id, array $data) {

    /** @var \Drupal\content_synchronizer\Processors\ImportProcessor $importProcessor */
    $importProcessor = ImportProcessor::getCurrentImportProcessor();

    /** @var \Drupal\content_synchronizer\Entity\ImportEntity $import */
    $import = $importProcessor->getImport();

    /** @var \Drupal\content_synchronizer\Service\GlobalReferenceManagerInterface $referenceManager */
    $referenceManager = \Drupal::service(GlobalReferenceManagerInterface::SERVICE_NAME);

    /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorPluginManager $pluginManager */
    $pluginManager = \Drupal::service(EntityProcessorPluginManager::SERVICE_NAME);

    $sections = [];
    foreach ($data[$property_id] as $section_data) {
      $section = new Section($section_data['layout_id'], $section_data['layout_settings'], [], $section_data['third_party_settings']);

      foreach ($section_data['components'] as $uuid => $component_data) {

        $pluginConfiguration = $component_data['configuration'];

        if (isset($component_data['gid'])) {
          // If the entity to reference is currently importing, then we cannot
          // add it to the reference because it probably do not have an id yet.
          if ($import->gidIsCurrentlyImporting($component_data['gid'])) {
            // @todo Manage this case.
          }
          // The entity has already been imported, so we add it to the field.
          elseif ($import->gidHasAlreadyBeenImported($component_data['gid'])) {
            $block = $referenceManager->getEntityByGid($component_data['gid']);
          }
          // The entity has not been imported yet, so we iport it.
          else {
            // Get the plugin of the entity :
            /** @var \Drupal\content_synchronizer\Processors\Entity\EntityProcessorBase $plugin */
            $plugin = $pluginManager->getInstanceByEntityType($referenceManager->getEntityTypeFromGid($component_data['gid']));
            if ($entityData = $import->getEntityDataFromGid($component_data['gid'])) {
              $block = $plugin->import($entityData);
            }
          }

          if (isset($block)) {
            $pluginConfiguration['block_revision_id'] = $block->id();
          }

        }

        // Create a new section component using the node and plugin config.
        $component = new SectionComponent($uuid, $component_data['region'], $pluginConfiguration, $component_data['additional']);

        // Add the component to the section.
        $section->appendComponent($component);
      }

      // Add the section to the sections array.
      $sections[] = $section;

    }

    // Set the sections.
    $entity_to_import->layout_builder__layout->setValue($sections);

  }

}
