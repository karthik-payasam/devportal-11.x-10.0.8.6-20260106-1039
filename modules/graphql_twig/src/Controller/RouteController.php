<?php

namespace Drupal\graphql_twig\Controller;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\graphql_twig\GraphQLTwigLoadGraphQlServer;
use GraphQL\Server\OperationParams;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for configuration-generated GraphQL-Twig routes.
 */
class RouteController extends ControllerBase {

  /**
   * @var \Drupal\graphql\Entity\ServerInterface
   */
  protected $graphQlServer;

  /**
   * @var \Drupal\Core\Template\TwigEnvironment
   */
  protected $twig;

  /**
   * @inheritdoc
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('config.factory'),
      $container->get('twig')
    );
  }

  /**
   * RouteController constructor.
   *
   * @param  \Drupal\Core\Entity\EntityTypeManagerInterface  $entityTypeManager
   *   The entity type manager.
   * @param  \Drupal\Core\Config\ConfigFactoryInterface  $configFactory
   *   The config factory.
   * @param  \Drupal\Core\Template\TwigEnvironment  $twig
   *   A Twig environment.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager,
    ConfigFactoryInterface $configFactory,
    TwigEnvironment $twig
  ) {
    $graphQLTwigLoadGraphQlServer = new GraphQLTwigLoadGraphQlServer($entityTypeManager, $configFactory);
    $this->graphQlServer = $graphQLTwigLoadGraphQlServer->getGraphQlServer();
    $this->twig = $twig;
  }

  /**
   * Generic page callback.
   *
   * Accepts a theme hook and an array of theme variables.
   *
   * @param $_graphql_theme_hook
   *   The theme hook.
   * @param $_graphql_arguments
   *   Query arguments
   *
   * @return array
   *   The render array build.
   */
  public function page($_graphql_theme_hook, $_graphql_arguments) {
    return [
      '#theme' => $_graphql_theme_hook,
      '#graphql_arguments' => $_graphql_arguments,
    ];
  }

  /**
   * Build a page title from a twig template and a GraphQL query.
   *
   * @param $_graphql_title
   * @param $_graphql_title_query
   * @param $_graphql_arguments
   *
   * @return \Drupal\Component\Render\MarkupInterface|\Drupal\Core\StringTranslation\TranslatableMarkup|string
   *
   * @throws \Drupal\Component\Plugin\Exception\PluginException
   */
  public function title($_graphql_title, $_graphql_title_query, $_graphql_arguments) {
    if (!$_graphql_title) {
      return FALSE;
    }
    if ($_graphql_title_query) {
      $result = $this->graphQlServer->executeOperation(
        OperationParams::create([
          'query' => $_graphql_title_query,
          'variables' => $_graphql_arguments,
        ])
      );

      if ($result->errors) {
        $_graphql_title = reset($result->errors)->getMessage();
      }
      else {
        $_graphql_title = $this->twig->renderInline($_graphql_title, $result->data);
      }
    }
    else {
      $_graphql_title = $this->t($_graphql_title);
    }
    return $_graphql_title;
  }

}
