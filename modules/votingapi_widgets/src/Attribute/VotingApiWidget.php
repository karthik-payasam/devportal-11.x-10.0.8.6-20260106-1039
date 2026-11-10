<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a Voting API widget attribute object.
 *
 * Plugin Namespace: Plugin\votingapi_widgets.
 *
 * For a working example, see
 * \Drupal\votingapi_widgets\Plugin\votingapi_widgets\UsefulWidget
 *
 * @see hook_vote_result_info_alter()
 * @see \Drupal\votingapi_widgets\Plugin\VotingApiWidgetInterface
 * @see \Drupal\votingapi_widgets\Plugin\VotingApiWidgetBase
 * @see \Drupal\votingapi_widgets\Plugin\VotingApiWidgetManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class VotingApiWidget extends Plugin {

  /**
   * Constructs a VotingApiWidget attribute object.
   *
   * @param string $id
   *   The plugin ID. The machine-name of the function plugin.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $label
   *   The human-readable name of the widget.
   * @param array $values
   *   An array of possible vote values.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $label,
    public readonly array $values,
    public readonly ?string $deriver = NULL,
  ) {}

}
