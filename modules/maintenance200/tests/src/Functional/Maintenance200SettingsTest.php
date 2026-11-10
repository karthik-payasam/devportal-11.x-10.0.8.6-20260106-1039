<?php

namespace Drupal\Tests\maintenance200\Functional;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Test maintenance 200 settings.
 *
 * @group maintenance200
 */
class Maintenance200SettingsTest extends BrowserTestBase {

  use StringTranslationTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = [
    'block',
    'maintenance200',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected $sut;

  /**
   * Admin user.
   *
   * @var string
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->sut = $this
      ->drupalPlaceBlock('local_tasks_block', [
        'id' => 'tabs_block',
      ]);

    $this->adminUser = $this->drupalCreateUser(['administer site configuration', 'access site in maintenance mode']);
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Basic check for settings form.
   */
  public function testSettingsForm() {
    $this->drupalGet(Url::fromRoute('maintenance200_settings'));
    $this->assertSession()->responseContains('Change the status code during maintenance mode');
    $this->assertSession()->fieldValueEquals('maintenance200_enabled', TRUE);
  }

  /**
   * Check placement of settings form.
   */
  public function testSettingsFormLinkOnMaintenanceUrl() {
    $maintenance200FormUrl = Url::fromRoute('maintenance200_settings')
      ->toString();
    $this->drupalGet(Url::fromRoute('system.site_maintenance_mode'));
    $this->assertSession()->linkByHrefExists($maintenance200FormUrl);
  }

  /**
   * Test toggling setting.
   */
  public function testTurnOffSettings() {
    // Turn on maintenance mode.
    $this->drupalGet(Url::fromRoute('maintenance200_settings'));
    $edit = [
      'maintenance200_enabled' => 0,
    ];
    $this->drupalGet('admin/config/development/maintenance200');
    $this->submitForm($edit, $this->t('Save configuration'));

    $this->assertSession()->responseContains('The configuration options have been saved.');

    $this->drupalGet(Url::fromRoute('maintenance200_settings'));
    $this->assertSession()->fieldValueEquals('maintenance200_enabled', FALSE);
  }

}
