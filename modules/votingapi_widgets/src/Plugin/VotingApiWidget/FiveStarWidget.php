<?php

namespace Drupal\votingapi_widgets\Plugin\VotingApiWidget;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\votingapi_widgets\Attribute\VotingApiWidget;
use Drupal\votingapi_widgets\Plugin\VotingApiWidgetBase;

/**
 * Allows rating of content with five stars of various styles.
 */
#[VotingApiWidget(
  id: "fivestar",
  label: new TranslatableMarkup("Fivestar rating"),
  values: [
    1 => new TranslatableMarkup("Poor"),
    2 => new TranslatableMarkup("Not so poor"),
    3 => new TranslatableMarkup("Average"),
    4 => new TranslatableMarkup("Good"),
    5 => new TranslatableMarkup("Very good"),
  ]
)]
class FiveStarWidget extends VotingApiWidgetBase {
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
            'fivestar',
            ($settings['readonly'] === 1) ? 'read_only' : '',
          ],
        ],
        '#children' => [
          'form' => $form,
        ],
      ],
      '#attached' => [
        'library' => ['votingapi_widgets/fivestar'],
      ],
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getInitialVotingElement(array &$form) {
    $form['value']['#prefix'] = '<div class="votingapi-widgets fivestar">';
    $form['value']['#attached'] = [
      'library' => ['votingapi_widgets/fivestar'],
    ];
    $form['value']['#suffix'] = '</div>';
    $form['value']['#attributes'] = [
      'data-style' => 'default',
      'data-is-edit' => 1,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getStyles() {
    return [
      'default' => $this->t('Default'),
      'bars-horizontal' => $this->t('Bars horizontal'),
      'css-stars' => $this->t('Css stars'),
      'bars-movie' => $this->t('Bars movie'),
      'bars-pill' => $this->t('Bars pill'),
      'bars-square' => $this->t('Bars square'),
      'fontawesome-stars-o' => $this->t('Fontawesome stars-o'),
      'fontawesome-stars' => $this->t('Fontawesome stars'),
      'bootstrap-stars' => $this->t('Bootstrap stars'),
    ];
  }

}
