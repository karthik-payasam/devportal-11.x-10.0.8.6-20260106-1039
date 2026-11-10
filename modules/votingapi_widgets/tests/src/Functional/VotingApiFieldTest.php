<?php

declare(strict_types=1);

namespace Drupal\Tests\votingapi_widgets\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the creation of Voting API Widget fields.
 *
 * @group votingapi_widgets
 */
class VotingApiFieldTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'field',
    'field_ui',
    'node',
    'votingapi',
    'votingapi_widgets',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with permission to create articles.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $webUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Create node type to hold a voting_api_field.
    $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);

    $this->webUser = $this->drupalCreateUser([
      'create page content',
      'edit own page content',
      'administer node fields',
      'administer content types',
    ]);
    $this->drupalLogin($this->webUser);
  }

  /**
   * Tests adding a voting_api_field to a content type.
   */
  public function testCreateFieldViaUi(): void {
    /** @var \Drupal\Tests\WebAssert $assert */
    $assert = $this->assertSession();

    // Use the UI to add the field.
    $this->drupalGet('admin/structure/types/manage/page/fields/add-field');

    // Select field group 'Voting api field'.
    $assert->elementExists('css', "[name='new_storage_type'][value='voting_api_field']");
    $edit = ['new_storage_type' => 'voting_api_field'];
    $this->submitForm($edit, 'Continue');

    // Fill out the label and submit the form which adds the field.
    $label = 'Star rating';
    $edit = [
      'label' => $label,
      'field_name' => $this->toMachineName($label),
    ];
    $this->submitForm($edit, 'Continue');

    // Assert all form elements are present, and have their default values.
    $assert->elementExists('css', "[name='field_storage[subform][settings][vote_type]']");
    $assert->elementExists('css', "[name='field_storage[subform][settings][vote_plugin]']");
    $assert->elementExists('css', "[name='field_storage[subform][cardinality]']");
    $assert->elementExists('css', "[name='settings[anonymous_window]']");
    $assert->elementExists('css', "[name='settings[user_window]']");
    $this->getSession()->getPage()->pressButton('Save settings');

    $assert->pageTextContains("Saved $label configuration.");
    $assert->pageTextContains($edit['field_name']);
    $assert->pageTextContains('Voting api field');
  }

  /**
   * Helper function to convert a field label into a machine name.
   */
  protected function toMachineName(string $label): string {
    $machine_name = strtolower($label);
    $machine_name = preg_replace('/[^a-z0-9_]+/', '_', $machine_name);
    return preg_replace('/_+/', '_', $machine_name);
  }

}
