<?php

/********************************************************* {COPYRIGHT-TOP} ***
 * Licensed Materials - Property of IBM
 * 5725-L30, 5725-Z22
 *
 * (C) Copyright IBM Corporation 2018, 2024
 *
 * All Rights Reserved.
 * US Government Users Restricted Rights - Use, duplication or disclosure
 * restricted by GSA ADP Schedule Contract with IBM Corp.
 ********************************************************** {COPYRIGHT-END} **/

use Drupal\block\Entity\Block;
use Drupal\block_content\Entity\BlockContent;
use Drupal\Core\Url;
use Drupal\page_manager\Entity\Page;
use Drupal\menu_link_content\Entity\MenuLinkContent;

/**
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_create_homepage_blocks() {



//test2

$sample_block3data_content = BlockContent::create([
  'info' => 'Sample Block3data [en]',
  'type' => 'basic',
  'body' => [
    'value' => get_localized_sample_block3data_content('en'),
    'format' => 'full_html',
  ],
  'langcode' => 'en',
]);

add_sample_block3data_translations($sample_block3data_content);

$sample_values = [
  'id' => 'sample_block3data',
  'plugin' => 'block_content:' . $sample_block3data_content->uuid(),
  'provider' => NULL,
  'region' => 'disabled',
  'settings' => [
    'id' => 'block_content:' . $sample_block3data_content->uuid(),
    'label' => 'Sample Block 3',
    'provider' => 'block_content',
    'label_display' => FALSE,
  ],
  'theme' => 'connect_theme',
  'visibility' => [],
  'weight' => 0,
];

$sample_block3 = Block::create($sample_values);
$sample_block3->save();







  // welcome banner
  $welcome_block_content = BlockContent::create([
    'info' => 'Welcome Banner [en]',
    'type' => 'basic',
    'body' => [
      'value' => get_localized_welcomebanner_content('en'),
      'format' => 'full_html',
    ],
    'langcode' => 'en',
  ]);
  add_welcome_block_translations($welcome_block_content);

  $welcome_values = [
    'id' => 'welcomebanner',
    'plugin' => 'block_content:' . $welcome_block_content->uuid(),
    'provider' => NULL,
    'region' => 'disabled',
    'settings' => [
      'id' => 'block_content:' . $welcome_block_content->uuid(),
      'label' => 'Welcome banner',
      'provider' => 'block_content',
      'label_display' => 'visible',
    ],
    'theme' => 'connect_theme',
    'visibility' => [],
    'weight' => 0,
  ];
  $welcome_block_instance = Block::create($welcome_values);
  $welcome_block_instance->save();

  // getting started block
  $gsg_block_content = BlockContent::create([
    'info' => 'Getting Started [en]',
    'type' => 'basic',
    'body' => [
      'value' => get_localized_gsb_content('en'),
      'format' => 'full_html',
    ],
    'langcode' => 'en',
  ]);
  add_getting_started_block_content_translations($gsg_block_content);

  $gsg_values = [
    'id' => 'getting_started',
    'plugin' => 'block_content:' . $gsg_block_content->uuid(),
    'provider' => NULL,
    'region' => 'disabled',
    'settings' => [
      'id' => 'block_content:' . $gsg_block_content->uuid(),
      'label' => 'Getting Started',
      'provider' => 'block_content',
      'label_display' => FALSE,
    ],
    'theme' => 'connect_theme',
    'visibility' => [],
    'weight' => 0,
  ];
  $gsg_block = Block::create($gsg_values);
  $gsg_block->save();

  // get help block
  $gethelp_block_content = BlockContent::create([
    'info' => 'Get Help [en]',
    'type' => 'basic',
    'body' => [
      'value' => get_localized_gethelp_content('en'),
      'format' => 'full_html',
    ],
  ]);
  add_get_help_block_content_translations($gethelp_block_content);
  $gethelp_values = [
    'id' => 'get_help',
    'plugin' => 'block_content:' . $gethelp_block_content->uuid(),
    'provider' => NULL,
    'region' => 'disabled',
    'settings' => [
      'id' => 'block_content:' . $gethelp_block_content->uuid(),
      'label' => 'Get Help',
      'provider' => 'block_content',
      'label_display' => FALSE,
    ],
    'theme' => 'connect_theme',
    'visibility' => [],
    'weight' => 520,
  ];
  $gethelp_block = Block::create($gethelp_values);
  $gethelp_block->save();



//sample block test
// Sample block.
$sample_block_content = BlockContent::create([
  'info' => 'Sample Block [en]',
  'type' => 'basic',
  'body' => [
    'value' => get_localized_sample_block_content('en'),
    'format' => 'full_html',
  ],
  'langcode' => 'en',
]);

add_sample_block_translations($sample_block_content);

$sample_values = [
  'id' => 'sample_block',
  'plugin' => 'block_content:' . $sample_block_content->uuid(),
  'provider' => NULL,
  'region' => 'disabled',
  'settings' => [
    'id' => 'block_content:' . $sample_block_content->uuid(),
    'label' => 'Sample Block',
    'provider' => 'block_content',
    'label_display' => FALSE,
  ],
  'theme' => 'connect_theme',
  'visibility' => [],
  'weight' => 0,
];

$sample_block = Block::create($sample_values);
$sample_block->save();




  // Add the block instances to the welcome page
  // load the welcome page that should have been created from our YAML
  $page = Page::load('welcome');
  // should only be one page variant, so we'll just grab the first one
  if ($page !== NULL) {
    $page_variants = $page->getVariants();
    reset($page_variants);
    $page_variant = array_values($page_variants)[0];

    $variant_plugin = $page_variant->getVariantPlugin();
    // Add Welcome block
    $add_welcome_block = [
      'id' => 'block_content:' . $welcome_block_content->uuid(),
      'label' => 'Welcome Banner',
      'provider' => 'block_content',
      'label_display' => FALSE,
      'view_mode' => 'full',
      'status' => TRUE,
      'region' => 'col_1',
      'weight' => 0,
      'context_mapping' => [],
    ];
    $variant_plugin->addBlock($add_welcome_block);

    // Add getting started block
    $add_gsg_block = [
      'id' => 'block_content:' . $gsg_block_content->uuid(),
      'label' => 'Getting Started',
      'provider' => 'block_content',
      'view_mode' => 'full',
      'status' => TRUE,
      'region' => 'col_1',
      'weight' => 2,
      'context_mapping' => [],
      'label_display' => FALSE,
    ];
    $variant_plugin->addBlock($add_gsg_block);

    // Add featured APIs block
    $add_featured_block = [
      'id' => 'featuredcontent',
      'plugin' => 'featuredcontent',
      'label' => 'Featured Content',
      'provider' => 'featuredcontent',
      'region' => 'col_1',
      'nodeType' => 'product',
      'selectionType' => 'CREATED',
      'numberOfTiles' => 6,
      'theme' => 'connect_theme',
      'weight' => 1,
      'context_mapping' => [],
      'label_display' => FALSE,
    ];
    $variant_plugin->addBlock($add_featured_block);

    // add socialblock
    $add_social_block = [
      'id' => 'social_block',
      'plugin' => 'social_block',
      'label' => 'Social Block',
      'provider' => 'socialblock',
      'region' => 'col_1',
      'twitterSearchBy' => 0,
      'twitterSearchParameter' => "ibmcloud",
      'twitterTweetTypes' => 0,
      'forumsList' => ["1"],
      'numberOfTiles' => 9,
      'theme' => 'connect_theme',
      'weight' => 3,
      'context_mapping' => [],
      'label_display' => FALSE,
    ];
    $variant_plugin->addBlock($add_social_block);
    // getting help
    $add_gettinghelp_block = [
      'id' => 'block_content:' . $gethelp_block_content->uuid(),
      'label' => 'Get help',
      'provider' => 'block_content',
      'label_display' => FALSE,
      'view_mode' => 'full',
      'status' => TRUE,
      'region' => 'col_1',
      'weight' => 5,
      'context_mapping' => [],
    ];
    $variant_plugin->addBlock($add_gettinghelp_block);

// Add Sample Block.
$add_sample_block = [
  'id' => 'block_content:' . $sample_block_content->uuid(),
  'label' => 'Sample Block',
  'provider' => 'block_content',
  'label_display' => FALSE,
  'view_mode' => 'full',
  'status' => TRUE,
  'region' => 'col_1',
  'weight' => 6,
  'context_mapping' => [],
];

$variant_plugin->addBlock($add_sample_block);




//test 2


 // Add Sample Block 3.
$add_sample_block3 = [
  'id' => 'block_content:' . $sample_block3data_content->uuid(),
  'label' => 'Sample Block 3',
  'provider' => 'block_content',
  'label_display' => FALSE,
  'view_mode' => 'full',
  'status' => TRUE,
  'region' => 'col_1',
  'weight' => 8,
  'context_mapping' => [],
];

$variant_plugin->addBlock($add_sample_block3);





    $page_variant->save();
  }
}

/**
 * Function to update the block content if its missing or needs translations adding.
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_update_homepage_blocks() {
  $welcomebannerblock = Block::load('welcomebanner');
  if ($welcomebannerblock !== NULL) {
    $plugin = $welcomebannerblock->get('plugin');
    if ($plugin !== NULL) {
      $parts = explode(':', $plugin);
      $block_content_id = $parts[1];
      $query = \Drupal::entityQuery('block_content');
      $query->condition('uuid.value', $block_content_id);
      $nids = $query->accessCheck()->execute();
      if (isset($nids) && !empty($nids)) {
        $blockid = array_shift($nids);
        $block_content = BlockContent::load($blockid);
        if ($block_content !== NULL) {
          if (!$block_content->hasTranslation('en')) {
            $block_content->set('body', [
              'value' => get_localized_welcomebanner_content('en'),
              'format' => 'full_html',
            ]);
            $block_content->save();
          }
          add_welcome_block_translations($block_content, FALSE);
        }
      }
    }
  }

  $gsgblock = Block::load('getting_started');
  if ($gsgblock !== NULL) {
    $plugin = $gsgblock->get('plugin');
    if ($plugin !== NULL) {
      $parts = explode(':', $plugin);
      $block_content_id = $parts[1];
      $query = \Drupal::entityQuery('block_content');
      $query->condition('uuid.value', $block_content_id);
      $nids = $query->accessCheck()->execute();
      if (isset($nids) && !empty($nids)) {
        $blockid = array_shift($nids);
        $block_content = BlockContent::load($blockid);
        if ($block_content !== NULL) {
          if (!$block_content->hasTranslation('en')) {
            $block_content->set('body', [
              'value' => get_localized_gsb_content('en'),
              'format' => 'full_html',
            ]);
            $block_content->save();
          }
          add_getting_started_block_content_translations($block_content, FALSE);
        }
      }
    }
  }

  $gethelpblock = Block::load('get_help');
  if ($gethelpblock !== NULL) {
    $plugin = $gethelpblock->get('plugin');
    if ($plugin !== NULL) {
      $parts = explode(':', $plugin);
      $block_content_id = $parts[1];
      $query = \Drupal::entityQuery('block_content');
      $query->condition('uuid.value', $block_content_id);
      $nids = $query->accessCheck()->execute();
      if (isset($nids) && !empty($nids)) {
        $blockid = array_shift($nids);
        $block_content = BlockContent::load($blockid);
        if ($block_content !== NULL) {
          if (!$block_content->hasTranslation('en')) {
            $block_content->set('body', [
              'value' => get_localized_gethelp_content('en'),
              'format' => 'full_html',
            ]);
            $block_content->save();
          }
          add_get_help_block_content_translations($block_content, FALSE);
        }
      }
    }
  }

  // Sample Block.
$sample_block = Block::load('sample_block');

if ($sample_block !== NULL) {
  $plugin = $sample_block->get('plugin');

  if ($plugin !== NULL) {
    $parts = explode(':', $plugin);
    $block_content_id = $parts[1] ?? NULL;

    if ($block_content_id) {
      $query = \Drupal::entityQuery('block_content');
      $query->condition('uuid', $block_content_id);
      $query->accessCheck(FALSE);
      $ids = $query->execute();

      if (!empty($ids)) {
        $block_content = BlockContent::load(reset($ids));

        if ($block_content !== NULL) {
          if (!$block_content->hasTranslation('en')) {
            $block_content->set('body', [
              'value' => get_localized_sample_block_content('en'),
              'format' => 'full_html',
            ]);
            $block_content->save();
          }

          add_sample_block_translations($block_content, FALSE);
        }
      }
    }
  }
}




//test 2


 // Sample Block 3.
$sample_block3 = Block::load('sample_block3data');

if ($sample_block3 !== NULL) {
  $plugin = $sample_block3->get('plugin');

  if ($plugin !== NULL) {
    $parts = explode(':', $plugin);
    $block_content_id = $parts[1] ?? NULL;

    if ($block_content_id) {
      $query = \Drupal::entityQuery('block_content');
      $query->condition('uuid', $block_content_id);
      $query->accessCheck(FALSE);
      $ids = $query->execute();

      if (!empty($ids)) {
        $block_content = BlockContent::load(reset($ids));

        if ($block_content !== NULL) {
          if (!$block_content->hasTranslation('en')) {
            $block_content->set('body', [
              'value' => get_localized_sample_block3data_content('en'),
              'format' => 'full_html',
            ]);
            $block_content->save();
          }

          add_sample_block3data_translations($block_content, FALSE);
        }
      }
    }
  }
}




}

/**
 * @param \Drupal\block_content\Entity\BlockContent $gethelp_block_content
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function add_get_help_block_content_translations(BlockContent $gethelp_block_content, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($gethelp_block_content->hasTranslation($lang) && !$overwrite)) {
      continue;
    }

    if ($gethelp_block_content->hasTranslation($lang)) {
      $gethelp_block_content->removeTranslation($lang);
    }
    $translation = [
      'info' => t('Get Help', [], ['langcode' => $lang]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_gethelp_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ];
    $gethelp_block_content->addTranslation($lang, $translation);
  }
  $gethelp_block_content->save();
}

/**
 * @param \Drupal\block_content\Entity\BlockContent $gsg_block_content
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function add_getting_started_block_content_translations(BlockContent $gsg_block_content, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($gsg_block_content->hasTranslation($lang) && !$overwrite)) {
      continue;
    }

    if ($gsg_block_content->hasTranslation($lang)) {
      $gsg_block_content->removeTranslation($lang);
    }

    $translation = [
      'info' => t('Getting Started', [], ['langcode' => $lang]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_gsb_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ];
    $gsg_block_content->addTranslation($lang, $translation);
  }

  $gsg_block_content->save();
}

/**
 * @param \Drupal\block_content\Entity\BlockContent $welcome_block_content
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function add_welcome_block_translations(BlockContent $welcome_block_content, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($welcome_block_content->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($welcome_block_content->hasTranslation($lang)) {
      $welcome_block_content->removeTranslation($lang);
    }

    $translation = [
      'info' => t('Welcome Banner', [], ['langcode' => $lang]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_welcomebanner_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ];
    $welcome_block_content->addTranslation($lang, $translation);
  }

  $welcome_block_content->save();
}




/**
 * Adds translations for the sample block.
 *
 * @param \Drupal\block_content\Entity\BlockContent $sample_block_content
 *   The sample block content entity.
 */
