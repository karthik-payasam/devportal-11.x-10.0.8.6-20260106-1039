<?php

namespace Drupal\graphql_twig;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\graphql\GraphQL\Execution\ExecutionResult;
use GraphQL\Error\Error;
use GraphQL\Server\OperationParams;
use Twig\Template;

/**
 * Trait that will be attached to all GraphQL enabled Twig templates.
 *
 * @property \Drupal\graphql_twig\GraphQLTwigEnvironment $env
 */
trait GraphQLTemplateTrait {
  use StringTranslationTrait;
  use GraphQLTemplateLoaderTrait;

  /**
   * @return bool
   */
  abstract public static function hasGraphQLOperations();

  /**
   * @var string
   */
  abstract public static function rawGraphQLQuery();

  /**
   * @return string
   */
  abstract public static function rawGraphQLParent();

  /**
   * @return string[]
   */
  abstract public static function rawGraphQLIncludes();

  /**
   * @return string[]
   */
  abstract public static function rawGraphQLArguments();

  /**
   * {@inheritdoc}
   */
  public function display(array $context, array $blocks = []) {
    if (!static::hasGraphQLOperations()) {
      parent::display($context, $blocks);
      return;
    }

    if (isset($context['graphql_arguments'])) {
      $context = $context['graphql_arguments'];
    }

    $query = trim($this->getGraphQLQuery());

    if (!$query) {
      parent::display($context, $blocks);
      return;
    }

    $arguments = [];
    foreach (static::rawGraphQLArguments() as $var) {
      if (isset($context[$var])) {
        $arguments[$var] = $context[$var] instanceof EntityInterface ? $context[$var]->id() : $context[$var];
      }
    }

    $queryResult = $this->env->getGraphQlServer()->executeOperation(OperationParams::create([
      'query' => $query,
      'variables' => $arguments,
    ]));

    $hasError = !$queryResult instanceof ExecutionResult || !empty($queryResult->errors);
    $build = [
      '#cache' => [
        'contexts' => $queryResult->getCacheContexts(),
        'tags' => $queryResult->getCacheTags(),
        'max-age' => $hasError ? 0 : $queryResult->getCacheMaxAge(),
      ],
    ];

    $this->env->getRenderer()->render($build);

    $config = \Drupal::config('graphql_twig.settings');
    $debug_placement = $config->get('debug_placement');

    if ($this->env->isDebug() && \Drupal::currentUser()->hasPermission('use graphql explorer')) {
      // Auto-attach the debug assets if necessary.
      $template_attached = ['#attached' => ['library' => ['graphql_twig/debug']]];
      $this->env->getRenderer()->render($template_attached);
    }

    if ($this->env->isDebug() && $debug_placement == 'wrapped') {
      printf(
        '<div class="%s" data-graphql-query="%s" data-graphql-variables="%s" data-graphql-server="%s">',
        'graphql-twig-debug-wrapper',
        htmlspecialchars($query),
        htmlspecialchars(json_encode($arguments)),
        $this->env->getGraphQlServer()->id()
      );
    }

    if ($this->env->isDebug() && $queryResult->errors) {
      print('<ul class="graphql-twig-errors">');
      printf('<li>'.$this->t('Query').': <code>%s</code></li>', $query);
      printf('<li>'.$this->t('Arguments').': <code>%s</code></li>', json_encode($arguments));
      foreach ($queryResult->errors as $error) {
        printf('<li>%s</li>', $error->getMessage());
      }
      print('</ul>');
    }
    else {
      // Allow graphql data alteration.
      /** @var \Drupal\Core\Theme\ThemeManager $themeManager */
      $themeManager = \Drupal::service('theme.manager');
      $themeManager->alter('graphql_twig_data', $queryResult->data, $context);
      $context['graphql'] = $queryResult->data;

      if ($this->env->isDebug() && $debug_placement == 'inside') {
        $context['graphql_debug'] = [
          '#markup' => sprintf(
            '<div class="graphql-twig-debug-child"><div class="%s" data-graphql-query="%s" data-graphql-variables="%s" data-graphql-server="%s"></div></div>',
            'graphql-twig-debug-wrapper',
            htmlspecialchars($query),
            htmlspecialchars(json_encode($arguments)),
            $this->env->getGraphQlServer()->id()
          ),
        ];

        // Add the debug parent class to the element.
        /** @var \Drupal\Core\Template\Attribute $attributes */
        $attributes = $context['attributes'];
        $attributes->addClass('graphql-twig-debug-parent');
      }

      parent::display($context, $blocks);
    }

    if ($this->env->isDebug() && $debug_placement == 'wrapped') {
      print('</div>');
    }
  }

  /**
   * Recursively build the GraphQL query.
   *
   * Builds the templates GraphQL query by iterating through all included or
   * embedded templates recursively.
   */
  public function getGraphQLQuery(): string {

    $query = '';
    $includes = [];

    if ($this instanceof Template) {
      $query = $this->getGraphQLFragment();

      $includes = array_keys($this->getGraphQLIncludes());

      // Recursively collect all included fragments.
      $includes = array_map(function ($template) {
        return $this->loadTemplateHelper($template)->getGraphQLFragment();
      }, $includes);

      // Always add includes from parent templates.
      if ($parent = $this->getGraphQLParent()) {
        $includes += array_map(function ($template) {
          return $this->loadTemplateHelper($template)->getGraphQLQuery();
        }, array_keys($parent->getGraphQLIncludes()));
      }
    }

    return implode("\n", [-1 => $query] + $includes);
  }

  /**
   * Get the files parent template.
   *
   * @return \Twig\Template|null
   *   The parent template or null.
   */
  protected function getGraphQLParent() {
    return static::rawGraphQLParent() ? $this->loadTemplateHelper(static::rawGraphQLParent()) : NULL;
  }

  /**
   * Retrieve the files graphql fragment.
   *
   * @return string
   *   The GraphQL fragment.
   */
  public function getGraphQLFragment() {
    // If there is no query for this template, try to get one from the
    // parent template.
    if (!($query = static::rawGraphQLQuery()) && ($parent = $this->getGraphQLParent())) {
      $query = $parent->getGraphQLFragment();
    }
    return $query;
  }

  /**
   * Retrieve a list of all direct or indirect included templates.
   *
   * @param string[] $recursed
   *   The list of templates already recursed into. Used internally.
   *
   * @return string[]
   *   The list of included templates.
   */
  public function getGraphQLIncludes(&$recursed = []) {

    $includes = array_flip(static::rawGraphQLIncludes());
    foreach ($includes as $include => $key) {
      if (in_array($include, $recursed)) {
        continue;
      }

      $recursed[] = $include;

      // TODO: operate on template class instead.
      $includes += $this->loadTemplateHelper($include)->getGraphQLIncludes($recursed);
    }

    return $includes;
  }
}
