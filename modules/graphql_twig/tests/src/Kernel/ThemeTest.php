<?php

namespace Drupal\Tests\graphql_twig\Kernel;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\graphql\GraphQL\Execution\ExecutionResult;
use Drupal\Tests\graphql\Kernel\GraphQLTestBase;
use Drupal\Tests\graphql\Traits\QueryFileTrait;
use Drupal\Tests\graphql_twig\Traits\ThemeTestTrait;
use GraphQL\Server\OperationParams;
use Prophecy\Argument;

/**
 * Tests that test GraphQL theme integration on module level.
 *
 * @group graphql_twig
 */
class ThemeTest extends GraphQLTestBase {
  use ThemeTestTrait;
  use QueryFileTrait;

  /**
   * The cache contexts manager.
   *
   * @var \Drupal\Core\Cache\Context\CacheContextsManager
   */
  protected \Drupal\Core\Cache\Context\CacheContextsManager $contextManager;

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    'system',
    'graphql',
    'graphql_twig',
  ];

  protected function getDefaultSchema(): string {
    return <<<GQL
      schema {
        query: Query
      }
      type Query {
        nodeById(id: String!): Node
      }
      type Node {
        entityLabel: String
      }
    GQL;
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->setUpSchema($this->getDefaultSchema());
    $this->mockResolver('Node', 'entityLabel','Test');

    // set the config for graphql_server_id
    $this->config('graphql_twig.settings')
      ->set('graphql_server_id', $this->server->id())
      ->save();

    $this->setupThemeTest();
  }

  /**
   * Test query assembly.
   */
  public function testQueryAssembly() {
    $this->graphQlServer->executeOperation(Argument::that(function (OperationParams $params) {
      return $params->query === $this->getQueryFromFile('garage.gql');
    }))->willReturn(new ExecutionResult())
      ->shouldBeCalled();

    $renderer = $this->container->get('renderer');

    $element = ['#theme' => 'graphql_garage'];
    $renderer->renderRoot($element);
  }

  /**
   * Test query caching.
   */
  public function testCacheableQuery() {

    $metadata = new CacheableMetadata();
    $metadata->setCacheMaxAge(-1);

    $process = $this->graphQlServer->executeOperation(Argument::any())
      ->willReturn(new ExecutionResult([], [], []));

    $element = [
      '#theme' => 'graphql_garage',
      '#cache' => [
        'keys' => ['garage'],
      ],
    ];

    $renderer = $this->container->get('renderer');
    $element_1 = $element;
    $element_2 = $element;

    $renderer->renderRoot($element_1);
    $renderer->renderRoot($element_2);

    $process->shouldHaveBeenCalledTimes(1);
  }

  /**
   * Test query caching.
   */
  public function testUncacheableQuery() {

    $metadata = new CacheableMetadata();
    $metadata->setCacheMaxAge(0);

    $process = $this->graphQlServer->executeOperation(Argument::any())
      ->willReturn(new ExecutionResult([], [], []));

    $element = [
      '#theme' => 'graphql_garage',
      '#cache' => [
        'keys' => ['garage'],
      ],
    ];

    $renderer = $this->container->get('renderer');
    $element_1 = $element;
    $element_2 = $element;

    $renderer->renderRoot($element_1);
    $renderer->renderRoot($element_2);

    $process->shouldHaveBeenCalledTimes(2);
  }

}
