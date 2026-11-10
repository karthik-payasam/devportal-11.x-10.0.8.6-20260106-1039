<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets\Plugin\VoteResultFunction;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\votingapi\Attribute\VoteResultFunction;
use Drupal\votingapi_widgets\FieldVoteResultBase;
use Drupal\votingapi_widgets\Plugin\Derivative\FieldResultFunction;

/**
 * The number of votes in a set of votes.
 *
 * @VoteResultFunction(
 *   id = "vote_field_count",
 *   label = @Translation("Count"),
 *   description = @Translation("The number of votes cast."),
 *   deriver = "Drupal\votingapi_widgets\Plugin\Derivative\FieldResultFunction",
 * )
 */
#[VoteResultFunction(
  id: "vote_field_count",
  label: new TranslatableMarkup("Count"),
  description: new TranslatableMarkup("The number of votes cast."),
  deriver: FieldResultFunction::class
)]
class FieldCount extends FieldVoteResultBase {

  /**
   * {@inheritdoc}
   */
  public function calculateResult(array $votes): float {
    $votes = $this->getVotesForField($votes);
    return count($votes);
  }

}