function add_sample_block_translations(
  BlockContent $sample_block_content,
  $overwrite = TRUE
): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();

    if (
      $lang === 'en' ||
      ($sample_block_content->hasTranslation($lang) && !$overwrite)
    ) {
      continue;
    }

    if ($sample_block_content->hasTranslation($lang)) {
      $sample_block_content->removeTranslation($lang);
    }

    $sample_block_content->addTranslation($lang, [
      'info' => t('Sample Block', [], [
        'langcode' => $lang,
      ]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_sample_block_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ]);
  }

  $sample_block_content->save();
}




/**
 * Adds translations for Sample Block 3.
 *
 * @param \Drupal\block_content\Entity\BlockContent $sample_block3data_content
 *   The Sample Block 3 content entity.
 */
function add_sample_block3data_translations(
  BlockContent $sample_block3data_content,
  $overwrite = TRUE
): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();

    if (
      $lang === 'en' ||
      ($sample_block3data_content->hasTranslation($lang) && !$overwrite)
    ) {
      continue;
    }

    if ($sample_block3data_content->hasTranslation($lang)) {
      $sample_block3data_content->removeTranslation($lang);
    }

    $sample_block3data_content->addTranslation($lang, [
      'info' => t('Sample Block 3', [], [
        'langcode' => $lang,
      ]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_sample_block3data_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ]);
  }

  $sample_block3data_content->save();
}





/**
 * @param $langcode
 *
 * @return string
 */
function get_localized_welcomebanner_content($langcode): string {
  $html = '<div class="welcomebanner"><div class="welcomebannertext"><h2>';
  $html .= t('Brace yourselves.', [], ['langcode' => $langcode]) . '<br />';
  $html .= t('APIs are coming.', [], ['langcode' => $langcode]) . '</h2><p>';
  $html .= t('Explore, get access to and be creative with our APIs.', [], ['langcode' => $langcode]) . '<br />';
  $html .= t('We can\'t wait to see what you come up with!', [], ['langcode' => $langcode]) . '</p><div class="bannerButtonRow">';
  $html .= '<a class="button cta-btns--white__btn" href="product">';
  $html .= t('Explore API Documentation', [], ['langcode' => $langcode]) . '</a></div></div></div>';
  return $html;
}

/**
 * @param $langcode
 *
 * @return string
 */
function get_localized_gsb_content($langcode): string {
  $html = '<div class="startguide">';
  $html .= '<div class="gsstep title">' . t('<h4>Let\'s get started!</h4>', [], ['langcode' => $langcode]) . '</div>';
  $html .= '<div class="gsstep signup">' . t('<h5>Sign up</h5>', [], ['langcode' => $langcode]);
  $html .= '<p>' . t('<a href="@link">Create a new account</a> and get started with our APIs. It\'s free to join.', ['@link' => 'user/register'], ['langcode' => $langcode]) . '</p>';
  $html .= '<div class="placeholder"></div></div>';
  $html .= '<div class="gsstep explore">' . t('<h5>Explore our APIs</h5>', [], ['langcode' => $langcode]);
  $html .= '<p>' . t('Take a look at our <a href="@link">API products</a> and quickly find APIs to construct a fully featured application', ['@link' => 'product'], ['langcode' => $langcode]) . '</p>';
  $html .= '<div class="placeholder"></div></div>';
  $html .= '<div class="gsstep subscribe">';
  $html .= t('<h5>Create</h5>', [], ['langcode' => $langcode]);
  $html .= '<p>' . t('Select a plan and create your application to make use of our APIs.', [], ['langcode' => $langcode]) . '</p>';
  $html .= '<div class="placeholder"></div></div></div>';
  return $html;
}

/**
 * @param $langcode
 *
 * @return string
 */
function get_localized_gethelp_content($langcode): string {
  $forward_svg = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 16 16" width="16" height="16" fill="currentColor" xml:space="preserve">
<g>
    <path  d="M9.3 3.7L13.1 7.5 1 7.5 1 8.5 13.1 8.5 9.3 12.3 10 13 15 8 10 3z"/>
</g>
</svg>';
  $html = '<div class="get_help" ><div class="column col1"><h3>' . t('Getting Help', [], ['langcode' => $langcode]) . '</h3><div>' . t('Be sure to check out these extra help resources.', [], ['langcode' => $langcode]) . '</div></div>';
  $html .= '<div class="column col2"><h4>' . t('Get Started', [], ['langcode' => $langcode]) . '</h4><div>' . t('Get started with our APIs by creating an account and exploring the documentation to find what\'s right for you.', [], ['langcode' => $langcode]) . '</div><div><a href="user/register">' . t('Create an Account', [], ['langcode' => $langcode]) . $forward_svg . '</a></div></div>';
  $html .= '<div class="column col3"><h4>' . t('Forum', [], ['langcode' => $langcode]) . '</h4><div>' . t('Ask a question in the forums or search to forum history to see if it\'s been asked before.', [], ['langcode' => $langcode]) . '</div><div><a href="forum">' . t('Join the discussion', [], ['langcode' => $langcode]) . $forward_svg . '</a></div></div>';
  $html .= '<div class="column col4"><h4>' . t('Contact Us', [], ['langcode' => $langcode]) . '</h4><div>' . t('Can\'t find the answer to your question? Need more help? Have some feedback? Let us know!', [], ['langcode' => $langcode]) . '</div><div><a href="contact">' . t('Email us', [], ['langcode' => $langcode]) . $forward_svg . '</a></div></div></div>';
  return $html;
}


