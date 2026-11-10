<?php

declare(strict_types=1);

namespace Drupal\top_products\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * top_products style plugin.
 *
 * @ViewsStyle(
 *   id = "top_products_top_products",
 *   title = @Translation("top_products"),
 *   help = @Translation("@todo Add help text here."),
 *   theme = "views_style_top_products_top_products",
 *   display_types = {"normal"},
 * )
 */
final class TopProducts extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = TRUE;

}
