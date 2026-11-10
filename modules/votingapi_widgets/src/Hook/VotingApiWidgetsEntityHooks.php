<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets\Hook;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\votingapi_widgets\Plugin\VotingApiWidgetManager;

/**
 * Hook implementations used to create and dispatch Entity Events.
 */
final class VotingApiWidgetsEntityHooks {

  /**
   * Constructs a new VotingApiWidgetsEntityHooks service.
   *
   * @param \Drupal\votingapi_widgets\Plugin\VotingApiWidgetManager $widgetManager
   *   The entity_type.manager service.
   */
  public function __construct(
    protected VotingApiWidgetManager $widgetManager,
  ) {}

  /**
   * Implements hook_entity_base_field_info().
   */
  #[Hook('entity_base_field_info')]
  public function entityBaseFieldInfo(EntityTypeInterface $entity_type): array {
    $fields = [];

    // Add the field_name as a base field.
    if ($entity_type->id() != 'vote') {
      return $fields;
    }

    $fields['field_name'] = BaseFieldDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Field name'))
      ->setName('field_name')
      ->setRevisionable(FALSE)
      ->setRequired(FALSE)
      ->setDescription(new TranslatableMarkup('Holds the field name.'))
      ->setPropertyConstraints('value', ['Length' => ['max' => FieldStorageConfig::NAME_MAX_LENGTH]]);

    return $fields;
  }

  /**
   * Implements hook_entity_type_build().
   */
  #[Hook('entity_type_build')]
  public function entityTypeBuild(array &$entity_types): void {
    $plugins = $this->widgetManager->getDefinitions();
    foreach ($plugins as $plugin_id => $definition) {
      $entity_types['vote']->setFormClass('votingapi_' . $plugin_id, 'Drupal\votingapi_widgets\Form\BaseRatingForm');
    }
  }

}