/**
 * Returns localized sample block content.
 *
 * @param string $langcode
 *   The language code.
 *
 * @return string
 *   The sample block HTML.
 */
function get_localized_sample_block_content($langcode): string {
  $html = '<div class="sample-block">';
  $html .= '<h2>' . t('Sample Block', [], [
    'langcode' => $langcode,
  ]) . '</h2>';

  $html .= '<p>' . t(
    'Welcome to our API Developer Portal.',
    [],
    ['langcode' => $langcode]
  ) . '</p>';

  $html .= '</div>';

  return $html;
}





/**
 * Returns localized Sample Block 3 content.
 *
 * @param string $langcode
 *   The language code.
 *
 * @return string
 *   The Sample Block 3 HTML.
 */
function get_localized_sample_block3data_content($langcode): string {
  $html = '<div class="sample-block3data">';

  $html .= '<h2>' . t('Sample Block 3', [], [
    'langcode' => $langcode,
  ]) . '</h2>';

  $html .= '<p>' . t(
    'Welcome to our API Developer Portal.',
    [],
    ['langcode' => $langcode]
  ) . '</p>';

  $html .= '</div>';

  return $html;
}





/**
 * Function to update all the links in the getting started guide from /products to /product
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function update_gsg_block() {
  $query = \Drupal::entityQuery('block_content');
  $query->condition('info.value', 'Getting Started [en]');
  $nids = $query->accessCheck()->execute();

  if (isset($nids) && !empty($nids)) {
    $blockId = array_shift($nids);
    $block = BlockContent::load($blockId);
    if ($block !== NULL) {
      // update english
      $bodyValue = $block->body->value;
      // href="products"
      $updated = str_replace('href="products"', 'href="product"', $bodyValue);
      $block->set('body', [
        'value' => $updated,
        'format' => 'full_html',
      ]);
      $block->save();

      $languages = \Drupal::languageManager()->getLanguages();
      foreach ($languages as $language) {
        if ($language->getId() === 'en') {
          continue;
        }
        if (!$block->hasTranslation($language->getId())) {
          continue;
        }
        $translation = $block->getTranslation($language->getId());
        $bodyValue = $translation->body->value;
        $updated = str_replace('href="products"', 'href="product"', $bodyValue);
        $translation->set('body', [
          'value' => $updated,
          'format' => 'full_html',
        ]);
        $translation->save();
      }
    }
  }
}

/**
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_create_forum_block() {
  try {
    $block = \Drupal::entityTypeManager()
      ->getStorage('block')
      ->load('forumsidebar');
    // If the block exist, just return.
  } catch (\Exception $e) {
    // Do Nothing.
  }

  if (!empty($block)) {
    return;
  }

  // welcome banner
  $forum_block_content = BlockContent::create([
    'info' => 'Forum Sidebar [en]',
    'type' => 'basic',
    'body' => [
      'value' => get_localized_forumblock_content('en'),
      'format' => 'full_html',
    ],
    'langcode' => 'en',
  ]);
  add_forum_block_translations($forum_block_content);

  $forum_values = [
    'id' => 'forumsidebar',
    'plugin' => 'block_content:' . $forum_block_content->uuid(),
    'provider' => NULL,
    'region' => 'disabled',
    'settings' => [
      'id' => 'block_content:' . $forum_block_content->uuid(),
      'label' => 'Forum Sidebar',
      'provider' => 'block_content',
      'label_display' => '0',
    ],
    'theme' => 'connect_theme',
    'visibility' => [],
    'weight' => 0,
  ];
  $forum_block_instance = Block::create($forum_values);
  $forum_block_instance->save();
}

/**
 * Function to update the block content if its missing or needs translations adding.
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_update_forumsidebar_block() {
  $forumsidebarblock = Block::load('forumsidebar');
  if ($forumsidebarblock !== NULL) {
    $plugin = $forumsidebarblock->get('plugin');
    if ($plugin !== NULL) {
      $parts = explode(':', $plugin);
      $block_content_id = $parts[1];
      $query = \Drupal::entityQuery('block_content');
      $query->condition('uuid.value', $block_content_id);
      $nids = $query->accessCheck()->execute();
      if (isset($nids) && !empty($nids)) {
        $blockid = array_shift($nids);
        $block_content = BlockContent::load($blockid);
        if ($block_content !== NULL) {
          if (!$block_content->hasTranslation('en')) {
            $block_content->set('body', [
              'value' => get_localized_forumblock_content('en'),
              'format' => 'full_html',
            ]);
          }
          $block_content->save();
          add_forum_block_translations($block_content, FALSE);
        }
      }
    }
  }
}

/**
 * @param $langcode
 *
 * @return string
 */
function get_localized_forumblock_content($langcode): string {
  $html = '<div class="forumSidebar">';
  $html .= '<div class="supporttext"><h2>';
  $html .= t('Support', [], ['langcode' => $langcode]) . '</h2><p>';
  $html .= t("Looking for help? Check out the frequently asked questions on our <a href='@supportlink'>support page</a>.", ['@supportlink' => 'support'], ['langcode' => $langcode]) . '</p></div>';
  $html .= '<div class="contacttext"><h2>';
  $html .= t('Contact us', [], ['langcode' => $langcode]) . '</h2><p>';
  $html .= t("Send us a <a href='@contactlink'>message</a>. We'll get back to you as soon as we can.", ['@contactlink' => 'contact'], ['langcode' => $langcode]) . '</p></div>';
  $html .= '<div class="socialtext"><h2>';
  $html .= t('Get Social', [], ['langcode' => $langcode]) . '</h2></div>';
  $html .= '</div>';
  return $html;
}

/**
 * @param \Drupal\block_content\Entity\BlockContent $forum_block_content
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function add_forum_block_translations(BlockContent $forum_block_content, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($forum_block_content->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($forum_block_content->hasTranslation($lang)) {
      $forum_block_content->removeTranslation($lang);
    }

    $translation = [
      'info' => t('Forum Sidebar', [], ['langcode' => $lang]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_forumblock_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ];
    $forum_block_content->addTranslation($lang, $translation);
  }

  $forum_block_content->save();
}

/**
 * Function to update all the links in the forum sidebar block
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_update_forum_block() {
  $block = NULL;
  $query = \Drupal::entityQuery('block_content');
  $query->condition('info.value', 'Forum Sidebar [en]');
  $nids = $query->accessCheck()->execute();

  if (isset($nids) && !empty($nids)) {
    $blockId = array_shift($nids);
    $block = BlockContent::load($blockId);
  }
  if ($block !== NULL) {
    // update english
    $bodyValue = $block->body->value;

    $newSupportString = '<a href=\'' . Url::fromRoute('ibm_apim.support')->toString() . '\'>';
    $newContactString = '<a href=\'' . Url::fromRoute('contact.site_page')->toString() . '\'>';
    $updated = preg_replace('/<a href=[\'"][a-zA-Z_\-0-9\/]*support[\'"]>/', $newSupportString, $bodyValue);
    $updated = preg_replace('/<a href=[\'"][a-zA-Z_\-0-9\/]*contact[\'"]>/', $newContactString, $updated);
    $block->set('body', [
      'value' => $updated,
      'format' => 'full_html',
    ]);
    $block->save();

    $languages = \Drupal::languageManager()->getLanguages();
    foreach ($languages as $language) {
      if ($language->getId() === 'en') {
        continue;
      }
      if (!$block->hasTranslation($language->getId())) {
        continue;
      }
      $translation = $block->getTranslation($language->getId());
      $bodyValue = $translation->body->value;
      $updated = preg_replace('/<a href=[\'"][a-zA-Z_\-0-9\/]*support[\'"]>/', $newSupportString, $bodyValue);
      $updated = preg_replace('/<a href=[\'"][a-zA-Z_\-0-9\/]*contact[\'"]>/', $newContactString, $updated);
      $translation->set('body', [
        'value' => $updated,
        'format' => 'full_html',
      ]);
      $translation->save();
    }
  }
}

/**
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_main_menu_links() {
  $menu_name = 'main';

  $home_link = MenuLinkContent::create([
    'title' => t('Home', [], ['langcode' => 'en']),
    'description' => t('Portal homepage', [], ['langcode' => 'en']),
    'link' => ['uri' => 'internal:/'],
    'menu_name' => $menu_name,
    'expanded' => TRUE,
    'weight' => -1,
  ]);
  $home_link->save();
  add_home_link_translations($home_link);

  $apis_link = MenuLinkContent::create([
    'title' => t('API Products', [], ['langcode' => 'en']),
    'description' => t('Browse available APIs', [], ['langcode' => 'en']),
    'link' => ['uri' => 'internal:/product', [], ['langcode' => 'en']],
    'menu_name' => $menu_name,
    'weight' => 5,
    'langcode' => 'en',
  ]);
  $apis_link->save();
  add_apis_link_translations($apis_link);

  $apps_link = MenuLinkContent::create([
    'title' => t('Apps', [], ['langcode' => 'en']),
    'description' => t('Create and manage your apps', [], ['langcode' => 'en']),
    'link' => ['uri' => 'internal:/application', [], ['langcode' => 'en']],
    'menu_name' => $menu_name,
    'weight' => 10,
    'langcode' => 'en',
  ]);
  $apps_link->save();
  add_apps_link_translations($apps_link);

  $forum_link = MenuLinkContent::create([
    'title' => t('Forums'),
    'description' => t('Interact with our community'),
    'link' => ['uri' => 'internal:/forum'],
    'menu_name' => $menu_name,
    'expanded' => TRUE,
    'weight' => 25,
  ]);
  $forum_link->save();
  add_forum_link_translations($forum_link);

  // update weight of the blogs link
  $menu_link_manager = \Drupal::service('plugin.manager.menu.link');
  $blog_menu_id = 'views_view:views.blog.blog_all';
  $blogs_link = $menu_link_manager->getDefinition($blog_menu_id);
  $blogs_link['weight'] = 21;
  $menu_link_manager->updateDefinition($blog_menu_id, $blogs_link);
  $cache = \Drupal::cache('menu');
  $cache->deleteAll();
}

/**
 * @param $link
 */
