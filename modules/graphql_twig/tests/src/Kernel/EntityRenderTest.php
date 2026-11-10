<?php

namespace Drupal\Tests\graphql_twig\Kernel;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\graphql\GraphQL\Execution\ExecutionResult;
use Drupal\node\Entity\Node;
use Drupal\node\Entity\NodeType;
use Drupal\Tests\graphql\Kernel\GraphQLTestBase;
use Drupal\Tests\graphql_twig\Traits\ThemeTestTrait;
use Drupal\user\Entity\User;
use Prophecy\Argument;

/**
 * Tests that test GraphQL theme integration on module level.
 *
 * @group graphql_twig
 */
class EntityRenderTest extends GraphQLTestBase {
  use ThemeTestTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    'system',
    'path',
    'path_alias',
    'graphql',
    'graphql_twig',
    'datetime',
    'field',
    'text',
    'system',
    'node',
    'user',
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

    $this->installConfig(['system', 'user', 'node']);
    $this->installEntitySchema('user');
    $this->installEntitySchema('node');
    $this->setupThemeTest(FALSE);
    NodeType::create([
      'type' => 'article',
      'name' => 'Article',
    ])->save();
  }

  /**
   * {@inheritdoc}
   */
  public function testNodeRender() {
    $node = Node::create([
      'title' => 'Test',
      'type' => 'article',
      'uid' => User::create([
        'name' => 'test',
      ])->save(),
    ]);
    $node->save();

    $this->graphQlServer->executeOperation(Argument::any())
      ->willReturn(new ExecutionResult([
        'test' => [
          'title' => 'Test',
        ],
      ]));

    $viewBuilder = $this->container->get('entity_type.manager')->getViewBuilder('node');
    $build = $viewBuilder->view($node);
    $result = $this->render($build);
    $this->assertStringContainsString('<h1>Test</h1>', $result);
  }

  /**
   * {@inheritdoc}
   */
  public function testCacheableNodeRender() {
    $node = Node::create([
      'title' => 'Test',
      'type' => 'article',
      'uid' => User::create([
        'name' => 'test',
      ])->save(),
    ]);
    $node->save();

    $process = $this->graphQlServer->executeOperation(Argument::any())
      ->willReturn(new ExecutionResult([
        'node' => [
          'title' => 'Test',
        ],
      ]));

    $viewBuilder = $this->container->get('entity_type.manager')->getViewBuilder('node');

    $build = $viewBuilder->view($node);
    $this->render($build);

    $build = $viewBuilder->view($node);
    $this->render($build);

    $process->shouldHaveBeenCalledTimes(1);
  }

  /**
   * {@inheritdoc}
   */
  public function testUncacheableNodeRender() {
    $node = Node::create([
      'title' => 'Test',
      'type' => 'article',
      'uid' => User::create([
        'name' => 'test',
      ])->save(),
    ]);
    $node->save();
    $metadata = new CacheableMetadata();
    $metadata->setCacheMaxAge(0);

    $process = $this->graphQlServer->executeOperation(Argument::any())
      ->willReturn(new ExecutionResult([
        'node' => [
          'title' => 'Test',
        ],
      ]));

    $viewBuilder = $this->container->get('entity_type.manager')->getViewBuilder('node');

    $build = $viewBuilder->view($node);
    $this->render($build);

    $build = $viewBuilder->view($node);
    $this->render($build);

    $process->shouldHaveBeenCalledTimes(2);
  }

}
