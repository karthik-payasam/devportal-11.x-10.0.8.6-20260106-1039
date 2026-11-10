
<?php

use Drupal\block\Entity\Block;
use Drupal\block_content\Entity\BlockContent;

/**
 * Creates the English-only Why Choose CSB Bank API block and placement.
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function csb_why_choose_api_create_block(): void {
  $block_id = 'why_choose_csb_api';
  $block_label = 'Why Choose CSB Bank API';

  // Find the existing reusable block.
  $existing = \Drupal::entityTypeManager()
    ->getStorage('block_content')
    ->loadByProperties([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
    ]);

  // Create one English block only.
  if (!empty($existing)) {
    $block_content = reset($existing);
  }
  else {
    $block_content = BlockContent::create([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => csb_why_choose_api_content(),
        'format' => 'full_html',
      ],
    ]);

    $block_content->save();
  }

  // Reusable block plugin ID.
  $plugin_id = 'block_content:' . $block_content->uuid();

  $settings = [
    'id' => $plugin_id,
    'label' => $block_label,
    'provider' => 'block_content',
    'label_display' => FALSE,
    'view_mode' => 'full',
  ];

  // Display on the homepage only.
  $visibility = [
    'request_path' => [
      'id' => 'request_path',
      'pages' => '<front>',
      'negate' => FALSE,
      'context_mapping' => [],
    ],
  ];

  // Create or update the block placement.
  $block = Block::load($block_id);

  if (!$block) {
    $block = Block::create([
      'id' => $block_id,
      'plugin' => $plugin_id,
      'theme' => 'csb_theme',
      'region' => 'content',
      'weight' => -4,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => $visibility,
    ]);
  }
  else {
    $block->set('plugin', $plugin_id);
    $block->set('settings', $settings);
    $block->set('theme', 'csb_theme');
    $block->set('region', 'content');
    $block->set('weight', -4);
    $block->set('status', TRUE);
    $block->set('visibility', $visibility);
  }

  $block->save();
}

/**
 * Returns the complete English HTML for the block.
 */
function csb_why_choose_api_content(): string {
  $file_url_generator = \Drupal::service('file_url_generator');

  $security_image = $file_url_generator
    ->generateString('public://inline-images/security-why-image.svg');

  $performance_image = $file_url_generator
    ->generateString('public://inline-images/performance-image.svg');

  $why_image = $file_url_generator
    ->generateString('public://inline-images/why.png');

  $friendly_image = $file_url_generator
    ->generateString('public://inline-images/friendly-image.svg');

  $scalable_image = $file_url_generator
    ->generateString('public://inline-images/Scalable-image.svg');

  return <<<HTML
<section class="csb-why-api-section">

  <div class="csb-why-api-header">
    <h2 class="csb-why-api-title">
      Why Choose CSB Bank API?
    </h2>

    <p class="csb-why-api-subtitle">
      Secure, scalable and compliant APIs to build modern digital banking solutions.
    </p>
  </div>

  <div class="csb-why-api-grid">

    <!-- Left features -->
    <div class="csb-why-api-column csb-left-features">

      <div class="csb-feature-box csb-feature-right">
        <div class="csb-feature-icon">
          <img
            src="{$security_image}"
            width="40"
            height="40"
            alt="Security">
        </div>

        <h4 class="csb-feature-title">Bank-grade security</h4>

        <p class="csb-feature-desc">
          OAuth, encryption and enterprise-level access control.
        </p>
      </div>

      <div class="csb-feature-box csb-feature-right1">
        <div class="csb-feature-icon">
          <img
            src="{$performance_image}"
            width="40"
            height="40"
            alt="Performance">
        </div>

        <h4 class="csb-feature-title">High-performance APIs</h4>

        <p class="csb-feature-desc">
          Optimized for real-time transactions and scale.
        </p>
      </div>

    </div>

    <!-- Center image -->
    <div class="csb-why-api-center">
      <div class="csb-center-glow">&nbsp;</div>

      <img
        class="csb-center-image"
        src="{$why_image}"
        alt="Digital Banking APIs"
        >
    </div>

    <!-- Right features -->
    <div class="csb-why-api-column csb-right-features">

      <div class="csb-feature-box">
        <div class="csb-feature-icon">
          <img
            src="{$friendly_image}"
            width="40"
            height="40"
            alt="Developer friendly">
        </div>

        <h4 class="csb-feature-title">Developer-friendly APIs</h4>

        <p class="csb-feature-desc">
          Clean REST APIs with clear documentation for faster integration.
        </p>
      </div>

      <div class="csb-feature-box csb-feature-left">
        <div class="csb-feature-icon">
          <img
            src="{$scalable_image}"
            width="40"
            height="40"
            alt="Scalable platform">
        </div>

        <h4 class="csb-feature-title">
          Scalable &amp; reliable platform
        </h4>

        <p class="csb-feature-desc">
          Built to handle growing volumes with high availability and uptime.
        </p>
      </div>

    </div>

  </div>
</section>
HTML;
}