function add_forum_link_translations($link, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($link->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($link->hasTranslation($lang)) {
      $link->removeTranslation($lang);
    }
    $translation = [
      'title' => t('Forums', [], ['langcode' => $lang]),
      'description' => t('Interact with our community', [], ['langcode' => $lang]),
      'link' => ['uri' => 'internal:/forum'],
      'menu_name' => 'main',
      'expanded' => TRUE,
      'weight' => 25,
    ];
    $link->addTranslation($lang, $translation);
  }

  $link->save();
}

/**
 * @param $link
 */
function add_apps_link_translations($link, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($link->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($link->hasTranslation($lang)) {
      $link->removeTranslation($lang);
    }
    $translation = [
      'title' => t('Apps', [], ['langcode' => $lang]),
      'description' => t('Create and manage your apps', [], ['langcode' => $lang]),
      'langcode' => $lang,
    ];
    $link->addTranslation($lang, $translation);
  }
  $link->save();
}

/**
 * @param $link
 */
function add_apis_link_translations($link, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($link->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($link->hasTranslation($lang)) {
      $link->removeTranslation($lang);
    }
    $translation = [
      'title' => t('API Products', [], ['langcode' => $lang]),
      'description' => t('Browse available APIs', [], ['langcode' => $lang]),
      'langcode' => $lang,
    ];
    $link->addTranslation($lang, $translation);
  }
  $link->save();
}

/**
 * @param $link
 */
function add_home_link_translations($link, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($link->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($link->hasTranslation($lang)) {
      $link->removeTranslation($lang);
    }
    $translation = [
      'title' => t('Home', [], ['langcode' => $lang]),
      'description' => t('Portal homepage', [], ['langcode' => $lang]),
      'link' => ['uri' => 'internal:/'],
      'menu_name' => 'main',
      'expanded' => TRUE,
      'weight' => -1,
    ];
    $link->addTranslation($lang, $translation);
  }

  $link->save();
}

/**
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_login_menu_links() {
  $menu_name = 'login';

  $login_link = MenuLinkContent::create([
    'title' => t('Sign in'),
    'description' => t('Sign in to your account'),
    'link' => ['uri' => 'internal:/user/login'],
    'menu_name' => $menu_name,
    'expanded' => TRUE,
    'weight' => 20,
  ]);
  $login_link->save();
  add_sign_in_link_translations($login_link);


  $register_link = MenuLinkContent::create([
    'title' => t('Create account'),
    'description' => t('Create a new account'),
    'link' => ['uri' => 'internal:/user/register'],
    'menu_name' => $menu_name,
    'expanded' => TRUE,
    'weight' => 10,
  ]);
  $register_link->save();
  add_create_account_link_translations($register_link);
}

/**
 * @param $link
 */
function add_create_account_link_translations($link, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($link->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($link->hasTranslation($lang)) {
      $link->removeTranslation($lang);
    }
    $translation = [
      'title' => t('Create account', [], ['langcode' => $lang]),
      'description' => t('Create a new account', [], ['langcode' => $lang]),
      'link' => ['uri' => 'internal:/user/register'],
      'menu_name' => 'login',
      'expanded' => TRUE,
      'weight' => 10,
    ];
    $link->addTranslation($lang, $translation);
  }

  $link->save();
}

/**
 * @param $link
 */
function add_sign_in_link_translations($link, $overwrite = true): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();
    if ($lang === 'en' || ($link->hasTranslation($lang) && !$overwrite)) {
      continue;
    }
    if ($link->hasTranslation($lang)) {
      $link->removeTranslation($lang);
    }
    $translation = [
      'title' => t('Sign in', [], ['langcode' => $lang]),
      'description' => t('Sign in to your account', [], ['langcode' => $lang]),
      'link' => ['uri' => 'internal:/user/login'],
      'menu_name' => 'login',
      'expanded' => TRUE,
      'weight' => 20,
    ];
    $link->addTranslation($lang, $translation);
  }
  $link->save();
}

/**
 * Update the node incase translations or new langcodes are added
 */
function apim_profile_update_menu_links() {
  try {
    apim_profile_update_main_menu_links();
    apim_profile_update_login_menu_links();
  } catch (PluginNotFoundException | PluginException | EntityStorageException $e) {
  }
}

/**
 * Updates translations for the main menu or adds new languages if added
 */
function apim_profile_update_main_menu_links() {
  $home_link = \Drupal::entityTypeManager()->getStorage('menu_link_content')->loadByProperties(['link' => 'internal:/']);
  $home_link = reset($home_link);
  if (!empty($home_link)) {
    add_home_link_translations($home_link, FALSE);
  }

  $apis_link = \Drupal::entityTypeManager()->getStorage('menu_link_content')->loadByProperties(['link' => 'internal:/product']);
  $apis_link = reset($apis_link);
  if (!empty($apis_link)) {
    add_apis_link_translations($apis_link, FALSE);
  }

  $apps_link = \Drupal::entityTypeManager()->getStorage('menu_link_content')->loadByProperties(['link' => 'internal:/application']);
  $apps_link = reset($apps_link);
  if (!empty($apps_link)) {
    add_apps_link_translations($apps_link, FALSE);
  }

  $forum_link = \Drupal::entityTypeManager()->getStorage('menu_link_content')->loadByProperties(['link' => 'internal:/forum']);
  $forum_link = reset($forum_link);
  if (!empty($forum_link)) {
    add_forum_link_translations($forum_link, FALSE);
  }
}

/**
 * Updates translations for the main menu or adds new languages if added
 */
function apim_profile_update_login_menu_links() {
  $login_link = \Drupal::entityTypeManager()->getStorage('menu_link_content')->loadByProperties(['link' => 'internal:/user/login']);
  $login_link = reset($login_link);
  if (!empty($login_link)) {
    add_sign_in_link_translations($login_link, FALSE);
  }

  $register_link = \Drupal::entityTypeManager()->getStorage('menu_link_content')->loadByProperties(['link' => 'internal:/user/register']);
  $register_link = reset($register_link);
  if (!empty($register_link)) {
    add_create_account_link_translations($register_link, FALSE);
  }
}








/**
 * Creates the Sample Block and attaches it to the homepage.
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_create_sample_block(): void {
  $logger = \Drupal::logger('apim_profile');

  $logger->notice('Sample Block creation started.');

  try {
    // 1. Load or create the Sample Block content.
    $content_storage = \Drupal::entityTypeManager()
      ->getStorage('block_content');

    $contents = $content_storage->loadByProperties([
      'info' => 'Sample Block [en]',
    ]);

    $sample_block_content = reset($contents);

    if (!$sample_block_content) {
      $sample_block_content = BlockContent::create([
        'info' => 'Sample Block [en]',
        'type' => 'basic',
        'langcode' => 'en',
        'body' => [
          'value' => get_localized_sample_block_content('en'),
          'format' => 'full_html',
        ],
      ]);

      $sample_block_content->save();

      $logger->notice(
        'Sample Block content created. ID: @id',
        ['@id' => $sample_block_content->id()]
      );
    }
    else {
      $logger->notice('Sample Block content already exists.');
    }

    // 2. Create the block configuration if it does not exist.
    $plugin_id = 'block_content:' . $sample_block_content->uuid();

    $block_storage = \Drupal::entityTypeManager()
      ->getStorage('block');

    $sample_block = $block_storage->load('sample_block');

    if (!$sample_block) {
      $sample_block = Block::create([
        'id' => 'sample_block',
        'plugin' => $plugin_id,
        'provider' => 'block_content',
        'region' => 'disabled',
        'settings' => [
          'id' => $plugin_id,
          'label' => 'Sample Block',
          'provider' => 'block_content',
          'label_display' => FALSE,
        ],
        'theme' => 'connect_theme',
        'visibility' => [],
        'weight' => 4,
      ]);

      $sample_block->save();

      $logger->notice('Sample Block configuration created.');
    }
    else {
      // Reuse the existing block configuration.
      $logger->notice('Sample Block configuration already exists.');
    }

    // Use the plugin ID stored in the block configuration.
    $plugin_id = $sample_block->getPluginId();

    // 3. Load the homepage Page Manager page.
    $page = Page::load('welcome');

    if (!$page) {
      $logger->error(
        'Sample Block: Welcome Page Manager page was not found.'
      );
      return;
    }

    $variants = $page->getVariants();

    if (empty($variants)) {
      $logger->error(
        'Sample Block: No variants found for the welcome page.'
      );
      return;
    }

    // 4. Attach the block to the first homepage variant.
    $page_variant = reset($variants);
    $variant_plugin = $page_variant->getVariantPlugin();

    $variant_plugin->addBlock([
      'id' => $plugin_id,
      'label' => 'Sample Block',
      'provider' => 'block_content',
      'label_display' => FALSE,
      'view_mode' => 'full',
      'status' => TRUE,
      'region' => 'col_1',
      'weight' => 6,
      'context_mapping' => [],
    ]);

    $page_variant->save();

    $logger->notice(
      'Sample Block was attached to the homepage variant.'
    );
  }
  catch (\Throwable $e) {
    $logger->error(
      'Sample Block creation failed: @message',
      ['@message' => $e->getMessage()]
    );

    throw $e;
  }
}






function apim_profile_create_api_highlights_block() {
  $logger = \Drupal::logger('apim_profile');

  // 1. Create or reuse the block content.
  $content_storage = \Drupal::entityTypeManager()
    ->getStorage('block_content');

  $content = $content_storage->loadByProperties([
    'info' => 'API Highlights [en]',
  ]);

  $content = $content ? reset($content) : NULL;

  if (!$content) {
    $content = \Drupal\block_content\Entity\BlockContent::create([
      'info' => 'API Highlights [en]',
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => '<div class="api-highlights">
          <h2>API Highlights</h2>
          <p>Explore our APIs and integrate with our services.</p>
        </div>',
        'format' => 'full_html',
      ],
    ]);

    $content->save();
    $logger->notice('API Highlights content created.');
  }

  // 2. Create or reuse the block configuration.
  $block_storage = \Drupal::entityTypeManager()->getStorage('block');
  $block = $block_storage->load('api_highlights');

  if (!$block) {
    $block = \Drupal\block\Entity\Block::create([
      'id' => 'api_highlights',
      'plugin' => 'block_content:' . $content->uuid(),
      'region' => 'disabled',
      'theme' => 'connect_theme',
      'settings' => [],
      'visibility' => [],
      'weight' => 7,
    ]);

    $block->save();
    $logger->notice('API Highlights block configuration created.');
  }

  // 3. Attach the block to the existing homepage variant.
  $page = \Drupal\page_manager\Entity\Page::load('welcome');

  if (!$page) {
    $logger->error('Welcome homepage was not found.');
    return;
  }

  $variants = $page->getVariants();

  if (empty($variants)) {
    $logger->error('No homepage variants were found.');
    return;
  }

  $variant = reset($variants);
  $variant_plugin = $variant->getVariantPlugin();

  $variant_plugin->addBlock([
    'id' => 'block_content:' . $content->uuid(),
    'region' => 'col_1',
    'weight' => 7,
    'label' => 'API Highlights',
    'provider' => 'block_content',
    'label_display' => FALSE,
  ]);

  $page->save();

  $logger->notice('API Highlights attached to the homepage.');
}















/**
 * Returns the localized content for the Sample Test block.
 *
 * @param string $langcode
 *   The language code.
 *
 * @return string
 *   The HTML content.
 */
