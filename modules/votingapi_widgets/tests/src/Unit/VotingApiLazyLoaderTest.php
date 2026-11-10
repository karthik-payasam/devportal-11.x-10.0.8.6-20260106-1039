<?php

declare(strict_types=1);

namespace Drupal\Tests\votingapi_widgets\Unit;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Tests\UnitTestCase;
use Drupal\votingapi_widgets\Plugin\VotingApiWidgetManager;
use Drupal\votingapi_widgets\VotingApiLazyLoader;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * @coversDefaultClass \Drupal\votingapi_widgets\VotingApiLazyLoader
 * @group votingapi_widgets
 */
class VotingApiLazyLoaderTest extends UnitTestCase {
  use ProphecyTrait;

  /**
   * Instance of VotingApiLazyLoader for testing.
   *
   * @var \Drupal\votingapi_widgets\VotingApiLazyLoader
   */
  protected $lazyLoader;

  /**
   * Mock Voting API widget manager.
   *
   * @var \PHPUnit\Framework\MockObject\MockObject|\Drupal\votingapi_widgets\Plugin\VotingApiWidgetManager
   */
  protected $votingApiWidgetManager;

  /**
   * Mock entity type manager.
   *
   * @var \PHPUnit\Framework\MockObject\MockObject|\Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->votingApiWidgetManager = $this->prophesize(VotingApiWidgetManager::class);
    $this->entityTypeManager = $this->prophesize(EntityTypeManagerInterface::class);

    // Create concrete VotingApiLazyLoader with mocked services.
    $this->lazyLoader = new VotingApiLazyLoader(
      $this->votingApiWidgetManager->reveal(),
      $this->entityTypeManager->reveal()
    );
  }

  /**
   * @covers ::trustedCallbacks
   */
  public function testTrustedCallbacks(): void {
    $this->assertEquals(['buildForm'], $this->lazyLoader->trustedCallbacks());
  }

}
