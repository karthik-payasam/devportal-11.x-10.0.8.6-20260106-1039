<?php

declare(strict_types=1);

namespace Drupal\votingapi_widgets\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;

/**
 * Hook implementations used to provide help.
 */
final class VotingApiWidgetsHelpHooks {
  use StringTranslationTrait;

  /**
   * Constructs a new VotingApiWidgetsHelpHooks service.
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
   * Implements hook_help().
   */
  #[Hook('help')]
  public function help(string $route_name, RouteMatchInterface $route_match): ?string {
    switch ($route_name) {
      // Main module help for the votingapi_widgets module.
      case 'help.page.votingapi_widgets':
        $output = '<h3>' . $this->t('About') . '</h3>';
        $output .= '<p>' . $this->t('Voting API Widgets') . '</p>';
        return $output;

      default:
    }
    return NULL;
  }

}