function get_localized_sample_test_content(string $langcode = 'en'): string {
  switch ($langcode) {
    case 'en':
    default:
      return '<div class="sample-test-block">
        <h2>Sample Test</h2>
        <p>Welcome to our Developer Portal. Explore our APIs and
        discover the available services.</p>
      </div>';
  }
}

/**
 * Adds translations to the Sample Test block content.
 *
 * @param \Drupal\block_content\Entity\BlockContent $sample_test_content
 *   The block content entity.
 * @param bool $overwrite
 *   Whether to overwrite existing translations.
 */
function add_sample_test_block_translations(
  BlockContent $sample_test_content,
  bool $overwrite = TRUE
): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $langcode => $language) {
    // English content is handled separately.
    if ($langcode === 'en') {
      continue;
    }

    // Do not overwrite existing translations when disabled.
    if (
      $sample_test_content->hasTranslation($langcode)
      && !$overwrite
    ) {
      continue;
    }

    $translation_values = [
      'info' => 'Sample Test [' . $langcode . ']',
      'body' => [
        'value' => get_localized_sample_test_content($langcode),
        'format' => 'full_html',
      ],
    ];

    if ($sample_test_content->hasTranslation($langcode)) {
      $translation = $sample_test_content->getTranslation($langcode);
      $translation->set('info', $translation_values['info']);
      $translation->set('body', $translation_values['body']);
    }
    else {
      $sample_test_content->addTranslation(
        $langcode,
        $translation_values
      );
    }
  }

  $sample_test_content->save();
}

/**
 * Creates the Sample Test block and attaches it to the homepage.
 */
function apim_profile_create_sample_test_block(): void {
  $logger = \Drupal::logger('apim_profile');

  try {
    // Load existing block content.
    $content_storage = \Drupal::entityTypeManager()
      ->getStorage('block_content');

    $contents = $content_storage->loadByProperties([
      'info' => 'Sample Test [en]',
    ]);

    $sample_test_content = $contents
      ? reset($contents)
      : NULL;

    // Create block content if it does not exist.
    if (!$sample_test_content) {
      $sample_test_content = BlockContent::create([
        'info' => 'Sample Test [en]',
        'type' => 'basic',
        'langcode' => 'en',
        'body' => [
          'value' => get_localized_sample_test_content('en'),
          'format' => 'full_html',
        ],
      ]);

      $sample_test_content->save();
      $logger->notice('Sample Test content created.');
    }

    // Add missing translations.
    add_sample_test_block_translations(
      $sample_test_content,
      FALSE
    );

    // Load or create the block configuration.
    $sample_test_block = Block::load('sample_test');

    if (!$sample_test_block) {
      $plugin_id = 'block_content:' . $sample_test_content->uuid();

      $sample_test_block = Block::create([
        'id' => 'sample_test',
        'plugin' => $plugin_id,
        'provider' => 'block_content',
        'region' => 'disabled',
        'settings' => [
          'id' => $plugin_id,
          'label' => 'Sample Test',
          'provider' => 'block_content',
          'label_display' => FALSE,
        ],
        'theme' => 'connect_theme',
        'visibility' => [],
        'weight' => 9,
      ]);

      $sample_test_block->save();
      $logger->notice('Sample Test block configuration created.');
    }

    // Get the plugin ID from the existing configuration.
    $plugin_id = $sample_test_block->getPluginId();

    // Load the homepage.
    $page = Page::load('welcome');

    if (!$page) {
      $logger->error('Sample Test: Welcome homepage was not found.');
      return;
    }

    $page_variants = $page->getVariants();

    if (empty($page_variants)) {
      $logger->error('Sample Test: No homepage variants were found.');
      return;
    }

    $page_variant = reset($page_variants);
    $variant_plugin = $page_variant->getVariantPlugin();

    // Prevent duplicate placement.
    $configuration = $variant_plugin->getConfiguration();
    $existing_blocks = $configuration['blocks'] ?? [];

    foreach ($existing_blocks as $existing_block) {
      if (($existing_block['id'] ?? '') === $plugin_id) {
        $logger->notice(
          'Sample Test is already attached to the homepage.'
        );
        return;
      }
    }

    // Attach the block to the homepage.
    $variant_plugin->addBlock([
      'id' => $plugin_id,
      'label' => 'Sample Test',
      'provider' => 'block_content',
      'label_display' => FALSE,
      'view_mode' => 'full',
      'status' => TRUE,
      'region' => 'col_1',
      'weight' => 9,
      'context_mapping' => [],
    ]);

    $page_variant->save();

    $logger->notice(
      'Sample Test block successfully attached to the homepage.'
    );
  }
  catch (\Throwable $e) {
    $logger->error(
      'Sample Test creation failed: @message',
      ['@message' => $e->getMessage()]
    );
    throw $e;
  }
}

/**
 * Updates the Sample Test block and its translations.
 */
function apim_profile_update_sample_test_block(): void {
  $logger = \Drupal::logger('apim_profile');

  try {
    // Load the block configuration.
    $sample_test_block = Block::load('sample_test');

    if (!$sample_test_block) {
      $logger->warning(
        'Sample Test block configuration does not exist.'
      );
      return;
    }

    // Get the block content plugin ID.
    $plugin_id = $sample_test_block->getPluginId();

    if (strpos($plugin_id, 'block_content:') !== 0) {
      $logger->error(
        'Sample Test has an invalid plugin ID: @plugin',
        ['@plugin' => $plugin_id]
      );
      return;
    }

    // Extract the block content UUID.
    $block_content_uuid = substr(
      $plugin_id,
      strlen('block_content:')
    );

    // Find the content entity using its UUID.
    $content_storage = \Drupal::entityTypeManager()
      ->getStorage('block_content');

    $entity_ids = $content_storage->getQuery()
      ->accessCheck(FALSE)
      ->condition('uuid', $block_content_uuid)
      ->execute();

    if (empty($entity_ids)) {
      $logger->error(
        'Sample Test content not found for UUID: @uuid',
        ['@uuid' => $block_content_uuid]
      );
      return;
    }

    $block_content_id = reset($entity_ids);
    $block_content = BlockContent::load($block_content_id);

    if (!$block_content) {
      $logger->error(
        'Unable to load Sample Test block content.'
      );
      return;
    }

    // Update the English translation.
    if ($block_content->hasTranslation('en')) {
      $english_translation = $block_content->getTranslation('en');
    }
    else {
      $english_translation = $block_content->addTranslation('en', [
        'info' => 'Sample Test [en]',
      ]);
    }

    $english_translation->set('info', 'Sample Test [en]');
    $english_translation->set('body', [
      'value' => get_localized_sample_test_content('en'),
      'format' => 'full_html',
    ]);

    $english_translation->save();

    // Add missing translations without overwriting existing ones.
    add_sample_test_block_translations(
      $block_content,
      FALSE
    );

    $logger->notice(
      'Sample Test block content and translations updated.'
    );
  }
  catch (\Throwable $e) {
    $logger->error(
      'Sample Test update failed: @message',
      ['@message' => $e->getMessage()]
    );
    throw $e;
  }
}









/**
 * Returns localized Sample Test 2 block content.
 *
 * @param string $langcode
 *   The language code.
 *
 * @return string
 *   The Sample Test 2 HTML.
 */
function get_localized_sample_test_2_content($langcode): string {
  $html = '<div class="sample-test-2">';

  $html .= '<h2>' . t('Sample Test 2', [], [
    'langcode' => $langcode,
  ]) . '</h2>';

  $html .= '<p>' . t(
    'Welcome to our API Developer Portal. This is Sample Test 2.',
    [],
    ['langcode' => $langcode]
  ) . '</p>';

  $html .= '</div>';

  return $html;
}


