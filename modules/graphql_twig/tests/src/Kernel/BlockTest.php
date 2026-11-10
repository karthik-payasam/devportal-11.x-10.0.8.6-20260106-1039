<?php

namespace Drupal\Tests\graphql_twig\Kernel;

use Drupal\Tests\block\Traits\BlockCreationTrait;
use Drupal\Tests\graphql\Kernel\GraphQLTestBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Test dynamic routes added by GraphQL Twig.
 *
 * @group graphql_twig
 */
class BlockTest extends GraphQLTestBase {

  use BlockCreationTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    'block',
    'graphql_twig',
  ];

  protected function getDefaultSchema(): string {
    return <<<GQL
      schema {
        query: Query
      }
      type Query {
        shout(word: String): String
      }
    GQL;
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->setUpSchema($this->getDefaultSchema());
    $this->mockResolver('Query', 'shout', $this->builder->fromArgument('word'));


    $this->installConfig(['graphql_twig']);
    // set the config for graphql_server_id
    $this->config('graphql_twig.settings')
      ->set('graphql_server_id', $this->server->id())
      ->save();

    $themeName = 'graphql_twig_test_theme';

    /** @var \Drupal\Core\Extension\ThemeInstaller $themeInstaller */
    $themeInstaller = $this->container->get('theme_installer');
    /** @var \Drupal\Core\Theme\ThemeInitialization $themeInitialization */
    $themeInitialization = $this->container->get('theme.initialization');
    /** @var \Drupal\Core\Theme\ThemeManager $themeManager */
    $themeManager = $this->container->get('theme.manager');

    $themeInstaller->install([$themeName]);
    $theme = $themeInitialization->initTheme($themeName);
    $themeManager->setActiveTheme($theme);

    // Rebuild routes to include theme routes.
    $this->container->get('router.builder')->rebuild();
  }

  /**
   * {@inheritdoc}
   */
  protected function placeGraphQLBlock($id, $arguments = []) {
    $parameters = [];
    foreach ($arguments as $key => $value) {
      $parameters[] = [
        'key' => $key,
        'value' => $value,
      ];
    }
    $block = $this->placeBlock('graphql_twig:' . $id, [
      'region' => 'content',
      'theme' => 'graphql_twig_test_theme',
      'graphql_block' => $parameters,
    ]);
    $block->save();
  }

  /**
   * Test block without arguments.
   */
  public function testNoArguments() {
    $this->placeGraphQLBlock('block_no_arguments');
    $result = $this->container->get('http_kernel')->handle(Request::create('/static'));
    $content = $result->getContent();
    $this->assertStringContainsStringIgnoringCase('<p>This block shouts: DRUPAL</p>', $content);
  }

  /**
   * Test block with one argument.
   */
  public function testOneArgument() {
    $this->placeGraphQLBlock('block_one_argument', [
      'first' => 'drupal',
    ]);
    $result = $this->container->get('http_kernel')->handle(Request::create('/static'));
    $content = $result->getContent();
    $this->assertStringContainsStringIgnoringCase('<p>This block shouts: DRUPAL</p>', $content);
  }

  /**
   * Test block with multiple arguments.
   */
  public function testMultipleArguments() {
    $this->placeGraphQLBlock('block_multiple_arguments', [
      'first' => 'drupal',
      'second' => 'graphql',
    ]);
    $result = $this->container->get('http_kernel')->handle(Request::create('/static'));
    $content = $result->getContent();
    $this->assertStringContainsStringIgnoringCase('<p>This block shouts: DRUPAL and GRAPHQL</p>', $content);
  }

  /**
   * Test static block.
   */
  public function testStatic() {
    $this->placeGraphQLBlock('block_static');
    $result = $this->container->get('http_kernel')->handle(Request::create('/static'));
    $content = $result->getContent();
    $this->assertStringContainsStringIgnoringCase('<p>This is a static block.</p>', $content);
  }

  /**
   * Test missing block template.
   *
   * @todo Fix this test.
   */
  //  public function testMissing() {
  //    $this->placeGraphQLBlock('block_missing');
  //    $result = $this->container->get('http_kernel')->handle(Request::create('/static'));
  //    $content = $result->getContent();
  //    $this->assertStringContainsStringIgnoringCase('<div class="graphql-twig-errors">Missing template for <em class="placeholder">block_missing</em>.</div>', $content);
  //  }

}