/**
 * Creates the API Onboarding Flow block and its placement.
 */
function csb_create_api_onboarding_flow_block(): void {
  $block_id = 'api_onboarding_flow';
  $block_label = 'API Onboarding Flow';

  // Find an existing English reusable block.
  $existing_blocks = \Drupal::entityTypeManager()
    ->getStorage('block_content')
    ->loadByProperties([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
    ]);

  if (!empty($existing_blocks)) {
    $block_content = reset($existing_blocks);
  }
  else {
    // Create the reusable block in English only.
    $block_content = BlockContent::create([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => csb_get_api_onboarding_flow_content(),
        'format' => 'full_html',
      ],
    ]);

    $block_content->save();
  }

  $plugin_id = 'block_content:' . $block_content->uuid();

  $settings = [
    'id' => $plugin_id,
    'label' => $block_label,
    'label_display' => FALSE,
    'provider' => 'block_content',
    'view_mode' => 'full',
  ];

  // Display this block only on the front page.
  $visibility = [
    'request_path' => [
      'id' => 'request_path',
      'pages' => '<front>',
      'negate' => FALSE,
      'context_mapping' => [],
    ],
  ];

  // Load an existing placement or create a new one.
  $block = Block::load($block_id);

  if (!$block) {
    $block = Block::create([
      'id' => $block_id,
      'plugin' => $plugin_id,
      'theme' => 'csb_theme',
      'region' => 'content',
      'weight' => -3,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => $visibility,
    ]);
  }
  else {
    $block->set('plugin', $plugin_id);
    $block->set('settings', $settings);
    $block->set('theme', 'csb_theme');
    $block->set('region', 'content');
    $block->set('weight', -3);
    $block->set('status', TRUE);
    $block->set('visibility', $visibility);
  }

  $block->save();
}

/**
 * Returns the API Onboarding Flow HTML.
 */
function csb_get_api_onboarding_flow_content(): string {
  $file_url_generator = \Drupal::service('file_url_generator');

$journey_image_1 = $file_url_generator
  ->generateString('public://inline-images/journey-1.png');

$journey_image_2 = $file_url_generator
  ->generateString('public://inline-images/journey-2.png');

$test_api_image = $file_url_generator
  ->generateString('public://inline-images/test-the-api.jpg');

$journey_image_3 = $file_url_generator
  ->generateString('public://inline-images/journey-3.png');

  return <<<HTML
<section class="journey-flow-wrap">

  <h2 class="journey-flow-heading">
    API Onboarding Journey
  </h2>

  <p class="journey-flow-subtext">
    A simple, structured path from access to production
  </p>

  <div class="journey-flow-track">

    <p class="journey-flow-rail">&nbsp;</p>

    <!-- Step 1: Get API Access -->
    <div class="journey-node">
      <div class="journey-node-orb">
        <img
          src="{$journey_image_1}"
          alt="Get API Access"
          width="512"
          height="512">
      </div>

      <h3 class="journey-node-label">
        Get API Access
      </h3>

      <div class="journey-node-panel">
        Register on the developer portal and generate API credentials to securely access banking services.
      </div>
    </div>

    <!-- Step 2: Enroll Your App -->
    <div class="journey-node">
      <div class="journey-node-orb">
        <img
          src="{$journey_image_2}"
          alt="Enroll Your App"
          width="512"
          height="512">
      </div>

      <h3 class="journey-node-label">
        Enroll Your App
      </h3>

      <div class="journey-node-panel">
        Integrate APIs with CSB, validate responses, and build your application with confidence.
      </div>
    </div>

    <!-- Step 3: Test the APIs -->
    <div class="journey-node">
      <div class="journey-node-orb">
        <img
          src="{$test_api_image}"
          alt="Test the APIs"
          width="2500"
          height="2500">
      </div>

      <h3 class="journey-node-label">
        Test the APIs
      </h3>

      <div class="journey-node-panel">
        Validate API requests and responses in our environment before going live.
      </div>
    </div>

    <!-- Step 4: Launch to Production -->
    <div class="journey-node">
      <div class="journey-node-orb">
        <img
          src="{$journey_image_3}"
          alt="Launch to Production"
          width="512"
          height="512">
      </div>

      <h3 class="journey-node-label">
        Launch to Production
      </h3>

      <div class="journey-node-panel">
        Complete your onboarding and move to production to serve real customers securely.
      </div>
    </div>

  </div>
</section>
HTML;
}




