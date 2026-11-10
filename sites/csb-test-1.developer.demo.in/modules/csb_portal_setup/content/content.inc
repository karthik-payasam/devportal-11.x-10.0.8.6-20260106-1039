<?php
use Drupal\node\Entity\Node;
use Drupal\path_alias\Entity\PathAlias;
/**
 * Creates the How It Works page.
 */
function csb_create_how_it_works_page(): void {
  $title = 'How-it-works';
  $alias = '/how-it-works';

  // Find an existing English Basic page.
  $existing_nodes = \Drupal::entityTypeManager()
    ->getStorage('node')
    ->loadByProperties([
      'type' => 'page',
      'title' => $title,
      'langcode' => 'en',
    ]);

  if (!empty($existing_nodes)) {
    // Reuse the existing page.
    $node = reset($existing_nodes);
  }
  else {
    // Create a new Basic page.
    $node = \Drupal\node\Entity\Node::create([
      'type' => 'page',
      'title' => $title,
      'status' => 1,
      'langcode' => 'en',
      'body' => [
        'value' => csb_get_how_it_works_content(),
        'format' => 'full_html',
      ],
    ]);

    $node->save();
  }

  // Create or update the URL alias.
  $alias_storage = \Drupal::entityTypeManager()
    ->getStorage('path_alias');

  $existing_aliases = $alias_storage->loadByProperties([
    'path' => '/node/' . $node->id(),
    'langcode' => 'en',
  ]);

  if (!empty($existing_aliases)) {
    $path_alias = reset($existing_aliases);
    $path_alias->set('alias', $alias);
  }
  else {
    $path_alias = $alias_storage->create([
      'path' => '/node/' . $node->id(),
      'alias' => $alias,
      'langcode' => 'en',
    ]);
  }

  $path_alias->save();
}

/**
 * Returns the How It Works page HTML.
 */
function csb_get_how_it_works_content(): string {
$file_url_generator = \Drupal::service('file_url_generator');

$step_1_image = $file_url_generator
  ->generateString('public://inline-images/Step - 1 Registration.png');

$step_2_image = $file_url_generator
  ->generateString('public://inline-images/Step 2 - App creation.png');

$step_3_image = $file_url_generator
  ->generateString('public://inline-images/Step 3 - Subscription.png');

$step_4_image = $file_url_generator
  ->generateString('public://inline-images/Step 4 - Testing APIs.png');

  return <<<HTML
<div class="How-it-work-page">
    <div class="container">
        <div class="pageheading">
            <span>Getting Started with CSB API Hub</span>
        </div>
        <p>
            Getting started is simple. Explore our APIs, review the detailed documentation, and instantly test APIs. Use these resources to build your applications with ease. All you need to do is register your apps with us.
        </p>
        <p>&nbsp;</p>
        <p>
            <strong>Follow below steps to continue...</strong>
        </p>
        <div class="row margin-top-50">
            <div class="col-sm-4 col-md-4">
                <div class="flexslider" id="how-it-slider">
                    <ul class="slides">
                        <li>
                            <img src="{$step_1_image}" alt="step-1">
                        </li>
                        <li>
                            <img src="{$step_2_image}" alt="step-2">
                        </li>
                        <li>
                            <img src="{$step_3_image}" alt="step-3">
                        </li>
                        <li>
                            <img src="{$step_4_image}" alt="step-4">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 offset-md-1 how-it-works-content">
                <div class="field field--name-body field--type-text-with-summary field--label-hidden field--item">
                    <div class="how-it-work-steps">
                        <h3>Step 1: Sign Up with CSB Bank Developer Portal</h3>
                        <p>
                            Register on the CSB Bank Developer Portal in just a few easy steps. Once your registration is approved, you can log in and start using our APIs<br>
                            <br>
                            <a href="/devcustportal/portal/user/register"><strong>Start Your Registration</strong></a><br>
                            &nbsp;
                        </p>
                    </div>
                    <div class="how-it-work-steps">
                        <h3>Step 2: Enroll Your Application</h3>
                        <p>
                            After logging in, you can register your application to access our Products and APIs. You’ll receive a 'Client ID' and 'Secret Key' that allow you to securely connect and use the APIs. Ensure to securely store these credentials for integration purposes.
                        </p>
                    </div>
                    <div class="how-it-work-steps">
                        <h3>Step 3: Explore &amp; Subscribe APIs</h3>
                        <p>
                            Explore our available APIs and identify those that align with your business or application needs. Subscribe to the selected APIs and proceed to integrate CSB Bank’s services into your solution.
                        </p>
                    </div>
                    <div class="how-it-work-steps">
                        <h3>Step 4: Test APIs</h3>
                        <p>
                            Test API requests and responses to validate functionality and ensure smooth integration as you build your application.
                        </p>
                    </div>
                    <p>
                        <strong>Note: In both UAT and Production environments, API requests and responses are encrypted for security. For a direct comparison and code samples on implementing encryption, please refer to our API Documentation. You may also explore all our security features by </strong><a href="/devcustportal/portal/security-features-data"><strong>clicking here</strong></a><strong>.</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;
}



