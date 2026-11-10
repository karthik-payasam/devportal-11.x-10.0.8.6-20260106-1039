<?php

use Drupal\system\Entity\Menu;


/**
 * Creates the Menu-Bar menu, links, and navigation block.
 */
function csb_create_menu_bar(): void {
  $menu_storage = \Drupal::entityTypeManager()->getStorage('menu');
  $link_storage = \Drupal::entityTypeManager()
    ->getStorage('menu_link_content');
  $block_storage = \Drupal::entityTypeManager()->getStorage('block');

  // Create the menu if it does not exist.
  $menu = $menu_storage->load('menu-bar');

  if (!$menu) {
    $menu = \Drupal\system\Entity\Menu::create([
      'id' => 'menu-bar',
      'label' => 'Menu-Bar',
      'description' => 'Main navigation menu for the CSB portal.',
      'langcode' => 'en',
    ]);
    $menu->save();
  }

  // Define menu links and hierarchy.
  $items = [
    'home' => [
      'title' => 'Home',
      'url' => 'internal:/',
      'parent' => '',
      'weight' => 0,
    ],
    'get_started' => [
      'title' => 'Get Started',
      'url' => 'internal:/get-started',
      'parent' => '',
      'weight' => 1,
    ],
    'get_started_guide' => [
      'title' => 'Get Started Guide',
      'url' => 'internal:/how-it-works',
      'parent' => 'get_started',
      'weight' => 0,
    ],
    'api_products' => [
      'title' => 'API Products',
      'url' => 'internal:/product',
      'parent' => '',
      'weight' => 2,
    ],
    'apps' => [
      'title' => 'Apps',
      'url' => 'internal:/application',
      'parent' => '',
      'weight' => 3,
    ],
    'connect_with_us' => [
      'title' => 'Connect with us',
      'url' => 'internal:/connect-with-us',
      'parent' => '',
      'weight' => 4,
    ],
    'why_partner' => [
      'title' => 'why-partner-with-us',
      'url' => 'internal:/why-partner-with-us',
      'parent' => 'connect_with_us',
      'weight' => 0,
    ],
    'become_partner' => [
      'title' => 'Become Partner',
      'url' => 'internal:/become-partner',
      'parent' => 'connect_with_us',
      'weight' => 1,
    ],
    'support' => [
      'title' => 'Support',
      'url' => 'internal:/support',
      'parent' => '',
      'weight' => 5,
    ],
    'faq' => [
      'title' => 'FAQ',
      'url' => 'internal:/faq',
      'parent' => 'support',
      'weight' => 0,
    ],
    'security_features' => [
      'title' => 'Security Features',
      'url' => 'internal:/security-features-information',
      'parent' => 'support',
      'weight' => 1,
    ],
    'api_onboarding' => [
      'title' => 'API Onboarding',
      'url' => 'internal:/form/api-partner-consumer-on-boarding',
      'parent' => 'support',
      'weight' => 6,
    ],
  ];

  // Create or update menu links.
  $plugin_ids = [];

  foreach ($items as $key => $item) {
    $parent_plugin_id = '';

    if (!empty($item['parent'])) {
      $parent_plugin_id = $plugin_ids[$item['parent']] ?? '';
    }

    $existing_links = $link_storage->loadByProperties([
      'menu_name' => 'menu-bar',
      'title' => $item['title'],
    ]);

    $link = reset($existing_links);

    $values = [
      'title' => $item['title'],
      'link' => ['uri' => $item['url']],
      'menu_name' => 'menu-bar',
      'parent' => $parent_plugin_id,
      'weight' => $item['weight'],
      'enabled' => TRUE,
      'expanded' => TRUE,
    ];

    if ($link) {
      $link->set('link', $values['link']);
      $link->set('parent', $values['parent']);
      $link->set('weight', $values['weight']);
      $link->set('enabled', TRUE);
      $link->set('expanded', TRUE);
    }
    else {
      $link = $link_storage->create($values);
    }

    $link->save();
    $plugin_ids[$key] = $link->getPluginId();
  }

  // Configure the Menu-Bar block.
  $block = $block_storage->load('csb_menu_bar');

  $settings = [
    'id' => 'system_menu_block:menu-bar',
    'label' => 'Menu-Bar',
    'label_display' => '0',
    'provider' => 'system',
    'level' => 1,
    'depth' => 0,
    'expand_all_items' => TRUE,
  ];

  if (!$block) {
    $block = $block_storage->create([
      'id' => 'csb_menu_bar',
      'plugin' => 'system_menu_block:menu-bar',
      'theme' => 'csb_theme',
      'region' => 'navigation',
      'weight' => 0,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => [],
    ]);
  }
  else {
    $block->set('theme', 'csb_theme');
    $block->set('region', 'navigation');
    $block->set('weight', 0);
    $block->set('status', TRUE);
    $block->set('settings', $settings);
  }

  $block->save();
}