/**
 * Creates the API New Offering Products block.
 */
function csb_create_api_new_offering_products_block(): void {
  $block_id = 'api_new_offering_products';
  $block_label = 'API-new-offering products';

  // Find the existing English block.
  $existing_blocks = \Drupal::entityTypeManager()
    ->getStorage('block_content')
    ->loadByProperties([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
    ]);

  if (!empty($existing_blocks)) {
    $block_content = reset($existing_blocks);
  }
  else {
    $block_content = BlockContent::create([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => csb_get_api_new_offering_products_content(),
        'format' => 'full_html',
      ],
    ]);

    $block_content->save();
  }

  $plugin_id = 'block_content:' . $block_content->uuid();

  $settings = [
    'id' => $plugin_id,
    'label' => $block_label,
    'label_display' => FALSE,
    'provider' => 'block_content',
    'view_mode' => 'full',
  ];

  // Show this block only on the front page.
  $visibility = [
    'request_path' => [
      'id' => 'request_path',
      'pages' => '<front>',
      'negate' => FALSE,
      'context_mapping' => [],
    ],
  ];

  $block = Block::load($block_id);

  if (!$block) {
    $block = Block::create([
      'id' => $block_id,
      'plugin' => $plugin_id,
      'theme' => 'csb_theme',
      'region' => 'content',
      'weight' =>-2,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => $visibility,
    ]);
  }
  else {
    $block->set('plugin', $plugin_id);
    $block->set('settings', $settings);
    $block->set('theme', 'csb_theme');
    $block->set('region', 'content');
    $block->set('weight',-2);
    $block->set('status', TRUE);
    $block->set('visibility', $visibility);
  }

  $block->save();
}

/**
 * Returns the API New Offering Products HTML.
 */
function csb_get_api_new_offering_products_content(): string {
$file_url_generator = \Drupal::service('file_url_generator');

$payment_image = $file_url_generator
  ->generateString('public://inline-images/Payment.png');

$collateral_image = $file_url_generator
  ->generateString('public://inline-images/collerative.svg');

$kyc_image = $file_url_generator
  ->generateString('public://inline-images/kycservices.svg');

$upi_image = $file_url_generator
  ->generateString('public://inline-images/upiservices.svg');


  return <<<HTML
<div class="home-container-fluid csb-back-color">
  <div class="container">

    <div class="pagetitle color-white">
      <div class="csb-text-style">CSB&nbsp;</div>
      <div>
        delivers APIs that enable multiple banking services &amp; use cases
      </div>
    </div>

    <p class="color-white text-align-center">
      Enable end-to-end integration across payments, deposits, loans,
      and corporate banking services and more
    </p>

    <div>
      <div class="productslider">

        <!-- Payment Services -->
        <div>
          <div class="product-use-case">
            <img
              src="{$payment_image}"
              width="40"
              height="40"
              alt="Payment Services">

            <div class="product-content">
              <h5>Payment Services</h5>

              <p title="Provide enterprise-grade corporate banking solutions with secure, efficient APIs for payments, account management, and business operations.">
                Provide enterprise-grade Payment solutions with secure,
                efficient APIs that enable domestic fund transfers through
                RTGS, NEFT, and IMPS channels for both retail and corporate
                banking transactions.
              </p>

              <p>
                <a href="/devcustportal/portal/product/paymentdata">
                  Learn More&nbsp;
                </a>
              </p>
            </div>
          </div>
        </div>

        <!-- Collateral Services -->
        <div>
          <div class="product-use-case">
            <img
              src="{$collateral_image}"
              width="40"
              height="40"
              alt="Collateral Services">

            <div class="product-content">
              <h5>Collateral Services</h5>

              <p title="Offer loan solutions through secure, scalable APIs that enable fast processing, automated eligibility checks, seamless disbursements, and efficient lifecycle management across multiple loan products.">
                Offer loan collateral solutions through secure, scalable
                APIs that enable fast processing, automated eligibility
                checks, seamless disbursements, and efficient lifecycle
                management across multiple products.
              </p>

              <p>
                <a href="/devcustportal/portal/product/collerativeservicesdata">
                  Learn More&nbsp;
                </a>
              </p>
            </div>
          </div>
        </div>

        <!-- KYC Services -->
        <div>
          <div class="product-use-case">
            <img
              src="{$kyc_image}"
              width="40"
              height="40"
              alt="KYC Services">

            <div class="product-content">
              <h5>KYC Services</h5>

              <p title="Enable seamless customer onboarding with automated, secure, and compliant KYC verification APIs designed for precision and speed.">
                Enable seamless customer onboarding with automated, secure,
                and compliant KYC verification APIs designed for precision
                and speed.
              </p>

              <p>
                <a href="/devcustportal/portal/product/kycservicesdata">
                  Learn More&nbsp;
                </a>
              </p>
            </div>
          </div>
        </div>

        <!-- UPI Services -->
        <div>
          <div class="product-use-case">
            <img
              src="{$upi_image}"
              width="40"
              height="40"
              alt="UPI Services">

            <div class="product-content">
              <h5>UPI Services</h5>

              <p title="Deliver modern mobile banking capabilities through robust APIs that power secure transactions, account access, and real-time customer engagement.">
                Deliver modern UPI capabilities through robust APIs that
                power secure transactions, customer validation, and
                real-time payments.
              </p>

              <p>
                <a href="/devcustportal/portal/product/upitransactiondata">
                  Learn More&nbsp;
                </a>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
HTML;
}