/**
 * Creates the Why Partner With Us page.
 */
function csb_create_why_partner_with_us_page(): void {
  $title = 'why-partner-with-us';
  $alias = '/why-partner-with-us';

  // Find an existing English Basic page.
  $existing_nodes = \Drupal::entityTypeManager()
    ->getStorage('node')
    ->loadByProperties([
      'type' => 'page',
      'title' => $title,
      'langcode' => 'en',
    ]);

  if (!empty($existing_nodes)) {
    // Reuse the existing page.
    $node = reset($existing_nodes);
  }
  else {
    // Create a new Basic page.
    $node = \Drupal\node\Entity\Node::create([
      'type' => 'page',
      'title' => $title,
      'status' => 1,
      'langcode' => 'en',
      'body' => [
        'value' => csb_get_why_partner_with_us_content(),
        'format' => 'full_html',
      ],
    ]);

    $node->save();
  }

  // Create or update the URL alias.
  $alias_storage = \Drupal::entityTypeManager()
    ->getStorage('path_alias');

  $existing_aliases = $alias_storage->loadByProperties([
    'path' => '/node/' . $node->id(),
    'langcode' => 'en',
  ]);

  if (!empty($existing_aliases)) {
    $path_alias = reset($existing_aliases);
    $path_alias->set('alias', $alias);
  }
  else {
    $path_alias = $alias_storage->create([
      'path' => '/node/' . $node->id(),
      'alias' => $alias,
      'langcode' => 'en',
    ]);
  }

  $path_alias->save();
}

/**
 * Returns the Why Partner With Us page HTML.
 */
function csb_get_why_partner_with_us_content(): string {
$file_url_generator = \Drupal::service('file_url_generator');

$bill_payments_image = $file_url_generator
  ->generateString('public://inline-images/Bill-payments-v1.png');

$location_image = $file_url_generator
  ->generateString('public://inline-images/Location2.png');

$client_image = $file_url_generator
  ->generateString('public://inline-images/client.png');

$interface_image = $file_url_generator
  ->generateString('public://inline-images/Interface.png');

  return <<<HTML
<div class="csb-partner-wrapper">

    <!-- HERO SECTION -->
    <section class="csb-partner-hero">
        <h1 class="csb-partner-hero-title">
            Why Partner With CSB Bank
        </h1>
        <p class="csb-partner-hero-subtitle">
            Build, innovate, and scale faster with CSB Bank’s secure and developer-first API ecosystem.
        </p>
    </section>

    <!-- PARTNERSHIP BENEFITS -->
    <section class="csb-partner-stats">
        <div class="csb-partner-stats-grid">

            <div class="csb-partner-stat-card">
                <h3 class="csb-partner-stat-title">
                    Large Customer Base
                </h3>
                <p class="csb-partner-stat-desc">
                    Expand your digital reach across India through secure CSB Bank integrations.
                </p>
            </div>

            <div class="csb-partner-stat-card">
                <h3 class="csb-partner-stat-title">
                    Extensive API Portfolio
                </h3>
                <p class="csb-partner-stat-desc">
                    Payments, deposits, lending, corporate banking &amp; more — all under one platform.
                </p>
            </div>

            <div class="csb-partner-stat-card">
                <h3 class="csb-partner-stat-title">
                    Enterprise-Grade Security
                </h3>
                <p class="csb-partner-stat-desc">
                    Built with modern security standards to ensure trust, compliance and safety.
                </p>
            </div>

            <div class="csb-partner-stat-card">
                <h3 class="csb-partner-stat-title">
                    Accelerated integration experience
                </h3>
                <p class="csb-partner-stat-desc">
                    Simplified APIs and testing environments designed for faster development cycles.
                </p>
            </div>

        </div>
    </section>

    <!-- USE CASE SECTION -->
    <section class="csb-partner-usecases">

        <div class="csb-partner-usecase-header">
            <h2 class="csb-partner-usecase-title">
                Build the Right Banking Experience
            </h2>
            <p class="csb-partner-usecase-subtitle">
                Enable real-world banking use cases with CSB Bank’s secure and scalable APIs.
            </p>
        </div>

        <div class="csb-partner-usecase-grid">

            <!-- BILL PAYMENTS -->
            <div class="csb-partner-usecase-card">
                <div class="csb-partner-usecase-icon">
                    <img
                        src="{$bill_payments_image}"
                        alt="Bill Payments"
                        >
                </div>
                <h4 class="csb-partner-usecase-name">
                    Bill Payments
                </h4>
                <p class="csb-partner-usecase-desc">
                    Centralized and secure platform for managing multiple bill payments.
                </p>
            </div>

            <!-- BRANCH LOCATOR -->
            <div class="csb-partner-usecase-card">
                <div class="csb-partner-usecase-icon">
                    <img
                        src="{$location_image}"
                        alt="Branch Locator"
                        >
                </div>
                <h4 class="csb-partner-usecase-name">
                    Branch Locator
                </h4>
                <p class="csb-partner-usecase-desc">
                    Quickly locate nearby CSB Bank branches with smart discovery.
                </p>
            </div>

            <!-- EXPENSE SHARING -->
            <div class="csb-partner-usecase-card">
                <div class="csb-partner-usecase-icon">
                    <img
                        src="{$client_image}"
                        alt="Expense Sharing"
                       >
                </div>
                <h4 class="csb-partner-usecase-name">
                    Expense Sharing
                </h4>
                <p class="csb-partner-usecase-desc">
                    Seamlessly split and manage expenses with family and friends.
                </p>
            </div>

            <!-- MERCHANT PAYMENTS -->
            <div class="csb-partner-usecase-card">
                <div class="csb-partner-usecase-icon">
                    <img
                        src="{$interface_image}"
                        alt="Merchant Payments"
                      >
                </div>
                <h4 class="csb-partner-usecase-name">
                    Merchant Payments
                </h4>
                <p class="csb-partner-usecase-desc">
                    Enable fast, secure, one-click payments to merchants.
                </p>
            </div>

        </div>
    </section>

</div>
HTML;
}