/**
 * Adds translations for the Sample Test 2 block.
 *
 * @param \Drupal\block_content\Entity\BlockContent $sample_test_2_content
 *   The Sample Test 2 block content entity.
 * @param bool $overwrite
 *   Whether to overwrite existing translations.
 */
function add_sample_test_2_block_translations(
  BlockContent $sample_test_2_content,
  $overwrite = TRUE
): void {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();

    if (
      $lang === 'en' ||
      (
        $sample_test_2_content->hasTranslation($lang)
        && !$overwrite
      )
    ) {
      continue;
    }

    if ($sample_test_2_content->hasTranslation($lang)) {
      $sample_test_2_content->removeTranslation($lang);
    }

    $sample_test_2_content->addTranslation($lang, [
      'info' => t('Sample Test 2', [], [
        'langcode' => $lang,
      ]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_sample_test_2_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ]);
  }

  $sample_test_2_content->save();
}


/**
 * Creates Sample Test 2 and attaches it to the homepage.
 */
function apim_profile_create_sample_test_2_block(): void {
  $logger = \Drupal::logger('apim_profile');

  // 1. Load existing Sample Test 2 content.
  $content_storage = \Drupal::entityTypeManager()
    ->getStorage('block_content');

  $contents = $content_storage->loadByProperties([
    'info' => 'Sample Test 2 [en]',
  ]);

  $sample_test_2_content = $contents
    ? reset($contents)
    : NULL;

  // 2. Create the block content if it does not exist.
  if (!$sample_test_2_content) {
    $sample_test_2_content = BlockContent::create([
      'info' => 'Sample Test 2 [en]',
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => get_localized_sample_test_2_content('en'),
        'format' => 'full_html',
      ],
    ]);

    $sample_test_2_content->save();

    $logger->notice('Sample Test 2 content created.');
  }

  // 3. Add missing translations.
  add_sample_test_2_block_translations(
    $sample_test_2_content,
    FALSE
  );

  // 4. Load or create the block configuration.
  $sample_test_2_block = Block::load('sample_test_2');

  $plugin_id = 'block_content:' . $sample_test_2_content->uuid();

  if (!$sample_test_2_block) {
    $sample_test_2_block = Block::create([
      'id' => 'sample_test_2',
      'plugin' => $plugin_id,
      'provider' => NULL,
      'region' => 'disabled',
      'settings' => [
        'id' => $plugin_id,
        'label' => 'Sample Test 2',
        'provider' => 'block_content',
        'label_display' => FALSE,
      ],
      'theme' => 'connect_theme',
      'visibility' => [],
      'weight' => 10,
    ]);

    $sample_test_2_block->save();

    $logger->notice(
      'Sample Test 2 block configuration created.'
    );
  }

  // 5. Load the homepage.
  $page = Page::load('welcome');

  if (!$page) {
    $logger->error(
      'Sample Test 2: Welcome homepage was not found.'
    );
    return;
  }

  // 6. Get the homepage variant.
  $page_variants = $page->getVariants();

  if (empty($page_variants)) {
    $logger->error(
      'Sample Test 2: No homepage variants were found.'
    );
    return;
  }

  $page_variant = reset($page_variants);
  $variant_plugin = $page_variant->getVariantPlugin();

  // 7. Prevent duplicate placement.
  $variant_configuration = $variant_plugin->getConfiguration();
  $existing_blocks = $variant_configuration['blocks'] ?? [];

  foreach ($existing_blocks as $existing_block) {
    if (($existing_block['id'] ?? '') === $plugin_id) {
      $logger->notice(
        'Sample Test 2 is already placed on the homepage.'
      );
      return;
    }
  }

  // 8. Add Sample Test 2 to the homepage col_1 region.
  $variant_plugin->addBlock([
    'id' => $plugin_id,
    'label' => 'Sample Test 2',
    'provider' => 'block_content',
    'label_display' => FALSE,
    'view_mode' => 'full',
    'status' => TRUE,
    'region' => 'col_1',
    'weight' => 10,
    'context_mapping' => [],
  ]);

  // 9. Save the homepage variant.
  $page_variant->save();

  $logger->notice(
    'Sample Test 2 created and attached to the homepage.'
  );
}


/**
 * Updates Sample Test 2 content and its missing translations.
 */
function apim_profile_update_sample_test_2_block(): void {
  $logger = \Drupal::logger('apim_profile');

  // 1. Load the Sample Test 2 block configuration.
  $sample_test_2_block = Block::load('sample_test_2');

  if (!$sample_test_2_block) {
    $logger->warning(
      'Sample Test 2 block configuration was not found.'
    );
    return;
  }

  // 2. Get the block content UUID.
  $plugin = $sample_test_2_block->get('plugin');

  if (
    empty($plugin) ||
    strpos($plugin, 'block_content:') !== 0
  ) {
    $logger->error(
      'Sample Test 2 has an invalid block plugin configuration.'
    );
    return;
  }

  $uuid = substr($plugin, strlen('block_content:'));

  // 3. Find the block content entity.
  $ids = \Drupal::entityQuery('block_content')
    ->accessCheck(FALSE)
    ->condition('uuid', $uuid)
    ->execute();

  if (empty($ids)) {
    $logger->warning(
      'Sample Test 2 block content was not found.'
    );
    return;
  }

  $sample_test_2_content = BlockContent::load(reset($ids));

  if (!$sample_test_2_content) {
    return;
  }

  // 4. Update the English content.
  $sample_test_2_content->set('info', 'Sample Test 2 [en]');
  $sample_test_2_content->set('body', [
    'value' => get_localized_sample_test_2_content('en'),
    'format' => 'full_html',
  ]);

  $sample_test_2_content->save();

  // 5. Add missing translations without overwriting existing ones.
  add_sample_test_2_block_translations(
    $sample_test_2_content,
    FALSE
  );

  $logger->notice(
    'Sample Test 2 content and missing translations updated.'
  );
}












/**
 * Returns localized Sample Test 3 block content.
 *
 * @param string $langcode
 *   The language code.
 *
 * @return string
 *   The Sample Test 3 HTML.
 */
function get_localized_sample_test_3_content($langcode): string {
  $html = '<div class="sample-test-3">';

  $html .= '<h2>' . t('Sample Test 3', [], [
    'langcode' => $langcode,
  ]) . '</h2>';

  $html .= '<p>' . t(
    'Welcome to our API Developer Portal. This is Sample Test 3.',
    [],
    ['langcode' => $langcode]
  ) . '</p>';

  $html .= '</div>';

  return $html;
}


/**
 * Adds translations for the Sample Test 3 block.
 *
 * @param \Drupal\block_content\Entity\BlockContent $sample_test_3_content
 *   The Sample Test 3 block content entity.
 * @param bool $overwrite
 *   Whether to overwrite existing translations.
 */
function add_sample_test_3_block_translations(
  BlockContent $sample_test_3_content,
  $overwrite = TRUE
) {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();

    if (
      $lang === 'en' ||
      (
        $sample_test_3_content->hasTranslation($lang)
        && !$overwrite
      )
    ) {
      continue;
    }

    if ($sample_test_3_content->hasTranslation($lang)) {
      $sample_test_3_content->removeTranslation($lang);
    }

    $sample_test_3_content->addTranslation($lang, [
      'info' => t('Sample Test 3', [], [
        'langcode' => $lang,
      ]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_sample_test_3_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ]);
  }

  $sample_test_3_content->save();
}


/**
 * Creates Sample Test 3 and attaches it to the homepage.
 */
function apim_profile_create_sample_test_3_block() {
  $logger = \Drupal::logger('apim_profile');

  // 1. Load existing Sample Test 3 content.
  $content_storage = \Drupal::entityTypeManager()
    ->getStorage('block_content');

  $contents = $content_storage->loadByProperties([
    'info' => 'Sample Test 3 [en]',
  ]);

  $sample_test_3_content = $contents
    ? reset($contents)
    : NULL;

  // 2. Create the block content if it does not exist.
  if (!$sample_test_3_content) {
    $sample_test_3_content = BlockContent::create([
      'info' => 'Sample Test 3 [en]',
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => get_localized_sample_test_3_content('en'),
        'format' => 'full_html',
      ],
    ]);

    $sample_test_3_content->save();

    $logger->notice('Sample Test 3 content created.');
  }

  // 3. Add missing translations.
  add_sample_test_3_block_translations(
    $sample_test_3_content,
    FALSE
  );

  // 4. Load or create the block configuration.
  $sample_test_3_block = Block::load('sample_test_3');

  $plugin_id = 'block_content:' . $sample_test_3_content->uuid();

  if (!$sample_test_3_block) {
    $sample_test_3_block = Block::create([
      'id' => 'sample_test_3',
      'plugin' => $plugin_id,
      'provider' => NULL,
      'region' => 'disabled',
      'settings' => [
        'id' => $plugin_id,
        'label' => 'Sample Test 3',
        'provider' => 'block_content',
        'label_display' => FALSE,
      ],
      'theme' => 'connect_theme',
      'visibility' => [],
      'weight' => 11,
    ]);

    $sample_test_3_block->save();

    $logger->notice(
      'Sample Test 3 block configuration created.'
    );
  }

  // 5. Load the homepage.
  $page = Page::load('welcome');

  if (!$page) {
    $logger->error(
      'Sample Test 3: Welcome homepage was not found.'
    );
    return;
  }

  // 6. Get the homepage variant.
  $page_variants = $page->getVariants();

  if (empty($page_variants)) {
    $logger->error(
      'Sample Test 3: No homepage variants were found.'
    );
    return;
  }

  $page_variant = reset($page_variants);
  $variant_plugin = $page_variant->getVariantPlugin();

  // 7. Prevent duplicate placement.
  $variant_configuration = $variant_plugin->getConfiguration();
  $existing_blocks = $variant_configuration['blocks'] ?? [];

  foreach ($existing_blocks as $existing_block) {
    if (($existing_block['id'] ?? '') === $plugin_id) {
      $logger->notice(
        'Sample Test 3 is already placed on the homepage.'
      );
      return;
    }
  }

  // 8. Add Sample Test 3 to the homepage col_1 region.
  $variant_plugin->addBlock([
    'id' => $plugin_id,
    'label' => 'Sample Test 3',
    'provider' => 'block_content',
    'label_display' => FALSE,
    'view_mode' => 'full',
    'status' => TRUE,
    'region' => 'col_1',
    'weight' => 11,
    'context_mapping' => [],
  ]);

  // 9. Save the homepage variant.
  $page_variant->save();

  $logger->notice(
    'Sample Test 3 created and attached to the homepage.'
  );
}