/**
 * Creates the API Hero Section block.
 */
function csb_create_api_hero_section_block(): void {
  $block_id = 'api_hero_section';
  $block_label = 'API Hero Section';

  // Find the existing English reusable block.
  $existing_blocks = \Drupal::entityTypeManager()
    ->getStorage('block_content')
    ->loadByProperties([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
    ]);

  if (!empty($existing_blocks)) {
    $block_content = reset($existing_blocks);
  }
  else {
    // Create the block content in English only.
    $block_content = BlockContent::create([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => csb_get_api_hero_section_content(),
        'format' => 'full_html',
      ],
    ]);

    $block_content->save();
  }

  $plugin_id = 'block_content:' . $block_content->uuid();

  $settings = [
    'id' => $plugin_id,
    'label' => $block_label,
    'label_display' => FALSE,
    'provider' => 'block_content',
    'view_mode' => 'full',
  ];

  // Front page only.
  $visibility = [
    'request_path' => [
      'id' => 'request_path',
      'pages' => '<front>',
      'negate' => FALSE,
      'context_mapping' => [],
    ],
  ];

  // Anonymous users only.
  $visibility['user_role'] = [
    'id' => 'user_role',
    'roles' => [
      'anonymous' => 'anonymous',
    ],
    'negate' => FALSE,
    'context_mapping' => [],
  ];

  // Load or create the block placement.
  $block = Block::load($block_id);

  if (!$block) {
    $block = Block::create([
      'id' => $block_id,
      'plugin' => $plugin_id,
      'theme' => 'csb_theme',
      'region' => 'content',
      'weight' => -5,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => $visibility,
    ]);
  }
  else {
    $block->set('plugin', $plugin_id);
    $block->set('settings', $settings);
    $block->set('theme', 'csb_theme');
    $block->set('region', 'content');
    $block->set('weight', -5);
    $block->set('status', TRUE);
    $block->set('visibility', $visibility);
  }

  $block->save();
}

/**
 * Returns the API Hero Section HTML.
 */
function csb_get_api_hero_section_content(): string {
  return <<<HTML
<section class="api-hero">
  <div class="api-hero__overlay">
    &nbsp;
  </div>

  <div class="api-hero__container">

    <!-- LEFT CONTENT -->
    <div class="api-hero__content">
      <h1 class="api-hero__title">
        CSB Bank APIs
      </h1>

      <h2 class="api-hero__subtitle">
        Powering Secure Digital Banking Integrations
      </h2>

      <p class="api-hero__description">
        Build reliable digital banking experiences using CSB Bank’s
        enterprise-ready API ecosystem designed for performance,
        security, and compliance.
      </p>

      <div class="api-hero__actions">
        <a
          class="api-btn api-btn--primary"
          href="/devcustportal/portal/user/register">
          Get API Access
        </a>

        <a
          class="api-btn api-btn--secondary"
          href="/devcustportal/portal/contact">
          Contact Our API Team
        </a>
      </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="api-hero__panel">
      <div class="api-code-card">

        <div class="api-code-card__header">
          Sample API Request
        </div>

        <pre class="api-code-card__body"><span class="code-method">GET</span> /v1/accounts/balance?accountId=XXXX-4567
<span class="code-status">200 OK</span>
{
  "accountId": "XXXX-4567",
  "availableBalance": 125000.75,
  "currency": "INR",
  "asOf": "2026-02-15T10:45:30Z"
}</pre>

      </div>
    </div>

  </div>
</section>
HTML;
}





