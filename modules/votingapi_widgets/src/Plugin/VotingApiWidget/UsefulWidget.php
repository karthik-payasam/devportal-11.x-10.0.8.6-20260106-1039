<?php

namespace Drupal\votingapi_widgets\Plugin\VotingApiWidget;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\votingapi_widgets\Attribute\VotingApiWidget;
use Drupal\votingapi_widgets\Plugin\VotingApiWidgetBase;

/**
 * Allows rating content content as useful or not useful with thumbs up/down.
 */
#[VotingApiWidget(
  id: "useful",
  label: new TranslatableMarkup("Useful rating"),
  values: [
    -1 => new TranslatableMarkup("Not useful"),
    1 => new TranslatableMarkup("Useful"),
  ]
)]
class UsefulWidget extends VotingApiWidgetBase {
  use StringTranslationTrait;

  /**
   * Vote form.
   */
  public function buildForm($entity_type, $entity_bundle, $entity_id, $vote_type, $field_name, $settings) {
    $form = $this->getForm($entity_type, $entity_bundle, $entity_id, $vote_type, $field_name, $settings);
    $build = [
      'rating' => [
        '#theme' => 'container',
        '#attributes' => [
          'class' => [
            'votingapi-widgets',
            'useful',
            ($settings['readonly'] === 1) ? 'read_only' : '',
          ],
        ],
        '#children' => [
          'form' => $form,
        ],
      ],
      '#attached' => [
        'library' => ['votingapi_widgets/useful'],
      ],
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getInitialVotingElement(array &$form) {
    $form['value']['#prefix'] = '<div class="votingapi-widgets useful">';
    $form['value']['#attached'] = [
      'library' => ['votingapi_widgets/useful'],
    ];
    $form['value']['#suffix'] = '</div>';
  }

  /**
   * {@inheritdoc}
   */
  public function getStyles() {
    return [
      'default' => $this->t('Default'),
    ];
  }

}