/**
 * Creates the Become Partner page.
 */
function csb_create_become_partner_page(): void {
  $title = 'become-partner';
  $alias = '/become-partner';

  // Find an existing English Basic page.
  $existing_nodes = \Drupal::entityTypeManager()
    ->getStorage('node')
    ->loadByProperties([
      'type' => 'page',
      'title' => $title,
      'langcode' => 'en',
    ]);

  if (!empty($existing_nodes)) {
    // Reuse the existing page.
    $node = reset($existing_nodes);
  }
  else {
    // Create a new Basic page.
    $node = \Drupal\node\Entity\Node::create([
      'type' => 'page',
      'title' => $title,
      'status' => 1,
      'langcode' => 'en',
      'body' => [
        'value' => csb_get_become_partner_content(),
        'format' => 'full_html',
      ],
    ]);

    $node->save();
  }

  // Create or update the URL alias.
  $alias_storage = \Drupal::entityTypeManager()
    ->getStorage('path_alias');

  $existing_aliases = $alias_storage->loadByProperties([
    'path' => '/node/' . $node->id(),
    'langcode' => 'en',
  ]);

  if (!empty($existing_aliases)) {
    $path_alias = reset($existing_aliases);
    $path_alias->set('alias', $alias);
  }
  else {
    $path_alias = $alias_storage->create([
      'path' => '/node/' . $node->id(),
      'alias' => $alias,
      'langcode' => 'en',
    ]);
  }

  $path_alias->save();
}

/**
 * Returns the Become Partner page HTML.
 */
function csb_get_become_partner_content(): string {


  return <<<HTML
<div class="become-partner">
    <div class="full-width-page become-partner-background">
        &nbsp;
    </div>

    <div class="container">
        <p>
            At CSB Bank, we are committed to building secure, reliable, and future‑ready financial solutions. By collaborating with innovative and passionate minds across the industry, we aim to empower you to create exceptional digital experiences for your customers. Explore our suite of APIs designed to help you craft smarter products—with CSB Bank as your trusted partner.
        </p>

        <p>&nbsp;</p>

        <p>
            Here’s what you can look forward to:
        </p>

        <ol>
            <li>Access a wide range of robust and secure APIs</li>
            <li>Build innovative financial products with ease</li>
            <li>Deliver enriched and seamless customer experiences</li>
            <li>Collaborate with a bank that values innovation and partnership</li>
            <li>Get dedicated support throughout your API integration journey</li>
        </ol>

        <p>&nbsp;</p>

        <p>
            To get started, simply tell us a bit about yourself.<br>
            Click “Become a Partner” to explore API Banking partnership opportunities with CSB Bank.<br>
            We’ll reach out to you soon—and together, let’s create customer experiences that truly stand apart.
        </p>

        <p>&nbsp;</p>

        <div class="pageheading text-align-center">
            <a
                class="btn button"
                href="/user/register">
                Become Partner
            </a>
        </div>
    </div>
</div>
HTML;
}


