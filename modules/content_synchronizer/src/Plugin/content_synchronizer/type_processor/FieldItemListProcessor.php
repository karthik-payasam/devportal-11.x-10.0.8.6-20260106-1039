<?php

namespace Drupal\content_synchronizer\Plugin\content_synchronizer\type_processor;

use Drupal\content_synchronizer\Processors\Type\EmbedEntitiesTypeProcessorBase;

/**
 * Plugin implementation For the type processor .
 *
 * @TypeProcessor(
 *   id = "content_synchronzer_field_item_list_type_processor",
 *   fieldType = "Drupal\Core\Field\FieldItemList"
 * )
 */
class FieldItemListProcessor extends EmbedEntitiesTypeProcessorBase {

}
