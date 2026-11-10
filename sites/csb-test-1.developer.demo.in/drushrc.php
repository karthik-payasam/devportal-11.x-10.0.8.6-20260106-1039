<?php 

# DO NOT REMOVE: drushrcv2

# db_passwd is only stored in the vhost file. Everything else will be directly stored in the drushrc.php

$options['db_type'] = 'mysql';
$options['db_host'] = '127.0.0.1';
$options['db_port'] = '3306';
$options['db_name'] = 'ibm_drupal_11_csb_test_1_portal';
$options['db_user'] = 'root';
$options['db_enckey'] = 'cH jeF831z5Vhe1BT97cC19MvGRJP1Uasw ByIa teo=';
$options['db_enckeyhistory'] = '""';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '11.1.9',
      'description' => 'This platform is running Drupal 11.1.9',
    ),
  ),
  'profiles' => 
  array (
    'apim_profile' => 
    array (
      'name' => 'IBM API Developer Portal',
      'info' => 
      array (
        'name' => 'IBM API Developer Portal',
        'type' => 'profile',
        'description' => 'Provides modules to access the content in an API Manager node and a skeleton site which application developers can use to browse APIs.',
        'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
        'version' => 'VERSION',
        'distribution' => 
        array (
          'name' => 'IBM API Developer Portal',
        ),
        'install' => 
        array (
          0 => 'node',
          1 => 'history',
          2 => 'block',
          3 => 'page_cache',
          4 => 'filter',
          5 => 'block_content',
          6 => 'dynamic_page_cache',
          7 => 'breakpoint',
          8 => 'config',
          9 => 'comment',
          10 => 'datetime',
          11 => 'contextual',
          12 => 'contact',
          13 => 'help',
          14 => 'image',
          15 => 'options',
          16 => 'inline_form_errors',
          17 => 'path',
          18 => 'taxonomy',
          19 => 'shortcut',
          20 => 'toolbar',
          21 => 'field_ui',
          22 => 'file',
          23 => 'rdf',
          24 => 'views',
          25 => 'views_ui',
          26 => 'editor',
          27 => 'automated_cron',
          28 => 'ban',
          29 => 'menu_ui',
          30 => 'forum',
          31 => 'blog',
          32 => 'big_pipe',
          33 => 'apic_letter_avatar',
          34 => 'avatars',
          35 => 'link',
          36 => 'field_group',
          37 => 'menu_link_content',
          38 => 'update',
          39 => 'page_manager',
          40 => 'page_manager_ui',
          41 => 'content_translation',
          42 => 'language',
          43 => 'locale',
          44 => 'user',
          45 => 'telephone',
          46 => 'votingapi_widgets',
          47 => 'cshs',
          48 => 'search404',
          49 => 'panels',
          50 => 'change_pwd_page',
          51 => 'libraries',
          52 => 'responsive_image',
          53 => 'config_update',
          54 => 'password_policy',
          55 => 'password_policy_length',
          56 => 'password_policy_character_types',
          57 => 'password_policy_username',
          58 => 'password_policy_consecutive',
          59 => 'views_bootstrap',
          60 => 'taxonomy_menu',
          61 => 'social_media_links',
          62 => 'health_check',
          63 => 'editor_advanced_link',
          64 => 'linkit',
          65 => 'select_or_other',
          66 => 'crop',
          67 => 'focal_point',
          68 => 'dropzonejs',
          69 => 'honeypot',
          70 => 'twig_tweak',
          71 => 'masonry',
          72 => 'masonry_views',
          73 => 'views_ajax_history',
          74 => 'contact_block',
          75 => 'config_translation',
          76 => 'better_exposed_filters',
          77 => 'search_api',
          78 => 'search_api_db',
          79 => 'search_api_autocomplete',
          80 => 'views_autocomplete_filters',
          81 => 'robotstxt',
          82 => 'flood_control',
          83 => 'key',
          84 => 'encrypt',
          85 => 'real_aes',
          86 => 'mimemail',
          87 => 'password_strength',
          88 => 'csp',
          89 => 'perimeter',
          90 => 'account_field_split',
          91 => 'noopener_filter',
          92 => 'session_based_temp_store',
          93 => 'select_translation',
          94 => 'term_csv_export_import',
          95 => 'ibm_apim',
          96 => 'ibm_log_stdout',
          97 => 'ibm_apic_mail',
          98 => 'ibm_apic_flood_control_ui',
          99 => 'ibm_event_log',
          100 => 'auth_apic',
          101 => 'consumerorg',
          102 => 'apic_app',
          103 => 'apic_api',
          104 => 'product',
          105 => 'themegenerator',
          106 => 'drushadmin',
          107 => 'drush_language',
          108 => 'unlimited_number',
          109 => 'restrict_by_ip',
          110 => 'ckeditor5',
          111 => 'media',
          112 => 'content_synchronizer',
          113 => 'fontawesome',
          114 => 'jquery_ui_resizable',
          115 => 'navigation',
          116 => 'navigation_top_bar',
          117 => 'jquery_ui',
          118 => 'jquery_ui_draggable',
          119 => 'jquery_ui_accordion',
          120 => 'jquery_ui_droppable',
          121 => 'bootstrap_layouts',
          122 => 'jquery_ui_effects',
          123 => 'maxlength',
          124 => 'expand_collapse_formatter',
          125 => 'file_upload_secure_validator',
        ),
        'themes' => 
        array (
          0 => 'olivero',
          1 => 'claro',
          2 => 'stable9',
          3 => 'connect_theme',
        ),
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/profiles/apim_profile/apim_profile.info.yml',
      'path' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/profiles/apim_profile',
      'version' => '11.1.9',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
  ),
  'themes' => 
  array (
    'claro' => 
    array (
      'name' => 'Claro',
      'type' => 'theme',
      'description' => 'A clean, accessible, and powerful Drupal administration theme.',
      'alt text' => 'Screenshot of Claro, Drupal administration theme.',
      'package' => 'Core',
      'version' => '11.1.9',
      'libraries' => 
      array (
        0 => 'core/drupal.message',
        1 => 'core/normalize',
        2 => 'claro/global-styling',
      ),
      'libraries-override' => 
      array (
        'core/drupal.tabledrag' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/tabledrag.module.css' => 'css/components/tabledrag.css',
            ),
          ),
        ),
        'core/drupal.ajax' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/ajax-progress.module.css' => 'css/components/ajax-progress.module.css',
            ),
          ),
        ),
        'core/drupal.autocomplete' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/autocomplete-loading.module.css' => 'css/components/autocomplete-loading.module.css',
            ),
          ),
        ),
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/system-status-counter.css' => 'css/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => false,
            ),
          ),
        ),
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/components/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => false,
            ),
          ),
        ),
        'core/internal.jquery_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'assets/vendor/jquery.ui/themes/base/theme.css' => false,
            ),
          ),
        ),
        'core/drupal.dialog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
            ),
          ),
        ),
        'user/drupal.user' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/user.module.css' => false,
            ),
          ),
        ),
        'field_ui/drupal.field_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui.admin.css' => 'css/theme/field-ui.admin.css',
            ),
          ),
        ),
        'node/drupal.node' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => false,
            ),
          ),
        ),
        'node/form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => false,
            ),
          ),
        ),
        'toolbar/toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/toolbar.module.css' => 'css/components/toolbar.module.css',
            ),
            'theme' => 
            array (
              'css/toolbar.theme.css' => 'css/theme/toolbar.theme.css',
              'css/toolbar.icons.theme.css' => 'css/theme/toolbar.icons.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar.menu' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/toolbar.menu.css' => 'css/state/toolbar.menu.css',
            ),
          ),
        ),
        'views_ui/admin.styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views_ui.admin.css' => 'css/components/views_ui.admin.css',
            ),
            'theme' => 
            array (
              'css/views_ui.admin.theme.css' => 'css/theme/views_ui.admin.theme.css',
            ),
          ),
        ),
      ),
      'libraries-extend' => 
      array (
        'core/drupal.collapse' => 
        array (
          0 => 'claro/details-focus',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'claro/claro.drupal.dialog',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'claro/dropbutton',
        ),
        'core/drupal.checkbox' => 
        array (
          0 => 'claro/checkbox',
        ),
        'core/drupal.message' => 
        array (
          0 => 'claro/messages',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'claro/progress',
        ),
        'core/drupal.tabbingmanager' => 
        array (
          0 => 'claro/tabbingmanager',
        ),
        'core/drupal.tabledrag' => 
        array (
          0 => 'claro/claro.tabledrag',
        ),
        'core/drupal.tableselect' => 
        array (
          0 => 'claro/tableselect',
        ),
        'core/drupal.vertical-tabs' => 
        array (
          0 => 'claro/vertical-tabs',
        ),
        'file/drupal.file' => 
        array (
          0 => 'claro/file',
        ),
        'filter/drupal.filter.admin' => 
        array (
          0 => 'claro/filter',
        ),
        'filter/drupal.filter' => 
        array (
          0 => 'claro/filter',
        ),
        'system/admin' => 
        array (
          0 => 'claro/system.admin',
        ),
        'core/drupal.autocomplete' => 
        array (
          0 => 'claro/autocomplete',
        ),
        'shortcut/drupal.shortcut' => 
        array (
          0 => 'claro/drupal.shortcut',
        ),
        'core/drupal.ajax' => 
        array (
          0 => 'claro/ajax',
        ),
        'user/drupal.user' => 
        array (
          0 => 'claro/form.password-confirm',
        ),
        'node/drupal.node.preview' => 
        array (
          0 => 'claro/drupal.node.preview',
        ),
        'views/views.module' => 
        array (
          0 => 'claro/views',
        ),
        'views_ui/admin.styling' => 
        array (
          0 => 'claro/views_ui',
        ),
        'media/media_embed_ckeditor_theme' => 
        array (
          0 => 'claro/classy.media_embed_ckeditor_theme',
        ),
        'media_library/ui' => 
        array (
          0 => 'claro/media_library.ui',
        ),
        'media_library/view' => 
        array (
          0 => 'claro/media_library.theme',
        ),
        'media_library/widget' => 
        array (
          0 => 'claro/media_library.theme',
        ),
        'image/admin' => 
        array (
          0 => 'claro/image.admin',
        ),
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'pre_content' => 'Pre-content',
        'breadcrumb' => 'Breadcrumb',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'sidebar_first' => 'First sidebar',
      ),
      'regions_hidden' => 
      array (
        0 => 'sidebar_first',
        1 => 'page_top',
        2 => 'page_bottom',
      ),
      'core_version_requirement' => '11.1.9',
      'core_incompatible' => false,
      'lifecycle' => 'stable',
      'mtime' => 1762973408,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/claro/screenshot.png',
      'php' => '8.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/claro',
      'status' => 1,
    ),
    'olivero' => 
    array (
      'name' => 'Olivero',
      'type' => 'theme',
      'description' => 'A clean, accessible, and flexible Drupal front-end theme.',
      'alt text' => 'Screenshot of Olivero, Drupal front-end theme.',
      'package' => 'Core',
      'version' => '11.1.9',
      'libraries' => 
      array (
        0 => 'olivero/global-styling',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'hero' => 'Hero (full width)',
        'highlighted' => 'Highlighted',
        'breadcrumb' => 'Breadcrumb',
        'social' => 'Social Bar',
        'content_above' => 'Content Above',
        'content' => 'Content',
        'sidebar' => 'Sidebar',
        'content_below' => 'Content Below',
        'footer_top' => 'Footer Top',
        'footer_bottom' => 'Footer Bottom',
      ),
      'libraries-override' => 
      array (
        'core/drupal.ajax' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'core/components/ajax-progress.module.css' => 'css/components/ajax-progress.module.css',
            ),
          ),
        ),
        'core/drupal.autocomplete' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'core/components/autocomplete-loading.module.css' => 'css/components/autocomplete-loading.module.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => false,
            ),
          ),
        ),
        'core/drupal.checkbox' => false,
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/components/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => 'css/components/vertical-tabs.css',
            ),
          ),
        ),
        'media/oembed.formatter' => false,
        'layout_builder/twocol_section' => 'olivero/layout_builder_twocol_section',
        'layout_builder/threecol_section' => 'olivero/layout_builder_threecol_section',
        'layout_builder/fourcol_section' => 'olivero/layout_builder_fourcol_section',
      ),
      'libraries-extend' => 
      array (
        'core/drupal.message' => 
        array (
          0 => 'olivero/drupal.message',
        ),
        'core/drupal.collapse' => 
        array (
          0 => 'olivero/details',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'olivero/drupal.dialog',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'olivero/progress',
        ),
        'core/drupal.tabledrag' => 
        array (
          0 => 'olivero/tabledrag',
        ),
        'layout_discovery/onecol' => 
        array (
          0 => 'olivero/layout_discovery_section',
        ),
        'layout_discovery/twocol_bricks' => 
        array (
          0 => 'olivero/layout_discovery_section',
        ),
        'layout_discovery/twocol' => 
        array (
          0 => 'olivero/layout_discovery_section',
        ),
        'layout_discovery/threecol_25_50_25' => 
        array (
          0 => 'olivero/layout_discovery_section',
        ),
        'layout_discovery/threecol_33_34_33' => 
        array (
          0 => 'olivero/layout_discovery_section',
        ),
        'node/drupal.node.preview' => 
        array (
          0 => 'olivero/drupal.node.preview',
        ),
        'content_moderation/content_moderation' => 
        array (
          0 => 'olivero/content_moderation',
        ),
      ),
      'core_version_requirement' => '11.1.9',
      'core_incompatible' => false,
      'lifecycle' => 'stable',
      'mtime' => 1762973408,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/olivero/screenshot.png',
      'php' => '8.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/olivero',
      'status' => 1,
    ),
    'stable9' => 
    array (
      'name' => 'Stable 9',
      'type' => 'theme',
      'description' => 'A base theme using Drupal 9.0.0\'s core markup and CSS.',
      'package' => 'Core',
      'version' => '11.1.9',
      'hidden' => true,
      'libraries-override' => 
      array (
        'block/drupal.block.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/block.admin.css' => 'css/block/block.admin.css',
            ),
          ),
        ),
        'announcements_feed/drupal.announcements_feed.page' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/announcements_feed.page.css' => 'css/announcements_feed/announcements_feed.page.css',
            ),
          ),
        ),
        'announcements_feed/drupal.announcements_feed.dialog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/announcements_feed.dialog.css' => 'css/announcements_feed/announcements_feed.dialog.css',
            ),
          ),
        ),
        'announcements_feed/drupal.announcements_feed.toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/announcements_feed.toolbar.css' => 'css/announcements_feed/announcements_feed.toolbar.css',
            ),
          ),
        ),
        'config_translation/drupal.config_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
            ),
          ),
        ),
        'content_translation/drupal.content_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
            ),
          ),
        ),
        'content_moderation/content_moderation' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/content_moderation.module.css' => 'css/content_moderation/content_moderation.module.css',
            ),
            'theme' => 
            array (
              'css/content_moderation.theme.css' => 'css/content_moderation/content_moderation.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-links' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.module.css' => 'css/contextual/contextual.module.css',
            ),
            'theme' => 
            array (
              'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
              'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
            ),
          ),
        ),
        'core/drupal.ajax' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/ajax-progress.module.css' => 'css/core/components/ajax-progress.module.css',
            ),
          ),
        ),
        'core/drupal.autocomplete' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/autocomplete-loading.module.css' => 'css/core/components/autocomplete-loading.module.css',
            ),
          ),
        ),
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.progress' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/progress.module.css' => 'css/core/components/progress.module.css',
            ),
          ),
        ),
        'core/drupal.tabledrag' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/tabledrag.module.css' => 'css/core/components/tabledrag.module.css',
              'misc/components/tree-child.module.css' => 'css/core/components/tree-child.module.css',
            ),
          ),
        ),
        'core/drupal.tableheader' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/sticky-header.module.css' => 'css/core/components/sticky-header.module.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
            ),
          ),
        ),
        'core/normalize' => 'stable9/normalize',
        'dblog/drupal.dblog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/dblog.module.css' => 'css/dblog/dblog.module.css',
            ),
          ),
        ),
        'field_ui/drupal.field_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
            ),
          ),
        ),
        'filter/caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/filter/filter.caption.css',
            ),
          ),
        ),
        'image/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/image.admin.css' => 'css/image/image.admin.css',
            ),
          ),
        ),
        'language/drupal.language.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/language.admin.css' => 'css/language/language.admin.css',
            ),
          ),
        ),
        'layout_discovery/onecol' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/onecol/onecol.css' => 'layouts/layout_discovery/onecol/onecol.css',
            ),
          ),
        ),
        'layout_discovery/twocol_bricks' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/twocol_bricks/twocol_bricks.css' => 'layouts/layout_discovery/twocol_bricks/twocol_bricks.css',
            ),
          ),
        ),
        'layout_discovery/twocol' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/twocol/twocol.css' => 'layouts/layout_discovery/twocol/twocol.css',
            ),
          ),
        ),
        'layout_discovery/threecol_25_50_25' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/threecol_25_50_25/threecol_25_50_25.css' => 'layouts/layout_discovery/threecol_25_50_25/threecol_25_50_25.css',
            ),
          ),
        ),
        'layout_discovery/threecol_33_34_33' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/threecol_33_34_33/threecol_33_34_33.css' => 'layouts/layout_discovery/threecol_33_34_33/threecol_33_34_33.css',
            ),
          ),
        ),
        'layout_builder/drupal.layout_builder' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/layout-builder.css' => 'css/layout_builder/layout-builder.css',
            ),
          ),
        ),
        'layout_builder/twocol_section' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/twocol_section/twocol_section.css' => 'layouts/layout_builder/twocol_section/twocol_section.css',
            ),
          ),
        ),
        'layout_builder/threecol_section' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/threecol_section/threecol_section.css' => 'layouts/layout_builder/threecol_section/threecol_section.css',
            ),
          ),
        ),
        'layout_builder/fourcol_section' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/fourcol_section/fourcol_section.css' => 'layouts/layout_builder/fourcol_section/fourcol_section.css',
            ),
          ),
        ),
        'locale/drupal.locale.admin' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/locale.admin.css' => 'css/locale/locale.admin.css',
            ),
          ),
        ),
        'media/filter.caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/media/filter.caption.css',
            ),
          ),
        ),
        'media/oembed.formatter' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.formatter.css' => 'css/media/oembed.formatter.css',
            ),
          ),
        ),
        'media/oembed.frame' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.frame.css' => 'css/media/oembed.frame.css',
            ),
          ),
        ),
        'menu_ui/drupal.menu_ui.adminforms' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
            ),
          ),
        ),
        'migrate_drupal_ui/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/upgrade-analysis-report-tables.css' => 'css/migrate_drupal_ui/components/upgrade-analysis-report-tables.css',
            ),
          ),
        ),
        'node/drupal.node' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.preview' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.preview.css' => 'css/node/node.preview.css',
            ),
          ),
        ),
        'node/form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.admin.css' => 'css/node/node.admin.css',
            ),
          ),
        ),
        'settings_tray/drupal.settings_tray' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/settings_tray.module.css' => 'css/settings_tray/settings_tray.module.css',
              'css/settings_tray.motion.css' => 'css/settings_tray/settings_tray.motion.css',
              'css/settings_tray.toolbar.css' => 'css/settings_tray/settings_tray.toolbar.css',
            ),
            'theme' => 
            array (
              'css/settings_tray.theme.css' => 'css/settings_tray/settings_tray.theme.css',
            ),
          ),
        ),
        'shortcut/drupal.shortcut' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
              'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
            ),
          ),
        ),
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/align.module.css' => 'css/system/components/align.module.css',
              'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
              'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
              'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
              'css/components/details.module.css' => 'css/system/components/details.module.css',
              'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
              'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
              'css/components/js.module.css' => 'css/system/components/js.module.css',
              'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
              'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
              'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
              'css/components/resize.module.css' => 'css/system/components/resize.module.css',
              'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
              'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => 'css/system/system.admin.css',
            ),
          ),
        ),
        'system/maintenance' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.maintenance.css' => 'css/system/system.maintenance.css',
            ),
          ),
        ),
        'system/diff' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/system.diff.css' => 'css/system/system.diff.css',
            ),
          ),
        ),
        'taxonomy/drupal.taxonomy' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
            ),
            'theme' => 
            array (
              'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
              'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar.menu' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
            ),
          ),
        ),
        'update/drupal.update.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
            ),
          ),
        ),
        'user/drupal.user' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/user.module.css' => 'css/user/user.module.css',
            ),
          ),
        ),
        'user/drupal.user.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.admin.css' => 'css/user/user.admin.css',
            ),
          ),
        ),
        'user/drupal.user.icons' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
            ),
          ),
        ),
        'views/views.module' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views.module.css' => 'css/views/views.module.css',
            ),
          ),
        ),
        'views_ui/admin.styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
            ),
            'theme' => 
            array (
              'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
              'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
            ),
          ),
        ),
        'field_ui/drupal.field_ui_table' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui_display_mode_table.css' => 'css/field_ui/field_ui_display_mode_table.css',
            ),
          ),
        ),
      ),
      'core_version_requirement' => '11.1.9',
      'core_incompatible' => false,
      'lifecycle' => 'stable',
      'mtime' => 1762973408,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stable9/screenshot.png',
      'php' => '8.3.0',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/stable9',
      'status' => 1,
    ),
    'stark' => 
    array (
      'name' => 'Stark',
      'type' => 'theme',
      'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
      'package' => 'Core',
      'version' => '11.1.9',
      'starterkit' => false,
      'core_version_requirement' => '11.1.9',
      'core_incompatible' => false,
      'lifecycle' => 'stable',
      'mtime' => 1762973408,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stark/screenshot.png',
      'php' => '8.3.0',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/stark',
      'status' => 0,
    ),
    'starterkit_theme' => 
    array (
      'name' => 'Starterkit theme',
      'type' => 'theme',
      'base theme' => 'stable9',
      'hidden' => true,
      'version' => '11.1.9',
      'libraries' => 
      array (
        0 => 'starterkit_theme/base',
        1 => 'starterkit_theme/messages',
        2 => 'core/normalize',
      ),
      'libraries-extend' => 
      array (
        'user/drupal.user' => 
        array (
          0 => 'starterkit_theme/user',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'starterkit_theme/dropbutton',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'starterkit_theme/dialog',
        ),
        'file/drupal.file' => 
        array (
          0 => 'starterkit_theme/file',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'starterkit_theme/progress',
        ),
      ),
      'core_version_requirement' => '11.1.9',
      'core_incompatible' => false,
      'lifecycle' => 'stable',
      'mtime' => 1762973408,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'description' => '',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/starterkit_theme/screenshot.png',
      'php' => '8.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'stable9',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/starterkit_theme',
      'status' => 0,
    ),
    'bootstrap' => 
    array (
      'type' => 'theme',
      'core_version_requirement' => '^10.4 || ^11',
      'name' => 'Bootstrap',
      'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
      'package' => 'Bootstrap',
      'dependencies' => 
      array (
        0 => 'jquery_ui:jquery_ui',
        1 => 'jquery_ui_draggable:jquery_ui_draggable',
        2 => 'jquery_ui_resizable:jquery_ui_resizable',
      ),
      'regions' => 
      array (
        'navigation' => 'Navigation',
        'navigation_collapsible' => 'Navigation (Collapsible)',
        'header' => 'Top Bar',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'sidebar_first' => 'Primary',
        'sidebar_second' => 'Secondary',
        'footer' => 'Footer',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
      ),
      'libraries' => 
      array (
        0 => 'bootstrap/bootstrap_pre_init',
        1 => 'bootstrap/theme',
      ),
      'libraries-extend' => 
      array (
        'core/drupal.ajax' => 
        array (
          0 => 'bootstrap/drupal.ajax',
        ),
        'core/drupal.autocomplete' => 
        array (
          0 => 'bootstrap/drupal.autocomplete',
        ),
        'core/drupal.dialog.ajax' => 
        array (
          0 => 'bootstrap/drupal.dialog.ajax',
        ),
        'core/drupal.form' => 
        array (
          0 => 'bootstrap/drupal.form',
        ),
        'core/drupal.message' => 
        array (
          0 => 'bootstrap/drupal.message',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'bootstrap/drupal.progress',
        ),
        'core/drupal.states' => 
        array (
          0 => 'bootstrap/drupal.states',
        ),
        'core/drupal.tabledrag' => 
        array (
          0 => 'bootstrap/drupal.tabledrag',
        ),
        'image_widget_crop/cropper.integration' => 
        array (
          0 => 'bootstrap/image_widget_crop',
        ),
        'views/views.ajax' => 
        array (
          0 => 'bootstrap/views.ajax',
        ),
      ),
      'libraries-override' => 
      array (
        'core/drupal.batch' => 'bootstrap/drupal.batch',
        'core/drupal.dropbutton' => 'bootstrap/dropdown',
        'core/drupal.vertical-tabs' => 'bootstrap/drupal.vertical-tabs',
        'filter/drupal.filter' => 'bootstrap/drupal.filter',
        'system/admin' => false,
        'text/drupal.text' => 'bootstrap/drupal.text',
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/components/ajax-progress.module.css' => false,
              'misc/components/autocomplete-loading.module.css' => false,
              'misc/components/tabledrag.module.css' => false,
            ),
          ),
        ),
        'file/drupal.file' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/file.admin.css' => false,
            ),
          ),
        ),
        'filter/drupal.filter.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => false,
            ),
          ),
        ),
        'node/drupal.node.preview' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.preview.css' => false,
            ),
          ),
        ),
      ),
      'version' => '8.x-3.39',
      'project' => 'bootstrap',
      'datestamp' => 1759983838,
      'core_incompatible' => false,
      'lifecycle' => 'stable',
      'mtime' => 1759983838,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'themes/bootstrap/screenshot.png',
      'php' => '8.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/themes/bootstrap',
      'status' => 1,
    ),
    'connect_theme' => 
    array (
      'type' => 'theme',
      'base theme' => 'bootstrap',
      'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
      'version' => '6.3.1',
      'project' => 'connect_theme',
      'name' => 'connect_theme',
      'description' => 'Uses the Bootstrap framework Sass source files and must be compiled.',
      'package' => 'Bootstrap',
      'regions' => 
      array (
        'navigation' => 'Navigation',
        'navigation_right' => 'Navigation Right',
        'topbar' => 'Top Bar',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'sidebar_first' => 'Primary',
        'sidebar_second' => 'Secondary',
        'footer' => 'Footer',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'collapse_left' => 'Collapse Left',
        'collapse_right' => 'Collapse Right',
        'disabled' => 'Disabled',
      ),
      'libraries' => 
      array (
        0 => 'connect_theme/dropit',
        1 => 'connect_theme/fix-tabledrag',
      ),
      'libraries-extend' => 
      array (
        'bootstrap/framework' => 
        array (
          0 => 'connect_theme/framework',
        ),
      ),
      'libraries-override' => 
      array (
        'bootstrap/drupal.message' => 'connect_theme/drupal.message',
      ),
      'interface translation project' => 'connect_theme',
      'core_incompatible' => false,
      'lifecycle' => 'stable',
      'mtime' => 1767695779,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'themes/connect_theme/screenshot.png',
      'php' => '8.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'bootstrap',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/themes/connect_theme',
      'status' => 1,
    ),
  ),
);
$options['installed'] = true;
$filename = "/var/aegir/config/server_master/nginx/vhost.d/csb-test-1.developer.demo.in";
if (file_exists($filename) && (!function_exists('drush_get_option') || (function_exists('drush_get_option') && !drush_get_option('db_passwd', '', 'site')))) {
    $file = new SplFileObject($filename);

    while (!$file->eof()) {
        $line=rtrim($file->fgets());
        if (strpos($line,"  fastcgi_param db_") === 0) {
            $line = ltrim($line, "  fastcgi_param ");
            $line = rtrim($line, ";");
            $bits = array_values(array_filter(explode(' ',$line)));
            # Even though everything except db_passwd should be hardcoded from the option_keys
            # loop, sometimes it is not, so we add all relevant fastcgi params here
            $options[$bits[0]] = $bits[1];
        }
    }
}

foreach (array('db_type', 'db_port', 'db_host', 'db_user', 'db_passwd', 'db_name') as $key): 
    if (isset($options[$key]) and $options[$key]) {
        $_SERVER[$key] = $options[$key];
        if (function_exists('drush_set_option')) { 
            drush_set_option($key, $options[$key]);
        }
    }
endforeach;

# Local non-aegir-generated additions.
@include_once('/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/sites/csb-test-1.developer.demo.in/local.drushrc.php');
