<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets\Plugin\VoteResultFunction;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\votingapi\Attribute\VoteResultFunction;
use Drupal\votingapi_widgets\FieldVoteResultBase;
use Drupal\votingapi_widgets\Plugin\Derivative\FieldResultFunction;

/**
 * The average of a set of votes.
 *
 * @VoteResultFunction(
 *   id = "vote_field_average",
 *   label = @Translation("Average"),
 *   description = @Translation("The average vote value."),
 *   deriver = "Drupal\votingapi_widgets\Plugin\Derivative\FieldResultFunction",
 * )
 */
#[VoteResultFunction(
  id: "vote_field_average",
  label: new TranslatableMarkup("Average"),
  description: new TranslatableMarkup("The average vote value."),
  deriver: FieldResultFunction::class
)]
class FieldAverage extends FieldVoteResultBase {

  /**
   * {@inheritdoc}
   */
  public function calculateResult(array $votes): float {
    $total = 0;
    $votes = $this->getVotesForField($votes);
    foreach ($votes as $vote) {
      $total += (int) $vote->getValue();
    }
    if ($total == 0) {
      return 0;
    }
    return ($total / count($votes));
  }

}