/**
 * Updates Sample Test 3 content and its missing translations.
 */
function apim_profile_update_sample_test_3_block() {
  $logger = \Drupal::logger('apim_profile');

  // 1. Load the Sample Test 3 block configuration.
  $sample_test_3_block = Block::load('sample_test_3');

  if (!$sample_test_3_block) {
    $logger->warning(
      'Sample Test 3 block configuration was not found.'
    );
    return;
  }

  // 2. Get the block content UUID.
  $plugin = $sample_test_3_block->get('plugin');

  if (
    empty($plugin) ||
    strpos($plugin, 'block_content:') !== 0
  ) {
    $logger->error(
      'Sample Test 3 has an invalid block plugin configuration.'
    );
    return;
  }

  $uuid = substr($plugin, strlen('block_content:'));

  // 3. Find the block content entity.
  $ids = \Drupal::entityQuery('block_content')
    ->accessCheck(FALSE)
    ->condition('uuid', $uuid)
    ->execute();

  if (empty($ids)) {
    $logger->warning(
      'Sample Test 3 block content was not found.'
    );
    return;
  }

  $sample_test_3_content = BlockContent::load(reset($ids));

  if (!$sample_test_3_content) {
    return;
  }

  // 4. Update the English content.
  $sample_test_3_content->set('info', 'Sample Test 3 [en]');
  $sample_test_3_content->set('body', [
    'value' => get_localized_sample_test_3_content('en'),
    'format' => 'full_html',
  ]);

  $sample_test_3_content->save();

  // 5. Add missing translations without overwriting existing ones.
  add_sample_test_3_block_translations(
    $sample_test_3_content,
    FALSE
  );

  $logger->notice(
    'Sample Test 3 content and missing translations updated.'
  );
}







/**
 * Returns localized Sample Test 4 content.
 */
function get_localized_sample_test4_content($langcode): string {
  $html = '<div class="sample-test4">';

  $html .= '<h2>' . t('Sample Test 4', [], [
    'langcode' => $langcode,
  ]) . '</h2>';

  $html .= '<p>' . t(
    'Welcome to our API Developer Portal.',
    [],
    ['langcode' => $langcode]
  ) . '</p>';

  $html .= '</div>';

  return $html;
}


/**
 * Adds translations for Sample Test 4.
 */
function add_sample_test4_translations(
  BlockContent $sample_test4_content,
  $overwrite = TRUE
) {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();

    if (
      $lang === 'en' ||
      ($sample_test4_content->hasTranslation($lang) && !$overwrite)
    ) {
      continue;
    }

    if ($sample_test4_content->hasTranslation($lang)) {
      $sample_test4_content->removeTranslation($lang);
    }

    $translation = [
      'info' => t('Sample Test 4', [], [
        'langcode' => $lang,
      ]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_sample_test4_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ];

    $sample_test4_content->addTranslation($lang, $translation);
  }

  $sample_test4_content->save();
}


/**
 * Creates Sample Test 4 and attaches it to the homepage.
 */
function apim_profile_create_sample_test4_block() {
  $logger = \Drupal::logger('apim_profile');

  // 1. Create Sample Test 4 content.
  $sample_test4_content = BlockContent::create([
    'info' => 'Sample Test 4 [en]',
    'type' => 'basic',
    'body' => [
      'value' => get_localized_sample_test4_content('en'),
      'format' => 'full_html',
    ],
    'langcode' => 'en',
  ]);

  add_sample_test4_translations($sample_test4_content);

  // 2. Create the block configuration.
  $plugin_id = 'block_content:' . $sample_test4_content->uuid();

  $sample_test4_values = [
    'id' => 'sample_test4',
    'plugin' => $plugin_id,
    'provider' => NULL,
    'region' => 'disabled',
    'settings' => [
      'id' => $plugin_id,
      'label' => 'Sample Test 4',
      'provider' => 'block_content',
      'label_display' => FALSE,
    ],
    'theme' => 'connect_theme',
    'visibility' => [],
    'weight' => 12,
  ];

  $sample_test4_block = Block::create($sample_test4_values);
  $sample_test4_block->save();

  // 3. Load the homepage.
  $page = Page::load('welcome');

  if ($page !== NULL) {
    $page_variants = $page->getVariants();

    if (!empty($page_variants)) {
      $page_variant = reset($page_variants);
      $variant_plugin = $page_variant->getVariantPlugin();

      // 4. Attach Sample Test 4 to the homepage.
      $add_sample_test4_block = [
        'id' => $plugin_id,
        'label' => 'Sample Test 4',
        'provider' => 'block_content',
        'label_display' => FALSE,
        'view_mode' => 'full',
        'status' => TRUE,
        'region' => 'col_1',
        'weight' => 12,
        'context_mapping' => [],
      ];

      $variant_plugin->addBlock($add_sample_test4_block);
      $page_variant->save();

      $logger->notice(
        'Sample Test 4 created and attached to the homepage.'
      );
    }
    else {
      $logger->warning('No homepage variants were found.');
    }
  }
  else {
    $logger->warning('Welcome homepage was not found.');
  }
}


/**
 * Updates Sample Test 4 content and adds missing translations.
 */
function apim_profile_update_sample_test4_block() {
  $sample_test4_block = Block::load('sample_test4');

  if ($sample_test4_block === NULL) {
    \Drupal::logger('apim_profile')->warning(
      'Sample Test 4 block was not found.'
    );
    return;
  }

  $plugin_id = $sample_test4_block->get('plugin');
  $parts = explode(':', $plugin_id);
  $block_content_uuid = $parts[1] ?? NULL;

  if (!$block_content_uuid) {
    return;
  }

  $ids = \Drupal::entityQuery('block_content')
    ->accessCheck(FALSE)
    ->condition('uuid', $block_content_uuid)
    ->execute();

  if (empty($ids)) {
    \Drupal::logger('apim_profile')->warning(
      'Sample Test 4 content was not found.'
    );
    return;
  }

  $sample_test4_content = BlockContent::load(reset($ids));

  if ($sample_test4_content !== NULL) {
    $sample_test4_content->set('info', 'Sample Test 4 [en]');
    $sample_test4_content->set('body', [
      'value' => get_localized_sample_test4_content('en'),
      'format' => 'full_html',
    ]);

    $sample_test4_content->save();

    add_sample_test4_translations($sample_test4_content, FALSE);

    \Drupal::logger('apim_profile')->notice(
      'Sample Test 4 content updated.'
    );
  }
}




/**
 * Returns localized content for Sample Test 5.
 */
function get_localized_sample_test5_content($langcode) {
  $html = '<div class="sample-test5">';
  $html .= '<h2>Sample Test 5</h2>';
  $html .= '<p>Welcome to our Developer Portal. Explore our APIs and discover the available services.</p>';
  $html .= '</div>';

  return $html;
}


/**
 * Adds translations for Sample Test 5.
 *
 * @param \Drupal\block_content\Entity\BlockContent $sample_test5_content
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function add_sample_test5_translations(BlockContent $sample_test5_content, $overwrite = true) {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();

    if ($lang === 'en' || ($sample_test5_content->hasTranslation($lang) && !$overwrite)) {
      continue;
    }

    if ($sample_test5_content->hasTranslation($lang)) {
      $sample_test5_content->removeTranslation($lang);
    }

    $translation = [
      'info' => t('Sample Test 5', [], ['langcode' => $lang]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_sample_test5_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ];

    $sample_test5_content->addTranslation($lang, $translation);
  }

  $sample_test5_content->save();
}


/**
 * Creates Sample Test 5 and attaches it to the homepage.
 */
function apim_profile_create_sample_test5_block() {
  $logger = \Drupal::logger('apim_profile');

  // Load existing Sample Test 5 content.
  $content_storage = \Drupal::entityTypeManager()
    ->getStorage('block_content');

  $contents = $content_storage->loadByProperties([
    'info' => 'Sample Test 5 [en]',
  ]);

  $sample_test5_content = $contents
    ? reset($contents)
    : NULL;

  // Create content only if it does not exist.
  if (!$sample_test5_content) {
    $sample_test5_content = BlockContent::create([
      'info' => 'Sample Test 5 [en]',
      'type' => 'basic',
      'langcode' => 'en',
      'body' => [
        'value' => get_localized_sample_test5_content('en'),
        'format' => 'full_html',
      ],
    ]);

    $sample_test5_content->save();
    $logger->notice('Sample Test 5 content created.');
  }

  // Add missing translations, following the Get Help pattern.
  add_sample_test5_translations($sample_test5_content, FALSE);

  // Load or create block configuration.
  $sample_test5_block = Block::load('sample_test5');
  $plugin_id = 'block_content:' . $sample_test5_content->uuid();

  if (!$sample_test5_block) {
    $sample_test5_block = Block::create([
      'id' => 'sample_test5',
      'plugin' => $plugin_id,
      'provider' => NULL,
      'region' => 'disabled',
      'settings' => [
        'id' => $plugin_id,
        'label' => 'Sample Test 5',
        'provider' => 'block_content',
        'label_display' => FALSE,
      ],
      'theme' => 'connect_theme',
      'visibility' => [],
      'weight' => 13,
    ]);

    $sample_test5_block->save();
    $logger->notice('Sample Test 5 block configuration created.');
  }

  // Load the homepage.
  $page = Page::load('welcome');

  if (!$page) {
    $logger->warning('Welcome homepage was not found.');
    return;
  }

  $page_variants = $page->getVariants();

  if (empty($page_variants)) {
    $logger->warning('No homepage variants were found.');
    return;
  }

  $page_variant = reset($page_variants);
  $variant_plugin = $page_variant->getVariantPlugin();

  // Prevent duplicate homepage placement.
  $configuration = $variant_plugin->getConfiguration();
  $existing_blocks = $configuration['blocks'] ?? [];

  foreach ($existing_blocks as $existing_block) {
    if (($existing_block['id'] ?? '') === $plugin_id) {
      $logger->notice('Sample Test 5 is already on the homepage.');
      return;
    }
  }

  // Add Sample Test 5 to the homepage.
  $variant_plugin->addBlock([
    'id' => $plugin_id,
    'label' => 'Sample Test 5',
    'provider' => 'block_content',
    'label_display' => FALSE,
    'view_mode' => 'full',
    'status' => TRUE,
    'region' => 'col_1',
    'weight' => 13,
    'context_mapping' => [],
  ]);

  $page_variant->save();

  $logger->notice('Sample Test 5 created and attached to the homepage.');
}


