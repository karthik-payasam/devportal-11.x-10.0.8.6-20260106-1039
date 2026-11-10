<?php

namespace Drupal\graphql_twig;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\State\StateInterface;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\graphql\Entity\ServerInterface;
use Twig\Source;

/**
 * Enhanced Twig environment for GraphQL.
 *
 * Checks for GraphQL annotations in twig templates or matching `*.gql` and
 * adds them as `{% graphql %}` tags before passing them to the compiler.
 *
 * This is a convenience feature and also ensures that GraphQL-powered templates
 * don't break compatibility with Twig processors that don't have this extension
 * (e.g. patternlab).
 */
class GraphQLTwigEnvironment extends TwigEnvironment {

  /**
   * The renderer instance.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected RendererInterface $renderer;

  /**
   * The GraphQL server.
   *
   * @var \Drupal\graphql\Entity\ServerInterface
   */
  protected ServerInterface $graphQlServer;

  /**
   * Retrieve the GraphQL server.
   *
   * @return \Drupal\graphql\Entity\ServerInterface
   *   The GraphQL server.
   */
  public function getGraphQlServer(): ServerInterface {
    return $this->graphQlServer;
  }

  /**
   * Retrieve the renderer instance.
   *
   * @return \Drupal\Core\Render\RendererInterface
   *   The renderer instance.
   */
  public function getRenderer(): ?RendererInterface {
    return $this->renderer;
  }

  /**
   * {@inheritdoc}
   */
  public function __construct(
    $root,
    CacheBackendInterface $cache,
    $twig_extension_hash,
    StateInterface $state,
    \Twig\Loader\LoaderInterface $loader = NULL,
    array $options = [],
    EntityTypeManagerInterface $entityTypeManager = NULL,
    ConfigFactoryInterface $configFactory = NULL,
    RendererInterface $renderer = NULL
  ) {
    $graphQLTwigLoadGraphQlServer = new GraphQLTwigLoadGraphQlServer($entityTypeManager, $configFactory);
    $this->graphQlServer = $graphQLTwigLoadGraphQlServer->getGraphQlServer();
    $this->renderer = $renderer;
    parent::__construct(
      $root,
      $cache,
      $twig_extension_hash,
      $state,
      $loader,
      $options
    );
  }

  /**
   * Regular expression to find a GraphQL annotation in a twig comment.
   *
   * @var string
   */
  public static string $graphqlAnnotationRegex = '/{#graphql\s+(?<query>.*?)\s+#\}/s';

  /**
   * {@inheritdoc}
   */
  public function compileSource(Source $source): string {
    // Check if there is a `*.gql` file with the same name as the template.
    $graphqlFile = $source->getPath() . '.gql';
    if (file_exists($graphqlFile)) {
      $source = new Source(
        '{% graphql %}' . file_get_contents($graphqlFile) . '{% endgraphql %}' . $source->getCode(),
        $source->getName(),
        $source->getPath()
      );
    }
    else {
      // Else, try to find an annotation.
      $source = new Source(
        $this->replaceAnnotation($source->getCode()),
        $source->getName(),
        $source->getPath()
      );
    }

    // Compile the modified source.
    return parent::compileSource($source);
  }

  /**
   * Replace `{#graphql ... #}` annotations with `{% graphql ... %}` tags.
   *
   * @param  string  $code
   *   The template code.
   *
   * @return string
   *   The template code with all annotations replaced with tags.
   */
  public function replaceAnnotation(string $code): string {
    return preg_replace(static::$graphqlAnnotationRegex, '{% graphql %}$1{% endgraphql %}', $code);
  }
}
