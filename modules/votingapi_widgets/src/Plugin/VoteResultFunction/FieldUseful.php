<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets\Plugin\VoteResultFunction;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\votingapi\Attribute\VoteResultFunction;
use Drupal\votingapi_widgets\FieldVoteResultBase;
use Drupal\votingapi_widgets\Plugin\Derivative\FieldResultFunction;

/**
 * The average value of a set of votes.
 *
 * @VoteResultFunction(
 *   id = "vote_field_useful",
 *   label = @Translation("Useful rating"),
 *   description = @Translation("The average vote value."),
 *   deriver = "Drupal\votingapi_widgets\Plugin\Derivative\FieldResultFunction",
 * )
 */
#[VoteResultFunction(
  id: "vote_field_useful",
  label: new TranslatableMarkup("Useful rating"),
  description: new TranslatableMarkup("The average vote value."),
  deriver: FieldResultFunction::class
)]
class FieldUseful extends FieldVoteResultBase {

  /**
   * {@inheritdoc}
   */
  public function calculateResult(array $votes): float {
    $total = 0;
    $votes = $this->getVotesForField($votes);
    foreach ($votes as $vote) {
      if ($vote->value->value == 1) {
        $total++;
      }
    }
    return $total;
  }

}