/**
 * Updates Sample Test 5 content and adds missing translations.
 */
function apim_profile_update_sample_test5_block() {
  $logger = \Drupal::logger('apim_profile');

  $sample_test5_block = Block::load('sample_test5');

  if (!$sample_test5_block) {
    $logger->warning('Sample Test 5 block configuration was not found.');
    return;
  }

  $plugin = $sample_test5_block->get('plugin');

  if (empty($plugin) || strpos($plugin, 'block_content:') !== 0) {
    $logger->error('Sample Test 5 has an invalid block plugin.');
    return;
  }

  $uuid = substr($plugin, strlen('block_content:'));

  $ids = \Drupal::entityQuery('block_content')
    ->accessCheck(FALSE)
    ->condition('uuid', $uuid)
    ->execute();

  if (empty($ids)) {
    $logger->warning('Sample Test 5 content was not found.');
    return;
  }

  $sample_test5_content = BlockContent::load(reset($ids));

  if (!$sample_test5_content) {
    return;
  }

  $sample_test5_content->set('info', 'Sample Test 5 [en]');
  $sample_test5_content->set('body', [
    'value' => get_localized_sample_test5_content('en'),
    'format' => 'full_html',
  ]);

  $sample_test5_content->save();

  add_sample_test5_translations($sample_test5_content, FALSE);

  $logger->notice('Sample Test 5 content updated.');
}









/**
 * Returns localized Sample Test 7 content.
 */
function get_localized_sample_test7_content($langcode): string {
  $html = '<div class="sample-test7">';

  $html .= '<h2>' . t('Sample Test 7', [], [
    'langcode' => $langcode,
  ]) . '</h2>';

  $html .= '<p>' . t(
    'Welcome to our API Developer Portal.',
    [],
    ['langcode' => $langcode]
  ) . '</p>';

  $html .= '</div>';

  return $html;
}


/**
 * Adds translations for Sample Test 7.
 */
function add_sample_test7_translations(
  BlockContent $sample_test7_content,
  $overwrite = TRUE
) {
  $languages = \Drupal::languageManager()->getLanguages();

  foreach ($languages as $language) {
    $lang = $language->getId();

    if (
      $lang === 'en' ||
      ($sample_test7_content->hasTranslation($lang) && !$overwrite)
    ) {
      continue;
    }

    if ($sample_test7_content->hasTranslation($lang)) {
      $sample_test7_content->removeTranslation($lang);
    }

    $translation = [
      'info' => t('Sample Test 7', [], [
        'langcode' => $lang,
      ]) . ' [' . $lang . ']',
      'type' => 'basic',
      'body' => [
        'value' => get_localized_sample_test7_content($lang),
        'format' => 'full_html',
      ],
      'langcode' => $lang,
    ];

    $sample_test7_content->addTranslation($lang, $translation);
  }

  $sample_test7_content->save();
}


/**
 * Creates Sample Test 7 and attaches it to the homepage.
 */
function apim_profile_create_sample_test7_block() {
  $logger = \Drupal::logger('apim_profile');

  // 1. Create Sample Test 7 content.
  $sample_test7_content = BlockContent::create([
    'info' => 'Sample Test 7 [end]',
    'type' => 'basic',
    'body' => [
      'value' => get_localized_sample_test7_content('en'),
      'format' => 'full_html',
    ],
    'langcode' => 'en',
  ]);

  add_sample_test7_translations($sample_test7_content);

  // 2. Create the block configuration.
  $plugin_id = 'block_content:' . $sample_test7_content->uuid();

  $sample_test7_values = [
    'id' => 'sample_test7',
    'plugin' => $plugin_id,
    'provider' => NULL,
    'region' => 'disabled',
    'settings' => [
      'id' => $plugin_id,
      'label' => 'Sample Test 7',
      'provider' => 'block_content',
      'label_display' => FALSE,
    ],
    'theme' => 'connect_theme',
    'visibility' => [],
    'weight' => 12,
  ];

  $sample_test7_block = Block::create($sample_test7_values);
  $sample_test7_block->save();

  // 3. Load the homepage.
  $page = Page::load('welcome');

  if ($page !== NULL) {
    $page_variants = $page->getVariants();

    if (!empty($page_variants)) {
      $page_variant = reset($page_variants);
      $variant_plugin = $page_variant->getVariantPlugin();

      // 7. Attach Sample Test 7 to the homepage.
      $add_sample_test7_block = [
        'id' => $plugin_id,
        'label' => 'Sample Test 7',
        'provider' => 'block_content',
        'label_display' => FALSE,
        'view_mode' => 'full',
        'status' => TRUE,
        'region' => 'col_1',
        'weight' => 12,
        'context_mapping' => [],
      ];

      $variant_plugin->addBlock($add_sample_test7_block);
      $page_variant->save();

      $logger->notice(
        'Sample Test 7 created and attached to the homepage.'
      );
    }
    else {
      $logger->warning('No homepage variants were found.');
    }
  }
  else {
    $logger->warning('Welcome homepage was not found.');
  }
}


/**
 * Updates Sample Test 7 content and adds missing translations.
 */
function apim_profile_update_sample_test7_block() {
  $sample_test7_block = Block::load('sample_test7');

  if ($sample_test7_block === NULL) {
    \Drupal::logger('apim_profile')->warning(
      'Sample Test 7 block was not found.'
    );
    return;
  }

  $plugin_id = $sample_test7_block->get('plugin');
  $parts = explode(':', $plugin_id);
  $block_content_uuid = $parts[1] ?? NULL;

  if (!$block_content_uuid) {
    return;
  }

  $ids = \Drupal::entityQuery('block_content')
    ->accessCheck(FALSE)
    ->condition('uuid', $block_content_uuid)
    ->execute();

  if (empty($ids)) {
    \Drupal::logger('apim_profile')->warning(
      'Sample Test 7 content was not found.'
    );
    return;
  }

  $sample_test7_content = BlockContent::load(reset($ids));

  if ($sample_test7_content !== NULL) {
    $sample_test7_content->set('info', 'Sample Test 7 [en]');
    $sample_test7_content->set('body', [
      'value' => get_localized_sample_test7_content('en'),
      'format' => 'full_html',
    ]);

    $sample_test7_content->save();

    add_sample_test7_translations($sample_test7_content, FALSE);

    \Drupal::logger('apim_profile')->notice(
      'Sample Test 7 content updated.'
    );
  }
}





/**
 * Create and place the Sample Test 8 block on the Welcome page.
 *
 * @throws \Drupal\Core\Entity\EntityStorageException
 */
function apim_profile_create_sample_test8_block(): void {
\Drupal::logger('apim_profile')->notice(
  'TEST8: Function started.'
);
  // 1. Avoid creating the same block again.
  if (Block::load('sample_test8') !== NULL) {
    return;
  }

  // 2. Create reusable block content.
  $sample_test8_content = BlockContent::create([
    'info' => 'Sample Test 8',
    'type' => 'basic',
    'body' => [
      'value' => '<div class="sample-test8">
        <h2>Sample Test 8</h2>
        <p>This block was created automatically during portal installation.</p>
      </div>',
      'format' => 'full_html',
    ],
    'langcode' => 'en',
  ]);

  $sample_test8_content->save();

  // 3. Create the Drupal block configuration.
  $plugin_id = 'block_content:' . $sample_test8_content->uuid();

  $block = Block::create([
    'id' => 'sample_test8',
    'plugin' => $plugin_id,
    'provider' => NULL,
    'region' => 'disabled',
    'settings' => [
      'id' => $plugin_id,
      'label' => 'Sample Test 8',
      'provider' => 'block_content',
      'label_display' => FALSE,
    ],
    'theme' => 'connect_theme',
    'visibility' => [],
    'weight' => 6,
  ]);

  $block->save();

  // 4. Place the block on the Welcome page.
  $page = Page::load('welcome');

  if ($page === NULL) {
    \Drupal::logger('apim_profile')->warning(
      'Sample Test 8 was created, but the Welcome page was not found.'
    );
    return;
  }

  $variants = $page->getVariants();

  if (empty($variants)) {
    \Drupal::logger('apim_profile')->warning(
      'Sample Test 8 was created, but the Welcome page has no variants.'
    );
    return;
  }

  $variant = reset($variants);
  $variant_plugin = $variant->getVariantPlugin();

  $variant_plugin->addBlock([
    'id' => $plugin_id,
    'label' => 'Sample Test 8',
    'provider' => 'block_content',
    'label_display' => FALSE,
    'view_mode' => 'full',
    'status' => TRUE,
    'region' => 'col_1',
    'weight' => 6,
    'context_mapping' => [],
  ]);

  $variant->save();

  \Drupal::logger('apim_profile')->notice(
    'Sample Test 8 was created and placed on the Welcome page.'
  );
}