/**
 * Creates the Sign In menu and configures its anonymous-only block.
 */
function csb_create_sign_in_menu(): void {
  $menu_storage = \Drupal::entityTypeManager()->getStorage('menu');
  $link_storage = \Drupal::entityTypeManager()
    ->getStorage('menu_link_content');
  $block_storage = \Drupal::entityTypeManager()->getStorage('block');

  // Create the Sign In menu if it does not exist.
  $menu = $menu_storage->load('sign-in');

  if (!$menu) {
    $menu = \Drupal\system\Entity\Menu::create([
      'id' => 'sign-in',
      'label' => 'Sign In',
      'description' => 'Sign In menu for anonymous users.',
      'langcode' => 'en',
    ]);
    $menu->save();
  }

  // Create or update the Sign In link.
  $links = $link_storage->loadByProperties([
    'menu_name' => 'sign-in',
    'title' => 'Sign In',
  ]);

  $link = reset($links);

  if (!$link) {
    $link = $link_storage->create([
      'title' => 'Sign In',
      'link' => ['uri' => 'internal:/user/login'],
      'menu_name' => 'sign-in',
      'weight' => 0,
      'enabled' => TRUE,
    ]);
  }
  else {
    $link->set('link', [
      'uri' => 'internal:/user/login',
    ]);
    $link->set('enabled', TRUE);
    $link->set('weight', 0);
  }

  $link->save();

  // Configure the Sign In block.
  $block = $block_storage->load('csb_sign_in');

  $settings = [
    'id' => 'system_menu_block:sign-in',
    'label' => 'Sign In',
    'label_display' => '0',
    'provider' => 'system',
    'level' => 1,
    'depth' => 1,
    'expand_all_items' => FALSE,
  ];

  // Display only to anonymous users.
  $visibility = [
    'user_role' => [
      'id' => 'user_role',
      'roles' => [
        'anonymous' => 'anonymous',
      ],
      'negate' => FALSE,
    ],
  ];

  if (!$block) {
    $block = $block_storage->create([
      'id' => 'csb_sign_in',
      'plugin' => 'system_menu_block:sign-in',
      'theme' => 'csb_theme',
      'region' => 'navigation',
      'weight' => 1,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => $visibility,
    ]);
  }
  else {
    $block->set('theme', 'csb_theme');
    $block->set('region', 'navigation');
    $block->set('weight', 1);
    $block->set('status', TRUE);
    $block->set('settings', $settings);
    $block->set('visibility', $visibility);
  }

  $block->save();
}



/**
 * Creates the CSB Footer menu, its links, and its block configuration.
 */
