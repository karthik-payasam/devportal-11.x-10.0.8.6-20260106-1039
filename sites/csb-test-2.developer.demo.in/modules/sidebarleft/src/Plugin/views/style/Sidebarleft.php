<?php

declare(strict_types=1);

namespace Drupal\sidebarleft\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * sidebarleft style plugin.
 *
 * @ViewsStyle(
 *   id = "sidebarleft_sidebarleft",
 *   title = @Translation("sidebarleft"),
 *   help = @Translation("@todo Add help text here."),
 *   theme = "views_style_sidebarleft_sidebarleft",
 *   display_types = {"normal"},
 * )
 */
final class Sidebarleft extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