/**
 * Creates the Security Features Information page.
 */
function csb_create_security_features_information_page(): void {
  $title = 'Security Features-information';
  $alias = '/security-features-information';

  $nodes = \Drupal::entityTypeManager()
    ->getStorage('node')
    ->loadByProperties([
      'type' => 'page',
      'title' => $title,
      'langcode' => 'en',
    ]);

  $node = reset($nodes);

  if (!$node) {
    $node = Node::create([
      'type' => 'page',
      'title' => $title,
      'body' => [
        'value' => csb_get_security_features_information_content(),
        'format' => 'full_html',
      ],
      'status' => 1,
      'langcode' => 'en',
    ]);

    $node->save();
  }

  // Create or update the URL alias.
  $path = '/node/' . $node->id();

  $aliases = \Drupal::entityTypeManager()
    ->getStorage('path_alias')
    ->loadByProperties([
      'path' => $path,
      'langcode' => 'en',
    ]);

  $path_alias = reset($aliases);

  if ($path_alias) {
    $path_alias->setAlias($alias);
  }
  else {
    $path_alias = PathAlias::create([
      'path' => $path,
      'alias' => $alias,
      'langcode' => 'en',
    ]);
  }

  $path_alias->save();
}

/**
 * Returns the Security Features Information page HTML.
 */
function csb_get_security_features_information_content(): string {
$file_url_generator = \Drupal::service('file_url_generator');

$security_image_1 = $file_url_generator
  ->generateString('public://inline-images/secutity-feature-1.jpg');

$security_image_2 = $file_url_generator
  ->generateString('public://inline-images/Security-Feature-2.jpg');

$security_image_3 = $file_url_generator
  ->generateString('public://inline-images/Security-Feature-3.jpg');

$security_image_4 = $file_url_generator
  ->generateString('public://inline-images/Security-Feature-4.jpg');

  return <<<HTML
<section class="csb-security-section">
    <div class="csb-security-container">
        <div class="csb-security-header">
            <div class="csb-security-eyebrow">
                Security Features
            </div>
            <h1 class="csb-security-title">
                Security is not a feature.<br>
                It is the foundation.
            </h1>
            <p class="csb-security-description">
                Our API platform is engineered with security-first principles, ensuring trusted access, protected data exchange, and verified communication across all banking environments.
            </p>
        </div>

        <div class="csb-security-row csb-security-left">
            <div class="csb-security-text">
                <div class="csb-security-number csb-security-blue">01</div>
                <h2 class="csb-security-heading">Controlled Network Access</h2>
                <p class="csb-security-text-desc">
                    API access is restricted to pre-approved IP addresses. Only trusted consumer networks are allowed to connect to UAT and Production environments, minimizing exposure to risk.
                </p>
            </div>
            <div class="csb-security-image">
                <img src="{$security_image_1}" alt="IP Whitelisting">
            </div>
        </div>

        <div class="csb-security-row csb-security-right">
            <div class="csb-security-image">
                <img src="{$security_image_2}" alt="Verified Client Identity" width="1400" height="786">
            </div>
            <div class="csb-security-text">
                <div class="csb-security-number csb-security-green">02</div>
                <h2 class="csb-security-heading">Verified Client Identity</h2>
                <p class="csb-security-text-desc">
                    Each API request is authenticated using consumer-specific client identifiers and secrets, ensuring strong identity verification at every interaction.
                </p>
            </div>
        </div>

        <div class="csb-security-row csb-security-left">
            <div class="csb-security-text">
                <div class="csb-security-number csb-security-purple">03</div>
                <h2 class="csb-security-heading">Encrypted Data Exchange</h2>
                <p class="csb-security-text-desc">
                    All API payloads are encrypted using strong cryptographic algorithms. Unique encryption keys are assigned per consumer to ensure confidentiality and integrity.
                </p>
            </div>
            <div class="csb-security-image">
                <img src="{$security_image_3}" alt="Encrypted Payloads" width="7952" height="5304">
            </div>
        </div>

        <div class="csb-security-row csb-security-right">
            <div class="csb-security-image">
                <img src="{$security_image_4}" alt="Mutual SSL" width="6720" height="4480">
            </div>
            <div class="csb-security-text">
                <div class="csb-security-number csb-security-sky">04</div>
                <h2 class="csb-security-heading">Mutual Trust via SSL</h2>
                <p class="csb-security-text-desc">
                    All integrations operate over HTTPS with two-way SSL. Both server and consumer certificates are validated to establish mutual trust.
                </p>
            </div>
        </div>
    </div>
</section>
HTML;
}
