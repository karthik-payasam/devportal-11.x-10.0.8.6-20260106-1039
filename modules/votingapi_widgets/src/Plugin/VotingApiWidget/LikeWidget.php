<?php

namespace Drupal\votingapi_widgets\Plugin\VotingApiWidget;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\votingapi_widgets\Attribute\VotingApiWidget;
use Drupal\votingapi_widgets\Plugin\VotingApiWidgetBase;

/**
 * Allows "liking" content with thumbs up.
 */
#[VotingApiWidget(
  id: "like",
  label: new TranslatableMarkup("Like"),
  values: [
    1 => new TranslatableMarkup("Like"),
  ]
)]
class LikeWidget extends VotingApiWidgetBase {
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
            'like',
            ($settings['readonly'] === 1) ? 'read_only' : '',
          ],
        ],
        '#children' => [
          'form' => $form,
        ],
      ],
      '#attached' => [
        'library' => ['votingapi_widgets/like'],
      ],
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getInitialVotingElement(array &$form) {
    $form['value']['#prefix'] = '<div class="votingapi-widgets like">';
    $form['value']['#attached'] = [
      'library' => ['votingapi_widgets/like'],
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
