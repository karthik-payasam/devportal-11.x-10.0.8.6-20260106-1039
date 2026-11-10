<?php

declare(strict_types=1);

namespace Drupal\Tests\perimeter\Functional\Update;

use Drupal\FunctionalTests\Update\UpdatePathTestBase;

/**
 * Tests the update path for the Perimeter module.
 *
 * @group legacy
 */
class PerimeterUpdateTest extends UpdatePathTestBase {

  /**
   * {@inheritdoc}
   */
  protected function setUp():void {
    // @todo Remove this, once the file path is fixed in
    // https://www.drupal.org/project/perimeter/issues/3470720.
    $this->markTestIncomplete();
    parent::setUp();
    // Additional setup code goes here.
  }

  /**
   * {@inheritdoc}
   */
  protected function setDatabaseDumpFiles() {
    // @todo Find a way to properly set the path to the database dump file for
    // the gilab ci in https://www.drupal.org/project/perimeter/issues/3470720.
    $this->databaseDumpFiles = [
      __DIR__ . '/../../../../../../../core/modules/system/tests/fixtures/update/drupal-10.3.0.bare.standard.php.gz',
    ];
  }

  /**
   * Tests whether the site can be safely updated, while perimeter is installed.
   *
   * This test is necessary, as changes in the "PerimeterSubscriber"
   * lead to a fatal error, when updating the site with the Perimeter module
   * enabled.
   *
   * @see https://www.drupal.org/project/perimeter/issues/3470557
   */
  public function testPerimeterUpdate() {
    /** @var \Drupal\Core\Extension\ModuleInstaller $installer */
    $installer = \Drupal::service('module_installer');
    $installer->install(['ban', 'perimeter']);
    // Run the update:
    $this->runUpdates();

    // See if the site is still accessible:
    $this->drupalGet('<front>');
    $this->assertSession()->statusCodeEquals(200);
  }

}