/**
 * Creates the Connect With Us block.
 */
function csb_create_connect_with_us_block(): void {
  $block_id = 'connect_with_us';
  $block_label = 'Connect with us and start integrating';

  // Find an existing English reusable block.
  $existing_blocks = \Drupal::entityTypeManager()
    ->getStorage('block_content')
    ->loadByProperties([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
    ]);

  if (!empty($existing_blocks)) {
    $block_content = reset($existing_blocks);
  }
  else {
    // Create the reusable block in English only.
    $block_content = \Drupal\block_content\Entity\BlockContent::create([
      'info' => $block_label,
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => csb_get_connect_with_us_content(),
        'format' => 'full_html',
      ],
    ]);

    $block_content->save();
  }

  $plugin_id = 'block_content:' . $block_content->uuid();

  $settings = [
    'id' => $plugin_id,
    'label' => $block_label,
    'label_display' => FALSE,
    'provider' => 'block_content',
    'view_mode' => 'full',
  ];

  // Front page only.
  $visibility = [
    'request_path' => [
      'id' => 'request_path',
      'pages' => '<front>',
      'negate' => FALSE,
      'context_mapping' => [],
    ],
  ];

  // Anonymous users only.
  $visibility['user_role'] = [
    'id' => 'user_role',
    'roles' => [
      'anonymous' => 'anonymous',
    ],
    'negate' => FALSE,
    'context_mapping' => [],
  ];

  // Load or create the block placement.
  $block = \Drupal\block\Entity\Block::load($block_id);

  if (!$block) {
    $block = \Drupal\block\Entity\Block::create([
      'id' => $block_id,
      'plugin' => $plugin_id,
      'theme' => 'csb_theme',
      'region' => 'content',
      'weight' => -1,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => $visibility,
    ]);
  }
  else {
    $block->set('plugin', $plugin_id);
    $block->set('settings', $settings);
    $block->set('theme', 'csb_theme');
    $block->set('region', 'content');
    $block->set('weight', -1);
    $block->set('status', TRUE);
    $block->set('visibility', $visibility);
  }

  $block->save();
}

/**
 * Returns the Connect With Us HTML.
 */
function csb_get_connect_with_us_content(): string {
$file_url_generator = \Drupal::service('file_url_generator');

$connect_with_us = $file_url_generator
  ->generateString('public://inline-images/connect-with-us-illustration.png');

  return <<<HTML
<section class="integration-section">
  <div class="integration-container">
    <div class="integration-canvas">

      <!-- LEFT DOCK -->
      <aside class="integration-dock">
        <div class="dock-content">
          <p>&nbsp;</p>

          <h3 class="dock-title">
            Developer<br>
            Integration<br>
            Gateway
          </h3>

          <div class="dock-divider">&nbsp;</div>

          <ul class="dock-features">
            <li>Secure onboarding</li>
            <li>Sandbox &amp; Live access</li>
            <li>Banking-grade APIs</li>
          </ul>
        </div>
      </aside>

      <!-- MAIN WORKSPACE -->
      <div class="integration-workspace">

        <!-- CONTENT -->
        <div class="workspace-content">
          <h2 class="workspace-title">
            Connect with us<br>
            and start integrating
          </h2>

          <p class="workspace-description">
            A unified developer environment designed to securely
            integrate banking APIs across payments, accounts, lending,
            and regulatory services.
          </p>

          <div class="workspace-actions">
            <a
              class="primary-btn"
              href="/devcustportal/portal/user/register">
              Sign Up Now
            </a>
          </div>
        </div>

        <!-- VISUAL -->
        <div class="workspace-visual">
          <div class="visual-grid">&nbsp;</div>

          <img
            class="visual-image"
            src="{$connect_with_us}"
            alt="Integration Workspace">
        </div>

      </div>
    </div>
  </div>
</section>
HTML;
}