function csb_create_footer_menu(): void {
  $menu_storage = \Drupal::entityTypeManager()->getStorage('menu');
  $link_storage = \Drupal::entityTypeManager()
    ->getStorage('menu_link_content');
  $block_storage = \Drupal::entityTypeManager()->getStorage('block');

  // Create the footer menu.
  $menu = $menu_storage->load('csb_footer');

  if (!$menu) {
    $menu = \Drupal\system\Entity\Menu::create([
      'id' => 'csb_footer',
      'label' => 'csb_footer',
      'description' => 'Footer navigation menu for the CSB portal.',
      'langcode' => 'en',
    ]);
    $menu->save();
  }

  // Define footer links and their parent-child relationships.
  $items = [
    'contact_us' => [
      'title' => 'Contact Us',
      'url' => 'internal:/contact-us',
      'parent' => '',
      'weight' => 0,
    ],
    'privacy_policy' => [
      'title' => 'Privacy Policy',
      'url' => 'internal:/privacy-policy',
      'parent' => '',
      'weight' => 1,
    ],
    'products' => [
      'title' => 'Products',
      'url' => 'internal:/products',
      'parent' => '',
      'weight' => 2,
    ],
    'upi_service' => [
      'title' => 'UPI Service',
      'url' => 'internal:/upi-service',
      'parent' => 'products',
      'weight' => 0,
    ],
    'payments' => [
      'title' => 'Payments',
      'url' => 'internal:/payments',
      'parent' => 'products',
      'weight' => 1,
    ],
    'aadhar_services' => [
      'title' => 'Aadhar Services',
      'url' => 'internal:/aadhar-services',
      'parent' => 'products',
      'weight' => 2,
    ],
    'terms_conditions' => [
      'title' => 'Terms and Conditions',
      'url' => 'internal:/terms-and-conditions',
      'parent' => '',
      'weight' => 3,
    ],
    'lets_get_started' => [
      'title' => "Let's Get Started",
      'url' => 'internal:/get-started',
      'parent' => '',
      'weight' => 4,
    ],
    'create_application' => [
      'title' => 'Create Your Application',
      'url' => 'internal:/user/register',
      'parent' => 'lets_get_started',
      'weight' => 0,
      'enabled' => FALSE,
    ],
    'explore_apis' => [
      'title' => 'Explore Our APIs',
      'url' => 'internal:/products',
      'parent' => 'lets_get_started',
      'weight' => 1,
    ],
    'getting_help' => [
      'title' => 'Getting Help & Community',
      'url' => 'internal:/support',
      'parent' => '',
      'weight' => 5,
    ],
    'forum' => [
      'title' => 'Forum',
      'url' => 'internal:/forum',
      'parent' => 'getting_help',
      'weight' => 0,
      'enabled' => FALSE,
    ],
    'create_account' => [
      'title' => 'Create an Account',
      'url' => 'internal:/user/register',
      'parent' => 'getting_help',
      'weight' => 1,
    ],
    'email_us' => [
      'title' => 'Email Us',
      'url' => 'internal:/contact-us',
      'parent' => 'getting_help',
      'weight' => 2,
    ],
  ];

  // Create or update links in parent-first order.
  $plugin_ids = [];

  foreach ($items as $key => $item) {
    $parent_plugin_id = '';

    if (!empty($item['parent'])) {
      $parent_plugin_id = $plugin_ids[$item['parent']] ?? '';

      if (!$parent_plugin_id) {
        throw new \RuntimeException(
          'Parent menu link was not created: ' . $item['parent']
        );
      }
    }

    $links = $link_storage->loadByProperties([
      'menu_name' => 'csb_footer',
      'title' => $item['title'],
    ]);

    $link = reset($links);

    $values = [
      'title' => $item['title'],
      'link' => ['uri' => $item['url']],
      'menu_name' => 'csb_footer',
      'parent' => $parent_plugin_id,
      'weight' => $item['weight'],
      'enabled' => $item['enabled'] ?? TRUE,
      'expanded' => TRUE,
    ];

    if (!$link) {
      $link = $link_storage->create($values);
    }
    else {
      $link->set('link', $values['link']);
      $link->set('parent', $values['parent']);
      $link->set('weight', $values['weight']);
      $link->set('enabled', $values['enabled']);
      $link->set('expanded', TRUE);
    }

    $link->save();
    $plugin_ids[$key] = $link->getPluginId();
  }

  // Configure the footer menu block in csb_theme.
  $block = $block_storage->load('csb_footer_block');

  $settings = [
    'id' => 'system_menu_block:csb_footer',
    'label' => 'csb_footer',
    'label_display' => '0',
    'provider' => 'system',
    'level' => 1,
    'depth' => 0,
    'expand_all_items' => TRUE,
  ];

  if (!$block) {
    $block = $block_storage->create([
      'id' => 'csb_footer_block',
      'plugin' => 'system_menu_block:csb_footer',
      'theme' => 'csb_theme',
      'region' => 'footer',
      'weight' => 0,
      'status' => TRUE,
      'settings' => $settings,
      'visibility' => [],
    ]);
  }
  else {
    $block->set('theme', 'csb_theme');
    $block->set('region', 'footer');
    $block->set('weight', 0);
    $block->set('status', TRUE);
    $block->set('settings', $settings);
  }

  $block->save();
}

