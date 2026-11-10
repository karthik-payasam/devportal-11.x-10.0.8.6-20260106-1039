<?php

namespace Drupal\graphql_twig;

use Twig\Template;

/**
 * Trait helps with loading twig templates in Drupal 9 and 10.
 * @TODO: Remove this trait when Drupal 9 is no longer supported.
 */
trait GraphQLTemplateLoaderTrait {

  /**
   * Load twig template compatible with Drupal 9 and 10.
   * Drupal 9 uses Twig 2.x, Drupal 10 uses Twig 3.x.
   *
   * @param $templateName
   *   The twig template name.
   * @param $twig
   *   The twig class.
   *
   * @return Template
   */
  protected function loadTemplateHelper($templateName, $twig = NULL): Template {
    $env = $twig ?? $this->env;

    // check if not running Drupal 10 / Twig 2.x
    if (version_compare(\Drupal::VERSION, '10.0.0') < 0) {
      return $env->loadTemplate($templateName, NULL);
    }

    // For Twig 3.x / Drupal 10
    $class = $env->getTemplateClass($templateName);
    return $env->loadTemplate($class, $templateName);
  }

}
