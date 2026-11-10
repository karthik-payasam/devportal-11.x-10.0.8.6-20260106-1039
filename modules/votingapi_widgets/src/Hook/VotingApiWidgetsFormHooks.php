<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets\Hook;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;

/**
 * Hook implementations used to alter and enhance forms.
 */
final class VotingApiWidgetsFormHooks {
  use StringTranslationTrait;

  /**
   * Constructs a new VotingApiWidgetsFormHooks service.
   *
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   */
  public function __construct(
    TranslationInterface $string_translation,
  ) {
    $this->stringTranslation = $string_translation;
  }

  /**
   * Implements hook_form_FORM_ID_alter() for field_config_edit_form.
   */
  #[Hook('form_field_config_edit_form_alter')]
  public function fieldConfigEditFormAlter(array &$form, FormStateInterface $form_state): void {
    if ($form_state->getFormObject()->getEntity()->bundle() == 'voting_api_field') {
      // We only support posting one comment at the time so it doesn't make
      // sense to let the site builder choose anything else.
      $form['field_storage']['subform']['cardinality_container']['cardinality']['#default_value'] = 1;
      $form['field_storage']['subform']['cardinality_container']['#access'] = FALSE;
    }
  }

}
