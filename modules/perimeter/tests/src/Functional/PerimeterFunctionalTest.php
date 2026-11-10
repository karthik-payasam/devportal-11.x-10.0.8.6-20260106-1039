<?php

namespace Drupal\Tests\perimeter\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * This class provides methods specifically for testing something.
 *
 * @group perimeter
 */
class PerimeterFunctionalTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'test_page_test',
    'perimeter',
  ];

  /**
   * A user with authenticated permissions.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $user;

  /**
   * A user with admin permissions.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->config('system.site')->set('page.front', '/test-page')->save();
  }

  /**
   * Tests banning an anonymous user.
   */
  public function testBanningAnonymous() {
    $session = $this->assertSession();
    $this->drupalGet('<front>');
    // Ensure the status code is success:
    $session->statusCodeEquals(200);
    // Ensure the correct test page is loaded as front page:
    $session->pageTextContains('Test page text.');
    // Get banned.
    $this->drupalGet('wp-admin');
    $session->statusCodeEquals(403);
    // Confirm the ban.
    $this->drupalGet('<front>');
    $session->statusCodeEquals(403);
    $session->pageTextNotContains('Test page text.');
  }

  /**
   * Tests banning a registered user.
   */
  public function testBanningRegistered() {
    $this->user = $this->drupalCreateUser([]);
    $this->drupalLogin($this->user);
    $session = $this->assertSession();
    $this->drupalGet('<front>');
    // Ensure the status code is success:
    $session->statusCodeEquals(200);
    // Ensure the correct test page is loaded as front page:
    $session->pageTextContains('Test page text.');
    // Get banned.
    $this->drupalGet('wp-admin');
    $session->statusCodeEquals(403);
    // Confirm the ban.
    $this->drupalGet('<front>');
    $session->statusCodeEquals(403);
    $session->pageTextNotContains('Test page text.');
  }

  /**
   * Tests the permission of bypassing a ban.
   */
  public function testPermissions() {
    $this->user = $this->drupalCreateUser(['bypass perimeter defence rules']);
    $this->drupalLogin($this->user);
    $session = $this->assertSession();
    $this->drupalGet('<front>');
    // Ensure the status code is success:
    $session->statusCodeEquals(200);
    // Ensure the correct test page is loaded as front page:
    $session->pageTextContains('Test page text.');
    // Try to get banned.
    $this->drupalGet('wp-admin');
    $session->statusCodeEquals(404);
    // Confirm the bypass.
    $this->drupalGet('<front>');
    $session->statusCodeEquals(200);
    $session->pageTextContains('Test page text.');
  }

  /**
   * Tests Banning a url.
   */
  public function testUrlBanning() {
    $test_url = 'not_found_test_pattern';
    $test_pattern = '/.*' . $test_url . '.*/';
    $session = $this->assertSession();
    $config = $this->container->get('config.factory')->getEditable('perimeter.settings');
    $urls = $config->get('not_found_exception_patterns');
    // Assert the test url is not already banned.
    $this->assertNotContains([$test_pattern], $urls);
    $this->drupalGet($test_url);
    $session->statusCodeEquals(404);
    $this->drupalGet('<front>');
    $session->statusCodeEquals(200);
    $session->pageTextContains('Test page text.');

    // Ban the test pattern.
    $urls[] = $test_pattern;
    $config->set('not_found_exception_patterns', $urls)->save();

    // Confirm the test pattern is banned.
    // Note: Must invalidate the page cache.
    $this->container->get('cache.page')->invalidateAll();
    $this->drupalGet($test_url);
    $session->statusCodeEquals(403);
    $this->drupalGet('<front>');
    $session->statusCodeEquals(403);
    $session->pageTextNotContains('Test page text.');
  }

  /**
   * Tests unbanning a banned url.
   */
  public function testUrlUnbanning() {
    $session = $this->assertSession();
    $config = $this->container->get('config.factory')->getEditable('perimeter.settings');
    // Unban all urls.
    $config->set('not_found_exception_patterns', [])->save();
    // Try to get banned.
    $this->drupalGet('wp-admin');
    $session->statusCodeEquals(404);
    // Confirm the bypass.
    $this->drupalGet('<front>');
    $session->statusCodeEquals(200);
    $session->pageTextContains('Test page text.');
  }

  /**
   * Tests the flood threshold.
   */
  public function testFloodThreshold() {
    $session = $this->assertSession();
    $config = $this->container->get('config.factory')->getEditable('perimeter.settings');
    // Ban on the third attempt.
    $config->set('flood_threshold', 3)
      ->set('flood_window', 3600)
      ->save();
    // Normal page request, not counted.
    $this->drupalGet('<front>');
    $session->statusCodeEquals(200);
    $session->pageTextContains('Test page text.');

    // Note, that we need to visit different urls here, because caching
    // takes affect when visiting the same banned url over and over again.
    // First offense. Allowed.
    $this->drupalGet('wp-admin');
    $session->statusCodeEquals(404);

    // Second offense. Allowed.
    $this->drupalGet('wp-admin/a');
    $session->statusCodeEquals(404);

    // Third offense allowed. We are banning on this attempt.
    $this->drupalGet('wp-admin/b');
    $session->statusCodeEquals(404);

    // Fourth offense. Banned.
    $this->drupalGet('wp-admin/c');
    $session->statusCodeEquals(403);

    $this->drupalGet('<front>');
    $session->statusCodeEquals(403);
    $session->pageTextNotContains('Test page text.');
  }

  /**
   * Test the flood window.
   */
  public function testFloodWindow() {
    $session = $this->assertSession();
    $config = $this->container->get('config.factory')->getEditable('perimeter.settings');
    // Ban on the second attempt in 2 seconds.
    $config->set('flood_threshold', 2)
      ->set('flood_window', 2)
      ->save();
    // Normal page request, not counted.
    $this->drupalGet('<front>');
    $session->statusCodeEquals(200);
    $session->pageTextContains('Test page text.');

    // First offense. Allowed.
    $this->drupalGet('wp-admin');
    $session->statusCodeEquals(404);

    // Wait 3 seconds.
    sleep(3);

    // Second offense, but counted as the first attempt, because it is outside
    // the time window:
    $this->drupalGet('wp-admin/a');
    $session->statusCodeEquals(404);

    // Third offense. (second attempt after the time window), allowed. We are
    // banning on this attempt:
    $this->drupalGet('wp-admin/b');
    $session->statusCodeEquals(404);

    // Fourth offense. Banned.
    $this->drupalGet('wp-admin/c');
    $session->statusCodeEquals(403);
    $this->drupalGet('<front>');
    $session->statusCodeEquals(403);
    $session->pageTextNotContains('Test page text.');
  }

}
