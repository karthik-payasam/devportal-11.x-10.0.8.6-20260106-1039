<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'demo_umami',
  1 => 'minimal',
  2 => 'standard',
  3 => 'apim_profile',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'poll_devel' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/poll/modules/poll_devel/poll_devel.info.yml',
        'basename' => 'poll_devel.info.yml',
        'name' => 'Poll Devel',
        'info' => 
        array (
          'name' => 'Poll Devel',
          'type' => 'module',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'description' => 'Devel integration for the Poll module',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'poll:poll',
            1 => 'devel:devel',
            2 => 'devel_generate:devel_generate',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '2.0.0-alpha5',
          'project' => 'poll',
          'datestamp' => 1744287710,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/poll/poll.info.yml',
        'basename' => 'poll.info.yml',
        'name' => 'Poll',
        'info' => 
        array (
          'name' => 'Poll',
          'type' => 'module',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Other',
          'configure' => 'poll.settings',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:node',
            2 => 'drupal:options',
            3 => 'drupal:views',
            4 => 'drupal:user',
          ),
          'version' => '2.0.0-alpha5',
          'project' => 'poll',
          'datestamp' => 1744287710,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'smart_trim_translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/smart_trim/tests/modules/smart_trim_translation_test/smart_trim_translation_test.info.yml',
        'basename' => 'smart_trim_translation_test.info.yml',
        'name' => 'Smart Trim translation test',
        'info' => 
        array (
          'name' => 'Smart Trim translation test',
          'type' => 'module',
          'description' => 'Used to test Smart Trim translations.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'smart_trim:smart_trim',
          ),
          'version' => '2.2.0',
          'project' => 'smart_trim',
          'datestamp' => 1723847278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'smart_trim_hooks_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/smart_trim/tests/modules/smart_trim_hooks_test/smart_trim_hooks_test.info.yml',
        'basename' => 'smart_trim_hooks_test.info.yml',
        'name' => 'Smart Trim hooks test',
        'info' => 
        array (
          'name' => 'Smart Trim hooks test',
          'type' => 'module',
          'description' => 'Used to test Smart Trim hooks.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'smart_trim:smart_trim',
          ),
          'version' => '2.2.0',
          'project' => 'smart_trim',
          'datestamp' => 1723847278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'smart_trim_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/smart_trim/tests/themes/smart_trim_test_theme/smart_trim_test_theme.info.yml',
        'basename' => 'smart_trim_test_theme.info.yml',
        'name' => 'Smart Trim Test Theme',
        'info' => 
        array (
          'name' => 'Smart Trim Test Theme',
          'type' => 'theme',
          'description' => 'Theme for smart_trim tests.',
          'base theme' => 'stark',
          'core_version_requirement' => '^9.5 | ^10 || ^11',
          'version' => '2.2.0',
          'project' => 'smart_trim',
          'datestamp' => 1723847278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'smart_trim' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/smart_trim/smart_trim.info.yml',
        'basename' => 'smart_trim.info.yml',
        'name' => 'Smart Trim',
        'info' => 
        array (
          'name' => 'Smart Trim',
          'type' => 'module',
          'description' => 'Provides a more robust alternative to "summary or trimmed" textfield format',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:filter',
            2 => 'drupal:text',
            3 => 'token:token',
          ),
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'test_dependencies' => 
          array (
            0 => 'token_filter:token_filter',
          ),
          'version' => '2.2.0',
          'project' => 'smart_trim',
          'datestamp' => 1723847278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'votingapi_widgets' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/votingapi_widgets/votingapi_widgets.info.yml',
        'basename' => 'votingapi_widgets.info.yml',
        'name' => 'Votingapi Widgets',
        'info' => 
        array (
          'name' => 'Votingapi Widgets',
          'type' => 'module',
          'description' => 'Voting API Widgets.',
          'package' => 'Voting',
          'core_version_requirement' => '^10.3 || ^11',
          'dependencies' => 
          array (
            0 => 'votingapi:votingapi',
            1 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'forum_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/forum/tests/modules/forum_test_views/forum_test_views.info.yml',
        'basename' => 'forum_test_views.info.yml',
        'name' => 'Forum test views',
        'info' => 
        array (
          'name' => 'Forum test views',
          'type' => 'module',
          'description' => 'Provides default views for views forum tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:forum',
            1 => 'drupal:views',
          ),
          'version' => '1.0.2',
          'project' => 'forum',
          'datestamp' => 1721256611,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'forum_url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/forum/tests/modules/forum_url_alter_test/forum_url_alter_test.info.yml',
        'basename' => 'forum_url_alter_test.info.yml',
        'name' => 'forum_Url_alter tests',
        'info' => 
        array (
          'name' => 'forum_Url_alter tests',
          'type' => 'module',
          'description' => 'A support module to test altering the inbound and outbound path.',
          'package' => 'Testing',
          'version' => '1.0.2',
          'project' => 'forum',
          'datestamp' => 1721256611,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/forum/forum.info.yml',
        'basename' => 'forum.info.yml',
        'name' => 'Forum',
        'info' => 
        array (
          'name' => 'Forum',
          'type' => 'module',
          'description' => 'Provides discussion forums.',
          'core_version_requirement' => '^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:history',
            2 => 'drupal:taxonomy',
            3 => 'drupal:comment',
            4 => 'drupal:options',
          ),
          'package' => 'Forum',
          'configure' => 'forum.overview',
          'version' => '1.0.2',
          'project' => 'forum',
          'datestamp' => 1721256611,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'social_api' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/social_api/social_api.info.yml',
        'basename' => 'social_api.info.yml',
        'name' => 'Social API',
        'info' => 
        array (
          'name' => 'Social API',
          'type' => 'module',
          'description' => 'Common interface for communicating with social networking services.',
          'package' => 'Social',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'configure' => 'social_api.admin_config',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'file_upload_secure_validator' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/file_upload_secure_validator/file_upload_secure_validator.info.yml',
        'basename' => 'file_upload_secure_validator.info.yml',
        'name' => 'File Upload Secure Validator',
        'info' => 
        array (
          'name' => 'File Upload Secure Validator',
          'type' => 'module',
          'description' => 'Secure Mime Detect',
          'core_version_requirement' => '~9.5 || ^10 || ^11',
          'package' => 'Security',
          'configure' => 'file_upload_secure_validator.file-upload-secure-validator-settings',
          'version' => '2.1.0',
          'project' => 'file_upload_secure_validator',
          'datestamp' => 1725009174,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'superfish' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/superfish/superfish.info.yml',
        'basename' => 'superfish.info.yml',
        'name' => 'Superfish',
        'info' => 
        array (
          'name' => 'Superfish',
          'type' => 'module',
          'description' => 'Adds jQuery Superfish plugin to menu blocks.',
          'package' => 'User interface',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'version' => '8.x-1.13',
          'project' => 'superfish',
          'datestamp' => 1748422587,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'languageicons' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/languageicons/languageicons.info.yml',
        'basename' => 'languageicons.info.yml',
        'name' => 'Language Icons',
        'info' => 
        array (
          'name' => 'Language Icons',
          'description' => 'Adds icons to language links.',
          'dependencies' => 
          array (
            0 => 'drupal:locale',
          ),
          'package' => 'Multilingual',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'type' => 'module',
          'configure' => 'languageicons.settings',
          'version' => '2.0.0-beta5',
          'project' => 'languageicons',
          'datestamp' => 1719491754,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ultimate_cron_logger_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ultimate_cron/tests/ultimate_cron_logger_test/ultimate_cron_logger_test.info.yml',
        'basename' => 'ultimate_cron_logger_test.info.yml',
        'name' => 'Ultimate Cron Logger Test',
        'info' => 
        array (
          'name' => 'Ultimate Cron Logger Test',
          'type' => 'module',
          'description' => 'Ultimate Cron Logger Test',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ultimate_cron',
          ),
          'version' => '8.x-2.0-beta1',
          'project' => 'ultimate_cron',
          'datestamp' => 1732830344,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ultimate_cron' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ultimate_cron/ultimate_cron.info.yml',
        'basename' => 'ultimate_cron.info.yml',
        'name' => 'Ultimate Cron',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Ultimate Cron',
          'description' => 'Runs cron jobs individually in parallel using configurable rules, pool management and load balancing.',
          'core_version_requirement' => '^9.3 || ^10.1 || ^11',
          'configure' => 'entity.ultimate_cron_job.collection',
          'version' => '8.x-2.0-beta1',
          'project' => 'ultimate_cron',
          'datestamp' => 1732830344,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'health_check' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/health_check/health_check.info.yml',
        'basename' => 'health_check.info.yml',
        'name' => 'Health Check for Load Balancers',
        'info' => 
        array (
          'name' => 'Health Check for Load Balancers',
          'description' => 'Simple endpoint for Load Balancers to check Drupal site health',
          'package' => 'Performance and Scalability',
          'type' => 'module',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'version' => '3.1.0',
          'project' => 'health_check',
          'datestamp' => 1718772798,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'graphql_twig_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/graphql_twig/tests/themes/graphql_twig_test_theme/graphql_twig_test_theme.info.yml',
        'basename' => 'graphql_twig_test_theme.info.yml',
        'name' => 'GraphQL Twig test',
        'info' => 
        array (
          'name' => 'GraphQL Twig test',
          'type' => 'theme',
          'base theme' => false,
          'description' => 'Test theme for GraphQL Twig integration',
          'package' => 'GraphQL',
          'version' => 'VERSION',
          'core_version_requirement' => '^9 || ^10',
          'routes' => 
          array (
            'no_arguments' => 
            array (
              'path' => '/no-args',
              'title' => 'Shouting: DRUPAL',
              'title_query' => 'query { shout(word: "drupal") }',
              'requirements' => 
              array (
                '_access' => 'TRUE',
              ),
            ),
            'one_argument' => 
            array (
              'path' => '/one-arg/{first}',
              'title' => 'Shouting: {{shout}}',
              'title_query' => 'query ($first: String!) { shout(word: $first) }',
              'requirements' => 
              array (
                '_access' => 'TRUE',
              ),
            ),
            'multiple_arguments' => 
            array (
              'path' => '/multi-args/{first}/{second}',
              'title' => 'Shouting: {{first}} and {{second}}',
              'title_query' => 'query ($first: String!, $second: String!) { first:shout(word: $first) second:shout(word: $second) }',
              'requirements' => 
              array (
                '_access' => 'TRUE',
              ),
            ),
            'static' => 
            array (
              'path' => '/static',
              'title' => 'This is a static page',
              'requirements' => 
              array (
                '_access' => 'TRUE',
              ),
            ),
            'no_title' => 
            array (
              'path' => '/no-title',
              'requirements' => 
              array (
                '_access' => 'TRUE',
              ),
            ),
            'no_access' => 
            array (
              'path' => '/no-access',
              'requirements' => 
              array (
                '_access' => 'FALSE',
              ),
            ),
            'missing' => 
            array (
              'path' => '/missing',
              'title' => 'Missing template',
              'requirements' => 
              array (
                '_access' => 'TRUE',
              ),
            ),
            'error' => 
            array (
              'path' => '/error',
              'title' => 'Query error',
              'requirements' => 
              array (
                '_access' => 'TRUE',
              ),
            ),
          ),
          'blocks' => 
          array (
            'block_no_arguments' => 
            array (
              'label' => 'No Arguments',
            ),
            'block_one_argument' => 
            array (
              'label' => 'One Argument',
              'parameters' => 
              array (
                'first' => 
                array (
                  'title' => 'First',
                  'type' => 'textfield',
                ),
              ),
            ),
            'block_multiple_arguments' => 
            array (
              'label' => 'Multiple Arguments',
              'parameters' => 
              array (
                'first' => 
                array (
                  'title' => 'First',
                  'type' => 'textfield',
                ),
                'second' => 
                array (
                  'title' => 'First',
                  'type' => 'textfield',
                ),
              ),
            ),
            'block_static' => 
            array (
              'label' => 'Static block',
            ),
            'block_missing' => 
            array (
              'label' => 'Missing template',
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'graphql_twig' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/graphql_twig/graphql_twig.info.yml',
        'basename' => 'graphql_twig.info.yml',
        'name' => 'GraphQL Twig',
        'info' => 
        array (
          'name' => 'GraphQL Twig',
          'type' => 'module',
          'description' => 'Render twig templates with graphql data.',
          'package' => 'GraphQL',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'graphql:graphql (>= 4.0)',
            1 => 'drupal:system (>= 9.0)',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workbench' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/workbench/workbench.info.yml',
        'basename' => 'workbench.info.yml',
        'name' => 'Workbench',
        'info' => 
        array (
          'name' => 'Workbench',
          'type' => 'module',
          'description' => 'Provides convenient dashboards and shortcuts for editors.',
          'package' => 'Workbench',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:node',
            2 => 'drupal:toolbar',
            3 => 'drupal:user',
            4 => 'drupal:views',
          ),
          'version' => '8.x-1.6',
          'project' => 'workbench',
          'datestamp' => 1730131324,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_autocomplete_filters' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_autocomplete_filters/views_autocomplete_filters.info.yml',
        'basename' => 'views_autocomplete_filters.info.yml',
        'name' => 'Views Autocomplete Filters',
        'info' => 
        array (
          'name' => 'Views Autocomplete Filters',
          'type' => 'module',
          'description' => 'Use Autocomplete for string field filters.',
          'package' => 'Views',
          'core_version_requirement' => '^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'tags' => 
          array (
            0 => 'views',
            1 => 'utility',
          ),
          'version' => '2.0.3',
          'project' => 'views_autocomplete_filters',
          'datestamp' => 1745842209,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_encrypt_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/field_encrypt/tests/modules/field_encrypt_test/field_encrypt_test.info.yml',
        'basename' => 'field_encrypt_test.info.yml',
        'name' => 'Field Encrypt Test module',
        'info' => 
        array (
          'name' => 'Field Encrypt Test module',
          'type' => 'module',
          'description' => 'Test module for Field Encrypt',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'field_encrypt:field_encrypt',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_encrypt' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/field_encrypt/field_encrypt.info.yml',
        'basename' => 'field_encrypt.info.yml',
        'name' => 'Field Encrypt',
        'info' => 
        array (
          'name' => 'Field Encrypt',
          'type' => 'module',
          'description' => 'Extends the Field API to allow encryption of fields.',
          'configure' => 'field_encrypt.settings',
          'core_version_requirement' => '^9.4 || ^10',
          'package' => 'Encryption',
          'php' => 7.1,
          'dependencies' => 
          array (
            0 => 'encrypt:encrypt',
            1 => 'drupal:field',
          ),
          'test_dependencies' => 
          array (
            0 => 'commerce:commerce',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'product' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/product/product.info.yml',
        'basename' => 'product.info.yml',
        'name' => 'Product',
        'info' => 
        array (
          'name' => 'Product',
          'type' => 'module',
          'description' => 'Products from IBM API Developer Portal',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.2',
          'project' => 'product',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'block_content',
            2 => 'path',
            3 => 'file',
            4 => 'image',
            5 => 'consumerorg:consumerorg',
            6 => 'ibm_apim:ibm_apim',
            7 => 'apic_app:apic_app',
            8 => 'node',
            9 => 'user',
            10 => 'votingapi_widgets',
            11 => 'select_translation',
            12 => 'cshs',
            13 => 'comment',
            14 => 'taxonomy',
            15 => 'views',
            16 => 'masonry',
            17 => 'masonry_views',
            18 => 'better_exposed_filters',
            19 => 'views_autocomplete_filters',
            20 => 'twig_tweak',
            21 => 'smart_trim',
          ),
          'interface translation project' => 'product',
        ),
        'schema_version' => '101100',
        'version' => '11.1.9',
      ),
      'content_synchronizer' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/content_synchronizer/content_synchronizer.info.yml',
        'basename' => 'content_synchronizer.info.yml',
        'name' => 'Content Synchronizer',
        'info' => 
        array (
          'name' => 'Content Synchronizer',
          'type' => 'module',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'facets_pretty_paths_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/facets_pretty_paths/tests/modules/facets_pretty_paths_test/facets_pretty_paths_test.info.yml',
        'basename' => 'facets_pretty_paths_test.info.yml',
        'name' => 'Facets Pretty Paths test',
        'info' => 
        array (
          'name' => 'Facets Pretty Paths test',
          'type' => 'module',
          'description' => 'Test module for Facets Pretty Paths',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'facets_pretty_paths' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/facets_pretty_paths/facets_pretty_paths.info.yml',
        'basename' => 'facets_pretty_paths.info.yml',
        'name' => 'Facets Pretty Paths',
        'info' => 
        array (
          'name' => 'Facets Pretty Paths',
          'type' => 'module',
          'description' => 'Pretty paths for Facets.',
          'core_version_requirement' => '^9.3 || ^10',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'facets:facets',
            1 => 'pathauto:pathauto',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'legal' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/legal/legal.info.yml',
        'basename' => 'legal.info.yml',
        'name' => 'Legal',
        'info' => 
        array (
          'name' => 'Legal',
          'description' => 'Display Terms and Conditions statement on the registration page.',
          'type' => 'module',
          'package' => 'Content',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:views',
          ),
          'configure' => 'legal.config_legal',
          'core_version_requirement' => '^8.9 || ^9 || ^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mail_subscribers' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/mail_subscribers/mail_subscribers.info.yml',
        'basename' => 'mail_subscribers.info.yml',
        'name' => 'Mail Subscribers',
        'info' => 
        array (
          'name' => 'Mail Subscribers',
          'type' => 'module',
          'description' => 'Email subscribers of a given API Management Plan, Product or API',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.1',
          'project' => 'mail_subscribers',
          'libraries' => 
          array (
            0 => 'mail_subscribers/basic',
          ),
          'dependencies' => 
          array (
            0 => 'ibm_apim',
            1 => 'product',
            2 => 'apic_api',
          ),
          'interface translation project' => 'mail_subscribers',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'focal_point' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/focal_point/focal_point.info.yml',
        'basename' => 'focal_point.info.yml',
        'name' => 'Focal Point',
        'info' => 
        array (
          'name' => 'Focal Point',
          'type' => 'module',
          'description' => 'Allows users to specify the focal point of an image for use during cropping.',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'package' => 'Media',
          'test_dependencies' => 
          array (
            0 => 'crop:crop',
          ),
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'crop:crop',
          ),
          'version' => '2.1.2',
          'project' => 'focal_point',
          'datestamp' => 1731556347,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'page_manager_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/page_manager/page_manager_ui/page_manager_ui.info.yml',
        'basename' => 'page_manager_ui.info.yml',
        'name' => 'Page Manager UI',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Page Manager UI',
          'description' => 'Provides a simple UI for Page Manager.',
          'package' => 'Layout',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'page_manager:page_manager',
          ),
          'configure' => 'entity.page.collection',
          'version' => '8.x-4.0-rc3',
          'project' => 'page_manager',
          'datestamp' => 1721976406,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'page_manager_routing_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/page_manager/tests/modules/page_manager_routing_test/page_manager_routing_test.info.yml',
        'basename' => 'page_manager_routing_test.info.yml',
        'name' => 'Page Manager Routing Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Page Manager Routing Test',
          'description' => 'Required for Page Manager tests.',
          'package' => 'Testing',
          'version' => '8.x-4.0-rc3',
          'project' => 'page_manager',
          'datestamp' => 1721976406,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'page_manager_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/page_manager/tests/modules/page_manager_test/page_manager_test.info.yml',
        'basename' => 'page_manager_test.info.yml',
        'name' => 'Page Manager Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Page Manager Test',
          'description' => 'Required for page manager simpletests only.',
          'package' => 'Testing',
          'version' => '8.x-4.0-rc3',
          'project' => 'page_manager',
          'datestamp' => 1721976406,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'page_manager_contextual_links_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/page_manager/tests/modules/page_manager_contextual_links_test/page_manager_contextual_links_test.info.yml',
        'basename' => 'page_manager_contextual_links_test.info.yml',
        'name' => 'Page Manager Contextual Links Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Page Manager Contextual Links Test',
          'description' => 'Required for page manager tests only.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
            1 => 'drupal:user',
            2 => 'drupal:views',
            3 => 'page_manager:page_manager',
          ),
          'version' => '8.x-4.0-rc3',
          'project' => 'page_manager',
          'datestamp' => 1721976406,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/page_manager/page_manager.info.yml',
        'basename' => 'page_manager.info.yml',
        'name' => 'Page Manager',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Page Manager',
          'description' => 'Provides a way to place blocks on a custom page.',
          'package' => 'Layout',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'ctools:ctools',
          ),
          'version' => '8.x-4.0-rc3',
          'project' => 'page_manager',
          'datestamp' => 1721976406,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'select_translation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/select_translation/select_translation.info.yml',
        'basename' => 'select_translation.info.yml',
        'name' => 'Select Translation',
        'info' => 
        array (
          'name' => 'Select Translation',
          'type' => 'module',
          'description' => 'Provides a Views filter to select which translation of a node should be displayed.',
          'package' => 'Multilingual',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:language',
            1 => 'drupal:views',
          ),
          'version' => '2.0.0-alpha5',
          'project' => 'select_translation',
          'datestamp' => 1724782286,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'twig_tweak_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/twig_tweak/tests/twig_tweak_test/twig_tweak_test.info.yml',
        'basename' => 'twig_tweak_test.info.yml',
        'name' => 'Twig tweak test',
        'info' => 
        array (
          'name' => 'Twig tweak test',
          'type' => 'module',
          'description' => 'Support module for Twig tweak testing.',
          'package' => 'Testing',
          'core_version_requirement' => '^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:system (>=10.3)',
            1 => 'drupal:block',
            2 => 'drupal:media',
            3 => 'drupal:node',
            4 => 'drupal:path',
            5 => 'drupal:twig_tweak',
          ),
          'version' => '3.4.1',
          'project' => 'twig_tweak',
          'datestamp' => 1748530581,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'twig_tweak' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/twig_tweak/twig_tweak.info.yml',
        'basename' => 'twig_tweak.info.yml',
        'name' => 'Twig Tweak',
        'info' => 
        array (
          'name' => 'Twig Tweak',
          'type' => 'module',
          'description' => 'Provides some extra Twig functions and filters.',
          'core_version_requirement' => '^10.3 || ^11.0',
          'dependencies' => 
          array (
            0 => 'drupal:system (>=10.3)',
          ),
          'version' => '3.4.1',
          'project' => 'twig_tweak',
          'datestamp' => 1748530581,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'encrypt_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/encrypt/tests/modules/encrypt_test/encrypt_test.info.yml',
        'basename' => 'encrypt_test.info.yml',
        'name' => 'Encrypt Test module',
        'info' => 
        array (
          'name' => 'Encrypt Test module',
          'type' => 'module',
          'description' => 'Test module for Encrypt',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'encrypt:encrypt',
          ),
          'version' => '8.x-3.2',
          'project' => 'encrypt',
          'datestamp' => 1727640044,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'encrypt' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/encrypt/encrypt.info.yml',
        'basename' => 'encrypt.info.yml',
        'name' => 'Encrypt',
        'info' => 
        array (
          'name' => 'Encrypt',
          'description' => 'Provides an API for two-way encryption.',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'package' => 'Encryption',
          'dependencies' => 
          array (
            0 => 'key:key',
          ),
          'type' => 'module',
          'configure' => 'entity.encryption_profile.collection',
          'version' => '8.x-3.2',
          'project' => 'encrypt',
          'datestamp' => 1727640044,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'menu_item_role_access' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/menu_item_role_access/menu_item_role_access.info.yml',
        'basename' => 'menu_item_role_access.info.yml',
        'name' => 'Menu Item Role Access',
        'info' => 
        array (
          'name' => 'Menu Item Role Access',
          'core_version_requirement' => '^10.1 || ^11',
          'description' => 'Provide role based access to menu items.',
          'package' => 'Menu',
          'type' => 'module',
          'configure' => 'menu_item_role_access.config',
          'dependencies' => 
          array (
            0 => 'drupal:menu_link_content',
            1 => 'drupal:menu_ui',
          ),
          'version' => '8.x-2.4',
          'project' => 'menu_item_role_access',
          'datestamp' => 1727189437,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'diff' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/diff/diff.info.yml',
        'basename' => 'diff.info.yml',
        'name' => 'Diff',
        'info' => 
        array (
          'name' => 'Diff',
          'type' => 'module',
          'description' => 'Shows changes between content revisions.',
          'php' => 8.1,
          'core_version_requirement' => '^10 || ^11',
          'configure' => 'diff.general_settings',
          'version' => '8.x-1.8',
          'project' => 'diff',
          'datestamp' => 1727849726,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_ajax_history' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_ajax_history/views_ajax_history.info.yml',
        'basename' => 'views_ajax_history.info.yml',
        'name' => 'Views AJAX History',
        'info' => 
        array (
          'name' => 'Views AJAX History',
          'type' => 'module',
          'description' => 'Add bookmarking abilities to AJAX Views.',
          'core_version_requirement' => '^8.8 || ^9 || ^10 || ^11',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_custom_cache_tag_demo' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_custom_cache_tag/modules/demo/views_custom_cache_tag_demo.info.yml',
        'basename' => 'views_custom_cache_tag_demo.info.yml',
        'name' => 'Views custom cache tags demo',
        'info' => 
        array (
          'description' => 'Demo module for views custom cache tags.',
          'core_version_requirement' => '^8.7.7 || ^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'views_custom_cache_tag:views_custom_cache_tag',
            1 => 'drupal:node',
            2 => 'drupal:menu_ui',
            3 => 'drupal:views',
            4 => 'drupal:rest',
            5 => 'drupal:serialization',
          ),
          'hidden' => false,
          'name' => 'Views custom cache tags demo',
          'package' => 'views_custom_cache_tag',
          'type' => 'module',
          'version' => '8.x-1.4',
          'project' => 'views_custom_cache_tag',
          'datestamp' => 1739000547,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_custom_cache_tag' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_custom_cache_tag/views_custom_cache_tag.info.yml',
        'basename' => 'views_custom_cache_tag.info.yml',
        'name' => 'Views Custom Cache Tag',
        'info' => 
        array (
          'name' => 'Views Custom Cache Tag',
          'type' => 'module',
          'description' => 'Add views custom cache tag.',
          'core_version_requirement' => '^8.7.7 || ^9 || ^10 || ^11',
          'version' => '8.x-1.4',
          'project' => 'views_custom_cache_tag',
          'datestamp' => 1739000547,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'faqfield' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/faqfield/faqfield.info.yml',
        'basename' => 'faqfield.info.yml',
        'name' => 'FAQ Field',
        'info' => 
        array (
          'name' => 'FAQ Field',
          'type' => 'module',
          'description' => 'Provides a field for frequently asked questions.',
          'package' => 'Field types',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'jquery_ui_accordion:jquery_ui_accordion',
          ),
          'version' => '8.0.0',
          'project' => 'faqfield',
          'datestamp' => 1732814306,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'panels_ipe_page_manager_test_config' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/panels_ipe/panels_ipe/tests/modules/panels_ipe_page_manager_test_config/panels_ipe_page_manager_test_config.info.yml',
        'basename' => 'panels_ipe_page_manager_test_config.info.yml',
        'name' => 'Page Manager test configuration for Panels IPE',
        'info' => 
        array (
          'name' => 'Page Manager test configuration for Panels IPE',
          'type' => 'module',
          'description' => 'Provides default configuration to test Page Manager.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'page_manager:page_manager',
            1 => 'panels:panels_ipe',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/panels_ipe/panels_ipe/panels_ipe.info.yml',
        'basename' => 'panels_ipe.info.yml',
        'name' => 'Panels IPE',
        'info' => 
        array (
          'name' => 'Panels IPE',
          'type' => 'module',
          'description' => 'Panels In-place editor.',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
            1 => 'jquery_ui_droppable:jquery_ui_droppable',
            2 => 'panels:panels',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'panels_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/panels_ipe/tests/modules/panels_test/panels_test.info.yml',
        'basename' => 'panels_test.info.yml',
        'name' => 'Panels Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Panels Test',
          'description' => 'Required for Panels simpletests only.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'page_manager:page_manager',
            1 => 'panels:panels',
            2 => 'drupal:layout_discovery',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/panels_ipe/panels.info.yml',
        'basename' => 'panels.info.yml',
        'name' => 'Panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'type' => 'module',
          'package' => 'Panels',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'configure' => 'panels.admin',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
            1 => 'drupal:layout_discovery',
          ),
          'test_dependencies' => 
          array (
            0 => 'page_manager:page_manager',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_manager_merge' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/taxonomy_manager/modules/taxonomy_manager_merge/taxonomy_manager_merge.info.yml',
        'basename' => 'taxonomy_manager_merge.info.yml',
        'name' => 'Taxonomy Manager Merge',
        'info' => 
        array (
          'name' => 'Taxonomy Manager Merge',
          'description' => 'Integrate Merge Terms with Taxonomy Manager',
          'core_version_requirement' => '^10 || ^11',
          'dependencies' => 
          array (
            0 => 'taxonomy_manager:taxonomy_manager',
            1 => 'term_merge:term_merge',
          ),
          'package' => 'Taxonomy',
          'type' => 'module',
          'version' => '2.0.22',
          'project' => 'taxonomy_manager',
          'datestamp' => 1751032951,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_manager' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/taxonomy_manager/taxonomy_manager.info.yml',
        'basename' => 'taxonomy_manager.info.yml',
        'name' => 'Taxonomy Manager',
        'info' => 
        array (
          'name' => 'Taxonomy Manager',
          'description' => 'Tool for administrating taxonomy terms.',
          'core_version_requirement' => '^10.3 || ^11.0',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'jquery_ui:jquery_ui',
          ),
          'package' => 'Taxonomy',
          'type' => 'module',
          'configure' => 'taxonomy_manager.settings',
          'version' => '2.0.22',
          'project' => 'taxonomy_manager',
          'datestamp' => 1751032951,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'drush_language' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/drush_language/drush_language.info.yml',
        'basename' => 'drush_language.info.yml',
        'name' => 'Drush Language commands',
        'info' => 
        array (
          'name' => 'Drush Language commands',
          'type' => 'module',
          'description' => 'Provides Drush commands for language manipulation',
          'core_version_requirement' => '^8.7.7 || ^9 || ^10 || ^11',
          'package' => 'Multilingual',
          'dependencies' => 
          array (
            0 => 'drupal:language',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'unlimited_number' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/unlimited_number/unlimited_number.info.yml',
        'basename' => 'unlimited_number.info.yml',
        'name' => 'Unlimited Number',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Unlimited Number',
          'description' => 'Provides a render element and a widget for number fields.',
          'core_version_requirement' => '>=9',
          'php' => 7.4,
          'package' => 'Fields',
          'version' => '2.0.4',
          'project' => 'unlimited_number',
          'datestamp' => 1656650320,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'flag_follower' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/flag/modules/flag_follower/flag_follower.info.yml',
        'basename' => 'flag_follower.info.yml',
        'name' => 'Flag Follower',
        'info' => 
        array (
          'name' => 'Flag Follower',
          'description' => 'Provides an example user flag and supporting views.',
          'core_version_requirement' => '^10.2 || ^11',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
            1 => 'drupal:views',
            2 => 'drupal:node',
          ),
          'package' => 'Flags',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'flag_bookmark' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/flag/modules/flag_bookmark/flag_bookmark.info.yml',
        'basename' => 'flag_bookmark.info.yml',
        'name' => 'Flag Bookmark',
        'info' => 
        array (
          'name' => 'Flag Bookmark',
          'description' => 'Provides an example bookmark flag and supporting views.',
          'core_version_requirement' => '^10.2 || ^11',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
            1 => 'drupal:views',
            2 => 'drupal:node',
          ),
          'package' => 'Flags',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'flag_count' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/flag/modules/flag_count/flag_count.info.yml',
        'basename' => 'flag_count.info.yml',
        'name' => 'Flag Count',
        'info' => 
        array (
          'name' => 'Flag Count',
          'description' => 'Provides an example on how to display flag counts',
          'core_version_requirement' => '^10.2 || ^11',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
            1 => 'drupal:views',
            2 => 'drupal:node',
          ),
          'package' => 'Flags',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'flag_event_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/flag/tests/modules/flag_event_test/flag_event_test.info.yml',
        'basename' => 'flag_event_test.info.yml',
        'name' => 'Flag event test module',
        'info' => 
        array (
          'name' => 'Flag event test module',
          'description' => 'Functionality to assist Flag event testing.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'flag_test_plugins' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/flag/tests/modules/flag_test_plugins/flag_test_plugins.info.yml',
        'basename' => 'flag_test_plugins.info.yml',
        'name' => 'Flag test plugins',
        'info' => 
        array (
          'name' => 'Flag test plugins',
          'description' => 'Provides dummy Flag plugins for use in tests.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
          ),
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'flag' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/flag/flag.info.yml',
        'basename' => 'flag.info.yml',
        'name' => 'Flag',
        'info' => 
        array (
          'name' => 'Flag',
          'description' => 'Create customized flags that users can set on entities.',
          'core_version_requirement' => '^10.3 || ^11',
          'type' => 'module',
          'package' => 'Flags',
          'configure' => 'entity.flag.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.info.yml',
        'basename' => 'views_slideshow_cycle.info.yml',
        'name' => 'Views Slideshow Cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow Cycle',
          'type' => 'module',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'package' => 'Views',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'views_slideshow:views_slideshow',
          ),
          'version' => '5.0.1',
          'project' => 'views_slideshow',
          'datestamp' => 1724040373,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_slideshow_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_slideshow/tests/modules/views_slideshow_test/views_slideshow_test.info.yml',
        'basename' => 'views_slideshow_test.info.yml',
        'name' => 'Views Slideshow Test Config',
        'info' => 
        array (
          'name' => 'Views Slideshow Test Config',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'core_version_requirement' => '^9 || ^10',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'views_slideshow:views_slideshow',
            2 => 'views_slideshow:views_slideshow_cycle',
          ),
          'version' => '5.0.1',
          'project' => 'views_slideshow',
          'datestamp' => 1724040373,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_slideshow/views_slideshow.info.yml',
        'basename' => 'views_slideshow.info.yml',
        'name' => 'Views Slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'type' => 'module',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow. This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'package' => 'Views',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '5.0.1',
          'project' => 'views_slideshow',
          'datestamp' => 1724040373,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'masonry_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/masonry_views/masonry_views.info.yml',
        'basename' => 'masonry_views.info.yml',
        'name' => 'Masonry Views',
        'info' => 
        array (
          'name' => 'Masonry Views',
          'type' => 'module',
          'description' => 'Provides a Views plugin for displaying content in a Masonry layout.',
          'package' => 'Masonry',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'masonry:masonry (>=4.x)',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'social_media_links_field_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/social_media_links/modules/social_media_links_field/tests/modules/social_media_links_field_test/social_media_links_field_test.info.yml',
        'basename' => 'social_media_links_field_test.info.yml',
        'name' => 'Social Media Links Field Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Social Media Links Field Test',
          'description' => 'Testing module for Social Media Links Field.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:field',
            2 => 'social_media_links:social_media_links_field',
          ),
          'version' => '8.x-2.10',
          'project' => 'social_media_links',
          'datestamp' => 1724736721,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'social_media_links_field' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/social_media_links/modules/social_media_links_field/social_media_links_field.info.yml',
        'basename' => 'social_media_links_field.info.yml',
        'name' => 'Social Media Links Field',
        'info' => 
        array (
          'name' => 'Social Media Links Field',
          'description' => 'The module provides a field type to capture social media profiles.',
          'type' => 'module',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'social_media_links:social_media_links',
          ),
          'version' => '8.x-2.10',
          'project' => 'social_media_links',
          'datestamp' => 1724736721,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'social_media_links' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/social_media_links/social_media_links.info.yml',
        'basename' => 'social_media_links.info.yml',
        'name' => 'Social Media Links Block',
        'info' => 
        array (
          'name' => 'Social Media Links Block',
          'description' => 'The module provides a block that display links (icons) to your profiles on various social networking sites.',
          'type' => 'module',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'version' => '8.x-2.10',
          'project' => 'social_media_links',
          'datestamp' => 1724736721,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'securitytxt' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/securitytxt/securitytxt.info.yml',
        'basename' => 'securitytxt.info.yml',
        'name' => 'Security.txt',
        'info' => 
        array (
          'name' => 'Security.txt',
          'type' => 'module',
          'description' => 'Provides a security.txt file for your site.',
          'package' => 'Security',
          'core_version_requirement' => '^10.1 || ^11',
          'configure' => 'securitytxt.configure',
          'version' => '8.x-1.6',
          'project' => 'securitytxt',
          'datestamp' => 1715857937,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'extlink' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/extlink/extlink.info.yml',
        'basename' => 'extlink.info.yml',
        'name' => 'External Links',
        'info' => 
        array (
          'name' => 'External Links',
          'type' => 'module',
          'description' => 'Modify behavior and appearance of external links.',
          'package' => 'User interface',
          'configure' => 'extlink_admin.settings',
          'core_version_requirement' => '^10 || ^11',
          'version' => '2.0.5',
          'project' => 'extlink',
          'datestamp' => 1757349142,
        ),
        'schema_version' => '200002',
        'version' => '11.1.9',
      ),
      'contact_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/contact/tests/modules/contact_test_views/contact_test_views.info.yml',
        'basename' => 'contact_test_views.info.yml',
        'name' => 'Contact test views',
        'info' => 
        array (
          'name' => 'Contact test views',
          'type' => 'module',
          'description' => 'Provides default views for views contact tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
            1 => 'drupal:views',
            2 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'contact_storage' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/contact_storage/contact_storage.info.yml',
        'basename' => 'contact_storage.info.yml',
        'name' => 'Contact storage',
        'info' => 
        array (
          'name' => 'Contact storage',
          'type' => 'module',
          'description' => 'Provides storage and edit capability for contact messages.',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'container_rebuild_required' => true,
          'dependencies' => 
          array (
            0 => 'drupal:contact',
            1 => 'drupal:views',
            2 => 'drupal:options',
            3 => 'drupal:filter',
            4 => 'token:token',
          ),
          'configure' => 'entity.contact_message.collection',
          'version' => '8.x-1.5',
          'project' => 'contact_storage',
          'datestamp' => 1761255379,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'pathauto_custom_punctuation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/pathauto/tests/modules/pathauto_custom_punctuation_test/pathauto_custom_punctuation_test.info.yml',
        'basename' => 'pathauto_custom_punctuation_test.info.yml',
        'name' => 'Pathauto custom punctuation testing module',
        'info' => 
        array (
          'name' => 'Pathauto custom punctuation testing module',
          'type' => 'module',
          'description' => 'Add some uncommon punctuation to the replacement list.',
          'package' => 'Testing',
          'version' => '8.x-1.14',
          'project' => 'pathauto',
          'datestamp' => 1759838099,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'pathauto_views_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/pathauto/tests/modules/pathauto_views_test/pathauto_views_test.info.yml',
        'basename' => 'pathauto_views_test.info.yml',
        'name' => 'Views Test Config',
        'info' => 
        array (
          'name' => 'Views Test Config',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '8.x-1.14',
          'project' => 'pathauto',
          'datestamp' => 1759838099,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'pathauto_string_id_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/pathauto/tests/modules/pathauto_string_id_test/pathauto_string_id_test.info.yml',
        'basename' => 'pathauto_string_id_test.info.yml',
        'name' => 'Pathauto testing module',
        'info' => 
        array (
          'name' => 'Pathauto testing module',
          'type' => 'module',
          'description' => 'Pathauto for Entity with string ID.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'token:token',
          ),
          'version' => '8.x-1.14',
          'project' => 'pathauto',
          'datestamp' => 1759838099,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/pathauto/pathauto.info.yml',
        'basename' => 'pathauto.info.yml',
        'name' => 'Pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'core_version_requirement' => '^10 || ^11',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:path',
            1 => 'token:token',
          ),
          'configure' => 'entity.pathauto_pattern.collection',
          'recommends' => 
          array (
            0 => 'redirect:redirect',
          ),
          'version' => '8.x-1.14',
          'project' => 'pathauto',
          'datestamp' => 1759838099,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'themegenerator' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/themegenerator/themegenerator.info.yml',
        'basename' => 'themegenerator.info.yml',
        'name' => 'IBM API Developer Portal Sub-theme Generator',
        'info' => 
        array (
          'name' => 'IBM API Developer Portal Sub-theme Generator',
          'type' => 'module',
          'description' => 'Generate an IBM API Connect sub-theme',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.1',
          'project' => 'themegenerator',
          'dependencies' => 
          array (
            0 => 'ibm_apim:ibm_apim',
          ),
          'interface translation project' => 'themegenerator',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'intense' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/intense/intense.info.yml',
        'basename' => 'intense.info.yml',
        'name' => 'Intense images',
        'info' => 
        array (
          'name' => 'Intense images',
          'type' => 'module',
          'description' => 'Provides Intense images integration.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Blazy',
          'dependencies' => 
          array (
            0 => 'blazy:blazy (>= 3.x)',
          ),
          'version' => '3.0.1',
          'project' => 'intense',
          'datestamp' => 1714297966,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_apic_flood_control_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_apic_flood_control_ui/ibm_apic_flood_control_ui.info.yml',
        'basename' => 'ibm_apic_flood_control_ui.info.yml',
        'name' => 'APIC Flood Control UI',
        'info' => 
        array (
          'name' => 'APIC Flood Control UI',
          'type' => 'module',
          'description' => 'Allow administrators to configure flood control settings',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '8.x-1.0.1',
          'project' => 'ibm_apic_flood_control_ui',
          'dependencies' => 
          array (
            0 => 'ibm_apim',
          ),
          'interface translation project' => 'ibm_apic_flood_control_ui',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_event_log' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_event_log/ibm_event_log.info.yml',
        'basename' => 'ibm_event_log.info.yml',
        'name' => 'IBM Event Log',
        'info' => 
        array (
          'name' => 'IBM Event Log',
          'type' => 'module',
          'description' => 'Notifications of events',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'apic_type_count' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/apic_type_count/apic_type_count.info.yml',
        'basename' => 'apic_type_count.info.yml',
        'name' => 'APIC Node Type Count',
        'info' => 
        array (
          'name' => 'APIC Node Type Count',
          'type' => 'module',
          'description' => 'This Module is used to count the number published and Unpublished in all content types and Count number of User in Every User Role.',
          'package' => 'Development',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '8.x-1.0.1',
          'project' => 'apic_type_count',
          'interface translation project' => 'apic_type_count',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_csp_extension' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_csp_extension/ibm_csp_extension.info.yml',
        'basename' => 'ibm_csp_extension.info.yml',
        'name' => 'IBM CSP Extension',
        'info' => 
        array (
          'name' => 'IBM CSP Extension',
          'type' => 'module',
          'description' => 'Extends Content Security Policy to whitelist custom endpoints',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'IBM',
          'version' => '1.0.0',
          'dependencies' => 
          array (
            0 => 'csp',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_apic_mail' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_apic_mail/ibm_apic_mail.info.yml',
        'basename' => 'ibm_apic_mail.info.yml',
        'name' => 'APIC Email Provider',
        'info' => 
        array (
          'name' => 'APIC Email Provider',
          'type' => 'module',
          'description' => 'Send all Drupal emails via API Manager',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '8.x-1.0.1',
          'project' => 'ibm_apic_mail',
          'dependencies' => 
          array (
            0 => 'ibm_apim',
          ),
          'interface translation project' => 'ibm_apic_mail',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'apic_letter_avatar' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/apic_letter_avatar/apic_letter_avatar.info.yml',
        'basename' => 'apic_letter_avatar.info.yml',
        'name' => 'Apic Letter Avatar',
        'info' => 
        array (
          'name' => 'Apic Letter Avatar',
          'type' => 'module',
          'description' => 'Adds a letter avatar generator based on the name of a user.',
          'package' => 'IBM API Developer Portal',
          'dependencies' => 
          array (
            0 => 'avatars',
          ),
          'version' => '8.x-2.0',
          'core_version_requirement' => '^8.8 || ^9 || ^10 || ^11',
          'project' => 'apic_letter_avatar',
          'interface translation project' => 'apic_letter_avatar',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'api_catalog' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/api_catalog/api_catalog.info.yml',
        'basename' => 'api_catalog.info.yml',
        'name' => 'API Catalog',
        'info' => 
        array (
          'name' => 'API Catalog',
          'type' => 'module',
          'description' => 'Provides a linkset format API catalog according to RFC 9727',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'IBM API Developer Portal',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_stripe_payment_method' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_stripe_payment_method/ibm_stripe_payment_method.info.yml',
        'basename' => 'ibm_stripe_payment_method.info.yml',
        'name' => 'APIC Monetization Stripe Integration',
        'info' => 
        array (
          'name' => 'APIC Monetization Stripe Integration',
          'type' => 'module',
          'description' => 'Allowing creation of payment methods using Stripe as part of APIC monetization.',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '8.x-1.0.1',
          'project' => 'ibm_stripe_payment_method',
          'dependencies' => 
          array (
            0 => 'ibm_apim',
          ),
          'interface translation project' => 'ibm_stripe_payment_method',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_apic_session_check' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_apic_session_check/ibm_apic_session_check.info.yml',
        'basename' => 'ibm_apic_session_check.info.yml',
        'name' => 'APIC Session Check',
        'info' => 
        array (
          'name' => 'APIC Session Check',
          'type' => 'module',
          'description' => 'Reloads the page when the user session has expired.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'IBM API Developer Portal',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_apic_news' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_apic_news/ibm_apic_news.info.yml',
        'basename' => 'ibm_apic_news.info.yml',
        'name' => 'News',
        'info' => 
        array (
          'name' => 'News',
          'type' => 'module',
          'description' => 'IBM API Connect News module.',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^10 || ^11',
          'version' => '8.x-99.0.0',
          'project' => 'ibm_apic_news',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'block_content',
            2 => 'options',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_create_payment_method' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_create_payment_method/ibm_create_payment_method.info.yml',
        'basename' => 'ibm_create_payment_method.info.yml',
        'name' => 'APIC Default Monetization Create Payment Method',
        'info' => 
        array (
          'name' => 'APIC Default Monetization Create Payment Method',
          'type' => 'module',
          'description' => 'Default implementation for allowing creation of payment methods as part of APIC monetization.',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '8.x-1.0.1',
          'project' => 'ibm_create_payment_method',
          'dependencies' => 
          array (
            0 => 'ibm_apim',
          ),
          'interface translation project' => 'ibm_create_payment_method',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_tooltip' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_tooltip/ibm_tooltip.info.yml',
        'basename' => 'ibm_tooltip.info.yml',
        'name' => 'IBM Tooltip',
        'info' => 
        array (
          'name' => 'IBM Tooltip',
          'type' => 'module',
          'description' => 'Provides a dynamic tooltip.',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^10 || ^11',
          'version' => '8.x-99.0.0',
          'project' => 'ibm_tooltip',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_log_stdout' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_log_stdout/ibm_log_stdout.info.yml',
        'basename' => 'ibm_log_stdout.info.yml',
        'name' => 'Log to Standard Out',
        'info' => 
        array (
          'name' => 'Log to Standard Out',
          'type' => 'module',
          'description' => 'Log to standard out and standard error for better docker integration',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'drushadmin' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/drushadmin/drushadmin.info.yml',
        'basename' => 'drushadmin.info.yml',
        'name' => 'APIC Drush Administration commands',
        'info' => 
        array (
          'name' => 'APIC Drush Administration commands',
          'type' => 'module',
          'description' => 'Additional drush admin commands',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '8.x-1.0.1',
          'project' => 'drushadmin',
          'interface translation project' => 'drushadmin',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ibm_apim' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ibm_apim/ibm_apim.info.yml',
        'basename' => 'ibm_apim.info.yml',
        'name' => 'IBM APIC',
        'info' => 
        array (
          'name' => 'IBM APIC',
          'type' => 'module',
          'description' => 'Core IBM API Management integration',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.3',
          'project' => 'ibm_apim',
          'dependencies' => 
          array (
            0 => 'telephone',
            1 => 'options',
            2 => 'user',
            3 => 'image',
            4 => 'externalauth',
            5 => 'comment',
            6 => 'menu_ui',
            7 => 'taxonomy',
            8 => 'masonry',
            9 => 'ctools',
            10 => 'path',
            11 => 'views',
            12 => 'faqfield',
            13 => 'better_exposed_filters',
            14 => 'twig_tweak',
            15 => 'block_content',
            16 => 'views_autocomplete_filters',
            17 => 'ibm_log_stdout',
            18 => 'content_translation',
            19 => 'ibm_create_payment_method',
            20 => 'ibm_event_log',
            21 => 'search_api',
            22 => 'search_api_db',
            23 => 'search_api_autocomplete',
          ),
          'libraries' => 
          array (
            0 => 'ibm_apim/core',
            1 => 'core/drupal.dialog',
          ),
          'interface translation project' => 'ibm_apim',
        ),
        'schema_version' => '11101',
        'version' => '11.1.9',
      ),
      'views_infinite_scroll' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_infinite_scroll/views_infinite_scroll.info.yml',
        'basename' => 'views_infinite_scroll.info.yml',
        'name' => 'Views Infinite Scroll',
        'info' => 
        array (
          'name' => 'Views Infinite Scroll',
          'type' => 'module',
          'description' => 'A pager which allows an infinite scroll effect for views.',
          'package' => 'Views',
          'core_version_requirement' => '^10.1 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '2.0.3',
          'project' => 'views_infinite_scroll',
          'datestamp' => 1724335954,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'linkit_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/linkit/tests/linkit_test/linkit_test.info.yml',
        'basename' => 'linkit_test.info.yml',
        'name' => 'Linkit test module',
        'info' => 
        array (
          'name' => 'Linkit test module',
          'description' => 'Support module for Linkit testing.',
          'package' => 'Testing',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'linkit:linkit',
            1 => 'drupal:field',
            2 => 'drupal:text',
          ),
          'version' => '7.0.5',
          'project' => 'linkit',
          'datestamp' => 1750458297,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'linkit' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/linkit/linkit.info.yml',
        'basename' => 'linkit.info.yml',
        'name' => 'Linkit',
        'info' => 
        array (
          'name' => 'Linkit',
          'type' => 'module',
          'description' => 'Provides an easy interface for internal and external linking with wysiwyg editors.',
          'package' => 'User interface',
          'core_version_requirement' => '>=10.1',
          'configure' => 'entity.linkit_profile.collection',
          'test_dependencies' => 
          array (
            0 => 'imce:imce',
            1 => 'drupal:ckeditor',
          ),
          'version' => '7.0.5',
          'project' => 'linkit',
          'datestamp' => 1750458297,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_taxonomy_term_name_depth' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_taxonomy_term_name_depth/views_taxonomy_term_name_depth.info.yml',
        'basename' => 'views_taxonomy_term_name_depth.info.yml',
        'name' => 'Views Taxonomy Term Name Depth',
        'info' => 
        array (
          'name' => 'Views Taxonomy Term Name Depth',
          'type' => 'module',
          'description' => 'The module provides the Views plugin for Contextual filter with Taxonomy Term Name Depth.',
          'package' => 'Views',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'pathauto:pathauto',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'maintenance200' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/maintenance200/maintenance200.info.yml',
        'basename' => 'maintenance200.info.yml',
        'name' => 'Maintenance 200',
        'info' => 
        array (
          'name' => 'Maintenance 200',
          'type' => 'module',
          'description' => 'Allows the maintenance page to return a configurable HTTP status code rather than the standard 503 code.',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'configure' => 'maintenance200_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jquery_ui_resizable' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/jquery_ui_resizable/jquery_ui_resizable.info.yml',
        'basename' => 'jquery_ui_resizable.info.yml',
        'name' => 'jQuery UI Resizable',
        'info' => 
        array (
          'name' => 'jQuery UI Resizable',
          'type' => 'module',
          'description' => 'Provides jQuery UI Resizable library.',
          'package' => 'jQuery UI',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'jquery_ui:jquery_ui (>=8.x-1.7)',
          ),
          'version' => '2.1.0',
          'project' => 'jquery_ui_resizable',
          'datestamp' => 1717031361,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'check_dns' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/check_dns/check_dns.info.yml',
        'basename' => 'check_dns.info.yml',
        'name' => 'Check DNS',
        'info' => 
        array (
          'name' => 'Check DNS',
          'type' => 'module',
          'description' => 'Checks if email domain has DNS Record before user registration.',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'package' => 'Check DNS',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_pwreset_timeout' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/user_pwreset_timeout/user_pwreset_timeout.info.yml',
        'basename' => 'user_pwreset_timeout.info.yml',
        'name' => 'User Password Reset Link Timeout',
        'info' => 
        array (
          'name' => 'User Password Reset Link Timeout',
          'description' => 'Presents a UI element to set the user password reset link timeout.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'type' => 'module',
          'configure' => 'entity.user.admin_form',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'apic_api' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/apic_api/apic_api.info.yml',
        'basename' => 'apic_api.info.yml',
        'name' => 'API',
        'info' => 
        array (
          'name' => 'API',
          'type' => 'module',
          'description' => 'Provides the API node content type',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.2',
          'project' => 'apic_api',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'file',
            2 => 'image',
            3 => 'options',
            4 => 'comment',
            5 => 'ibm_apim:ibm_apim',
            6 => 'consumerorg:consumerorg',
            7 => 'product:product',
            8 => 'apic_app:apic_app',
            9 => 'node',
            10 => 'user',
            11 => 'votingapi_widgets',
            12 => 'views_autocomplete_filters',
            13 => 'select_translation',
            14 => 'cshs',
            15 => 'taxonomy',
            16 => 'views',
            17 => 'masonry_views',
            18 => 'masonry',
            19 => 'views_bootstrap',
            20 => 'better_exposed_filters',
            21 => 'smart_trim',
          ),
          'interface translation project' => 'apic_api',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_bootstrap' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_bootstrap/views_bootstrap.info.yml',
        'basename' => 'views_bootstrap.info.yml',
        'name' => 'Views Bootstrap',
        'info' => 
        array (
          'name' => 'Views Bootstrap',
          'type' => 'module',
          'description' => 'Views Twitter Bootstrap Components.',
          'package' => 'Views',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'libraries' => 
          array (
            0 => 'views_bootstrap/components',
          ),
          'version' => '5.3.3',
          'project' => 'views_bootstrap',
          'datestamp' => 1737677843,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rules_http_client' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/rules_http_client/rules_http_client.info.yml',
        'basename' => 'rules_http_client.info.yml',
        'name' => 'Rules HTTP Client',
        'info' => 
        array (
          'name' => 'Rules HTTP Client',
          'description' => 'Provides an action for making http requests.',
          'package' => 'Rules',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:rules',
          ),
          'version' => '8.x-1.0',
          'core_version_requirement' => '^8.8 || ^9 || ^10 || ^11',
          'project' => 'rules_http_client',
          'datestamp' => 1499766553,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_data_export_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_data_export/tests/modules/views_data_export_test/views_data_export_test.info.yml',
        'basename' => 'views_data_export_test.info.yml',
        'name' => 'Views data export test views',
        'info' => 
        array (
          'name' => 'Views data export test views',
          'type' => 'module',
          'description' => 'Provides default views for views data export tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'views_data_export:views_data_export',
          ),
          'version' => '8.x-1.8',
          'project' => 'views_data_export',
          'datestamp' => 1761320261,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_data_export' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/views_data_export/views_data_export.info.yml',
        'basename' => 'views_data_export.info.yml',
        'name' => 'Views Data Export',
        'info' => 
        array (
          'name' => 'Views Data Export',
          'type' => 'module',
          'description' => 'Plugin to export views data into various file formats.',
          'package' => 'Views',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:rest',
            1 => 'drupal:views',
            2 => 'csv_serialization:csv_serialization',
          ),
          'test_dependencies' => 
          array (
            0 => 'xls_serialization:xls_serialization',
            1 => 'search_api:search_api',
          ),
          'version' => '8.x-1.8',
          'project' => 'views_data_export',
          'datestamp' => 1761320261,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'auth_apic' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/auth_apic/auth_apic.info.yml',
        'basename' => 'auth_apic.info.yml',
        'name' => 'API Manager Authentication',
        'info' => 
        array (
          'name' => 'API Manager Authentication',
          'type' => 'module',
          'description' => 'Default authentication functionality for the IBM Developer Portal.',
          'dependencies' => 
          array (
            0 => 'telephone',
            1 => 'options',
            2 => 'user',
            3 => 'image',
            4 => 'ibm_apim',
            5 => 'consumerorg',
            6 => 'change_pwd_page',
            7 => 'account_field_split',
            8 => 'encrypt',
            9 => 'key',
            10 => 'real_aes',
            11 => 'session_based_temp_store',
          ),
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.2',
          'project' => 'auth_apic',
          'interface translation project' => 'auth_apic',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hierarchical_taxonomy_menu' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/hierarchical_taxonomy_menu/hierarchical_taxonomy_menu.info.yml',
        'basename' => 'hierarchical_taxonomy_menu.info.yml',
        'name' => 'Hierarchical Taxonomy Menu',
        'info' => 
        array (
          'name' => 'Hierarchical Taxonomy Menu',
          'type' => 'module',
          'description' => 'Create menus from taxonomy terms.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'Menu',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'votingapi_tokens' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/votingapi/modules/votingapi_tokens/votingapi_tokens.info.yml',
        'basename' => 'votingapi_tokens.info.yml',
        'name' => 'Voting API Tokens',
        'info' => 
        array (
          'name' => 'Voting API Tokens',
          'type' => 'module',
          'description' => 'Token support for Voting API',
          'package' => 'Voting',
          'core_version_requirement' => '^10.3 || ^11',
          'dependencies' => 
          array (
            0 => 'votingapi:votingapi',
            1 => 'token:token',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'votingapi_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/votingapi/tests/modules/votingapi_test/votingapi_test.info.yml',
        'basename' => 'votingapi_test.info.yml',
        'name' => 'Voting API test',
        'info' => 
        array (
          'name' => 'Voting API test',
          'type' => 'module',
          'description' => 'Support module for Voting API testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'votingapi:votingapi',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'votingapi' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/votingapi/votingapi.info.yml',
        'basename' => 'votingapi.info.yml',
        'name' => 'Voting API',
        'info' => 
        array (
          'name' => 'Voting API',
          'type' => 'module',
          'description' => 'Provides a voting API that other modules can make use of.',
          'package' => 'Voting',
          'core_version_requirement' => '^10.3 || ^11',
          'configure' => 'votingapi.admin_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'csp_extras' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/csp/csp_extras/csp_extras.info.yml',
        'basename' => 'csp_extras.info.yml',
        'name' => 'Content Security Policy Extras',
        'info' => 
        array (
          'name' => 'Content Security Policy Extras',
          'type' => 'module',
          'description' => 'Optional extra features for Content Security Policy',
          'core_version_requirement' => '^10.2 || ^11',
          'lifecycle' => 'obsolete',
          'lifecycle_link' => 'https://www.drupal.org/project/csp/issues/3408404',
          'dependencies' => 
          array (
            0 => 'csp:csp',
          ),
          'version' => '2.2.2',
          'project' => 'csp',
          'datestamp' => 1741822238,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'csp_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/csp/tests/modules/csp_test/csp_test.info.yml',
        'basename' => 'csp_test.info.yml',
        'name' => 'CSP Test pages',
        'info' => 
        array (
          'name' => 'CSP Test pages',
          'type' => 'module',
          'description' => 'Provides test pages for CSP automated tests.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'csp:csp',
          ),
          'version' => '2.2.2',
          'project' => 'csp',
          'datestamp' => 1741822238,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'csp' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/csp/csp.info.yml',
        'basename' => 'csp.info.yml',
        'name' => 'Content Security Policy',
        'info' => 
        array (
          'name' => 'Content Security Policy',
          'type' => 'module',
          'description' => 'Provide Content-Security-Policy headers',
          'core_version_requirement' => '^10.2 || ^11',
          'configure' => 'csp.settings',
          'version' => '2.2.2',
          'project' => 'csp',
          'datestamp' => 1741822238,
        ),
        'schema_version' => '20201',
        'version' => '11.1.9',
      ),
      'avatars_robohash' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/avatars/avatars_robohash/avatars_robohash.info.yml',
        'basename' => 'avatars_robohash.info.yml',
        'name' => 'Robohash',
        'info' => 
        array (
          'name' => 'Robohash',
          'type' => 'module',
          'description' => 'Adds Robohash avatar generators for Avatar Kit.',
          'package' => 'Avatars',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'avatars:avatars',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'avatars_gravatar' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/avatars/avatars_gravatar/avatars_gravatar.info.yml',
        'basename' => 'avatars_gravatar.info.yml',
        'name' => 'Gravatar',
        'info' => 
        array (
          'name' => 'Gravatar',
          'type' => 'module',
          'description' => 'Adds Gravatar.com avatar generators for Avatar Kit.',
          'package' => 'Avatars',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'avatars:avatars',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'avatars_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/avatars/tests/modules/avatars_test/avatars_test.info.yml',
        'basename' => 'avatars_test.info.yml',
        'name' => 'Avatar Kit Test',
        'info' => 
        array (
          'name' => 'Avatar Kit Test',
          'type' => 'module',
          'description' => 'Test module for Avatar Kit.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'avatars:avatars',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'avatars_adorable' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/avatars/avatars_adorable/avatars_adorable.info.yml',
        'basename' => 'avatars_adorable.info.yml',
        'name' => 'Adorable',
        'info' => 
        array (
          'name' => 'Adorable',
          'type' => 'module',
          'description' => 'Adds an Adorable.io avatar generator for Avatar Kit.',
          'package' => 'Avatars',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'avatars:avatars',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'avatars' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/avatars/avatars.info.yml',
        'basename' => 'avatars.info.yml',
        'name' => 'Avatar Kit',
        'info' => 
        array (
          'name' => 'Avatar Kit',
          'type' => 'module',
          'description' => 'Provides a selection of generated avatars for users.',
          'package' => 'Avatars',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'php' => 7.4,
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:file',
            2 => 'drupal:field',
            3 => 'drupal:image',
            4 => 'drupal:options',
            5 => 'unlimited_number:unlimited_number',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'term_csv_export_import' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/term_csv_export_import/term_csv_export_import.info.yml',
        'basename' => 'term_csv_export_import.info.yml',
        'name' => 'Term CSV Export/Import',
        'info' => 
        array (
          'name' => 'Term CSV Export/Import',
          'type' => 'module',
          'description' => 'Import and Export Taxonomy terms as csv.',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'package' => 'Taxonomy',
          'configure' => 'term_csv_export_import.import',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'drupal:system (>= 8.6)',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'memcache_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/memcache/tests/modules/memcache_test/memcache_test.info.yml',
        'basename' => 'memcache_test.info.yml',
        'name' => 'Memcache test',
        'info' => 
        array (
          'name' => 'Memcache test',
          'type' => 'module',
          'description' => 'Support module for memcache testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'memcache:memcache',
          ),
          'version' => '8.x-2.7',
          'project' => 'memcache',
          'datestamp' => 1723657821,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'memcache' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/memcache/memcache.info.yml',
        'basename' => 'memcache.info.yml',
        'name' => 'Memcache',
        'info' => 
        array (
          'name' => 'Memcache',
          'description' => 'High performance integration with memcache.',
          'type' => 'module',
          'package' => 'Performance and scalability',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'version' => '8.x-2.7',
          'project' => 'memcache',
          'datestamp' => 1723657821,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/blog/blog.info.yml',
        'basename' => 'blog.info.yml',
        'name' => 'Blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'core_version_requirement' => '^10.4 || ^11.1',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:comment',
            2 => 'drupal:menu_ui',
            3 => 'drupal:node',
            4 => 'drupal:path',
            5 => 'drupal:taxonomy',
            6 => 'drupal:text',
            7 => 'drupal:user',
            8 => 'drupal:views',
          ),
          'version' => '3.1.4',
          'project' => 'blog',
          'datestamp' => 1735994190,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'eu_cookie_compliance' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/eu_cookie_compliance/eu_cookie_compliance.info.yml',
        'basename' => 'eu_cookie_compliance.info.yml',
        'name' => 'EU Cookie Compliance',
        'info' => 
        array (
          'name' => 'EU Cookie Compliance',
          'type' => 'module',
          'description' => 'This module aims at making the website compliant with the new EU cookie regulation',
          'package' => 'User interface',
          'core_version_requirement' => '^8.9 || ^9 || ^10 || ^11',
          'configure' => 'eu_cookie_compliance.settings',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'r4032login' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/r4032login/r4032login.info.yml',
        'basename' => 'r4032login.info.yml',
        'name' => 'Redirect 403 to User Login',
        'info' => 
        array (
          'name' => 'Redirect 403 to User Login',
          'description' => 'Redirect anonymous users from 403 Access Denied pages to the /user/login page.',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'type' => 'module',
          'configure' => 'r4032login.settings.form',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'csv_serialization' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/csv_serialization/csv_serialization.info.yml',
        'basename' => 'csv_serialization.info.yml',
        'name' => 'Serialization (CSV)',
        'info' => 
        array (
          'name' => 'Serialization (CSV)',
          'type' => 'module',
          'description' => 'Provides CSV as a serialization format.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Web services',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
          'version' => '4.0.1',
          'project' => 'csv_serialization',
          'datestamp' => 1723473164,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'apic_app' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/apic_app/apic_app.info.yml',
        'basename' => 'apic_app.info.yml',
        'name' => 'Application',
        'info' => 
        array (
          'name' => 'Application',
          'type' => 'module',
          'description' => 'Provides the Application node content type',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.3',
          'project' => 'apic_app',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'image',
            2 => 'block',
            3 => 'ibm_apim:ibm_apim',
            4 => 'consumerorg:consumerorg',
            5 => 'node',
            6 => 'text',
            7 => 'serialization',
            8 => 'options',
            9 => 'views',
            10 => 'user',
            11 => 'masonry_views',
            12 => 'masonry',
            13 => 'better_exposed_filters',
            14 => 'twig_tweak',
            15 => 'views_autocomplete_filters',
          ),
          'libraries' => 
          array (
            0 => 'apic_app/basic',
          ),
          'interface translation project' => 'apic_app',
        ),
        'schema_version' => '11002',
        'version' => '11.1.9',
      ),
      'trusted_reverse_proxy' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/trusted_reverse_proxy/trusted_reverse_proxy.info.yml',
        'basename' => 'trusted_reverse_proxy.info.yml',
        'name' => 'Trusted Reverse Proxy Support',
        'info' => 
        array (
          'name' => 'Trusted Reverse Proxy Support',
          'type' => 'module',
          'description' => 'Provides sensible defaults for sites running behind known trusted reverse proxies.',
          'core_version_requirement' => '^10.1 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jquery_ui_effects' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/jquery_ui_effects/jquery_ui_effects.info.yml',
        'basename' => 'jquery_ui_effects.info.yml',
        'name' => 'jQuery UI Effects',
        'info' => 
        array (
          'name' => 'jQuery UI Effects',
          'type' => 'module',
          'description' => 'Provides jQuery UI Effects library.',
          'package' => 'jQuery UI',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'jquery_ui:jquery_ui (>=8.x-1.7)',
          ),
          'version' => '2.1.0',
          'project' => 'jquery_ui_effects',
          'datestamp' => 1717031394,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'bootstrap_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/bootstrap_layouts/bootstrap_layouts.info.yml',
        'basename' => 'bootstrap_layouts.info.yml',
        'name' => 'Bootstrap Layouts',
        'info' => 
        array (
          'name' => 'Bootstrap Layouts',
          'type' => 'module',
          'description' => 'This module is going to generate layouts with Bootstrap grid system.',
          'core_version_requirement' => '^10.3 || ^11',
          'package' => 'Layout',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
          ),
          'version' => '8.x-5.5',
          'project' => 'bootstrap_layouts',
          'datestamp' => 1739804296,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'socialblock' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/socialblock/socialblock.info.yml',
        'basename' => 'socialblock.info.yml',
        'name' => 'Socialblock',
        'info' => 
        array (
          'name' => 'Socialblock',
          'type' => 'module',
          'description' => 'Displays active forum topics and tweets',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.1',
          'project' => 'socialblock',
          'configure' => 'socialblock.form',
          'dependencies' => 
          array (
            0 => 'text',
            1 => 'block',
            2 => 'block_content',
            3 => 'masonry',
            4 => 'encrypt',
            5 => 'key',
            6 => 'real_aes',
          ),
          'interface translation project' => 'socialblock',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_strength' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_strength/password_strength.info.yml',
        'basename' => 'password_strength.info.yml',
        'name' => 'Password Strength',
        'info' => 
        array (
          'name' => 'Password Strength',
          'description' => 'Sets up the Password Strength password constraint.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '8.x-2.0-beta4',
          'project' => 'password_strength',
          'datestamp' => 1722447014,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'instana_eum' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/instana_eum/instana_eum.info.yml',
        'basename' => 'instana_eum.info.yml',
        'name' => 'Instana EUM',
        'info' => 
        array (
          'name' => 'Instana EUM',
          'description' => 'Configures Instana End User Monitoring (EUM) beacon module.',
          'package' => 'Monitoring',
          'type' => 'module',
          'version' => '6.3.1',
          'libraries' => 
          array (
            0 => 'instana_eum/instana_eum_config',
          ),
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'project' => 'instana_eum',
          'interface translation project' => 'instana_eum',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'restrict_by_ip' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/restrict_by_ip/restrict_by_ip.info.yml',
        'basename' => 'restrict_by_ip.info.yml',
        'name' => 'Restrict By IP',
        'info' => 
        array (
          'name' => 'Restrict By IP',
          'description' => 'Enables limiting user login and role access to specific IP Addresses.',
          'type' => 'module',
          'package' => 'Access control',
          'core_version_requirement' => '^10 || ^11',
          'configure' => 'restrict_by_ip.general_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'externalauth' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/externalauth/externalauth.info.yml',
        'basename' => 'externalauth.info.yml',
        'name' => 'External Authentication',
        'info' => 
        array (
          'name' => 'External Authentication',
          'type' => 'module',
          'description' => 'Helper module to authenticate users using an external site / service and storing identification details',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'package' => 'User authentication',
          'version' => '2.0.8',
          'project' => 'externalauth',
          'datestamp' => 1743603498,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ghmarkdown' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ghmarkdown/ghmarkdown.info.yml',
        'basename' => 'ghmarkdown.info.yml',
        'name' => 'Github Markdown filter',
        'info' => 
        array (
          'name' => 'Github Markdown filter',
          'type' => 'module',
          'description' => 'Allows content to be submitted using Markdown, a simple plain-text syntax that is transformed into valid HTML.',
          'package' => 'Input filters',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.1',
          'dependencies' => 
          array (
            0 => 'noopener_filter',
          ),
          'project' => 'ghmarkdown',
          'interface translation project' => 'ghmarkdown',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'key_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/key/tests/modules/key_test/key_test.info.yml',
        'basename' => 'key_test.info.yml',
        'name' => 'Key test',
        'info' => 
        array (
          'name' => 'Key test',
          'type' => 'module',
          'description' => 'Key test module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'key:key',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'key' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/key/key.info.yml',
        'basename' => 'key.info.yml',
        'name' => 'Key',
        'info' => 
        array (
          'name' => 'Key',
          'type' => 'module',
          'description' => 'Provides the ability to manage site-wide keys.',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'package' => 'Security',
          'configure' => 'entity.key.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search404' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search404/search404.info.yml',
        'basename' => 'search404.info.yml',
        'name' => 'Search 404',
        'info' => 
        array (
          'name' => 'Search 404',
          'description' => 'Automatically search for the keywords in URLs that result in 404 errors and show results instead of Page-Not-Found.',
          'core_version_requirement' => '^10.3 || ^11',
          'type' => 'module',
          'package' => 'Search',
          'configure' => 'search404.settings',
          'version' => '2.2.0-rc3',
          'project' => 'search404',
          'datestamp' => 1736859065,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_api_db_defaults' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search_api/modules/search_api_db/search_api_db_defaults/search_api_db_defaults.info.yml',
        'basename' => 'search_api_db_defaults.info.yml',
        'name' => 'Database Search Defaults',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Database Search Defaults',
          'description' => 'Enable this module for a best-practice default setup of Search API with the Database backend. After installation it is recommended to uninstall this module again for performance reasons. The provided configuration will not be removed.',
          'package' => 'Search',
          'core_version_requirement' => '^10.2 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:field',
            2 => 'drupal:image',
            3 => 'drupal:node',
            4 => 'drupal:text',
            5 => 'drupal:user',
            6 => 'drupal:views',
            7 => 'search_api:search_api_db',
          ),
          'version' => '8.x-1.40',
          'project' => 'search_api',
          'datestamp' => 1762030918,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_api_db' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search_api/modules/search_api_db/search_api_db.info.yml',
        'basename' => 'search_api_db.info.yml',
        'name' => 'Database Search',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Database Search',
          'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
          'package' => 'Search',
          'core_version_requirement' => '^10.2 || ^11',
          'dependencies' => 
          array (
            0 => 'search_api:search_api',
          ),
          'version' => '8.x-1.40',
          'project' => 'search_api',
          'datestamp' => 1762030918,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_api' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search_api/search_api.info.yml',
        'basename' => 'search_api.info.yml',
        'name' => 'Search API',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Search API',
          'description' => 'Provides a generic framework for modules offering search capabilities.',
          'package' => 'Search',
          'core_version_requirement' => '^10.3 || ^11',
          'lifecycle' => 'stable',
          'configure' => 'search_api.overview',
          'version' => '8.x-1.40',
          'project' => 'search_api',
          'datestamp' => 1762030918,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'fontawesome_media' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/fontawesome/modules/fontawesome_media/fontawesome_media.info.yml',
        'basename' => 'fontawesome_media.info.yml',
        'name' => 'Font Awesome Media Entity',
        'info' => 
        array (
          'name' => 'Font Awesome Media Entity',
          'type' => 'module',
          'description' => 'Adds a Font Awesome Media Entity Type.',
          'core_version_requirement' => '^10.2 || ^11.0',
          'dependencies' => 
          array (
            0 => 'fontawesome:fontawesome',
            1 => 'drupal:svg_image',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'fontawesome_iconpicker_widget' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/fontawesome/modules/fontawesome_iconpicker_widget/fontawesome_iconpicker_widget.info.yml',
        'basename' => 'fontawesome_iconpicker_widget.info.yml',
        'name' => 'Font Awesome Iconpicker Widget',
        'info' => 
        array (
          'name' => 'Font Awesome Iconpicker Widget',
          'type' => 'module',
          'description' => 'Provides an iconpicker widget for Font Awesome',
          'core_version_requirement' => '^10.2 || ^11.0',
          'dependencies' => 
          array (
            0 => 'fontawesome:fontawesome',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'fontawesome' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/fontawesome/fontawesome.info.yml',
        'basename' => 'fontawesome.info.yml',
        'name' => 'Font Awesome',
        'info' => 
        array (
          'name' => 'Font Awesome',
          'type' => 'module',
          'description' => 'The most popular icon set and toolkit on the web.',
          'core_version_requirement' => '^10.2 || ^11.0',
          'configure' => 'fontawesome.admin_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'address_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/address/tests/modules/address_test/address_test.info.yml',
        'basename' => 'address_test.info.yml',
        'name' => 'Address test',
        'info' => 
        array (
          'name' => 'Address test',
          'type' => 'module',
          'description' => 'Provides functionality for testing the address module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'address:address',
            1 => 'drupal:views',
          ),
          'version' => '2.0.4',
          'project' => 'address',
          'datestamp' => 1746462057,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'address' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/address/address.info.yml',
        'basename' => 'address.info.yml',
        'name' => 'Address',
        'info' => 
        array (
          'name' => 'Address',
          'type' => 'module',
          'description' => 'Provides functionality for handling postal addresses.',
          'package' => 'Field types',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'config' => 'entity.address_format.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'version' => '2.0.4',
          'project' => 'address',
          'datestamp' => 1746462057,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_api_autocomplete_test_hooks' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search_api_autocomplete/tests/search_api_autocomplete_test_hooks/search_api_autocomplete_test_hooks.info.yml',
        'basename' => 'search_api_autocomplete_test_hooks.info.yml',
        'name' => 'Search API Autocomplete Test Hooks',
        'info' => 
        array (
          'name' => 'Search API Autocomplete Test Hooks',
          'description' => 'Support module for testing Search API Autocomplete hooks.',
          'dependencies' => 
          array (
            0 => 'search_api_autocomplete:search_api_autocomplete',
          ),
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.x-1.11',
          'project' => 'search_api_autocomplete',
          'datestamp' => 1762031749,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_api_autocomplete_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search_api_autocomplete/tests/search_api_autocomplete_test/search_api_autocomplete_test.info.yml',
        'basename' => 'search_api_autocomplete_test.info.yml',
        'name' => 'Search API Autocomplete Test',
        'info' => 
        array (
          'name' => 'Search API Autocomplete Test',
          'description' => 'Support module for Search API Autocomplete tests.',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:views',
            2 => 'search_api:search_api_test',
            3 => 'search_api:search_api_test_example_content',
            4 => 'search_api_autocomplete:search_api_autocomplete',
          ),
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.x-1.11',
          'project' => 'search_api_autocomplete',
          'datestamp' => 1762031749,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_api_autocomplete_test_pages' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search_api_autocomplete/tests/search_api_autocomplete_test_pages/search_api_autocomplete_test_pages.info.yml',
        'basename' => 'search_api_autocomplete_test_pages.info.yml',
        'name' => 'Search API Autocomplete Pages Test',
        'info' => 
        array (
          'name' => 'Search API Autocomplete Pages Test',
          'description' => 'Support module for testing integration of Search API Autocomplete with Search API Pages.',
          'dependencies' => 
          array (
            0 => 'search_api_autocomplete:search_api_autocomplete_test',
            1 => 'search_api_page:search_api_page',
          ),
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.x-1.11',
          'project' => 'search_api_autocomplete',
          'datestamp' => 1762031749,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_api_autocomplete' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/search_api_autocomplete/search_api_autocomplete.info.yml',
        'basename' => 'search_api_autocomplete.info.yml',
        'name' => 'Search API Autocomplete',
        'info' => 
        array (
          'name' => 'Search API Autocomplete',
          'description' => 'Adds autocomplete functionality to searches.',
          'core_version_requirement' => '^10.2 || ^11',
          'type' => 'module',
          'lifecycle' => 'stable',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'search_api:search_api (>= 8.x-1.20)',
          ),
          'test_dependencies' => 
          array (
            0 => 'search_api_page:search_api_page',
          ),
          'version' => '8.x-1.11',
          'project' => 'search_api_autocomplete',
          'datestamp' => 1762031749,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'change_pwd_page' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/change_pwd_page/change_pwd_page.info.yml',
        'basename' => 'change_pwd_page.info.yml',
        'name' => 'Password Separate Form',
        'info' => 
        array (
          'name' => 'Password Separate Form',
          'type' => 'module',
          'description' => 'Provides a separate page containing a form for the current user to change their password.',
          'package' => 'User Management',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'flood_control' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/flood_control/flood_control.info.yml',
        'basename' => 'flood_control.info.yml',
        'name' => 'Flood control',
        'info' => 
        array (
          'name' => 'Flood control',
          'description' => 'Allows configuring hidden flood control options and unblocking IP addresses and user ID\'s that are blocked after multiple failed login attempts.',
          'configure' => 'flood_control.settings',
          'package' => 'Administration',
          'type' => 'module',
          'core_version_requirement' => '^10.2 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/libraries/libraries.info.yml',
        'basename' => 'libraries.info.yml',
        'name' => 'Libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'type' => 'module',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core_version_requirement' => '^10 || ^11',
          'version' => '4.1.0',
          'project' => 'libraries',
          'datestamp' => 1751287504,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_entity_twitter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/media_entity_twitter/media_entity_twitter.info.yml',
        'basename' => 'media_entity_twitter.info.yml',
        'name' => 'Media Entity Twitter',
        'info' => 
        array (
          'name' => 'Media Entity Twitter',
          'description' => 'Media Entity Twitter provider.',
          'type' => 'module',
          'package' => 'Media',
          'core_version_requirement' => '^10.2 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'acl_node_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/acl/tests/modules/acl_node_test/acl_node_test.info.yml',
        'basename' => 'acl_node_test.info.yml',
        'name' => 'ACL Node module tests',
        'info' => 
        array (
          'name' => 'ACL Node module tests',
          'type' => 'module',
          'description' => 'Support module for ACL node related testing.',
          'core_version_requirement' => '^10.3 || ^11 || ^12',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'acl' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/acl/acl.info.yml',
        'basename' => 'acl.info.yml',
        'name' => 'ACL',
        'info' => 
        array (
          'name' => 'ACL',
          'type' => 'module',
          'description' => 'Access control list API. Has no features on its own.',
          'core_version_requirement' => '^10.3 || ^11 || ^12',
          'package' => 'Access control',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_entity_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/modules/entity_form/tests/modules/entity_browser_entity_form_test/entity_browser_entity_form_test.info.yml',
        'basename' => 'entity_browser_entity_form_test.info.yml',
        'name' => 'Entity browser entity form test',
        'info' => 
        array (
          'name' => 'Entity browser entity form test',
          'type' => 'module',
          'description' => 'Support module for the Entity browser entity form module tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_browser_entity_form:entity_browser_entity_form',
            1 => 'entity_browser_test:entity_browser_test',
            2 => 'drupal:views',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_entity_form' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/modules/entity_form/entity_browser_entity_form.info.yml',
        'basename' => 'entity_browser_entity_form.info.yml',
        'name' => 'Entity Browser IEF',
        'info' => 
        array (
          'name' => 'Entity Browser IEF',
          'description' => 'Entity browser inline entity form integration.',
          'type' => 'module',
          'package' => 'Media',
          'core_version_requirement' => '^10.2 || ^11',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'inline_entity_form:inline_entity_form',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_example' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/modules/entity_browser_example/entity_browser_example.info.yml',
        'basename' => 'entity_browser_example.info.yml',
        'name' => 'Entity Browser example',
        'info' => 
        array (
          'name' => 'Entity Browser example',
          'description' => 'Entity browser example module.',
          'type' => 'module',
          'package' => 'Media',
          'core_version_requirement' => '^10.2 || ^11',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'drupal:views',
            2 => 'drupal:field',
            3 => 'drupal:file',
            4 => 'drupal:node',
            5 => 'drupal:image',
            6 => 'drupal:path',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_test_configuration' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/tests/modules/entity_browser_test_configuration/entity_browser_test_configuration.info.yml',
        'basename' => 'entity_browser_test_configuration.info.yml',
        'name' => 'Entity browser test configuration',
        'info' => 
        array (
          'name' => 'Entity browser test configuration',
          'type' => 'module',
          'description' => 'Test Configuration Forms.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'drupal:node',
            2 => 'drupal:path',
            3 => 'drupal:views',
            4 => 'drupal:user',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_test_entityqueue' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/tests/modules/entity_browser_test_entityqueue/entity_browser_test_entityqueue.info.yml',
        'basename' => 'entity_browser_test_entityqueue.info.yml',
        'name' => 'Entity browser entityqueue integration test',
        'info' => 
        array (
          'name' => 'Entity browser entityqueue integration test',
          'type' => 'module',
          'description' => 'Support module for Entity browser entityqueue integration test.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'entityqueue:entityqueue',
            3 => 'entity_browser:entity_browser',
            4 => 'entity_browser_test:entity_browser_test',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_test_paragraphs' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/tests/modules/entity_browser_test_paragraphs/entity_browser_test_paragraphs.info.yml',
        'basename' => 'entity_browser_test_paragraphs.info.yml',
        'name' => 'Entity browser test paragraphs',
        'info' => 
        array (
          'name' => 'Entity browser test paragraphs',
          'type' => 'module',
          'description' => 'Test Paragraphs Integration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions:entity_reference_revisions',
            1 => 'entity_browser:entity_browser',
            2 => 'drupal:menu_ui',
            3 => 'drupal:node',
            4 => 'paragraphs:paragraphs',
            5 => 'drupal:path',
            6 => 'drupal:views',
            7 => 'drupal:user',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/tests/modules/entity_browser_test/entity_browser_test.info.yml',
        'basename' => 'entity_browser_test.info.yml',
        'name' => 'Entity browser test',
        'info' => 
        array (
          'name' => 'Entity browser test',
          'type' => 'module',
          'description' => 'Support module for the Entity browser module tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'drupal:file',
            2 => 'drupal:user',
            3 => 'drupal:node',
            4 => 'drupal:views',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_ief_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/tests/modules/entity_browser_ief_test/entity_browser_ief_test.info.yml',
        'basename' => 'entity_browser_ief_test.info.yml',
        'name' => 'Test IEF',
        'info' => 
        array (
          'name' => 'Test IEF',
          'type' => 'module',
          'description' => 'Test Inline Entity Form Integration',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'entity_browser:entity_browser',
            2 => 'entity_browser_entity_form:entity_browser_entity_form',
            3 => 'entity_browser_test:entity_browser_test',
            4 => 'drupal:media',
            5 => 'inline_entity_form:inline_entity_form',
            6 => 'drupal:views',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser_entity_embed_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/tests/modules/entity_browser_entity_embed_test/entity_browser_entity_embed_test.info.yml',
        'basename' => 'entity_browser_entity_embed_test.info.yml',
        'name' => 'Test IEF',
        'info' => 
        array (
          'name' => 'Test IEF',
          'type' => 'module',
          'description' => 'Test Entity Embed Integration',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:ckeditor5',
            2 => 'drupal:node',
            3 => 'drupal:views',
            4 => 'drupal:file',
            5 => 'drupal:text',
            6 => 'drupal:path',
            7 => 'drupal:editor',
            8 => 'embed:embed',
            9 => 'entity_embed:entity_embed',
            10 => 'entity_browser:entity_browser',
            11 => 'entity_browser_test:entity_browser_test',
          ),
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_browser' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/entity_browser/entity_browser.info.yml',
        'basename' => 'entity_browser.info.yml',
        'name' => 'Entity Browser',
        'info' => 
        array (
          'name' => 'Entity Browser',
          'description' => 'Provide a generic entity browser/picker/selector.',
          'type' => 'module',
          'package' => 'Media',
          'core_version_requirement' => '^10.2 || ^11',
          'configure' => 'entity.entity_browser.collection',
          'version' => '8.x-2.13',
          'project' => 'entity_browser',
          'datestamp' => 1739701404,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'restui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/restui/restui.info.yml',
        'basename' => 'restui.info.yml',
        'name' => 'REST UI',
        'info' => 
        array (
          'name' => 'REST UI',
          'type' => 'module',
          'description' => 'Provides a user interface to manage REST resources.',
          'package' => 'Web services',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'configure' => 'restui.list',
          'dependencies' => 
          array (
            0 => 'drupal:rest',
          ),
          'version' => '8.x-1.22',
          'project' => 'restui',
          'datestamp' => 1721134192,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'view_password' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/view_password/view_password.info.yml',
        'basename' => 'view_password.info.yml',
        'name' => 'View Password',
        'info' => 
        array (
          'name' => 'View Password',
          'type' => 'module',
          'description' => 'Allows the users to see the contents of the password fields on selected forms before submission.',
          'configure' => 'password.route',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.0.5',
          'project' => 'view_password',
          'datestamp' => 1723228514,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'session_based_temp_store' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/session_based_temp_store/session_based_temp_store.info.yml',
        'basename' => 'session_based_temp_store.info.yml',
        'name' => 'Session Based Temporary Storage',
        'info' => 
        array (
          'name' => 'Session Based Temporary Storage',
          'description' => 'Provides a service to store and retrieve temporary data for a given owner through the session.',
          'package' => 'Development',
          'type' => 'module',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_update_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/config_update/config_update_ui/config_update_ui.info.yml',
        'basename' => 'config_update_ui.info.yml',
        'name' => 'Configuration Update Reports',
        'info' => 
        array (
          'name' => 'Configuration Update Reports',
          'type' => 'module',
          'description' => 'Adds an updates report and revert functionality to configuration management.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'php' => 8.1,
          'configure' => 'config_update_ui.report',
          'dependencies' => 
          array (
            0 => 'config_update:config_update',
            1 => 'drupal:config',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_update' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/config_update/config_update.info.yml',
        'basename' => 'config_update.info.yml',
        'name' => 'Configuration Update Base',
        'info' => 
        array (
          'name' => 'Configuration Update Base',
          'type' => 'module',
          'description' => 'Provides basic revert and update functionality for other modules.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'php' => 8.1,
          'dependencies' => 
          array (
            0 => 'drupal:config',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'force_users_logout' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/force_users_logout/force_users_logout.info.yml',
        'basename' => 'force_users_logout.info.yml',
        'name' => 'Force Users Logout',
        'info' => 
        array (
          'name' => 'Force Users Logout',
          'type' => 'module',
          'description' => 'Allows admin to force logout of other users',
          'configure' => 'force_users_logout.individual_user_form',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'package' => 'Development',
          'version' => '2.0.2',
          'project' => 'force_users_logout',
          'datestamp' => 1715533101,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'featuredcontent' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/featuredcontent/featuredcontent.info.yml',
        'basename' => 'featuredcontent.info.yml',
        'name' => 'Featured Content',
        'info' => 
        array (
          'name' => 'Featured Content',
          'type' => 'module',
          'description' => 'Block for featured Products or APIs',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.0',
          'project' => 'featuredcontent',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'block_content',
            2 => 'options',
            3 => 'masonry',
          ),
          'interface translation project' => 'featuredcontent',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_group_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/field_group/contrib/field_group_migrate/field_group_migrate.info.yml',
        'basename' => 'field_group_migrate.info.yml',
        'name' => 'Field Group Migrate',
        'info' => 
        array (
          'name' => 'Field Group Migrate',
          'type' => 'module',
          'description' => 'Provides the ability to migrate field groups from D6/D7 to D8.',
          'package' => 'Migration',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'field_group:field_group',
          ),
          'version' => '8.x-3.6',
          'project' => 'field_group',
          'datestamp' => 1722672513,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_group_accordion' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/field_group/modules/field_group_accordion/field_group_accordion.info.yml',
        'basename' => 'field_group_accordion.info.yml',
        'name' => 'Field Group: Accordion formatter (Deprecated)',
        'info' => 
        array (
          'name' => 'Field Group: Accordion formatter (Deprecated)',
          'type' => 'module',
          'description' => 'Provides the option to render groups as accordion. This module is deprecated as Jquery UI is EOL.',
          'package' => 'Fields',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'jquery_ui_accordion:jquery_ui_accordion',
          ),
          'version' => '8.x-3.6',
          'project' => 'field_group',
          'datestamp' => 1722672513,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/field_group/field_group.info.yml',
        'basename' => 'field_group.info.yml',
        'name' => 'Field Group',
        'info' => 
        array (
          'name' => 'Field Group',
          'type' => 'module',
          'description' => 'Provides the ability to group your fields on both form and display.',
          'package' => 'Fields',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'version' => '8.x-3.6',
          'project' => 'field_group',
          'datestamp' => 1722672513,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'permissionspolicy' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/permissionspolicy/permissionspolicy.info.yml',
        'basename' => 'permissionspolicy.info.yml',
        'name' => 'Permissions Policy',
        'info' => 
        array (
          'name' => 'Permissions Policy',
          'type' => 'module',
          'description' => 'Provide Permissions-Policy header',
          'core_version_requirement' => '^10.1 || ^11',
          'configure' => 'permissionspolicy.settings',
          'version' => '1.2.2',
          'project' => 'permissionspolicy',
          'datestamp' => 1760574198,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'bef_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/better_exposed_filters/tests/modules/bef_test/bef_test.info.yml',
        'basename' => 'bef_test.info.yml',
        'name' => 'BEF Test',
        'info' => 
        array (
          'name' => 'BEF Test',
          'type' => 'module',
          'description' => 'Test module for Better Exposed Filters',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'better_exposed_filters:better_exposed_filters',
            1 => 'drupal:datetime',
            2 => 'drupal:node',
            3 => 'drupal:options',
            4 => 'drupal:user',
            5 => 'drupal:path',
          ),
          'version' => '7.0.5',
          'project' => 'better_exposed_filters',
          'datestamp' => 1738353784,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'better_exposed_filters' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/better_exposed_filters/better_exposed_filters.info.yml',
        'basename' => 'better_exposed_filters.info.yml',
        'name' => 'Better Exposed Filters',
        'info' => 
        array (
          'name' => 'Better Exposed Filters',
          'description' => 'Provides advanced options (e.g. links, checkboxes, or other widgets) to exposed Views elements.',
          'core_version_requirement' => '^10 || ^11',
          'type' => 'module',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '7.0.5',
          'project' => 'better_exposed_filters',
          'datestamp' => 1738353784,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'session_limit' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/session_limit/session_limit.info.yml',
        'basename' => 'session_limit.info.yml',
        'name' => 'Session Limit',
        'info' => 
        array (
          'name' => 'Session Limit',
          'description' => 'Limit simultaneous user sessions.',
          'core_version_requirement' => '^10 || ^11',
          'type' => 'module',
          'configure' => 'session_limit.config_form',
          'version' => '2.0.2',
          'project' => 'session_limit',
          'datestamp' => 1720956750,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'example_block' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/gutenberg/modules/example_block/example_block.info.yml',
        'basename' => 'example_block.info.yml',
        'name' => 'Example Block',
        'info' => 
        array (
          'name' => 'Example Block',
          'type' => 'module',
          'description' => 'Example block for Gutenberg.',
          'package' => 'Gutenberg',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'gutenberg',
          ),
          'version' => '8.x-2.14',
          'project' => 'gutenberg',
          'datestamp' => 1728495278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'gutenberg_cloud' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/gutenberg/modules/gutenberg_cloud/gutenberg_cloud.info.yml',
        'basename' => 'gutenberg_cloud.info.yml',
        'name' => 'Gutenberg Cloud',
        'info' => 
        array (
          'name' => 'Gutenberg Cloud',
          'type' => 'module',
          'description' => 'Your library of blocks in the cloud.',
          'configure' => 'gutenberg_cloud.manager',
          'package' => 'Gutenberg',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'gutenberg',
          ),
          'version' => '8.x-2.14',
          'project' => 'gutenberg',
          'datestamp' => 1728495278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'editorskit' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/gutenberg/modules/editorskit/editorskit.info.yml',
        'basename' => 'editorskit.info.yml',
        'name' => 'EditorsKit',
        'info' => 
        array (
          'name' => 'EditorsKit',
          'type' => 'module',
          'description' => 'Gutenberg Page Building Toolkit – EditorsKit<br/><em>This module is experimental, that means it is subject to non-backward compatible changes or removal in any future version.</em>',
          'package' => 'Gutenberg (Experimental)',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'gutenberg',
          ),
          'version' => '8.x-2.14',
          'project' => 'gutenberg',
          'datestamp' => 1728495278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'gutenberg' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/gutenberg/gutenberg.info.yml',
        'basename' => 'gutenberg.info.yml',
        'name' => 'Gutenberg Editor',
        'info' => 
        array (
          'name' => 'Gutenberg Editor',
          'type' => 'module',
          'description' => 'Advanced, yet easy to use content editor. Activate it on the content type edit page.',
          'package' => 'Gutenberg',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
            1 => 'drupal:node',
            2 => 'drupal:views',
            3 => 'drupal:user',
            4 => 'drupal:block_content',
            5 => 'drupal:image',
            6 => 'drupal:file',
            7 => 'drupal:filter',
          ),
          'version' => '8.x-2.14',
          'project' => 'gutenberg',
          'datestamp' => 1728495278,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'openapi_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/openapi/tests/modules/openapi_test/openapi_test.info.yml',
        'basename' => 'openapi_test.info.yml',
        'name' => 'OpenApi Test Resources',
        'info' => 
        array (
          'name' => 'OpenApi Test Resources',
          'type' => 'module',
          'description' => 'Resource dependencies for running tests for the OpenApi Module.',
          'package' => 'Testing',
          'version' => '8.x-2.3',
          'project' => 'openapi',
          'datestamp' => 1737537763,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'openapi' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/openapi/openapi.info.yml',
        'basename' => 'openapi.info.yml',
        'name' => 'OpenAPI',
        'info' => 
        array (
          'name' => 'OpenAPI',
          'type' => 'module',
          'description' => 'Connects Drupal to the OpenAPI Javascript Library',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'OpenAPI',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
          'version' => '8.x-2.3',
          'project' => 'openapi',
          'datestamp' => 1737537763,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'facets_searchbox_widget' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/facets/modules/facets_searchbox_widget/facets_searchbox_widget.info.yml',
        'basename' => 'facets_searchbox_widget.info.yml',
        'name' => 'Facets Searchbox Widget',
        'info' => 
        array (
          'name' => 'Facets Searchbox Widget',
          'type' => 'module',
          'description' => 'Provides a input to search and filter facet items.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'facets:facets',
          ),
          'test_dependencies' => 
          array (
            0 => 'search_api:search_api',
            1 => 'facets:facets',
            2 => 'drupal:views',
          ),
          'version' => '2.0.10',
          'project' => 'facets',
          'datestamp' => 1756225088,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'facets_range_widget' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/facets/modules/facets_range_widget/facets_range_widget.info.yml',
        'basename' => 'facets_range_widget.info.yml',
        'name' => 'Facets Range Widget',
        'info' => 
        array (
          'name' => 'Facets Range Widget',
          'type' => 'module',
          'description' => 'Provides a range widget and solid slider.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'facets:facets',
            1 => 'jquery_ui_slider:jquery_ui_slider',
            2 => 'jquery_ui_touch_punch:jquery_ui_touch_punch',
          ),
          'test_dependencies' => 
          array (
            0 => 'search_api:search_api',
            1 => 'facets:facets',
            2 => 'drupal:views',
          ),
          'version' => '2.0.10',
          'project' => 'facets',
          'datestamp' => 1756225088,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'facets_rest' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/facets/modules/facets_rest/facets_rest.info.yml',
        'basename' => 'facets_rest.info.yml',
        'name' => 'Rest Facets',
        'info' => 
        array (
          'name' => 'Rest Facets',
          'type' => 'module',
          'description' => 'Adds facets to rest views based on a Search API index.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'facets:facets',
            1 => 'drupal:rest',
          ),
          'test_dependencies' => 
          array (
            0 => 'search_api:search_api',
            1 => 'facets:facets',
            2 => 'drupal:views',
            3 => 'drupal:rest',
          ),
          'version' => '2.0.10',
          'project' => 'facets',
          'datestamp' => 1756225088,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'facets_summary' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/facets/modules/facets_summary/facets_summary.info.yml',
        'basename' => 'facets_summary.info.yml',
        'name' => 'Facets summary (Experimental)',
        'info' => 
        array (
          'name' => 'Facets summary (Experimental)',
          'type' => 'module',
          'description' => 'Exposes a Facets block summary showing the current search.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Search',
          'configure' => 'entity.facets_facet.collection',
          'dependencies' => 
          array (
            0 => 'facets:facets',
          ),
          'test_dependencies' => 
          array (
            0 => 'search_api:search_api',
            1 => 'drupal:views',
          ),
          'version' => '2.0.10',
          'project' => 'facets',
          'datestamp' => 1756225088,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'facets' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/facets/facets.info.yml',
        'basename' => 'facets.info.yml',
        'name' => 'Facets',
        'info' => 
        array (
          'name' => 'Facets',
          'type' => 'module',
          'description' => 'Faceted search interfaces that can be used on Search API searchers.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Search',
          'configure' => 'entity.facets_facet.collection',
          'test_dependencies' => 
          array (
            0 => 'search_api:search_api',
            1 => 'drupal:views',
          ),
          'version' => '2.0.10',
          'project' => 'facets',
          'datestamp' => 1756225088,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'svg_image_field_media_bundle' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/svg_image_field/modules/svg_image_field_media_bundle/svg_image_field_media_bundle.info.yml',
        'basename' => 'svg_image_field_media_bundle.info.yml',
        'name' => 'SVG Image Field - Media Bundle',
        'info' => 
        array (
          'name' => 'SVG Image Field - Media Bundle',
          'type' => 'module',
          'description' => 'Creates a media bundle to use SVG Image Field with the Media capabilities in core. NOTE: if you are planning to use this with the Media Library in core, it is recommended to install that module before this one. Will also install Acquia Site Studio Components if that is installed.',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'svg_image_field:svg_image_field',
          ),
          'version' => '2.3.7',
          'project' => 'svg_image_field',
          'datestamp' => 1764706273,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'svg_image_field' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/svg_image_field/svg_image_field.info.yml',
        'basename' => 'svg_image_field.info.yml',
        'name' => 'SVG image field',
        'info' => 
        array (
          'name' => 'SVG image field',
          'type' => 'module',
          'description' => 'Provides svg image field',
          'package' => 'Field types',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:image',
          ),
          'php' => 8,
          'libraries-extend' => 
          array (
            'media_library/style' => 
            array (
              0 => 'svg_image_field/media_library',
            ),
          ),
          'version' => '2.3.7',
          'project' => 'svg_image_field',
          'datestamp' => 1764706273,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'autocomplete_deluxe' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/autocomplete_deluxe/autocomplete_deluxe.info.yml',
        'basename' => 'autocomplete_deluxe.info.yml',
        'name' => 'Autocomplete Deluxe',
        'info' => 
        array (
          'name' => 'Autocomplete Deluxe',
          'type' => 'module',
          'description' => 'Enhanced autocomplete using Jquery UI autocomplete.',
          'package' => 'User interface',
          'core_version_requirement' => '^10.3 || ^11',
          'version' => '2.1.2',
          'project' => 'autocomplete_deluxe',
          'datestamp' => 1742303936,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'terms_of_use' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/terms_of_use/terms_of_use.info.yml',
        'basename' => 'terms_of_use.info.yml',
        'name' => 'Terms of Use',
        'info' => 
        array (
          'name' => 'Terms of Use',
          'description' => 'Adds terms of Use to the registration page.',
          'core_version_requirement' => '^8.8 || ^9 || ^10 || ^11',
          'type' => 'module',
          'package' => 'User registration',
          'configure' => 'terms_of_use.settings_form',
          'version' => '8.x-2.4',
          'project' => 'terms_of_use',
          'datestamp' => 1715437325,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mailsystem_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/mailsystem/tests/themes/mailsystem_test_theme/mailsystem_test_theme.info.yml',
        'basename' => 'mailsystem_test_theme.info.yml',
        'name' => 'Mailsystem test theme',
        'info' => 
        array (
          'name' => 'Mailsystem test theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing mailsystem',
          'core_version_requirement' => '^9  || ^10 || ^11',
          'regions' => 
          array (
            'sidebar_first' => 'Left sidebar',
            'sidebar_second' => 'Right sidebar',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
            1 => 'sidebar_second',
          ),
          'version' => '8.x-4.5',
          'project' => 'mailsystem',
          'datestamp' => 1723379372,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mailsystem' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/mailsystem/mailsystem.info.yml',
        'basename' => 'mailsystem.info.yml',
        'name' => 'Mail System',
        'info' => 
        array (
          'package' => 'Mail',
          'name' => 'Mail System',
          'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
          'type' => 'module',
          'core_version_requirement' => '^9 || ^10.1 || ^11',
          'configure' => 'mailsystem.settings',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
          'version' => '8.x-4.5',
          'project' => 'mailsystem',
          'datestamp' => 1723379372,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/token/token.info.yml',
        'basename' => 'token.info.yml',
        'name' => 'Token',
        'info' => 
        array (
          'name' => 'Token',
          'type' => 'module',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'version' => '8.x-1.16',
          'project' => 'token',
          'datestamp' => 1757151199,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'clipboardjs' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/clipboardjs/clipboardjs.info.yml',
        'basename' => 'clipboardjs.info.yml',
        'name' => 'Clipboard.js',
        'info' => 
        array (
          'name' => 'Clipboard.js',
          'type' => 'module',
          'description' => 'A modern approach to copy text to clipboard.',
          'package' => 'Content display',
          'core_version_requirement' => '^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'page_load_progress' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/page_load_progress/page_load_progress.info.yml',
        'basename' => 'page_load_progress.info.yml',
        'name' => 'Page Load Progress',
        'info' => 
        array (
          'name' => 'Page Load Progress',
          'description' => 'Locks the screen and adds a progress icon to indicate progress when a page takes a long time to reload.',
          'type' => 'module',
          'package' => 'User interface',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'configure' => 'page_load_progress.admin_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_display_configurable_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_display_configurable_test/node_display_configurable_test.info.yml',
        'basename' => 'node_display_configurable_test.info.yml',
        'name' => 'Node configurable display module tests',
        'info' => 
        array (
          'name' => 'Node configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for node \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rdf_conflicting_namespaces' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/rdf/tests/rdf_conflicting_namespaces/rdf_conflicting_namespaces.info.yml',
        'basename' => 'rdf_conflicting_namespaces.info.yml',
        'name' => 'RDF module conflicting namespaces test',
        'info' => 
        array (
          'name' => 'RDF module conflicting namespaces test',
          'type' => 'module',
          'description' => 'Test conflicting namespace declaration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
          'version' => '3.0.0-beta2',
          'project' => 'rdf',
          'datestamp' => 1721596084,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/rdf/tests/rdf_test/rdf_test.info.yml',
        'basename' => 'rdf_test.info.yml',
        'name' => 'RDF test module',
        'info' => 
        array (
          'name' => 'RDF test module',
          'type' => 'module',
          'description' => 'Test functionality for the RDF module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
          'version' => '3.0.0-beta2',
          'project' => 'rdf',
          'datestamp' => 1721596084,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rdf_test_namespaces' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/rdf/tests/rdf_test_namespaces/rdf_test_namespaces.info.yml',
        'basename' => 'rdf_test_namespaces.info.yml',
        'name' => 'RDF module namespaces test',
        'info' => 
        array (
          'name' => 'RDF module namespaces test',
          'type' => 'module',
          'description' => 'Test namespace declaration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
          'version' => '3.0.0-beta2',
          'project' => 'rdf',
          'datestamp' => 1721596084,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/rdf/rdf.info.yml',
        'basename' => 'rdf.info.yml',
        'name' => 'RDF',
        'info' => 
        array (
          'name' => 'RDF',
          'type' => 'module',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Web services',
          'core_version_requirement' => '^10.3 || ^11.0',
          'version' => '3.0.0-beta2',
          'project' => 'rdf',
          'datestamp' => 1721596084,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools_views_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/modules/ctools_views/tests/modules/ctools_views_test_views/ctools_views_test_views.info.yml',
        'basename' => 'ctools_views_test_views.info.yml',
        'name' => 'CTools Views test views',
        'info' => 
        array (
          'name' => 'CTools Views test views',
          'type' => 'module',
          'description' => 'Provides default views for CTools Views tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:block',
            2 => 'entity_test:entity_test',
            3 => 'ctools_views:ctools_views',
            4 => 'drupal:text',
            5 => 'drupal:user',
            6 => 'drupal:node',
            7 => 'drupal:taxonomy',
          ),
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/modules/ctools_views/ctools_views.info.yml',
        'basename' => 'ctools_views.info.yml',
        'name' => 'Chaos Tools Views',
        'info' => 
        array (
          'name' => 'Chaos Tools Views',
          'type' => 'module',
          'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
          'package' => 'Chaos tool suite (Experimental)',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:views',
          ),
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools_block_field_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/modules/ctools_block/tests/modules/ctools_block_field_test/ctools_block_field_test.info.yml',
        'basename' => 'ctools_block_field_test.info.yml',
        'name' => 'Chaos Tools Blocks Test',
        'info' => 
        array (
          'name' => 'Chaos Tools Blocks Test',
          'type' => 'module',
          'description' => 'Support module for Chaos Tools Blocks Tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:menu_ui',
            2 => 'drupal:node',
            3 => 'drupal:path',
            4 => 'drupal:text',
            5 => 'drupal:user',
          ),
          'features' => true,
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools_block' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/modules/ctools_block/ctools_block.info.yml',
        'basename' => 'ctools_block.info.yml',
        'name' => 'Chaos Tools Blocks',
        'info' => 
        array (
          'name' => 'Chaos Tools Blocks',
          'type' => 'module',
          'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
          'package' => 'Chaos tool suite (Experimental)',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
          ),
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_mask_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/modules/ctools_entity_mask/tests/modules/entity_mask_test/entity_mask_test.info.yml',
        'basename' => 'entity_mask_test.info.yml',
        'name' => 'Entity Mask test',
        'info' => 
        array (
          'name' => 'Entity Mask test',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
            1 => 'ctools_entity_mask:ctools_entity_mask',
            2 => 'drupal:image',
            3 => 'drupal:text',
          ),
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools_entity_mask' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/modules/ctools_entity_mask/ctools_entity_mask.info.yml',
        'basename' => 'ctools_entity_mask.info.yml',
        'name' => 'Entity Mask',
        'info' => 
        array (
          'name' => 'Entity Mask',
          'type' => 'module',
          'description' => 'Allows an entity type to borrow the fields and display configuration of another entity type.',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools_wizard_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/tests/modules/ctools_wizard_test/ctools_wizard_test.info.yml',
        'basename' => 'ctools_wizard_test.info.yml',
        'name' => 'Chaos Wizard Test',
        'info' => 
        array (
          'name' => 'Chaos Wizard Test',
          'type' => 'module',
          'description' => 'Provides testing for ctools wizard',
          'package' => 'Testing',
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools_block_display_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/tests/modules/ctools_block_display_test/ctools_block_display_test.info.yml',
        'basename' => 'ctools_block_display_test.info.yml',
        'name' => 'Block Display Variant Test',
        'info' => 
        array (
          'name' => 'Block Display Variant Test',
          'type' => 'module',
          'description' => 'Testing infrastructure for CTools block display variants.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
          ),
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/ctools/ctools.info.yml',
        'basename' => 'ctools.info.yml',
        'name' => 'Chaos Tools',
        'info' => 
        array (
          'name' => 'Chaos Tools',
          'type' => 'module',
          'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
          'package' => 'Chaos tool suite',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'version' => '4.1.0',
          'project' => 'ctools',
          'datestamp' => 1718144953,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'honeypot_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/honeypot/tests/modules/honeypot_test/honeypot_test.info.yml',
        'basename' => 'honeypot_test.info.yml',
        'name' => 'Honeypot Test',
        'info' => 
        array (
          'name' => 'Honeypot Test',
          'type' => 'module',
          'description' => 'Support module for Honeypot internal testing purposes.',
          'package' => 'Testing',
          'version' => '2.2.2',
          'project' => 'honeypot',
          'datestamp' => 1739854374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'honeypot' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/honeypot/honeypot.info.yml',
        'basename' => 'honeypot.info.yml',
        'name' => 'Honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'type' => 'module',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'package' => 'Spam control',
          'core_version_requirement' => '^10.3 || ^11',
          'test_dependencies' => 
          array (
            0 => 'rules:rules',
          ),
          'configure' => 'honeypot.config',
          'version' => '2.2.2',
          'project' => 'honeypot',
          'datestamp' => 1739854374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'consumerorg' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/consumerorg/consumerorg.info.yml',
        'basename' => 'consumerorg.info.yml',
        'name' => 'Consumer organization',
        'info' => 
        array (
          'name' => 'Consumer organization',
          'type' => 'module',
          'description' => 'Adds the content type representing consumer organizations in the IBM API Manager',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.1',
          'project' => 'consumerorg',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'node',
            2 => 'ibm_apim:ibm_apim',
            3 => 'votingapi_widgets',
            4 => 'cshs',
          ),
          'interface translation project' => 'consumerorg',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'cshs_menu_link' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/cshs/modules/cshs_menu_link/cshs_menu_link.info.yml',
        'basename' => 'cshs_menu_link.info.yml',
        'name' => 'Client-side Hierarchical Select: Menu Link',
        'info' => 
        array (
          'name' => 'Client-side Hierarchical Select: Menu Link',
          'description' => 'A client-side hierarchical selection of parents for the menu link. Works for node and term forms (with "taxonomy_menu_ui" enabled).',
          'package' => 'Widgets',
          'type' => 'module',
          'core_version_requirement' => '^10.3 || ^11',
          'dependencies' => 
          array (
            0 => 'cshs:cshs',
            1 => 'drupal:menu_ui',
          ),
          'version' => '4.0.3',
          'project' => 'cshs',
          'datestamp' => 1732597584,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'cshs_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/cshs/tests/modules/cshs_test/cshs_test.info.yml',
        'basename' => 'cshs_test.info.yml',
        'name' => 'Client-side Hierarchical Select (Test)',
        'info' => 
        array (
          'name' => 'Client-side Hierarchical Select (Test)',
          'description' => 'Support module for Client-side Hierarchical Select tests.',
          'package' => 'Testing',
          'type' => 'module',
          'core_version_requirement' => '^10.3 || ^11',
          'dependencies' => 
          array (
            0 => 'cshs:cshs',
            1 => 'drupal:node',
            2 => 'drupal:taxonomy',
            3 => 'drupal:views',
          ),
          'version' => '4.0.3',
          'project' => 'cshs',
          'datestamp' => 1732597584,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'cshs' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/cshs/cshs.info.yml',
        'basename' => 'cshs.info.yml',
        'name' => 'Client-side Hierarchical Select',
        'info' => 
        array (
          'name' => 'Client-side Hierarchical Select',
          'description' => 'A simple client-side hierarchical select widget for taxonomy terms.',
          'package' => 'Widgets',
          'type' => 'module',
          'core_version_requirement' => '^10.3 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:taxonomy',
          ),
          'version' => '4.0.3',
          'project' => 'cshs',
          'datestamp' => 1732597584,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jquery_ui_draggable' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/jquery_ui_draggable/jquery_ui_draggable.info.yml',
        'basename' => 'jquery_ui_draggable.info.yml',
        'name' => 'jQuery UI Draggable',
        'info' => 
        array (
          'name' => 'jQuery UI Draggable',
          'type' => 'module',
          'description' => 'Provides jQuery UI Draggable library.',
          'package' => 'jQuery UI',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'jquery_ui:jquery_ui (>=8.x-1.7)',
          ),
          'version' => '2.1.0',
          'project' => 'jquery_ui_draggable',
          'datestamp' => 1717015494,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'potx' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/potx/potx.info.yml',
        'basename' => 'potx.info.yml',
        'name' => 'Translation template extractor',
        'info' => 
        array (
          'name' => 'Translation template extractor',
          'description' => 'Provides a web interface and an API to extract translatable text from the sources of installed components.',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'package' => 'Multilingual',
          'dependencies' => 
          array (
            0 => 'drupal:locale',
          ),
          'type' => 'module',
          'version' => '8.x-1.1',
          'project' => 'potx',
          'datestamp' => 1720516290,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'typed_data_widget_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/typed_data/tests/modules/typed_data_widget_test/typed_data_widget_test.info.yml',
        'basename' => 'typed_data_widget_test.info.yml',
        'name' => 'Typed Data Widgets Test',
        'info' => 
        array (
          'name' => 'Typed Data Widgets Test',
          'type' => 'module',
          'package' => 'Testing',
          'description' => 'Implements example forms using typed data widgets.',
          'dependencies' => 
          array (
            0 => 'typed_data:typed_data',
          ),
          'configure' => 'typed_data_widget_test.examples',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'typed_data_global_context_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/typed_data/tests/modules/typed_data_global_context_test/typed_data_global_context_test.info.yml',
        'basename' => 'typed_data_global_context_test.info.yml',
        'name' => 'Typed Data Global Context Test',
        'info' => 
        array (
          'name' => 'Typed Data Global Context Test',
          'type' => 'module',
          'package' => 'Testing',
          'description' => 'Provides a simple global context for testing.',
          'dependencies' => 
          array (
            0 => 'typed_data:typed_data',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'typed_data' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/typed_data/typed_data.info.yml',
        'basename' => 'typed_data.info.yml',
        'name' => 'Typed Data',
        'info' => 
        array (
          'name' => 'Typed Data',
          'type' => 'module',
          'description' => 'Extends the core Typed Data API with new APIs and features.',
          'core_version_requirement' => '^10.3 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_dc/metatag_dc.info.yml',
        'basename' => 'metatag_dc.info.yml',
        'name' => 'Metatag: Dublin Core',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core',
          'type' => 'module',
          'description' => 'Provides the fifteen <a href="https://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="https://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_favicons' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_favicons/metatag_favicons.info.yml',
        'basename' => 'metatag_favicons.info.yml',
        'name' => 'Metatag: Favicons',
        'info' => 
        array (
          'name' => 'Metatag: Favicons',
          'type' => 'module',
          'description' => 'Provides support for many different favicons.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_dc_advanced' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_dc_advanced/metatag_dc_advanced.info.yml',
        'basename' => 'metatag_dc_advanced.info.yml',
        'name' => 'Metatag: Dublin Core Advanced',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core Advanced',
          'type' => 'module',
          'description' => 'Provides forty additional meta tags from the <a href="https://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_dc',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_mobile' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_mobile/metatag_mobile.info.yml',
        'basename' => 'metatag_mobile.info.yml',
        'name' => 'Metatag: Mobile & UI Adjustments',
        'info' => 
        array (
          'name' => 'Metatag: Mobile & UI Adjustments',
          'type' => 'module',
          'description' => 'Provides support for meta tags used to control the mobile browser experience.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_app_links' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_app_links/metatag_app_links.info.yml',
        'basename' => 'metatag_app_links.info.yml',
        'name' => 'Metatag: App Links',
        'info' => 
        array (
          'name' => 'Metatag: App Links',
          'type' => 'module',
          'description' => 'Provides support for applinks.org meta tags.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_facebook' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_facebook/metatag_facebook.info.yml',
        'basename' => 'metatag_facebook.info.yml',
        'name' => 'Metatag: Facebook',
        'info' => 
        array (
          'name' => 'Metatag: Facebook',
          'type' => 'module',
          'description' => 'A set of meta tags specially for controlling advanced functionality with Facebook.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_pinterest' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_pinterest/metatag_pinterest.info.yml',
        'basename' => 'metatag_pinterest.info.yml',
        'name' => 'Metatag: Pinterest',
        'info' => 
        array (
          'name' => 'Metatag: Pinterest',
          'type' => 'module',
          'description' => 'Provides support for Pinterest\'s custom meta tags.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_hreflang' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_hreflang/metatag_hreflang.info.yml',
        'basename' => 'metatag_hreflang.info.yml',
        'name' => 'Metatag: Hreflang',
        'info' => 
        array (
          'name' => 'Metatag: Hreflang',
          'type' => 'module',
          'description' => 'Provides support for the hreflang meta tag with some extra logic to simplify it.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_page_manager/metatag_page_manager.info.yml',
        'basename' => 'metatag_page_manager.info.yml',
        'name' => 'Metatag: Page Manager',
        'info' => 
        array (
          'name' => 'Metatag: Page Manager',
          'type' => 'module',
          'description' => 'Provides metatag support for Page Manager variants.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'page_manager:page_manager',
            1 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_open_graph' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_open_graph/metatag_open_graph.info.yml',
        'basename' => 'metatag_open_graph.info.yml',
        'name' => 'Metatag: Open Graph',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph',
          'type' => 'module',
          'description' => 'Provides support for Open Graph Protocol meta tags.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
        'basename' => 'metatag_twitter_cards.info.yml',
        'name' => 'Metatag: Twitter Cards',
        'info' => 
        array (
          'name' => 'Metatag: Twitter Cards',
          'type' => 'module',
          'description' => 'Provides support for Twitter\'s Card meta tags.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_routes' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_routes/metatag_routes.info.yml',
        'basename' => 'metatag_routes.info.yml',
        'name' => 'Metatag Custom Routes (Paths)',
        'info' => 
        array (
          'name' => 'Metatag Custom Routes (Paths)',
          'type' => 'module',
          'description' => 'Allows assigning meta tags to be used on custom routes, equivalent to custom paths.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_google_cse' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_google_cse/metatag_google_cse.info.yml',
        'basename' => 'metatag_google_cse.info.yml',
        'name' => 'Metatag: Google Custom Search Engine (CSE)',
        'info' => 
        array (
          'name' => 'Metatag: Google Custom Search Engine (CSE)',
          'type' => 'module',
          'description' => 'Provides support for meta tags used for Google Custom Search Engine.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_views/metatag_views.info.yml',
        'basename' => 'metatag_views.info.yml',
        'name' => 'Metatag: Views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'type' => 'module',
          'description' => 'Provides views integration for metatags.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'drupal:views',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_verification' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_verification/metatag_verification.info.yml',
        'basename' => 'metatag_verification.info.yml',
        'name' => 'Metatag: Verification',
        'info' => 
        array (
          'name' => 'Metatag: Verification',
          'type' => 'module',
          'description' => 'Verifies ownership of a site for search engines and other services.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_extended_perms' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_extended_perms/metatag_extended_perms.info.yml',
        'basename' => 'metatag_extended_perms.info.yml',
        'name' => 'Metatag Extended Permissions',
        'info' => 
        array (
          'name' => 'Metatag Extended Permissions',
          'type' => 'module',
          'description' => 'Adds individual permissions for each meta tag, allowing for fine-grained access to the meta tags. Note: this may lead to performance issues on the permissions admin page, please see the included README.txt file for details.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_test_integration' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/tests/modules/metatag_test_integration/metatag_test_integration.info.yml',
        'basename' => 'metatag_test_integration.info.yml',
        'name' => 'Metatag: Test Integration',
        'info' => 
        array (
          'name' => 'Metatag: Test Integration',
          'type' => 'module',
          'description' => 'Support module for integration with metatag module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_test_custom_route' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/tests/modules/metatag_test_custom_route/metatag_test_custom_route.info.yml',
        'basename' => 'metatag_test_custom_route.info.yml',
        'name' => 'Metatag: Test Custom Route',
        'info' => 
        array (
          'name' => 'Metatag: Test Custom Route',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom route that only inherits the global configuration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_test_tag' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/tests/modules/metatag_test_tag/metatag_test_tag.info.yml',
        'basename' => 'metatag_test_tag.info.yml',
        'name' => 'Metatag Tests: Tag',
        'info' => 
        array (
          'name' => 'Metatag Tests: Tag',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom meta tag.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_open_graph_products' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_open_graph_products/metatag_open_graph_products.info.yml',
        'basename' => 'metatag_open_graph_products.info.yml',
        'name' => 'Metatag: Open Graph Products',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph Products',
          'type' => 'module',
          'description' => 'Provides additional Open Graph Protocol meta tags for describing products.',
          'core_version_requirement' => '^9.4 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_open_graph',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag_custom_tags' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag_custom_tags/metatag_custom_tags.info.yml',
        'basename' => 'metatag_custom_tags.info.yml',
        'name' => 'Metatag: Custom Tags',
        'info' => 
        array (
          'name' => 'Metatag: Custom Tags',
          'type' => 'module',
          'description' => 'Provides support to define and manage custom meta tags.',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'package' => 'SEO',
          'configure' => 'entity.metatag_custom_tag.collection',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'test_dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'metatag' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/metatag/metatag.info.yml',
        'basename' => 'metatag.info.yml',
        'name' => 'Metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'type' => 'module',
          'description' => 'Manage meta tags for all entities.',
          'core_version_requirement' => '^10.3 || ^11',
          'package' => 'SEO',
          'php' => 8,
          'configure' => 'entity.metatag_defaults.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'token:token',
          ),
          'version' => '2.2.0',
          'project' => 'metatag',
          'datestamp' => 1758622374,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'account_field_split' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/account_field_split/account_field_split.info.yml',
        'basename' => 'account_field_split.info.yml',
        'name' => 'Account Field Split',
        'info' => 
        array (
          'name' => 'Account Field Split',
          'type' => 'module',
          'description' => 'Split up user profile "User name and password" field into separate list of fields that could be managed independently through the "Manage form display" UI.',
          'core_version_requirement' => '^8.8 || ^9 || ^10 || ^11',
          'package' => 'User',
          'version' => '2.0.4',
          'project' => 'account_field_split',
          'datestamp' => 1739982074,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'scheduler_rules_integration' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/scheduler/scheduler_rules_integration/scheduler_rules_integration.info.yml',
        'basename' => 'scheduler_rules_integration.info.yml',
        'name' => 'Scheduler Rules Integration',
        'info' => 
        array (
          'name' => 'Scheduler Rules Integration',
          'type' => 'module',
          'description' => 'Scheduler sub-module providing conditions, actions and events for use with the Rules module.',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'rules:rules',
            1 => 'scheduler:scheduler',
          ),
          'version' => '2.2.2',
          'project' => 'scheduler',
          'datestamp' => 1760885785,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'scheduler_api_legacy_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/scheduler/tests/modules/scheduler_api_test/scheduler_api_legacy_test/scheduler_api_legacy_test.info.yml',
        'basename' => 'scheduler_api_legacy_test.info.yml',
        'name' => 'Scheduler API Legacy Test',
        'info' => 
        array (
          'name' => 'Scheduler API Legacy Test',
          'type' => 'module',
          'description' => 'Sub-module containing the legacy hook implementations and event namespaces.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'scheduler:scheduler',
            1 => 'scheduler_api_test:scheduler_api_test',
          ),
          'version' => '2.2.2',
          'project' => 'scheduler',
          'datestamp' => 1760885785,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'scheduler_api_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/scheduler/tests/modules/scheduler_api_test/scheduler_api_test.info.yml',
        'basename' => 'scheduler_api_test.info.yml',
        'name' => 'Scheduler API Test',
        'info' => 
        array (
          'name' => 'Scheduler API Test',
          'type' => 'module',
          'description' => 'Support module for Scheduler API-related testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'scheduler:scheduler',
            1 => 'drupal:media',
          ),
          'version' => '2.2.2',
          'project' => 'scheduler',
          'datestamp' => 1760885785,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'scheduler_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/scheduler/tests/modules/scheduler_access_test/scheduler_access_test.info.yml',
        'basename' => 'scheduler_access_test.info.yml',
        'name' => 'Scheduler Entity Access Test',
        'info' => 
        array (
          'name' => 'Scheduler Entity Access Test',
          'type' => 'module',
          'description' => 'Support module for Scheduler testing with restricted entity access.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'scheduler:scheduler',
          ),
          'version' => '2.2.2',
          'project' => 'scheduler',
          'datestamp' => 1760885785,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'scheduler_extras' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/scheduler/tests/modules/scheduler_extras/scheduler_extras.info.yml',
        'basename' => 'scheduler_extras.info.yml',
        'name' => 'Scheduler Extras',
        'info' => 
        array (
          'name' => 'Scheduler Extras',
          'type' => 'module',
          'description' => 'Support module for general Scheduler testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'scheduler:scheduler',
          ),
          'version' => '2.2.2',
          'project' => 'scheduler',
          'datestamp' => 1760885785,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/scheduler/scheduler.info.yml',
        'basename' => 'scheduler.info.yml',
        'name' => 'Scheduler',
        'info' => 
        array (
          'name' => 'Scheduler',
          'type' => 'module',
          'description' => 'Publish and unpublish content and entities automatically on specified dates and times.',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'configure' => 'scheduler.admin_form',
          'dependencies' => 
          array (
            0 => 'drupal:system (>= 8.8.3)',
            1 => 'drupal:datetime',
            2 => 'drupal:field',
            3 => 'drupal:node',
            4 => 'drupal:views',
          ),
          'test_dependencies' => 
          array (
            0 => 'rules:rules',
            1 => 'devel:devel_generate',
            2 => 'drupal:media',
            3 => 'commerce:commerce',
            4 => 'drupal:taxonomy',
          ),
          'libraries' => 
          array (
            0 => 'admin-css',
            1 => 'vertical-tabs',
            2 => 'default-time',
          ),
          'version' => '2.2.2',
          'project' => 'scheduler',
          'datestamp' => 1760885785,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jquery_ui_accordion' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/jquery_ui_accordion/jquery_ui_accordion.info.yml',
        'basename' => 'jquery_ui_accordion.info.yml',
        'name' => 'jQuery UI Accordion',
        'info' => 
        array (
          'name' => 'jQuery UI Accordion',
          'type' => 'module',
          'description' => 'Provides jQuery UI Accordion library.',
          'package' => 'jQuery UI',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'jquery_ui:jquery_ui (>=8.x-1.7)',
          ),
          'version' => '2.1.0',
          'project' => 'jquery_ui_accordion',
          'datestamp' => 1717015497,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'real_aes' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/real_aes/real_aes.info.yml',
        'basename' => 'real_aes.info.yml',
        'name' => 'Real AES',
        'info' => 
        array (
          'name' => 'Real AES',
          'description' => 'Provides an Authenticated AES encryption method for Encrypt through the Defuse PHP Encryption library.',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'type' => 'module',
          'package' => 'Security',
          'dependencies' => 
          array (
            0 => 'encrypt:encrypt',
          ),
          'version' => '8.x-2.6',
          'project' => 'real_aes',
          'datestamp' => 1719066078,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'lang_dropdown' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/lang_dropdown/lang_dropdown.info.yml',
        'basename' => 'lang_dropdown.info.yml',
        'name' => 'Language Switcher Dropdown',
        'info' => 
        array (
          'name' => 'Language Switcher Dropdown',
          'type' => 'module',
          'description' => 'Provides a dropdown select to switch between available languages.',
          'package' => 'Multilingual',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:language',
          ),
          'configure' => 'block.admin_display',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'expand_collapse_formatter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/expand_collapse_formatter/expand_collapse_formatter.info.yml',
        'basename' => 'expand_collapse_formatter.info.yml',
        'name' => 'Expand Collapse Formatter',
        'info' => 
        array (
          'name' => 'Expand Collapse Formatter',
          'type' => 'module',
          'description' => 'A formatter to expand and collapse text area fields.',
          'core_version_requirement' => '^8.8 || ^9 || ^10 || ^11',
          'version' => '2.0.3',
          'project' => 'expand_collapse_formatter',
          'datestamp' => 1723586212,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'image_captcha' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/captcha/modules/image_captcha/image_captcha.info.yml',
        'basename' => 'image_captcha.info.yml',
        'name' => 'Image CAPTCHA',
        'info' => 
        array (
          'name' => 'Image CAPTCHA',
          'type' => 'module',
          'description' => 'Provides an image based CAPTCHA.',
          'package' => 'Spam control',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'captcha:captcha',
          ),
          'configure' => 'image_captcha.settings',
          'version' => '2.0.9',
          'project' => 'captcha',
          'datestamp' => 1753701291,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'captcha' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/captcha/captcha.info.yml',
        'basename' => 'captcha.info.yml',
        'name' => 'CAPTCHA',
        'info' => 
        array (
          'name' => 'CAPTCHA',
          'type' => 'module',
          'description' => 'Provides the CAPTCHA API for adding challenges to arbitrary forms.',
          'package' => 'Spam control',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'configure' => 'captcha_settings',
          'version' => '2.0.9',
          'project' => 'captcha',
          'datestamp' => 1753701291,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'slick_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/slick/modules/slick_ui/slick_ui.info.yml',
        'basename' => 'slick_ui.info.yml',
        'name' => 'Slick UI',
        'info' => 
        array (
          'name' => 'Slick UI',
          'type' => 'module',
          'description' => 'Provides Slick carousel configuration UI.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Slick',
          'configure' => 'entity.slick.collection',
          'dependencies' => 
          array (
            0 => 'slick:slick',
          ),
          'version' => '3.0.6',
          'project' => 'slick',
          'datestamp' => 1760846721,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'slick' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/slick/slick.info.yml',
        'basename' => 'slick.info.yml',
        'name' => 'Slick',
        'info' => 
        array (
          'name' => 'Slick',
          'type' => 'module',
          'description' => 'Slick carousel, the last carousel you\'ll ever need.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Slick',
          'dependencies' => 
          array (
            0 => 'blazy:blazy (>= 3.x)',
          ),
          'version' => '3.0.6',
          'project' => 'slick',
          'datestamp' => 1760846721,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jquery_ui_droppable' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/jquery_ui_droppable/jquery_ui_droppable.info.yml',
        'basename' => 'jquery_ui_droppable.info.yml',
        'name' => 'jQuery UI Droppable',
        'info' => 
        array (
          'name' => 'jQuery UI Droppable',
          'type' => 'module',
          'description' => 'Provides jQuery UI Droppable library.',
          'package' => 'jQuery UI',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'jquery_ui:jquery_ui (>=8.x-1.7)',
            1 => 'jquery_ui_draggable:jquery_ui_draggable (>=2.1)',
          ),
          'version' => '2.1.0',
          'project' => 'jquery_ui_droppable',
          'datestamp' => 1717031394,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'select_or_other' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/select_or_other/select_or_other.info.yml',
        'basename' => 'select_or_other.info.yml',
        'name' => 'Select (or other)',
        'info' => 
        array (
          'name' => 'Select (or other)',
          'type' => 'module',
          'description' => 'Provides a select box form element with additional option \'Other\' to give a textfield.',
          'package' => 'Fields',
          'core_version_requirement' => '^10.1 || ^11',
          'version' => '4.2.2',
          'project' => 'select_or_other',
          'datestamp' => 1763272036,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mimemail_example' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/mimemail/modules/mimemail_example/mimemail_example.info.yml',
        'basename' => 'mimemail_example.info.yml',
        'name' => 'Mime Mail Example',
        'info' => 
        array (
          'name' => 'Mime Mail Example',
          'type' => 'module',
          'description' => 'Example of how to use the Mime Mail module.',
          'package' => 'Example modules',
          'core_version_requirement' => '^10.3 || ^11',
          'dependencies' => 
          array (
            0 => 'mimemail:mimemail',
          ),
          'configure' => 'mimemail_example.example',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mimemail' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/mimemail/mimemail.info.yml',
        'basename' => 'mimemail.info.yml',
        'name' => 'Mime Mail',
        'info' => 
        array (
          'name' => 'Mime Mail',
          'type' => 'module',
          'description' => 'Sends MIME-encoded emails with embedded images and attachments.',
          'package' => 'Mail',
          'core_version_requirement' => '^10.3 || ^11',
          'dependencies' => 
          array (
            0 => 'mailsystem:mailsystem',
          ),
          'test_dependencies' => 
          array (
            0 => 'rules:rules',
          ),
          'configure' => 'mimemail.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'admin_toolbar_links_access_filter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.info.yml',
        'basename' => 'admin_toolbar_links_access_filter.info.yml',
        'name' => 'Admin Toolbar Links Access Filter',
        'info' => 
        array (
          'name' => 'Admin Toolbar Links Access Filter',
          'description' => 'Provides a workaround for the common problem that users with \'Use the administration pages and help\' permission see menu links they don\'t have access permission for. Deprecated from Drupal 10.3 and above.',
          'package' => 'Administration',
          'type' => 'module',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
          ),
          'lifecycle' => 'deprecated',
          'lifecycle_link' => 'https://www.drupal.org/project/admin_toolbar/issues/3463291',
          'version' => '3.6.2',
          'project' => 'admin_toolbar',
          'datestamp' => 1753826108,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'admin_toolbar_tools' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
        'basename' => 'admin_toolbar_tools.info.yml',
        'name' => 'Admin Toolbar Extra Tools',
        'info' => 
        array (
          'name' => 'Admin Toolbar Extra Tools',
          'description' => 'Adds menu links like Flush cache, Run cron, Run updates, and Logout under Drupal icon.',
          'package' => 'Administration',
          'configure' => 'admin_toolbar_tools.settings',
          'type' => 'module',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
          ),
          'version' => '3.6.2',
          'project' => 'admin_toolbar',
          'datestamp' => 1753826108,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'admin_toolbar_search' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/admin_toolbar/admin_toolbar_search/admin_toolbar_search.info.yml',
        'basename' => 'admin_toolbar_search.info.yml',
        'name' => 'Admin Toolbar Search',
        'info' => 
        array (
          'name' => 'Admin Toolbar Search',
          'description' => 'Provides search of Admin Toolbar items.',
          'package' => 'Administration',
          'type' => 'module',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'configure' => 'admin_toolbar_search.settings',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
          ),
          'version' => '3.6.2',
          'project' => 'admin_toolbar',
          'datestamp' => 1753826108,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'admin_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/admin_toolbar/admin_toolbar.info.yml',
        'basename' => 'admin_toolbar.info.yml',
        'name' => 'Admin Toolbar',
        'info' => 
        array (
          'name' => 'Admin Toolbar',
          'description' => 'Provides an improved drop-down menu interface to the site Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'configure' => 'admin_toolbar.settings',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:toolbar',
          ),
          'version' => '3.6.2',
          'project' => 'admin_toolbar',
          'datestamp' => 1753826108,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'droxy' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/droxy/droxy.info.yml',
        'basename' => 'droxy.info.yml',
        'name' => 'Drupal Proxy',
        'info' => 
        array (
          'name' => 'Drupal Proxy',
          'type' => 'module',
          'description' => 'Drupal Proxy Module',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'package' => 'Proxy',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'seckit' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/seckit/seckit.info.yml',
        'basename' => 'seckit.info.yml',
        'name' => 'Security Kit',
        'info' => 
        array (
          'name' => 'Security Kit',
          'description' => 'Enhance security of your Drupal website.',
          'package' => 'Security',
          'core_version_requirement' => '^9.5 || ^10 || ^11',
          'configure' => 'seckit.settings',
          'type' => 'module',
          'version' => '2.0.3',
          'project' => 'seckit',
          'datestamp' => 1726048466,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'disable_language' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/disable_language/disable_language.info.yml',
        'basename' => 'disable_language.info.yml',
        'name' => 'Disable Language',
        'info' => 
        array (
          'name' => 'Disable Language',
          'description' => 'A module that lets you disable multiple languages.',
          'package' => 'Multilingual',
          'dependencies' => 
          array (
            0 => 'drupal:language',
          ),
          'type' => 'module',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'configure' => 'disable_language.disable_language_settings',
          'version' => '8.x-1.0-rc2',
          'project' => 'disable_language',
          'datestamp' => 1738759665,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'editor_advanced_link' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/editor_advanced_link/editor_advanced_link.info.yml',
        'basename' => 'editor_advanced_link.info.yml',
        'name' => 'Editor Advanced Link',
        'info' => 
        array (
          'name' => 'Editor Advanced Link',
          'description' => 'Add title, target etc. attributes to Text Editor\'s link dialog if the text format allows them.',
          'type' => 'module',
          'core_version_requirement' => '^10.2 || ^11.0',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
          ),
          'test_dependencies' => 
          array (
            0 => 'drupal:ckeditor',
          ),
          'version' => '2.2.6',
          'project' => 'editor_advanced_link',
          'datestamp' => 1723183022,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'crop' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/crop/crop.info.yml',
        'basename' => 'crop.info.yml',
        'name' => 'Crop API',
        'info' => 
        array (
          'name' => 'Crop API',
          'description' => 'Provides storage and API for image crops.',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'package' => 'Media',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:user',
          ),
          'configure' => 'crop.overview_types',
          'version' => '8.x-2.5',
          'project' => 'crop',
          'datestamp' => 1763154896,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_how_to' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_how_to/schema_how_to.info.yml',
        'basename' => 'schema_how_to.info.yml',
        'name' => 'Schema.org HowTo',
        'info' => 
        array (
          'name' => 'Schema.org HowTo',
          'type' => 'module',
          'description' => 'Adds Schema.org/HowTo to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_article' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_article/schema_article.info.yml',
        'basename' => 'schema_article.info.yml',
        'name' => 'Schema.org Article',
        'info' => 
        array (
          'name' => 'Schema.org Article',
          'type' => 'module',
          'description' => 'Adds Schema.org/Article to the JSON LD array. Creates Article, BlogPosting, SocialMediaPosting, Report, ScholarlyArticle, TechArticle or APIReference.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_video_object' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_video_object/schema_video_object.info.yml',
        'basename' => 'schema_video_object.info.yml',
        'name' => 'Schema.org Video Object',
        'info' => 
        array (
          'name' => 'Schema.org Video Object',
          'type' => 'module',
          'description' => 'Adds Schema.org/VideoObject to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_job_posting' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_job_posting/schema_job_posting.info.yml',
        'basename' => 'schema_job_posting.info.yml',
        'name' => 'Schema.org JobPosting',
        'info' => 
        array (
          'name' => 'Schema.org JobPosting',
          'type' => 'module',
          'description' => 'Add Schema.org/JobPosting to the JSON LD array. Creates JobPosting.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
            1 => 'schema_metatag:schema_organization',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_image_object' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_image_object/schema_image_object.info.yml',
        'basename' => 'schema_image_object.info.yml',
        'name' => 'Schema.org Image Object',
        'info' => 
        array (
          'name' => 'Schema.org Image Object',
          'type' => 'module',
          'description' => 'Adds Schema.org/ImageObject to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_article_example' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_article_example/schema_article_example.info.yml',
        'basename' => 'schema_article_example.info.yml',
        'name' => 'Schema.org Metatag Example',
        'info' => 
        array (
          'name' => 'Schema.org Metatag Example',
          'type' => 'module',
          'description' => 'Example of how to add more fields to Schema.org.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_article',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_service' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_service/schema_service.info.yml',
        'basename' => 'schema_service.info.yml',
        'name' => 'Schema.org Service',
        'info' => 
        array (
          'name' => 'Schema.org Service',
          'type' => 'module',
          'description' => 'Adds Schema.org/Service to the JSON LD array. Creates Service.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_person' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_person/schema_person.info.yml',
        'basename' => 'schema_person.info.yml',
        'name' => 'Schema.org Person',
        'info' => 
        array (
          'name' => 'Schema.org Person',
          'type' => 'module',
          'description' => 'Adds Schema.org/Person to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_movie' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_movie/schema_movie.info.yml',
        'basename' => 'schema_movie.info.yml',
        'name' => 'Schema.org Movie, Series, Season, Episode',
        'info' => 
        array (
          'name' => 'Schema.org Movie, Series, Season, Episode',
          'type' => 'module',
          'description' => 'Adds Schema.org Movie, Series, Season, Episode to the JSON LD array. Creates Movie, Series, Season, and Episode.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_book' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_book/schema_book.info.yml',
        'basename' => 'schema_book.info.yml',
        'name' => 'Schema.org Book',
        'info' => 
        array (
          'name' => 'Schema.org Book',
          'type' => 'module',
          'description' => 'Adds Schema.org/Book to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_place' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_place/schema_place.info.yml',
        'basename' => 'schema_place.info.yml',
        'name' => 'Schema.org Place',
        'info' => 
        array (
          'name' => 'Schema.org Place',
          'type' => 'module',
          'description' => 'Adds Schema.org/Place to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_product' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_product/schema_product.info.yml',
        'basename' => 'schema_product.info.yml',
        'name' => 'Schema.org Product',
        'info' => 
        array (
          'name' => 'Schema.org Product',
          'type' => 'module',
          'description' => 'Adds Schema.org/Product to the JSON LD array. Creates Product.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_recipe' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_recipe/schema_recipe.info.yml',
        'basename' => 'schema_recipe.info.yml',
        'name' => 'Schema.org Recipe',
        'info' => 
        array (
          'name' => 'Schema.org Recipe',
          'type' => 'module',
          'description' => 'Adds Schema.org/Recipe to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_course' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_course/schema_course.info.yml',
        'basename' => 'schema_course.info.yml',
        'name' => 'Schema.org Course',
        'info' => 
        array (
          'name' => 'Schema.org Course',
          'type' => 'module',
          'description' => 'Adds Schema.org/Course to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_event' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_event/schema_event.info.yml',
        'basename' => 'schema_event.info.yml',
        'name' => 'Schema.org Event',
        'info' => 
        array (
          'name' => 'Schema.org Event',
          'type' => 'module',
          'description' => 'Adds Schema.org/Event to the JSON-LD array. Creates Event and Offer.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_organization' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_organization/schema_organization.info.yml',
        'basename' => 'schema_organization.info.yml',
        'name' => 'Schema.org Organization',
        'info' => 
        array (
          'name' => 'Schema.org Organization',
          'type' => 'module',
          'description' => 'Adds Schema.org/Organization to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_item_list' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_item_list/schema_item_list.info.yml',
        'basename' => 'schema_item_list.info.yml',
        'name' => 'Schema.org ItemList',
        'info' => 
        array (
          'name' => 'Schema.org ItemList',
          'type' => 'module',
          'description' => 'Adds Schema.org/ItemList to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10  || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
            1 => 'metatag:metatag_views',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_web_page' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_web_page/schema_web_page.info.yml',
        'basename' => 'schema_web_page.info.yml',
        'name' => 'Schema.org WebPage',
        'info' => 
        array (
          'name' => 'Schema.org WebPage',
          'type' => 'module',
          'description' => 'Adds Schema.org/WebPage to the JSON LD array. Creates WebPage, ItemPage, AboutPage, CheckoutPage, ContactPage, CollectionPage, ProfilePage, SearchResultsPage.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_qa_page' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_qa_page/schema_qa_page.info.yml',
        'basename' => 'schema_qa_page.info.yml',
        'name' => 'Schema.org QAPage and FAQPage',
        'info' => 
        array (
          'name' => 'Schema.org QAPage and FAQPage',
          'type' => 'module',
          'description' => 'Adds Schema.org/QAPage and FAQPage to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_web_site' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_web_site/schema_web_site.info.yml',
        'basename' => 'schema_web_site.info.yml',
        'name' => 'Schema.org WebSite',
        'info' => 
        array (
          'name' => 'Schema.org WebSite',
          'type' => 'module',
          'description' => 'Adds Schema.org/WebSite to the JSON LD array.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_review' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_review/schema_review.info.yml',
        'basename' => 'schema_review.info.yml',
        'name' => 'Schema.org Review',
        'info' => 
        array (
          'name' => 'Schema.org Review',
          'type' => 'module',
          'description' => 'Adds Schema.org/Review to the JSON LD array. Creates Review.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_special_announcement' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_special_announcement/schema_special_announcement.info.yml',
        'basename' => 'schema_special_announcement.info.yml',
        'name' => 'Schema.org SpecialAnnouncement',
        'info' => 
        array (
          'name' => 'Schema.org SpecialAnnouncement',
          'type' => 'module',
          'description' => 'Adds Schema.org/SpecialAnnouncement to the JSON LD array. Creates SpecialAnnouncement.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'schema_metatag:schema_metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'schema_metatag' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/schema_metatag/schema_metatag.info.yml',
        'basename' => 'schema_metatag.info.yml',
        'name' => 'Schema.org Metatag',
        'info' => 
        array (
          'name' => 'Schema.org Metatag',
          'type' => 'module',
          'description' => 'Base module for creating Schema.org JSON-LD structured data defined with Metatag module.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'package' => 'SEO',
          'php' => 8,
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '3.0.3',
          'project' => 'schema_metatag',
          'datestamp' => 1721141810,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'case_study' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/case_study/case_study.info.yml',
        'basename' => 'case_study.info.yml',
        'name' => 'Case Study',
        'info' => 
        array (
          'name' => 'Case Study',
          'type' => 'module',
          'description' => 'Provides a Case study node type, view and block',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^10 || ^11',
          'version' => '8.x-99.0.0',
          'project' => 'case_study',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'block_content',
            2 => 'options',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'recaptcha_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/recaptcha/tests/modules/recaptcha_test/recaptcha_test.info.yml',
        'basename' => 'recaptcha_test.info.yml',
        'name' => 'reCAPTCHA Test',
        'info' => 
        array (
          'name' => 'reCAPTCHA Test',
          'type' => 'module',
          'description' => 'Test module for the recaptcha module.',
          'package' => 'Testing',
          'core_version_requirement' => '^8.9 || ^9 || ^10',
          'dependencies' => 
          array (
            0 => 'fences:recaptcha',
          ),
          'version' => '8.x-3.4',
          'project' => 'recaptcha',
          'datestamp' => 1723563037,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'recaptcha' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/recaptcha/recaptcha.info.yml',
        'basename' => 'recaptcha.info.yml',
        'name' => 'reCAPTCHA',
        'info' => 
        array (
          'name' => 'reCAPTCHA',
          'type' => 'module',
          'description' => 'Protect your website from spam and abuse while letting real people pass through with ease.',
          'package' => 'Spam control',
          'core_version_requirement' => '^10 || ^11',
          'configure' => 'recaptcha.admin_settings_form',
          'dependencies' => 
          array (
            0 => 'captcha:captcha',
          ),
          'version' => '8.x-3.4',
          'project' => 'recaptcha',
          'datestamp' => 1723563037,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'perimeter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/perimeter/perimeter.info.yml',
        'basename' => 'perimeter.info.yml',
        'name' => 'Drupal Perimeter Defence',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Drupal Perimeter Defence',
          'description' => 'This module bans IPs who send suspicious requests to the site.',
          'core_version_requirement' => '^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:ban',
          ),
          'configure' => 'perimeter.settings',
          'version' => '3.0.4',
          'project' => 'perimeter',
          'datestamp' => 1724855549,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'contact_block' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/contact_block/contact_block.info.yml',
        'basename' => 'contact_block.info.yml',
        'name' => 'Contact Block',
        'info' => 
        array (
          'name' => 'Contact Block',
          'type' => 'module',
          'description' => 'Provides blocks for Contact form module.',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:contact',
          ),
          'version' => '2.0.3',
          'project' => 'contact_block',
          'datestamp' => 1732952255,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'robotstxt' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/robotstxt/robotstxt.info.yml',
        'basename' => 'robotstxt.info.yml',
        'name' => 'RobotsTxt',
        'info' => 
        array (
          'name' => 'RobotsTxt',
          'type' => 'module',
          'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
          'package' => 'Other',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'configure' => 'robotstxt.admin_settings_form',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'apictest' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/apictest/apictest.info.yml',
        'basename' => 'apictest.info.yml',
        'name' => 'APIC Test',
        'info' => 
        array (
          'name' => 'APIC Test',
          'type' => 'module',
          'description' => 'Test framework and utilities for the API Developer Portal',
          'package' => 'IBM API Developer Portal',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
          'version' => '6.3.1',
          'project' => 'apictest',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_js_minify' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg_js_minify/advagg_js_minify.info.yml',
        'basename' => 'advagg_js_minify.info.yml',
        'name' => 'AdvAgg Minify JavaScript',
        'info' => 
        array (
          'name' => 'AdvAgg Minify JavaScript',
          'description' => 'Minify JavaScript with a 3rd party minifier; JSMin+, JSMin c ext, JShrink, and JSqueeze currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'advagg:advagg',
          ),
          'type' => 'module',
          'configure' => 'advagg_js_minify.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_ext_minify' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg_ext_minify/advagg_ext_minify.info.yml',
        'basename' => 'advagg_ext_minify.info.yml',
        'name' => 'AdvAgg External Minification',
        'info' => 
        array (
          'name' => 'AdvAgg External Minification',
          'description' => 'Minify Javascript and/or CSS with a command line minifier.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'advagg:advagg',
          ),
          'type' => 'module',
          'configure' => 'advagg_ext_minify.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_validator' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg_validator/advagg_validator.info.yml',
        'basename' => 'advagg_validator.info.yml',
        'name' => 'AdvAgg CSS/JS Validator',
        'info' => 
        array (
          'name' => 'AdvAgg CSS/JS Validator',
          'description' => 'Validate the CSS and JS files used in Aggregation for syntax errors.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'advagg:advagg',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_mod' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg_mod/advagg_mod.info.yml',
        'basename' => 'advagg_mod.info.yml',
        'name' => 'AdvAgg Modifier',
        'info' => 
        array (
          'name' => 'AdvAgg Modifier',
          'description' => 'Allows one to alter the CSS and JS array.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'advagg:advagg',
          ),
          'type' => 'module',
          'configure' => 'advagg_mod.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/tests/modules/advagg_test/advagg_test.info.yml',
        'basename' => 'advagg_test.info.yml',
        'name' => 'Advanced CSS/JS Aggregation Testing',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation Testing',
          'description' => 'Provides assets for automated testing.',
          'package' => 'Testing',
          'type' => 'module',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_bundler_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg_bundler/tests/modules/advagg_bundler_test/advagg_bundler_test.info.yml',
        'basename' => 'advagg_bundler_test.info.yml',
        'name' => 'Advanced CSS/JS Aggregation Bundler Testing',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation Bundler Testing',
          'description' => 'Provides assets for automated testing.',
          'package' => 'Testing',
          'type' => 'module',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_bundler' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg_bundler/advagg_bundler.info.yml',
        'basename' => 'advagg_bundler.info.yml',
        'name' => 'AdvAgg Bundler',
        'info' => 
        array (
          'name' => 'AdvAgg Bundler',
          'description' => 'Customize the number of aggregates to be created.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'advagg:advagg',
          ),
          'type' => 'module',
          'configure' => 'advagg_bundler.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg_css_minify' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg_css_minify/advagg_css_minify.info.yml',
        'basename' => 'advagg_css_minify.info.yml',
        'name' => 'AdvAgg Minify CSS',
        'info' => 
        array (
          'name' => 'AdvAgg Minify CSS',
          'description' => 'Minify CSS.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'advagg:advagg',
          ),
          'type' => 'module',
          'configure' => 'advagg_css_minify.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advagg' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/advagg/advagg.info.yml',
        'basename' => 'advagg.info.yml',
        'name' => 'Advanced CSS/JS Aggregation',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation',
          'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'type' => 'module',
          'configure' => 'advagg.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'simple_sitemap_views_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/simple_sitemap/modules/simple_sitemap_views/tests/modules/simple_sitemap_views_test/simple_sitemap_views_test.info.yml',
        'basename' => 'simple_sitemap_views_test.info.yml',
        'name' => 'Simple XML Sitemap (Views) Test',
        'info' => 
        array (
          'name' => 'Simple XML Sitemap (Views) Test',
          'type' => 'module',
          'description' => 'Test module for Simple XML Sitemap (Views).',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'simple_sitemap:simple_sitemap_views',
          ),
          'version' => '4.2.2',
          'project' => 'simple_sitemap',
          'datestamp' => 1732485887,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'simple_sitemap_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/simple_sitemap/modules/simple_sitemap_views/simple_sitemap_views.info.yml',
        'basename' => 'simple_sitemap_views.info.yml',
        'name' => 'Simple XML Sitemap (Views)',
        'info' => 
        array (
          'name' => 'Simple XML Sitemap (Views)',
          'type' => 'module',
          'description' => 'Provides integration of the Simple XML Sitemap module with the Views module.',
          'configure' => 'simple_sitemap.settings_views',
          'package' => 'SEO',
          'core_version_requirement' => '^10.2 || ^11',
          'dependencies' => 
          array (
            0 => 'simple_sitemap:simple_sitemap',
            1 => 'drupal:views',
          ),
          'version' => '4.2.2',
          'project' => 'simple_sitemap',
          'datestamp' => 1732485887,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'simple_sitemap_engines' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/simple_sitemap/modules/simple_sitemap_engines/simple_sitemap_engines.info.yml',
        'basename' => 'simple_sitemap_engines.info.yml',
        'name' => 'Simple XML Sitemap (Search engines)',
        'info' => 
        array (
          'name' => 'Simple XML Sitemap (Search engines)',
          'type' => 'module',
          'description' => 'Submits sitemaps to search engines and notifies IndexNow compatible engines about changes to entities.',
          'configure' => 'simple_sitemap_engines.settings',
          'package' => 'SEO',
          'core_version_requirement' => '^10.2 || ^11',
          'dependencies' => 
          array (
            0 => 'simple_sitemap:simple_sitemap',
          ),
          'version' => '4.2.2',
          'project' => 'simple_sitemap',
          'datestamp' => 1732485887,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'simple_sitemap' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/simple_sitemap/simple_sitemap.info.yml',
        'basename' => 'simple_sitemap.info.yml',
        'name' => 'Simple XML Sitemap',
        'info' => 
        array (
          'name' => 'Simple XML Sitemap',
          'type' => 'module',
          'description' => 'Generates standard-compliant hreflang XML sitemaps to enhance your site\'s SEO, notifies search engines of website changes via IndexNow and sitemap ping protocols, and provides a framework for developing other sitemap types.',
          'configure' => 'entity.simple_sitemap.collection',
          'package' => 'SEO',
          'core_version_requirement' => '^10.2 || ^11',
          'version' => '4.2.2',
          'project' => 'simple_sitemap',
          'datestamp' => 1732485887,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_cookie' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/js_cookie/js_cookie.info.yml',
        'basename' => 'js_cookie.info.yml',
        'name' => 'JavaScript Cookie Library',
        'info' => 
        array (
          'name' => 'JavaScript Cookie Library',
          'type' => 'module',
          'description' => 'Provides the js-cookie library as a dependency.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'version' => '1.0.1',
          'project' => 'js_cookie',
          'datestamp' => 1693951099,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'bootstrap_site_alert' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/bootstrap_site_alert/bootstrap_site_alert.info.yml',
        'basename' => 'bootstrap_site_alert.info.yml',
        'name' => 'Bootstrap Site Alert',
        'info' => 
        array (
          'name' => 'Bootstrap Site Alert',
          'type' => 'module',
          'description' => 'This module is for rendering alerts site wide using the power of Bootstrap',
          'package' => 'Other',
          'core_version_requirement' => '^10 || ^11',
          'configure' => 'bootstrap_site_alert.admin',
          'dependencies' => 
          array (
            0 => 'js_cookie:js_cookie',
          ),
          'version' => '3.0.4',
          'project' => 'bootstrap_site_alert',
          'datestamp' => 1745415342,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jquery_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/jquery_ui/jquery_ui.info.yml',
        'basename' => 'jquery_ui.info.yml',
        'name' => 'jQuery UI',
        'info' => 
        array (
          'name' => 'jQuery UI',
          'type' => 'module',
          'description' => 'Provides jQuery UI library.',
          'package' => 'jQuery UI',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'version' => '8.x-1.8',
          'project' => 'jquery_ui',
          'datestamp' => 1758954739,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'book_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/book/tests/modules/book_test_views/book_test_views.info.yml',
        'basename' => 'book_test_views.info.yml',
        'name' => 'Book test views',
        'info' => 
        array (
          'name' => 'Book test views',
          'type' => 'module',
          'description' => 'Provides default views for views book tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:book',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'book_breadcrumb_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/book/tests/modules/book_breadcrumb_test/book_breadcrumb_test.info.yml',
        'basename' => 'book_breadcrumb_test.info.yml',
        'name' => 'Book module breadcrumb tests',
        'info' => 
        array (
          'name' => 'Book module breadcrumb tests',
          'type' => 'module',
          'description' => 'Support module for book module breadcrumb testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'book_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/book/tests/modules/book_test/book_test.info.yml',
        'basename' => 'book_test.info.yml',
        'name' => 'Book module tests',
        'info' => 
        array (
          'name' => 'Book module tests',
          'type' => 'module',
          'description' => 'Support module for book module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/book/book.info.yml',
        'basename' => 'book.info.yml',
        'name' => 'Book',
        'info' => 
        array (
          'name' => 'Book',
          'type' => 'module',
          'description' => 'Allows users to create and organize related content in an outline.',
          'core_version_requirement' => '^10.0',
          'package' => 'Book',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
          'configure' => 'book.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'maxlength' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/maxlength/maxlength.info.yml',
        'basename' => 'maxlength.info.yml',
        'name' => 'MaxLength',
        'info' => 
        array (
          'name' => 'MaxLength',
          'type' => 'module',
          'description' => 'Sets a character limit and shows a character count on titles and text fields.',
          'core_version_requirement' => '^10 || ^11',
          'package' => 'Fields',
          'version' => '3.1.3',
          'project' => 'maxlength',
          'datestamp' => 1756373062,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_characters' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_characters/password_policy_characters.info.yml',
        'basename' => 'password_policy_characters.info.yml',
        'name' => 'Password Characters of Type Policy',
        'info' => 
        array (
          'name' => 'Password Characters of Type Policy',
          'description' => 'Minimum characters of a particular type the password must contain.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_delay' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_delay/password_policy_delay.info.yml',
        'basename' => 'password_policy_delay.info.yml',
        'name' => 'Password Policy Delay',
        'info' => 
        array (
          'name' => 'Password Policy Delay',
          'description' => 'Sets up a password constraint to limit how soon before a password can be reset again.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_character_types' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_character_types/password_policy_character_types.info.yml',
        'basename' => 'password_policy_character_types.info.yml',
        'name' => 'Password Character Types Policy',
        'info' => 
        array (
          'name' => 'Password Character Types Policy',
          'description' => 'Minimum number of different character types the password must contain.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_length' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_length/password_policy_length.info.yml',
        'basename' => 'password_policy_length.info.yml',
        'name' => 'Password Character Length Policy',
        'info' => 
        array (
          'name' => 'Password Character Length Policy',
          'description' => 'Sets up a character length constraint for passwords.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_consecutive' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_consecutive/password_policy_consecutive.info.yml',
        'basename' => 'password_policy_consecutive.info.yml',
        'name' => 'Password Consecutive Characters Policy',
        'info' => 
        array (
          'name' => 'Password Consecutive Characters Policy',
          'description' => 'Sets up a consecutive characters constraint for passwords.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/tests/modules/password_policy_test/password_policy_test.info.yml',
        'basename' => 'password_policy_test.info.yml',
        'name' => 'Password Policy test',
        'info' => 
        array (
          'name' => 'Password Policy test',
          'type' => 'module',
          'description' => 'Test code for the Password Policy module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_username' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_username/password_policy_username.info.yml',
        'basename' => 'password_policy_username.info.yml',
        'name' => 'Password Username Policy',
        'info' => 
        array (
          'name' => 'Password Username Policy',
          'description' => 'Restrict users from having their username in their password.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_blacklist' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_blacklist/password_policy_blacklist.info.yml',
        'basename' => 'password_policy_blacklist.info.yml',
        'name' => 'Password Blacklist Policy',
        'info' => 
        array (
          'name' => 'Password Blacklist Policy',
          'description' => 'Create a blacklist of phrases that cannot be used in passwords.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy_history' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy_history/password_policy_history.info.yml',
        'basename' => 'password_policy_history.info.yml',
        'name' => 'Password Policy History',
        'info' => 
        array (
          'name' => 'Password Policy History',
          'description' => 'Sets up a password constraint to limit repeated use of the same password.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'password_policy:password_policy',
          ),
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'password_policy' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/password_policy/password_policy.info.yml',
        'basename' => 'password_policy.info.yml',
        'name' => 'Password Policy',
        'info' => 
        array (
          'name' => 'Password Policy',
          'description' => 'Sets up constraints and expiration of passwords.',
          'package' => 'Security',
          'type' => 'module',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'dependencies' => 
          array (
            0 => 'drupal:datetime',
          ),
          'configure' => 'entity.password_policy.collection',
          'version' => '4.0.3',
          'project' => 'password_policy',
          'datestamp' => 1723552708,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_menu' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/taxonomy_menu/taxonomy_menu.info.yml',
        'basename' => 'taxonomy_menu.info.yml',
        'name' => 'Taxonomy Menu',
        'info' => 
        array (
          'name' => 'Taxonomy Menu',
          'type' => 'module',
          'description' => 'Embed a taxonomy tree into a menu',
          'core_version_requirement' => '^9.1 || ^10 || ^11',
          'package' => 'Menu',
          'configure' => 'entity.taxonomy_menu.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'slick_devel' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/slick_extras/slick_devel/slick_devel.info.yml',
        'basename' => 'slick_devel.info.yml',
        'name' => 'Slick Development',
        'info' => 
        array (
          'name' => 'Slick Development',
          'type' => 'module',
          'description' => 'Provides Slick carousel development.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Slick',
          'configure' => 'slick_devel.settings',
          'dependencies' => 
          array (
            0 => 'slick:slick (>= 3.x)',
          ),
          'version' => '2.0.2',
          'project' => 'slick_extras',
          'datestamp' => 1760846755,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'slick_example' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/slick_extras/slick_example/slick_example.info.yml',
        'basename' => 'slick_example.info.yml',
        'name' => 'Slick Example',
        'info' => 
        array (
          'name' => 'Slick Example',
          'type' => 'module',
          'description' => 'Provides Slick Carousel examples.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Slick',
          'dependencies' => 
          array (
            0 => 'slick_extras:slick_extras',
            1 => 'slick_views:slick_views (>= 3.x)',
          ),
          'version' => '2.0.2',
          'project' => 'slick_extras',
          'datestamp' => 1760846755,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'slick_extras' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/slick_extras/slick_extras.info.yml',
        'basename' => 'slick_extras.info.yml',
        'name' => 'Slick Extras',
        'info' => 
        array (
          'name' => 'Slick Extras',
          'type' => 'module',
          'description' => 'Provides Slick carousel extras.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Slick',
          'dependencies' => 
          array (
            0 => 'slick:slick (>= 3.x)',
          ),
          'version' => '2.0.2',
          'project' => 'slick_extras',
          'datestamp' => 1760846755,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'autologout' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/autologout/autologout.info.yml',
        'basename' => 'autologout.info.yml',
        'name' => 'Automated Logout',
        'info' => 
        array (
          'name' => 'Automated Logout',
          'type' => 'module',
          'description' => 'Adds automated timed logout.',
          'core_version_requirement' => '^9.2 || ^10 || ^11',
          'configure' => 'autologout.set_admin',
          'dependencies' => 
          array (
            0 => 'js_cookie:js_cookie',
          ),
          'version' => '2.0.1',
          'project' => 'autologout',
          'datestamp' => 1732235108,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'redirect_domain' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/redirect/modules/redirect_domain/redirect_domain.info.yml',
        'basename' => 'redirect_domain.info.yml',
        'name' => 'Redirect Domain',
        'info' => 
        array (
          'name' => 'Redirect Domain',
          'type' => 'module',
          'description' => 'Allows users to redirect between domains.',
          'core_version_requirement' => '^10 || ^11',
          'configure' => 'redirect_domain.domain_list',
          'dependencies' => 
          array (
            0 => 'redirect:redirect',
          ),
          'version' => '8.x-1.12',
          'project' => 'redirect',
          'datestamp' => 1756419165,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'redirect_404' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/redirect/modules/redirect_404/redirect_404.info.yml',
        'basename' => 'redirect_404.info.yml',
        'name' => 'Redirect 404',
        'info' => 
        array (
          'name' => 'Redirect 404',
          'type' => 'module',
          'description' => 'Logs 404 errors and allows users to create redirects for often requested but missing pages.',
          'core_version_requirement' => '^10 || ^11',
          'configure' => 'redirect_404.fix_404',
          'dependencies' => 
          array (
            0 => 'redirect:redirect',
            1 => 'drupal:views',
          ),
          'version' => '8.x-1.12',
          'project' => 'redirect',
          'datestamp' => 1756419165,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'redirect_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/redirect/tests/modules/redirect_test/redirect_test.info.yml',
        'basename' => 'redirect_test.info.yml',
        'name' => 'Redirect module tests',
        'info' => 
        array (
          'name' => 'Redirect module tests',
          'type' => 'module',
          'description' => 'Support module for redirect testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:redirect',
          ),
          'version' => '8.x-1.12',
          'project' => 'redirect',
          'datestamp' => 1756419165,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'redirect' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/redirect/redirect.info.yml',
        'basename' => 'redirect.info.yml',
        'name' => 'Redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'type' => 'module',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core_version_requirement' => '^10 || ^11',
          'configure' => 'redirect.settings',
          'dependencies' => 
          array (
            0 => 'drupal:path_alias',
            1 => 'drupal:link',
            2 => 'drupal:views',
          ),
          'version' => '8.x-1.12',
          'project' => 'redirect',
          'datestamp' => 1756419165,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'masonry' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/masonry/masonry.info.yml',
        'basename' => 'masonry.info.yml',
        'name' => 'Masonry API',
        'info' => 
        array (
          'name' => 'Masonry API',
          'type' => 'module',
          'description' => 'Provides an API for integrating the jQuery Masonry plugin with Drupal.',
          'package' => 'Masonry',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'noopener_filter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/noopener_filter/noopener_filter.info.yml',
        'basename' => 'noopener_filter.info.yml',
        'name' => 'Noopener Filter',
        'info' => 
        array (
          'name' => 'Noopener Filter',
          'type' => 'module',
          'description' => 'Provides a filter to add rel="noopener" to external links and links in the ckeditor.',
          'configure' => 'noopener_filter.settings',
          'core_version_requirement' => '^8 || ^9 || ^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'warmer_entity' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/warmer/modules/warmer_entity/warmer_entity.info.yml',
        'basename' => 'warmer_entity.info.yml',
        'name' => 'Entity Warmer',
        'info' => 
        array (
          'name' => 'Entity Warmer',
          'type' => 'module',
          'description' => 'Warms the entity cache for the configured entity types.',
          'core_version_requirement' => '^10.1 || ^11',
          'dependencies' => 
          array (
            0 => 'warmer:warmer',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'warmer_cdn' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/warmer/modules/warmer_cdn/warmer_cdn.info.yml',
        'basename' => 'warmer_cdn.info.yml',
        'name' => 'CDN Warmer',
        'info' => 
        array (
          'name' => 'CDN Warmer',
          'type' => 'module',
          'description' => 'Executes HTTP requests to warm the edge caches. It is useful without a CDN as well, as it will also warm Varnish and Page Cache.',
          'core_version_requirement' => '^10.1 || ^11',
          'dependencies' => 
          array (
            0 => 'warmer:warmer',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'warmer' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/warmer/warmer.info.yml',
        'basename' => 'warmer.info.yml',
        'name' => 'Warmer',
        'info' => 
        array (
          'name' => 'Warmer',
          'type' => 'module',
          'description' => 'Module that provides infrastructure for common cache warming/pre-fetching techniques.',
          'core_version_requirement' => '^10.1 || ^11',
          'configure' => 'warmer.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'back_to_top' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/back_to_top/back_to_top.info.yml',
        'basename' => 'back_to_top.info.yml',
        'name' => 'Back To Top',
        'info' => 
        array (
          'name' => 'Back To Top',
          'description' => 'Back To Top adds a button that hovers in the bottom of your screen and allow users to smoothly scroll up the page using jQuery.',
          'core_version_requirement' => '^9 || ^10 || ^11',
          'configure' => 'back_to_top_settings',
          'package' => 'User interface',
          'type' => 'module',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'slick_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/slick_views/slick_views.info.yml',
        'basename' => 'slick_views.info.yml',
        'name' => 'Slick Views',
        'info' => 
        array (
          'name' => 'Slick Views',
          'type' => 'module',
          'description' => 'Provides Slick carousel integration with Views.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Slick',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'slick:slick (>= 3.x)',
          ),
          'version' => '3.0.3',
          'project' => 'slick_views',
          'datestamp' => 1729253843,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dropzonejs_eb_widget' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/dropzonejs/modules/eb_widget/dropzonejs_eb_widget.info.yml',
        'basename' => 'dropzonejs_eb_widget.info.yml',
        'name' => 'DropzoneJS entity browser widget',
        'info' => 
        array (
          'name' => 'DropzoneJS entity browser widget',
          'type' => 'module',
          'description' => 'DropzoneJS Entity browser widget.',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'dropzonejs:dropzonejs',
            2 => 'entity_browser:entity_browser',
          ),
          'version' => '8.x-2.11',
          'project' => 'dropzonejs',
          'datestamp' => 1723381579,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dropzonejs_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/dropzonejs/tests/modules/dropzonejs_test/dropzonejs_test.info.yml',
        'basename' => 'dropzonejs_test.info.yml',
        'name' => 'DropzoneJS Test',
        'info' => 
        array (
          'name' => 'DropzoneJS Test',
          'type' => 'module',
          'description' => 'Support module for DropzoneJS tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'dropzonejs:dropzonejs',
            2 => 'dropzonejs:dropzonejs_eb_widget',
          ),
          'version' => '8.x-2.11',
          'project' => 'dropzonejs',
          'datestamp' => 1723381579,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dropzonejs' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/dropzonejs/dropzonejs.info.yml',
        'basename' => 'dropzonejs.info.yml',
        'name' => 'dropzonejs',
        'info' => 
        array (
          'name' => 'dropzonejs',
          'type' => 'module',
          'description' => 'The Drupal integration for DropzoneJS.',
          'core_version_requirement' => '^9.3 || ^10 || ^11',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
          'version' => '8.x-2.11',
          'project' => 'dropzonejs',
          'datestamp' => 1723381579,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'blazy_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/blazy/modules/blazy_ui/blazy_ui.info.yml',
        'basename' => 'blazy_ui.info.yml',
        'name' => 'Blazy UI',
        'info' => 
        array (
          'name' => 'Blazy UI',
          'type' => 'module',
          'description' => 'Provides Blazy configuration UI.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Blazy',
          'configure' => 'blazy.settings',
          'dependencies' => 
          array (
            0 => 'blazy:blazy',
          ),
          'version' => '3.0.15',
          'project' => 'blazy',
          'datestamp' => 1760528177,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'blazy_layout' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/blazy/modules/blazy_layout/blazy_layout.info.yml',
        'basename' => 'blazy_layout.info.yml',
        'name' => 'Blazy Layout',
        'info' => 
        array (
          'name' => 'Blazy Layout',
          'type' => 'module',
          'description' => 'Provides a single layout with dynamic regions for Layout Builder.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Blazy',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
            1 => 'blazy:blazy (>= 3.x)',
          ),
          'version' => '3.0.15',
          'project' => 'blazy',
          'datestamp' => 1760528177,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'blazy' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/blazy/blazy.info.yml',
        'basename' => 'blazy.info.yml',
        'name' => 'Blazy',
        'info' => 
        array (
          'name' => 'Blazy',
          'type' => 'module',
          'description' => 'Provides media lazy loading.',
          'core_version_requirement' => '>=9.4',
          'package' => 'Blazy',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
            1 => 'drupal:media',
          ),
          'test_dependencies' => 
          array (
            0 => 'drupal:responsive_image',
            1 => 'drupal:views',
          ),
          'version' => '3.0.15',
          'project' => 'blazy',
          'datestamp' => 1760528177,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'devel_generate_fields' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/devel/devel_generate/tests/modules/devel_generate_fields/devel_generate_fields.info.yml',
        'basename' => 'devel_generate_fields.info.yml',
        'name' => 'Devel Generate Fields',
        'info' => 
        array (
          'name' => 'Devel Generate Fields',
          'type' => 'module',
          'description' => 'Alter in a base field for testing purposes.',
          'package' => 'Testing',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '5.4.0',
          'project' => 'devel',
          'datestamp' => 1751916161,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'devel_generate_example' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/devel/devel_generate/tests/modules/devel_generate_example/devel_generate_example.info.yml',
        'basename' => 'devel_generate_example.info.yml',
        'name' => 'Devel Generate Example',
        'info' => 
        array (
          'name' => 'Devel Generate Example',
          'type' => 'module',
          'description' => 'Create an example of a Devel Generate plugin type for testing purposes.',
          'package' => 'Testing',
          'configure' => 'admin/config/development/generate',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '5.4.0',
          'project' => 'devel',
          'datestamp' => 1751916161,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/devel/devel_generate/devel_generate.info.yml',
        'basename' => 'devel_generate.info.yml',
        'name' => 'Devel Generate',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel Generate',
          'description' => 'Generate test users, nodes, menus, taxonomy terms...',
          'package' => 'Development',
          'core_version_requirement' => '>=10.0 <12.0.0-stable',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '5.4.0',
          'project' => 'devel',
          'datestamp' => 1751916161,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'devel_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/devel/tests/modules/devel_test/devel_test.info.yml',
        'basename' => 'devel_test.info.yml',
        'name' => 'Devel test module',
        'info' => 
        array (
          'name' => 'Devel test module',
          'type' => 'module',
          'description' => 'Support module for Devel testing.',
          'package' => 'Testing',
          'version' => '5.4.0',
          'project' => 'devel',
          'datestamp' => 1751916160,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'devel_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/devel/tests/modules/devel_entity_test/devel_entity_test.info.yml',
        'basename' => 'devel_entity_test.info.yml',
        'name' => 'Devel entity test module',
        'info' => 
        array (
          'name' => 'Devel entity test module',
          'type' => 'module',
          'description' => 'Provides entity types for Devel tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
            2 => 'drupal:entity_test',
          ),
          'version' => '5.4.0',
          'project' => 'devel',
          'datestamp' => 1751916160,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'devel_dumper_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/devel/tests/modules/devel_dumper_test/devel_dumper_test.info.yml',
        'basename' => 'devel_dumper_test.info.yml',
        'name' => 'Devel dumper test module',
        'info' => 
        array (
          'name' => 'Devel dumper test module',
          'type' => 'module',
          'description' => 'Test pluggable dumpers.',
          'package' => 'Testing',
          'version' => '5.4.0',
          'project' => 'devel',
          'datestamp' => 1751916160,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/modules/devel/devel.info.yml',
        'basename' => 'devel.info.yml',
        'name' => 'Devel',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core_version_requirement' => '^10.3 || ^11 || ^12',
          'php' => 8.1,
          'configure' => 'devel.admin_settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '5.4.0',
          'project' => 'devel',
          'datestamp' => 1751916161,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'syslog_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/syslog/tests/modules/syslog_test/syslog_test.info.yml',
        'basename' => 'syslog_test.info.yml',
        'name' => 'Syslog test',
        'info' => 
        array (
          'name' => 'Syslog test',
          'type' => 'module',
          'description' => 'Provides a test logger for syslog module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:syslog',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/syslog/syslog.info.yml',
        'basename' => 'syslog.info.yml',
        'name' => 'Syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'type' => 'module',
          'description' => 'Logs events to the web server\'s system log.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'telephone' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/telephone/telephone.info.yml',
        'basename' => 'telephone.info.yml',
        'name' => 'Telephone',
        'info' => 
        array (
          'name' => 'Telephone',
          'type' => 'module',
          'description' => 'Defines a field type for telephone numbers.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'file_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/file/tests/file_module_test/file_module_test.info.yml',
        'basename' => 'file_module_test.info.yml',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'file_validator_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/file/tests/modules/file_validator_test/file_validator_test.info.yml',
        'basename' => 'file_validator_test.info.yml',
        'name' => 'File validator test',
        'info' => 
        array (
          'name' => 'File validator test',
          'type' => 'module',
          'description' => 'Provides classes for file validator tests',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'file_test_get_ids' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/file/tests/modules/file_test_get_ids/file_test_get_ids.info.yml',
        'basename' => 'file_test_get_ids.info.yml',
        'name' => 'File test getIds',
        'info' => 
        array (
          'name' => 'File test getIds',
          'type' => 'module',
          'description' => 'Provides file source plugin restricted to used files.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'file_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/file/tests/modules/file_test_views/file_test_views.info.yml',
        'basename' => 'file_test_views.info.yml',
        'name' => 'File test views',
        'info' => 
        array (
          'name' => 'File test views',
          'type' => 'module',
          'description' => 'Provides default views for views file tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/file/tests/file_test/file_test.info.yml',
        'basename' => 'file_test.info.yml',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/file/file.info.yml',
        'basename' => 'file.info.yml',
        'name' => 'File',
        'info' => 
        array (
          'name' => 'File',
          'type' => 'module',
          'description' => 'Provides a field type for files and defines a "managed_file" Form API element.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'navigation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/navigation/tests/navigation_test/navigation_test.info.yml',
        'basename' => 'navigation_test.info.yml',
        'name' => 'Navigation test',
        'info' => 
        array (
          'name' => 'Navigation test',
          'description' => 'Provides test functionality for navigation module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:navigation',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'navigation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/navigation/navigation.info.yml',
        'basename' => 'navigation.info.yml',
        'name' => 'Navigation',
        'info' => 
        array (
          'name' => 'Navigation',
          'description' => 'New administration navigation',
          'package' => 'Core (Experimental)',
          'lifecycle' => 'experimental',
          'version' => 'VERSION',
          'configure' => 'navigation.settings',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:file',
            2 => 'drupal:layout_builder',
          ),
        ),
        'schema_version' => '11002',
        'version' => '11.1.9',
      ),
      'migration_provider_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal_ui/tests/modules/migration_provider_test/migration_provider_test.info.yml',
        'basename' => 'migration_provider_test.info.yml',
        'name' => 'Migration provider missing',
        'info' => 
        array (
          'name' => 'Migration provider missing',
          'type' => 'module',
          'description' => 'Add a migration missing a source and destination migration provider and a source plugin missing a migration provider.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_drupal_message_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal_ui/tests/modules/migrate_drupal_message_test/migrate_drupal_message_test.info.yml',
        'basename' => 'migrate_drupal_message_test.info.yml',
        'name' => 'Test display of migrate message',
        'info' => 
        array (
          'name' => 'Test display of migrate message',
          'type' => 'module',
          'description' => 'Tests the display of migrate messages.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_drupal_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal_ui/migrate_drupal_ui.info.yml',
        'basename' => 'migrate_drupal_ui.info.yml',
        'name' => 'Migrate Drupal UI',
        'info' => 
        array (
          'name' => 'Migrate Drupal UI',
          'type' => 'module',
          'description' => 'Provides a user interface for migrating from older Drupal versions.',
          'package' => 'Migration',
          'version' => 'VERSION',
          'configure' => 'migrate_drupal_ui.upgrade',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
            1 => 'drupal:migrate_drupal',
            2 => 'drupal:dblog',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'filter_test_plugin' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/filter/tests/filter_test_plugin/filter_test_plugin.info.yml',
        'basename' => 'filter_test_plugin.info.yml',
        'name' => 'Filter test plugin',
        'info' => 
        array (
          'name' => 'Filter test plugin',
          'type' => 'module',
          'description' => 'Tests enabling of modules which provide filter plugins.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/filter/tests/filter_test/filter_test.info.yml',
        'basename' => 'filter_test.info.yml',
        'name' => 'Filter test module',
        'info' => 
        array (
          'name' => 'Filter test module',
          'type' => 'module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/filter/filter.info.yml',
        'basename' => 'filter.info.yml',
        'name' => 'Filter',
        'info' => 
        array (
          'name' => 'Filter',
          'type' => 'module',
          'description' => 'Filters text content in preparation for display.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/shortcut/shortcut.info.yml',
        'basename' => 'shortcut.info.yml',
        'name' => 'Shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'type' => 'module',
          'description' => 'Allows users to create sets of shortcuts within the site.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.shortcut_set.collection',
          'dependencies' => 
          array (
            0 => 'drupal:link',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'vocabulary_serialization_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/taxonomy/tests/modules/vocabulary_serialization_test/vocabulary_serialization_test.info.yml',
        'basename' => 'vocabulary_serialization_test.info.yml',
        'name' => 'Vocabulary serialization test',
        'info' => 
        array (
          'name' => 'Vocabulary serialization test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_term_stub_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/taxonomy/tests/modules/taxonomy_term_stub_test/taxonomy_term_stub_test.info.yml',
        'basename' => 'taxonomy_term_stub_test.info.yml',
        'name' => 'Taxonomy Migrate stub test',
        'info' => 
        array (
          'name' => 'Taxonomy Migrate stub test',
          'type' => 'module',
          'description' => 'Provides a migration plugin for stub testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_term_display_configurable_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/taxonomy/tests/modules/taxonomy_term_display_configurable_test/taxonomy_term_display_configurable_test.info.yml',
        'basename' => 'taxonomy_term_display_configurable_test.info.yml',
        'name' => 'Taxonomy term configurable display module tests',
        'info' => 
        array (
          'name' => 'Taxonomy term configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for taxonomy_term \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/taxonomy/tests/modules/taxonomy_test_views/taxonomy_test_views.info.yml',
        'basename' => 'taxonomy_test_views.info.yml',
        'name' => 'Taxonomy test views',
        'info' => 
        array (
          'name' => 'Taxonomy test views',
          'type' => 'module',
          'description' => 'Provides default views for views taxonomy tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_crud' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/taxonomy/tests/modules/taxonomy_crud/taxonomy_crud.info.yml',
        'basename' => 'taxonomy_crud.info.yml',
        'name' => 'Taxonomy CRUD tests',
        'info' => 
        array (
          'name' => 'Taxonomy CRUD tests',
          'type' => 'module',
          'description' => 'Provides 3rd party settings for vocabulary.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/taxonomy/tests/modules/taxonomy_test/taxonomy_test.info.yml',
        'basename' => 'taxonomy_test.info.yml',
        'name' => 'Taxonomy test',
        'info' => 
        array (
          'name' => 'Taxonomy test',
          'type' => 'module',
          'description' => 'Provides test hook implementations for taxonomy tests',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/taxonomy/taxonomy.info.yml',
        'basename' => 'taxonomy.info.yml',
        'name' => 'Taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'type' => 'module',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:text',
          ),
          'configure' => 'entity.taxonomy_vocabulary.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'options_config_install_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/options/tests/options_config_install_test/options_config_install_test.info.yml',
        'basename' => 'options_config_install_test.info.yml',
        'name' => 'Options config install test',
        'info' => 
        array (
          'name' => 'Options config install test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:options',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'options_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/options/tests/options_test/options_test.info.yml',
        'basename' => 'options_test.info.yml',
        'name' => 'Options test',
        'info' => 
        array (
          'name' => 'Options test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'options_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/options/tests/options_test_views/options_test_views.info.yml',
        'basename' => 'options_test_views.info.yml',
        'name' => 'Options test views',
        'info' => 
        array (
          'name' => 'Options test views',
          'type' => 'module',
          'description' => 'Provides default views for views options tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:options',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/options/options.info.yml',
        'basename' => 'options.info.yml',
        'name' => 'Options',
        'info' => 
        array (
          'name' => 'Options',
          'type' => 'module',
          'description' => 'Defines field types with select lists, checkboxes, and radio buttons to select values from fixed lists of options.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'pgsql' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/pgsql/pgsql.info.yml',
        'basename' => 'pgsql.info.yml',
        'name' => 'PostgreSQL',
        'info' => 
        array (
          'name' => 'PostgreSQL',
          'type' => 'module',
          'description' => 'Provides the PostgreSQL database driver.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_library_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media_library/tests/modules/media_library_test/media_library_test.info.yml',
        'basename' => 'media_library_test.info.yml',
        'name' => 'Media Library test',
        'info' => 
        array (
          'name' => 'Media Library test',
          'type' => 'module',
          'description' => 'Test module for Media Library.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:media_library',
            2 => 'drupal:media_test_source',
            3 => 'drupal:menu_ui',
            4 => 'drupal:node',
            5 => 'drupal:path',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_library_form_overwrite_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media_library/tests/modules/media_library_form_overwrite_test/media_library_form_overwrite_test.info.yml',
        'basename' => 'media_library_form_overwrite_test.info.yml',
        'name' => 'Media Library Form Overwrite test',
        'info' => 
        array (
          'name' => 'Media Library Form Overwrite test',
          'type' => 'module',
          'description' => 'Test module for Media Library.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:media_library',
            2 => 'drupal:menu_ui',
            3 => 'drupal:node',
            4 => 'drupal:path',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_library_test_widget' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media_library/tests/modules/media_library_test_widget/media_library_test_widget.info.yml',
        'basename' => 'media_library_test_widget.info.yml',
        'name' => 'Media Library test widget',
        'info' => 
        array (
          'name' => 'Media Library test widget',
          'type' => 'module',
          'description' => 'Test widget that has a nested media library widget',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:media_library',
            2 => 'drupal:media_test_source',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_library' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media_library/media_library.info.yml',
        'basename' => 'media_library.info.yml',
        'name' => 'Media Library',
        'info' => 
        array (
          'name' => 'Media Library',
          'type' => 'module',
          'description' => 'Enhances the media list with additional features to more easily find and use existing media items.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'media_library.settings',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:views',
            2 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'settings_tray_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/settings_tray/tests/modules/settings_tray_test/settings_tray_test.info.yml',
        'basename' => 'settings_tray_test.info.yml',
        'name' => 'Settings Tray Test',
        'info' => 
        array (
          'name' => 'Settings Tray Test',
          'type' => 'module',
          'description' => 'Provides Settings Tray test functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'settings_tray_override_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/settings_tray/tests/modules/settings_tray_override_test/settings_tray_override_test.info.yml',
        'basename' => 'settings_tray_override_test.info.yml',
        'name' => 'Configuration override test for Settings Tray',
        'info' => 
        array (
          'name' => 'Configuration override test for Settings Tray',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'settings_tray_test_css' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/settings_tray/tests/modules/settings_tray_test_css/settings_tray_test_css.info.yml',
        'basename' => 'settings_tray_test_css.info.yml',
        'name' => 'CSS Test fix',
        'info' => 
        array (
          'name' => 'CSS Test fix',
          'type' => 'module',
          'description' => 'Provides CSS fixes for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'settings_tray' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/settings_tray/settings_tray.info.yml',
        'basename' => 'settings_tray.info.yml',
        'name' => 'Settings Tray',
        'info' => 
        array (
          'name' => 'Settings Tray',
          'type' => 'module',
          'description' => 'Allows users to directly edit the configuration of blocks on the current page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:toolbar',
            2 => 'drupal:contextual',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'contact_storage_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/contact/tests/modules/contact_storage_test/contact_storage_test.info.yml',
        'basename' => 'contact_storage_test.info.yml',
        'name' => 'Contact test storage',
        'info' => 
        array (
          'name' => 'Contact test storage',
          'type' => 'module',
          'description' => 'Tests that contact messages can be stored.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
            1 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'contact_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/contact/tests/modules/contact_test/contact_test.info.yml',
        'basename' => 'contact_test.info.yml',
        'name' => 'Contact test module',
        'info' => 
        array (
          'name' => 'Contact test module',
          'type' => 'module',
          'description' => 'Contains test contact form.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/contact/contact.info.yml',
        'basename' => 'contact.info.yml',
        'name' => 'Contact',
        'info' => 
        array (
          'name' => 'Contact',
          'type' => 'module',
          'description' => 'Provides site-wide contact forms and forms to contact individual users.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.contact_form.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ban' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ban/ban.info.yml',
        'basename' => 'ban.info.yml',
        'name' => 'Ban',
        'info' => 
        array (
          'name' => 'Ban',
          'type' => 'module',
          'description' => 'Allows banning visits from specific IP addresses.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'ban.admin_page',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'help_topics_twig_tester' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/help/tests/modules/help_topics_twig_tester/help_topics_twig_tester.info.yml',
        'basename' => 'help_topics_twig_tester.info.yml',
        'name' => 'Help Topics Twig Tester',
        'info' => 
        array (
          'name' => 'Help Topics Twig Tester',
          'type' => 'module',
          'description' => 'Support module for help testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:help',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'help_topics_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/help/tests/modules/help_topics_test/help_topics_test.info.yml',
        'basename' => 'help_topics_test.info.yml',
        'name' => 'ABC Help Test',
        'info' => 
        array (
          'name' => 'ABC Help Test',
          'type' => 'module',
          'description' => 'Support module for help testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:help',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'help_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/help/tests/modules/help_test/help_test.info.yml',
        'basename' => 'help_test.info.yml',
        'name' => 'help_test',
        'info' => 
        array (
          'name' => 'help_test',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:help',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'help_topics_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/help/tests/themes/help_topics_test_theme/help_topics_test_theme.info.yml',
        'basename' => 'help_topics_test_theme.info.yml',
        'name' => 'Test Help Topics',
        'info' => 
        array (
          'name' => 'Test Help Topics',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'A theme to test help topics.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/help/help.info.yml',
        'basename' => 'help.info.yml',
        'name' => 'Help',
        'info' => 
        array (
          'name' => 'Help',
          'type' => 'module',
          'description' => 'Generates help pages and provides a Help block with page-level help.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workspaces_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workspaces_ui/workspaces_ui.info.yml',
        'basename' => 'workspaces_ui.info.yml',
        'name' => 'Workspaces UI',
        'info' => 
        array (
          'name' => 'Workspaces UI',
          'type' => 'module',
          'description' => 'Provides a user interface for creating and managing workspaces.',
          'version' => 'VERSION',
          'package' => 'Core',
          'configure' => 'entity.workspace.collection',
          'dependencies' => 
          array (
            0 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_state_no_upgrade_path' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal/tests/modules/migrate_state_no_upgrade_path/migrate_state_no_upgrade_path.info.yml',
        'basename' => 'migrate_state_no_upgrade_path.info.yml',
        'name' => 'Migrate state no migration and no migrate_drupal.yml file test',
        'info' => 
        array (
          'name' => 'Migrate state no migration and no migrate_drupal.yml file test',
          'type' => 'module',
          'description' => 'Does not have a migration or migrate_drupal.yml file.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_state_finished_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal/tests/modules/migrate_state_finished_test/migrate_state_finished_test.info.yml',
        'basename' => 'migrate_state_finished_test.info.yml',
        'name' => 'Migrate state active test',
        'info' => 
        array (
          'name' => 'Migrate state active test',
          'type' => 'module',
          'description' => 'Tests the \'active\' migrate state',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_state_not_finished_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal/tests/modules/migrate_state_not_finished_test/migrate_state_not_finished_test.info.yml',
        'basename' => 'migrate_state_not_finished_test.info.yml',
        'name' => 'Migrate state incomplete test',
        'info' => 
        array (
          'name' => 'Migrate state incomplete test',
          'type' => 'module',
          'description' => 'Tests the \'incomplete\' migrate state',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_discovery_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal/tests/modules/field_discovery_test/field_discovery_test.info.yml',
        'basename' => 'field_discovery_test.info.yml',
        'name' => 'Migrate drupal field discovery tet',
        'info' => 
        array (
          'name' => 'Migrate drupal field discovery tet',
          'type' => 'module',
          'description' => 'Module containing a test class exposing protected field discovery methods',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_overwrite_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal/tests/modules/migrate_overwrite_test/migrate_overwrite_test.info.yml',
        'basename' => 'migrate_overwrite_test.info.yml',
        'name' => 'Migrate property overwrite test',
        'info' => 
        array (
          'name' => 'Migrate property overwrite test',
          'type' => 'module',
          'description' => 'Example module demonstrating property overwrite support in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_field_plugin_manager_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal/tests/modules/migrate_field_plugin_manager_test/migrate_field_plugin_manager_test.info.yml',
        'basename' => 'migrate_field_plugin_manager_test.info.yml',
        'name' => 'Migrate field plugin manager test',
        'info' => 
        array (
          'name' => 'Migrate field plugin manager test',
          'type' => 'module',
          'description' => 'Example module demonstrating the field plugin manager in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_drupal' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate_drupal/migrate_drupal.info.yml',
        'basename' => 'migrate_drupal.info.yml',
        'name' => 'Migrate Drupal',
        'info' => 
        array (
          'name' => 'Migrate Drupal',
          'type' => 'module',
          'description' => 'Provides a framework to migrate data from previous versions of Drupal into the site.',
          'package' => 'Migration',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
            1 => 'drupal:phpass',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'comment_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/comment/tests/modules/comment_test_views/comment_test_views.info.yml',
        'basename' => 'comment_test_views.info.yml',
        'name' => 'Comment test views',
        'info' => 
        array (
          'name' => 'Comment test views',
          'type' => 'module',
          'description' => 'Provides default views for views comment tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'comment_base_field_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/comment/tests/modules/comment_base_field_test/comment_base_field_test.info.yml',
        'basename' => 'comment_base_field_test.info.yml',
        'name' => 'Comment base field test',
        'info' => 
        array (
          'name' => 'Comment base field test',
          'type' => 'module',
          'description' => 'Test comment as a base field',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'comment_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/comment/tests/modules/comment_test/comment_test.info.yml',
        'basename' => 'comment_test.info.yml',
        'name' => 'Comment test',
        'info' => 
        array (
          'name' => 'Comment test',
          'type' => 'module',
          'description' => 'Support module for Comment module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'comment_empty_title_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/comment/tests/modules/comment_empty_title_test/comment_empty_title_test.info.yml',
        'basename' => 'comment_empty_title_test.info.yml',
        'name' => 'Comment empty titles test',
        'info' => 
        array (
          'name' => 'Comment empty titles test',
          'type' => 'module',
          'description' => 'Support module for testing empty title accessibility with Comment module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'comment_display_configurable_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/comment/tests/modules/comment_display_configurable_test/comment_display_configurable_test.info.yml',
        'basename' => 'comment_display_configurable_test.info.yml',
        'name' => 'Comment configurable display module tests',
        'info' => 
        array (
          'name' => 'Comment configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for comment \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/comment/comment.info.yml',
        'basename' => 'comment.info.yml',
        'name' => 'Comment',
        'info' => 
        array (
          'name' => 'Comment',
          'type' => 'module',
          'description' => 'Allows users to comment on content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
          'configure' => 'comment.admin',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_field_type' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_field_type/jsonapi_test_field_type.info.yml',
        'basename' => 'jsonapi_test_field_type.info.yml',
        'name' => 'JSON API test format-agnostic @FieldType normalizers',
        'info' => 
        array (
          'name' => 'JSON API test format-agnostic @FieldType normalizers',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_non_cacheable_methods' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_non_cacheable_methods/jsonapi_test_non_cacheable_methods.info.yml',
        'basename' => 'jsonapi_test_non_cacheable_methods.info.yml',
        'name' => 'JSON API test non-cacheable methods',
        'info' => 
        array (
          'name' => 'JSON API test non-cacheable methods',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_collection_count' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_collection_count/jsonapi_test_collection_count.info.yml',
        'basename' => 'jsonapi_test_collection_count.info.yml',
        'name' => 'JSON API test collection counts',
        'info' => 
        array (
          'name' => 'JSON API test collection counts',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_user' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_user/jsonapi_test_user.info.yml',
        'basename' => 'jsonapi_test_user.info.yml',
        'name' => 'JSON:API user tests',
        'info' => 
        array (
          'name' => 'JSON:API user tests',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_data_type' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_data_type/jsonapi_test_data_type.info.yml',
        'basename' => 'jsonapi_test_data_type.info.yml',
        'name' => 'JSON API test format-agnostic @DataType normalizers',
        'info' => 
        array (
          'name' => 'JSON API test format-agnostic @DataType normalizers',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_resource_type_building' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_resource_type_building/jsonapi_test_resource_type_building.info.yml',
        'basename' => 'jsonapi_test_resource_type_building.info.yml',
        'name' => 'JSON:API test resource type building API',
        'info' => 
        array (
          'name' => 'JSON:API test resource type building API',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_normalizers_kernel' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_normalizers_kernel/jsonapi_test_normalizers_kernel.info.yml',
        'basename' => 'jsonapi_test_normalizers_kernel.info.yml',
        'name' => 'JSON API test: normalizers kernel tests, public aliases for select JSON API normalizers',
        'info' => 
        array (
          'name' => 'JSON API test: normalizers kernel tests, public aliases for select JSON API normalizers',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_field_aliasing' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_field_aliasing/jsonapi_test_field_aliasing.info.yml',
        'basename' => 'jsonapi_test_field_aliasing.info.yml',
        'name' => 'JSON:API test field aliasing',
        'info' => 
        array (
          'name' => 'JSON:API test field aliasing',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_field_access' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_field_access/jsonapi_test_field_access.info.yml',
        'basename' => 'jsonapi_test_field_access.info.yml',
        'name' => 'JSON API field access',
        'info' => 
        array (
          'name' => 'JSON API field access',
          'type' => 'module',
          'description' => 'Provides a custom field access hook to test JSON API field access security.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi_test_field_filter_access' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/tests/modules/jsonapi_test_field_filter_access/jsonapi_test_field_filter_access.info.yml',
        'basename' => 'jsonapi_test_field_filter_access.info.yml',
        'name' => 'JSON:API filter access',
        'info' => 
        array (
          'name' => 'JSON:API filter access',
          'type' => 'module',
          'description' => 'Provides custom access related code to test JSON:API filter security.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jsonapi' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/jsonapi/jsonapi.info.yml',
        'basename' => 'jsonapi.info.yml',
        'name' => 'JSON:API',
        'info' => 
        array (
          'name' => 'JSON:API',
          'type' => 'module',
          'description' => 'Exposes entities as a JSON:API-specification-compliant web API.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'configure' => 'jsonapi.settings',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
            1 => 'drupal:file',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mysql' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/mysql/mysql.info.yml',
        'basename' => 'mysql.info.yml',
        'name' => 'MySQL',
        'info' => 
        array (
          'name' => 'MySQL',
          'type' => 'module',
          'description' => 'Provides the MySQL database driver.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'toolbar_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/toolbar/tests/modules/toolbar_test/toolbar_test.info.yml',
        'basename' => 'toolbar_test.info.yml',
        'name' => 'Toolbar module API tests',
        'info' => 
        array (
          'name' => 'Toolbar module API tests',
          'type' => 'module',
          'description' => 'Support module for toolbar testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'toolbar_disable_user_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/toolbar/tests/modules/toolbar_disable_user_toolbar/toolbar_disable_user_toolbar.info.yml',
        'basename' => 'toolbar_disable_user_toolbar.info.yml',
        'name' => 'Disable user toolbar',
        'info' => 
        array (
          'name' => 'Disable user toolbar',
          'type' => 'module',
          'description' => 'Support module for testing toolbar without user toolbar',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/toolbar/toolbar.info.yml',
        'basename' => 'toolbar.info.yml',
        'name' => 'Toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'type' => 'module',
          'description' => 'Provides an administration toolbar to display links provided by modules.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:breakpoint',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'early_translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/locale/tests/modules/early_translation_test/early_translation_test.info.yml',
        'basename' => 'early_translation_test.info.yml',
        'name' => 'Early translation test',
        'info' => 
        array (
          'name' => 'Early translation test',
          'type' => 'module',
          'description' => 'Support module for testing early bootstrap getting of annotations with translations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/locale/locale.info.yml',
        'basename' => 'locale.info.yml',
        'name' => 'Interface Translation',
        'info' => 
        array (
          'name' => 'Interface Translation',
          'type' => 'module',
          'description' => 'Allows users to translate interface text and to switch between interface languages.',
          'configure' => 'locale.translate_page',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:language',
            1 => 'drupal:file',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_access_test_auto_bubbling' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/node_access_test_auto_bubbling/node_access_test_auto_bubbling.info.yml',
        'basename' => 'node_access_test_auto_bubbling.info.yml',
        'name' => 'Node module access automatic cacheability bubbling tests',
        'info' => 
        array (
          'name' => 'Node module access automatic cacheability bubbling tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides a route which does a node access query without explicitly specifying the corresponding cache context.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_test/node_test.info.yml',
        'basename' => 'node_test.info.yml',
        'name' => 'Node module tests',
        'info' => 
        array (
          'name' => 'Node module tests',
          'type' => 'module',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_no_default_author' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_no_default_author/node_no_default_author.info.yml',
        'basename' => 'node_no_default_author.info.yml',
        'name' => 'Node no default author',
        'info' => 
        array (
          'name' => 'Node no default author',
          'type' => 'module',
          'description' => 'Disables the default value callback for the uid field on node.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_test_exception/node_test_exception.info.yml',
        'basename' => 'node_test_exception.info.yml',
        'name' => 'Node module exception tests',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'type' => 'module',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_test_config' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_test_config/node_test_config.info.yml',
        'basename' => 'node_test_config.info.yml',
        'name' => 'Node configuration tests',
        'info' => 
        array (
          'name' => 'Node configuration tests',
          'type' => 'module',
          'description' => 'Support module for node configuration tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_test_views/node_test_views.info.yml',
        'basename' => 'node_test_views.info.yml',
        'name' => 'Node test views',
        'info' => 
        array (
          'name' => 'Node test views',
          'type' => 'module',
          'description' => 'Provides default views for views node tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'drupal:language',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_access_test/node_access_test.info.yml',
        'basename' => 'node_access_test.info.yml',
        'name' => 'Node module access tests',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_access_test_language' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_access_test_language/node_access_test_language.info.yml',
        'basename' => 'node_access_test_language.info.yml',
        'name' => 'Node module access tests language',
        'info' => 
        array (
          'name' => 'Node module access tests language',
          'type' => 'module',
          'description' => 'Support module for language-aware node access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:options',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_block_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_block_test/node_block_test.info.yml',
        'basename' => 'node_block_test.info.yml',
        'name' => 'Node block test',
        'info' => 
        array (
          'name' => 'Node block test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node_access_test_empty' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/tests/modules/node_access_test_empty/node_access_test_empty.info.yml',
        'basename' => 'node_access_test_empty.info.yml',
        'name' => 'Node module empty access tests',
        'info' => 
        array (
          'name' => 'Node module empty access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides empty grants hook implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/node/node.info.yml',
        'basename' => 'node.info.yml',
        'name' => 'Node',
        'info' => 
        array (
          'name' => 'Node',
          'type' => 'module',
          'description' => 'Manages the creation, configuration, and display of the main site content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.node_type.collection',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/content_translation/tests/modules/content_translation_test/content_translation_test.info.yml',
        'basename' => 'content_translation_test.info.yml',
        'name' => 'Content translation tests',
        'info' => 
        array (
          'name' => 'Content translation tests',
          'type' => 'module',
          'description' => 'Provides content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_translation',
            1 => 'drupal:language',
            2 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_translation_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/content_translation/tests/modules/content_translation_test_views/content_translation_test_views.info.yml',
        'basename' => 'content_translation_test_views.info.yml',
        'name' => 'Content translation test views',
        'info' => 
        array (
          'name' => 'Content translation test views',
          'type' => 'module',
          'description' => 'Provides default views for views content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_translation',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_translation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/content_translation/content_translation.info.yml',
        'basename' => 'content_translation.info.yml',
        'name' => 'Content Translation',
        'info' => 
        array (
          'name' => 'Content Translation',
          'type' => 'module',
          'description' => 'Allows users to translate content.',
          'dependencies' => 
          array (
            0 => 'drupal:language',
          ),
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'configure' => 'language.content_settings_page',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_config' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_config/views_test_config.info.yml',
        'basename' => 'views_test_config.info.yml',
        'name' => 'Views Test Config',
        'info' => 
        array (
          'name' => 'Views Test Config',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_config_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_config_entity_test/views_config_entity_test.info.yml',
        'basename' => 'views_config_entity_test.info.yml',
        'name' => 'views_config_entity_test',
        'info' => 
        array (
          'name' => 'views_config_entity_test',
          'description' => 'Adds a Config Entity with views data',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_form_test/views_form_test.info.yml',
        'basename' => 'views_form_test.info.yml',
        'name' => 'Views Form Test',
        'info' => 
        array (
          'name' => 'Views Form Test',
          'type' => 'module',
          'description' => 'Provides hook to alter views form for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:media',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'action_bulk_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/action_bulk_test/action_bulk_test.info.yml',
        'basename' => 'action_bulk_test.info.yml',
        'name' => 'Action bulk form test',
        'info' => 
        array (
          'name' => 'Action bulk form test',
          'type' => 'module',
          'description' => 'Support module for action bulk form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_entity_test/views_entity_test.info.yml',
        'basename' => 'views_entity_test.info.yml',
        'name' => 'Views Entity Test',
        'info' => 
        array (
          'name' => 'Views Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for views tests of entity_test entity type.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_modal' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_modal/views_test_modal.info.yml',
        'basename' => 'views_test_modal.info.yml',
        'name' => 'Views Test Modal',
        'info' => 
        array (
          'name' => 'Views Test Modal',
          'type' => 'module',
          'description' => 'Provides a test page that renders a View in a modal.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_render_cache' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_render_cache/views_test_render_cache.info.yml',
        'basename' => 'views_test_render_cache.info.yml',
        'name' => 'Views Test Render Cache',
        'info' => 
        array (
          'name' => 'Views Test Render Cache',
          'type' => 'module',
          'description' => 'Provides routes for testing render cache.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_language' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_language/views_test_language.info.yml',
        'basename' => 'views_test_language.info.yml',
        'name' => 'Views Test Language',
        'info' => 
        array (
          'name' => 'Views Test Language',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:language',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_batch_action_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/user_batch_action_test/user_batch_action_test.info.yml',
        'basename' => 'user_batch_action_test.info.yml',
        'name' => 'User batch action test',
        'info' => 
        array (
          'name' => 'User batch action test',
          'type' => 'module',
          'description' => 'Support module for user batch action testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_third_party_settings_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_third_party_settings_test/views_third_party_settings_test.info.yml',
        'basename' => 'views_third_party_settings_test.info.yml',
        'name' => 'Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Third Party Settings Test',
          'type' => 'module',
          'description' => 'A dummy module that third party settings tests can depend on',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_cacheable_metadata_calculation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_cacheable_metadata_calculation/views_test_cacheable_metadata_calculation.info.yml',
        'basename' => 'views_test_cacheable_metadata_calculation.info.yml',
        'name' => 'Views test cacheable metadata calculation',
        'info' => 
        array (
          'name' => 'Views test cacheable metadata calculation',
          'type' => 'module',
          'description' => 'Module to test cacheable metadata calculation in Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_data' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_data/views_test_data.info.yml',
        'basename' => 'views_test_data.info.yml',
        'name' => 'Views Test',
        'info' => 
        array (
          'name' => 'Views Test',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_entity_reference' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_entity_reference/views_test_entity_reference.info.yml',
        'basename' => 'views_test_entity_reference.info.yml',
        'name' => 'Views Test Entity Reference',
        'info' => 
        array (
          'name' => 'Views Test Entity Reference',
          'type' => 'module',
          'description' => 'Provides an entity reference view for use in a selection handler.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_rss' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_rss/views_test_rss.info.yml',
        'basename' => 'views_test_rss.info.yml',
        'name' => 'Views Test RSS',
        'info' => 
        array (
          'name' => 'Views Test RSS',
          'type' => 'module',
          'description' => 'Provides hooks to alter RSS output for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_query_access' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_query_access/views_test_query_access.info.yml',
        'basename' => 'views_test_query_access.info.yml',
        'name' => 'Views test query access',
        'info' => 
        array (
          'name' => 'Views test query access',
          'type' => 'module',
          'description' => 'Module to test entity query access in Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_formatter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/modules/views_test_formatter/views_test_formatter.info.yml',
        'basename' => 'views_test_formatter.info.yml',
        'name' => 'Views Test Formatter',
        'info' => 
        array (
          'name' => 'Views Test Formatter',
          'type' => 'module',
          'description' => 'Provides test field formatters.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/themes/views_test_theme/views_test_theme.info.yml',
        'basename' => 'views_test_theme.info.yml',
        'name' => 'Views test theme',
        'info' => 
        array (
          'name' => 'Views test theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing Views functionality.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_test_checkboxes_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/tests/themes/views_test_checkboxes_theme/views_test_checkboxes_theme.info.yml',
        'basename' => 'views_test_checkboxes_theme.info.yml',
        'name' => 'Views test checkboxes theme',
        'info' => 
        array (
          'name' => 'Views test checkboxes theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing Views rendering of checkboxes.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views/views.info.yml',
        'basename' => 'views.info.yml',
        'name' => 'Views',
        'info' => 
        array (
          'name' => 'Views',
          'type' => 'module',
          'description' => 'Provides a framework to fetch information from the database and to display it in different formats.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dynamic_page_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/dynamic_page_cache/tests/dynamic_page_cache_test/dynamic_page_cache_test.info.yml',
        'basename' => 'dynamic_page_cache_test.info.yml',
        'name' => 'Test Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Test Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Provides test routes/responses for Dynamic Page Cache.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dynamic_page_cache' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/dynamic_page_cache/dynamic_page_cache.info.yml',
        'basename' => 'dynamic_page_cache.info.yml',
        'name' => 'Internal Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Internal Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Caches pages, including those with dynamic content, for all users.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_ui_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views_ui/tests/modules/views_ui_test/views_ui_test.info.yml',
        'basename' => 'views_ui_test.info.yml',
        'name' => 'Views UI Test',
        'info' => 
        array (
          'name' => 'Views UI Test',
          'type' => 'module',
          'description' => 'Test module for Views UI.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views_ui',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_ui_test_field' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views_ui/tests/modules/views_ui_test_field/views_ui_test_field.info.yml',
        'basename' => 'views_ui_test_field.info.yml',
        'name' => 'Views test field',
        'info' => 
        array (
          'name' => 'Views test field',
          'type' => 'module',
          'description' => 'Add custom global field for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views_ui',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_ui_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views_ui/tests/themes/views_ui_test_theme/views_ui_test_theme.info.yml',
        'basename' => 'views_ui_test_theme.info.yml',
        'name' => 'Views UI Test Theme',
        'info' => 
        array (
          'name' => 'Views UI Test Theme',
          'type' => 'theme',
          'description' => 'Test theme for testing Views UI.',
          'version' => 'VERSION',
          'base theme' => 'stark',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/views_ui/views_ui.info.yml',
        'basename' => 'views_ui.info.yml',
        'name' => 'Views UI',
        'info' => 
        array (
          'name' => 'Views UI',
          'type' => 'module',
          'description' => 'Provides a user interface for creating and managing views.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.view.collection',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_test_language' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_test_language/config_test_language.info.yml',
        'basename' => 'config_test_language.info.yml',
        'name' => 'Configuration test languages',
        'info' => 
        array (
          'name' => 'Configuration test languages',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_exclude_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_exclude_test/config_exclude_test.info.yml',
        'basename' => 'config_exclude_test.info.yml',
        'name' => 'Configuration Module Exclude Test',
        'info' => 
        array (
          'name' => 'Configuration Module Exclude Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_test/config_test.info.yml',
        'basename' => 'config_test.info.yml',
        'name' => 'Configuration test',
        'info' => 
        array (
          'name' => 'Configuration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_test_id_mismatch' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_test_id_mismatch/config_test_id_mismatch.info.yml',
        'basename' => 'config_test_id_mismatch.info.yml',
        'name' => 'Configuration test ID mismatch',
        'info' => 
        array (
          'name' => 'Configuration test ID mismatch',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_transformer_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_transformer_test/config_transformer_test.info.yml',
        'basename' => 'config_transformer_test.info.yml',
        'name' => 'Configuration Storage Transformer Test',
        'info' => 
        array (
          'name' => 'Configuration Storage Transformer Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_install_fail_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_install_fail_test/config_install_fail_test.info.yml',
        'basename' => 'config_install_fail_test.info.yml',
        'name' => 'Configuration install fail test',
        'info' => 
        array (
          'name' => 'Configuration install fail test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_clash_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_clash_test_theme/config_clash_test_theme.info.yml',
        'basename' => 'config_clash_test_theme.info.yml',
        'name' => 'Test theme for configuration clash detection',
        'info' => 
        array (
          'name' => 'Test theme for configuration clash detection',
          'type' => 'theme',
          'description' => 'Test theme for configuration clash detection',
          'version' => 'VERSION',
          'base theme' => 'stark',
          'regions' => 
          array (
            'content' => 'Content',
            'left' => 'Left',
            'right' => 'Right',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_import_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_import_test/config_import_test.info.yml',
        'basename' => 'config_import_test.info.yml',
        'name' => 'Configuration import test',
        'info' => 
        array (
          'name' => 'Configuration import test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_install_dependency_enforced_combo_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_install_dependency_enforced_combo_test/config_install_dependency_enforced_combo_test.info.yml',
        'basename' => 'config_install_dependency_enforced_combo_test.info.yml',
        'name' => 'Config install dependency test with mix of enforced and base module dependencies',
        'info' => 
        array (
          'name' => 'Config install dependency test with mix of enforced and base module dependencies',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_entity_static_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_entity_static_cache_test/config_entity_static_cache_test.info.yml',
        'basename' => 'config_entity_static_cache_test.info.yml',
        'name' => 'Configuration entity static cache test',
        'info' => 
        array (
          'name' => 'Configuration entity static cache test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_other_module_config_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_other_module_config_test/config_other_module_config_test.info.yml',
        'basename' => 'config_other_module_config_test.info.yml',
        'name' => 'Config other module config',
        'info' => 
        array (
          'name' => 'Config other module config',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_collection_clash_install_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_collection_clash_install_test/config_collection_clash_install_test.info.yml',
        'basename' => 'config_collection_clash_install_test.info.yml',
        'name' => 'Config collection clash test module',
        'info' => 
        array (
          'name' => 'Config collection clash test module',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_collection_install_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_action_duplicate_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_action_duplicate_test/config_action_duplicate_test.info.yml',
        'basename' => 'config_action_duplicate_test.info.yml',
        'name' => 'Config action duplicate test',
        'info' => 
        array (
          'name' => 'Config action duplicate test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_integration_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_integration_test/config_integration_test.info.yml',
        'basename' => 'config_integration_test.info.yml',
        'name' => 'ConfigTest integration',
        'info' => 
        array (
          'name' => 'ConfigTest integration',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_events_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_events_test/config_events_test.info.yml',
        'basename' => 'config_events_test.info.yml',
        'name' => 'Configuration events test',
        'info' => 
        array (
          'name' => 'Configuration events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_install_dependency_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_install_dependency_test/config_install_dependency_test.info.yml',
        'basename' => 'config_install_dependency_test.info.yml',
        'name' => 'Config install dependency test',
        'info' => 
        array (
          'name' => 'Config install dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_override_message_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_override_message_test/config_override_message_test.info.yml',
        'basename' => 'config_override_message_test.info.yml',
        'name' => 'Configuration override message test',
        'info' => 
        array (
          'name' => 'Configuration override message test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_override_integration_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_override_integration_test/config_override_integration_test.info.yml',
        'basename' => 'config_override_integration_test.info.yml',
        'name' => 'Configuration override integration test',
        'info' => 
        array (
          'name' => 'Configuration override integration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:block_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_override_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_override_test/config_override_test.info.yml',
        'basename' => 'config_override_test.info.yml',
        'name' => 'Configuration override test',
        'info' => 
        array (
          'name' => 'Configuration override test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:block_content',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_install_double_dependency_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_install_double_dependency_test/config_install_double_dependency_test.info.yml',
        'basename' => 'config_install_double_dependency_test.info.yml',
        'name' => 'Config install double dependency test',
        'info' => 
        array (
          'name' => 'Config install double dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_collection_install_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/tests/config_collection_install_test/config_collection_install_test.info.yml',
        'basename' => 'config_collection_install_test.info.yml',
        'name' => 'Configuration events test',
        'info' => 
        array (
          'name' => 'Configuration events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config/config.info.yml',
        'basename' => 'config.info.yml',
        'name' => 'Configuration Manager',
        'info' => 
        array (
          'name' => 'Configuration Manager',
          'type' => 'module',
          'description' => 'Allows importing and exporting configuration changes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'config.sync',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'datetime_range_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/datetime_range/tests/modules/datetime_range_test/datetime_range_test.info.yml',
        'basename' => 'datetime_range_test.info.yml',
        'name' => 'Datetime range test',
        'info' => 
        array (
          'name' => 'Datetime range test',
          'type' => 'module',
          'description' => 'Provides a testing module for datetime_range.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'datetime_range' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/datetime_range/datetime_range.info.yml',
        'basename' => 'datetime_range.info.yml',
        'name' => 'Datetime Range',
        'info' => 
        array (
          'name' => 'Datetime Range',
          'type' => 'module',
          'description' => 'Provides the ability to store end dates.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:datetime',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'responsive_image_test_module' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/responsive_image/tests/modules/responsive_image_test_module/responsive_image_test_module.info.yml',
        'basename' => 'responsive_image_test_module.info.yml',
        'name' => 'Responsive image test theme',
        'info' => 
        array (
          'name' => 'Responsive image test theme',
          'type' => 'module',
          'description' => 'Test theme for responsive image.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'responsive_image' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/responsive_image/responsive_image.info.yml',
        'basename' => 'responsive_image.info.yml',
        'name' => 'Responsive Image',
        'info' => 
        array (
          'name' => 'Responsive Image',
          'type' => 'module',
          'description' => 'Provides functionality to output responsive images using the HTML5 picture tag.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:breakpoint',
            1 => 'drupal:image',
          ),
          'configure' => 'entity.responsive_image_style.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'phpass' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/phpass/phpass.info.yml',
        'basename' => 'phpass.info.yml',
        'name' => 'Password Compatibility',
        'info' => 
        array (
          'name' => 'Password Compatibility',
          'type' => 'module',
          'description' => 'Provides the password checking algorithm for user accounts created with Drupal prior to version 10.1.0.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_ui_test_deprecated' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field_ui/tests/modules/field_ui_test_deprecated/field_ui_test_deprecated.info.yml',
        'basename' => 'field_ui_test_deprecated.info.yml',
        'name' => 'Field UI test deprecated',
        'info' => 
        array (
          'name' => 'Field UI test deprecated',
          'type' => 'module',
          'description' => 'Support module for testing deprecated Field UI functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_ui_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field_ui/tests/modules/field_ui_test/field_ui_test.info.yml',
        'basename' => 'field_ui_test.info.yml',
        'name' => 'Field UI test',
        'info' => 
        array (
          'name' => 'Field UI test',
          'type' => 'module',
          'description' => 'Support module for Field UI tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field_ui/field_ui.info.yml',
        'basename' => 'field_ui.info.yml',
        'name' => 'Field UI',
        'info' => 
        array (
          'name' => 'Field UI',
          'type' => 'module',
          'description' => 'Provides a user interface for the Field module.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_expose_all_field_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/modules/layout_builder_expose_all_field_blocks/layout_builder_expose_all_field_blocks.info.yml',
        'basename' => 'layout_builder_expose_all_field_blocks.info.yml',
        'name' => 'Layout Builder Expose All Field Blocks',
        'info' => 
        array (
          'name' => 'Layout Builder Expose All Field Blocks',
          'type' => 'module',
          'description' => 'When enabled, this module exposes all fields for all entity view displays. When disabled, only entity type bundles that have layout builder enabled will have their fields exposed. Enabling this module could significantly decrease performance on sites with a large number of entity types and bundles.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:layout_builder',
          ),
          'lifecycle' => 'deprecated',
          'lifecycle_link' => 'https://www.drupal.org/node/3223395#s-layout-builder-expose-all-field-blocks',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_test/layout_builder_test.info.yml',
        'basename' => 'layout_builder_test.info.yml',
        'name' => 'Layout Builder test',
        'info' => 
        array (
          'name' => 'Layout Builder test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_extra_field_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_extra_field_test/layout_builder_extra_field_test.info.yml',
        'basename' => 'layout_builder_extra_field_test.info.yml',
        'name' => 'Layout Builder Extra Field test',
        'info' => 
        array (
          'name' => 'Layout Builder Extra Field test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_element_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_element_test/layout_builder_element_test.info.yml',
        'basename' => 'layout_builder_element_test.info.yml',
        'name' => 'Layout Builder element test',
        'info' => 
        array (
          'name' => 'Layout Builder element test',
          'type' => 'module',
          'description' => 'Support module for testing the layout builder element.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:layout_builder',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_defaults_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_defaults_test/layout_builder_defaults_test.info.yml',
        'basename' => 'layout_builder_defaults_test.info.yml',
        'name' => 'Layout Builder defaults test',
        'info' => 
        array (
          'name' => 'Layout Builder defaults test',
          'type' => 'module',
          'description' => 'Support module for testing layout building defaults.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_decoration_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_decoration_test/layout_builder_decoration_test.info.yml',
        'basename' => 'layout_builder_decoration_test.info.yml',
        'name' => 'Layout Builder Decoration test',
        'info' => 
        array (
          'name' => 'Layout Builder Decoration test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_theme_suggestions_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_theme_suggestions_test/layout_builder_theme_suggestions_test.info.yml',
        'basename' => 'layout_builder_theme_suggestions_test.info.yml',
        'name' => 'Layout Builder Field Block Theme Suggestions Test',
        'info' => 
        array (
          'name' => 'Layout Builder Field Block Theme Suggestions Test',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_views_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_views_test/layout_builder_views_test.info.yml',
        'basename' => 'layout_builder_views_test.info.yml',
        'name' => 'Layout Builder Views Test',
        'info' => 
        array (
          'name' => 'Layout Builder Views Test',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_fieldblock_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_fieldblock_test/layout_builder_fieldblock_test.info.yml',
        'basename' => 'layout_builder_fieldblock_test.info.yml',
        'name' => 'Layout Builder test',
        'info' => 
        array (
          'name' => 'Layout Builder test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder_form_block_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/tests/modules/layout_builder_form_block_test/layout_builder_form_block_test.info.yml',
        'basename' => 'layout_builder_form_block_test.info.yml',
        'name' => 'Layout Builder form block test',
        'info' => 
        array (
          'name' => 'Layout Builder form block test',
          'type' => 'module',
          'description' => 'Support module for testing layout building using blocks with forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_builder' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_builder/layout_builder.info.yml',
        'basename' => 'layout_builder.info.yml',
        'name' => 'Layout Builder',
        'info' => 
        array (
          'name' => 'Layout Builder',
          'type' => 'module',
          'description' => 'Allows users to add and arrange blocks and content fields directly on the content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
            1 => 'drupal:contextual',
            2 => 'drupal:block',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'semver_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/tests/modules/semver_test/semver_test.info.yml',
        'basename' => 'semver_test.info.yml',
        'name' => 'Semver Test',
        'info' => 
        array (
          'name' => 'Semver Test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/tests/modules/update_test/update_test.info.yml',
        'basename' => 'update_test.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/tests/modules/bbb_update_test/bbb_update_test.info.yml',
        'basename' => 'bbb_update_test.info.yml',
        'name' => 'BBB Update test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/tests/modules/ccc_update_test/ccc_update_test.info.yml',
        'basename' => 'ccc_update_test.info.yml',
        'name' => 'CCC Update test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/tests/modules/aaa_update_test/aaa_update_test.info.yml',
        'basename' => 'aaa_update_test.info.yml',
        'name' => 'AAA Update test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_subtheme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/tests/themes/update_test_subtheme/update_test_subtheme.info.yml',
        'basename' => 'update_test_subtheme.info.yml',
        'name' => 'Update test subtheme',
        'info' => 
        array (
          'name' => 'Update test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses update_test_base_theme as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'update_test_base_theme',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_base_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/tests/themes/update_test_base_theme/update_test_base_theme.info.yml',
        'basename' => 'update_test_base_theme.info.yml',
        'name' => 'Update test base theme',
        'info' => 
        array (
          'name' => 'Update test base theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Test theme which acts as a base theme for other test subthemes.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/update/update.info.yml',
        'basename' => 'update.info.yml',
        'name' => 'Update Manager',
        'info' => 
        array (
          'name' => 'Update Manager',
          'type' => 'module',
          'description' => 'Checks for updates and allows users to manage them through a user interface.',
          'version' => 'VERSION',
          'package' => 'Core',
          'configure' => 'update.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block_content_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block_content/tests/modules/block_content_test/block_content_test.info.yml',
        'basename' => 'block_content_test.info.yml',
        'name' => 'Content Block module tests',
        'info' => 
        array (
          'name' => 'Content Block module tests',
          'type' => 'module',
          'description' => 'Support module for content block related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block_content_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block_content/tests/modules/block_content_test_views/block_content_test_views.info.yml',
        'basename' => 'block_content_test_views.info.yml',
        'name' => 'Block Content test views',
        'info' => 
        array (
          'name' => 'Block Content test views',
          'type' => 'module',
          'description' => 'Provides default views for views block_content tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block_content' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block_content/block_content.info.yml',
        'basename' => 'block_content.info.yml',
        'name' => 'Block Content',
        'info' => 
        array (
          'name' => 'Block Content',
          'type' => 'module',
          'description' => 'Allows the creation of content blocks and block types.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:text',
            2 => 'drupal:user',
          ),
          'configure' => 'entity.block_content.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'contextual_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/contextual/tests/modules/contextual_test/contextual_test.info.yml',
        'basename' => 'contextual_test.info.yml',
        'name' => 'Contextual Test',
        'info' => 
        array (
          'name' => 'Contextual Test',
          'type' => 'module',
          'description' => 'Provides test contextual links.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contextual',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/contextual/contextual.info.yml',
        'basename' => 'contextual.info.yml',
        'name' => 'Contextual Links',
        'info' => 
        array (
          'name' => 'Contextual Links',
          'type' => 'module',
          'description' => 'Provides contextual links to directly access tasks related to page elements.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_moderation_test_resave' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/content_moderation/tests/modules/content_moderation_test_resave/content_moderation_test_resave.info.yml',
        'basename' => 'content_moderation_test_resave.info.yml',
        'name' => 'Content moderation test re-save',
        'info' => 
        array (
          'name' => 'Content moderation test re-save',
          'type' => 'module',
          'description' => 'Re-saves moderated entities for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_moderation',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_moderation_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/content_moderation/tests/modules/content_moderation_test_views/content_moderation_test_views.info.yml',
        'basename' => 'content_moderation_test_views.info.yml',
        'name' => 'Content moderation test views',
        'info' => 
        array (
          'name' => 'Content moderation test views',
          'type' => 'module',
          'description' => 'Provides default views for views Content moderation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_moderation',
            1 => 'drupal:node',
            2 => 'drupal:views',
            3 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_moderation_test_local_task' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/content_moderation/tests/modules/content_moderation_test_local_task/content_moderation_test_local_task.info.yml',
        'basename' => 'content_moderation_test_local_task.info.yml',
        'name' => 'Content moderation test local task',
        'info' => 
        array (
          'name' => 'Content moderation test local task',
          'type' => 'module',
          'description' => 'Provides a local task for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_moderation',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_moderation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/content_moderation/content_moderation.info.yml',
        'basename' => 'content_moderation.info.yml',
        'name' => 'Content Moderation',
        'info' => 
        array (
          'name' => 'Content Moderation',
          'type' => 'module',
          'description' => 'Provides additional publication states that can be used by other modules to moderate content.',
          'version' => 'VERSION',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'basic_auth_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/basic_auth/tests/modules/basic_auth_test/basic_auth_test.info.yml',
        'basename' => 'basic_auth_test.info.yml',
        'name' => 'HTTP Basic Authentication test',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication test',
          'type' => 'module',
          'description' => 'Support module for HTTP Basic Authentication testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'basic_auth' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/basic_auth/basic_auth.info.yml',
        'basename' => 'basic_auth.info.yml',
        'name' => 'HTTP Basic Authentication',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'type' => 'module',
          'description' => 'Provides an HTTP Basic authentication provider.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'menu_link_content' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/menu_link_content/menu_link_content.info.yml',
        'basename' => 'menu_link_content.info.yml',
        'name' => 'Custom Menu Links',
        'info' => 
        array (
          'name' => 'Custom Menu Links',
          'type' => 'module',
          'description' => 'Allows users to create menu links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:link',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_incompatible_core_version_dependencies_test/system_incompatible_core_version_dependencies_test.info.yml',
        'basename' => 'system_incompatible_core_version_dependencies_test.info.yml',
        'name' => 'System incompatible core version dependencies test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:system_core_incompatible_semver_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'destructable_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/destructable_test/destructable_test.info.yml',
        'basename' => 'destructable_test.info.yml',
        'name' => 'Tests for DestructableInterface',
        'info' => 
        array (
          'name' => 'Tests for DestructableInterface',
          'type' => 'module',
          'description' => 'Provides test services which implement DestructableInterface.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/menu_test/menu_test.info.yml',
        'basename' => 'menu_test.info.yml',
        'name' => 'Hook menu tests',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'type' => 'module',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:test_page_test',
            1 => 'drupal:menu_ui',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'display_variant_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/display_variant_test/display_variant_test.info.yml',
        'basename' => 'display_variant_test.info.yml',
        'name' => 'Display variant tests',
        'info' => 
        array (
          'name' => 'Display variant tests',
          'type' => 'module',
          'description' => 'Support module for testing display variants.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_deprecation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_deprecation_test/js_deprecation_test.info.yml',
        'basename' => 'js_deprecation_test.info.yml',
        'name' => 'JS Deprecation test',
        'info' => 
        array (
          'name' => 'JS Deprecation test',
          'description' => 'Provides deprecated code that can be used for tests',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_constraints' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_constraints/entity_test_constraints.info.yml',
        'basename' => 'entity_test_constraints.info.yml',
        'name' => 'Entity constraints test module',
        'info' => 
        array (
          'name' => 'Entity constraints test module',
          'type' => 'module',
          'description' => 'Tests extending and altering entity constraints.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_message_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_message_test/js_message_test.info.yml',
        'basename' => 'js_message_test.info.yml',
        'name' => 'JS Message test module',
        'info' => 
        array (
          'name' => 'JS Message test module',
          'type' => 'module',
          'description' => 'Module for the JSMessageTest test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/common_test/common_test.info.yml',
        'basename' => 'common_test.info.yml',
        'name' => 'Common Test',
        'info' => 
        array (
          'name' => 'Common Test',
          'type' => 'module',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/ajax_forms_test/ajax_forms_test.info.yml',
        'basename' => 'ajax_forms_test.info.yml',
        'name' => 'AJAX form test mock module',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'type' => 'module',
          'description' => 'Test for AJAX form calls.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_testing_log_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_testing_log_test/js_testing_log_test.info.yml',
        'basename' => 'js_testing_log_test.info.yml',
        'name' => 'JS Deprecation log test',
        'info' => 
        array (
          'name' => 'JS Deprecation log test',
          'description' => 'Stores all JS deprecation calls to allow JS tests to determine if they have been called.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_incompatible_module_version_dependencies_test/system_incompatible_module_version_dependencies_test.info.yml',
        'basename' => 'system_incompatible_module_version_dependencies_test.info.yml',
        'name' => 'System incompatible module version dependencies test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:system_incompatible_module_version_test (>2.0)',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/database_test/database_test.info.yml',
        'basename' => 'database_test.info.yml',
        'name' => 'Database Test',
        'info' => 
        array (
          'name' => 'Database Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'module_install_class_loader_test1' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/module_install_class_loader_test1/module_install_class_loader_test1.info.yml',
        'basename' => 'module_install_class_loader_test1.info.yml',
        'name' => 'Module install class loader test1',
        'info' => 
        array (
          'name' => 'Module install class loader test1',
          'description' => 'Support module for tests that the class loader behaves as expected during module install.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_page_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/test_page_test/test_page_test.info.yml',
        'basename' => 'test_page_test.info.yml',
        'name' => 'Test page',
        'info' => 
        array (
          'name' => 'Test page',
          'type' => 'module',
          'description' => 'Provides a test page for automated tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_third_party' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_third_party/entity_test_third_party.info.yml',
        'basename' => 'entity_test_third_party.info.yml',
        'name' => 'Entity test third-party settings module',
        'info' => 
        array (
          'name' => 'Entity test third-party settings module',
          'type' => 'module',
          'description' => 'Provides third-party settings for test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecated_twig_template' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecated_twig_template/deprecated_twig_template.info.yml',
        'basename' => 'deprecated_twig_template.info.yml',
        'name' => 'Deprecated Twig Template Test',
        'info' => 
        array (
          'name' => 'Deprecated Twig Template Test',
          'type' => 'module',
          'description' => 'Provides a deprecated Twig template for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/common_test_cron_helper/common_test_cron_helper.info.yml',
        'basename' => 'common_test_cron_helper.info.yml',
        'name' => 'Common Test Cron Helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'type' => 'module',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'phpunit_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/phpunit_test/phpunit_test.info.yml',
        'basename' => 'phpunit_test.info.yml',
        'name' => 'PHPUnit Test',
        'info' => 
        array (
          'name' => 'PHPUnit Test',
          'type' => 'module',
          'description' => 'Provides dummy classes for use by tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_with_7x' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_with_7x/update_test_with_7x.info.yml',
        'basename' => 'update_test_with_7x.info.yml',
        'name' => 'Update test with 7.x updates left in the codebase.',
        'info' => 
        array (
          'name' => 'Update test with 7.x updates left in the codebase.',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'unversioned_assets_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/unversioned_assets_test/unversioned_assets_test.info.yml',
        'basename' => 'unversioned_assets_test.info.yml',
        'name' => 'Unversioned assets test',
        'info' => 
        array (
          'name' => 'Unversioned assets test',
          'type' => 'module',
          'description' => 'Tests that aggregates change when unversioned assets change',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'evil' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/evil/evil.info.yml',
        'basename' => 'evil.info.yml',
        'name' => '<script>alert(\'Evil theme name\');</script>',
        'info' => 
        array (
          'name' => '<script>alert(\'Evil theme name\');</script>',
          'type' => 'theme',
          'description' => '<script>alert(\'Evil theme desc\');</script>',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mail_html_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/mail_html_test/mail_html_test.info.yml',
        'basename' => 'mail_html_test.info.yml',
        'name' => 'HTML mail test support',
        'info' => 
        array (
          'name' => 'HTML mail test support',
          'description' => 'Test if HTML in mails works as expected.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'content_negotiation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/content_negotiation_test/content_negotiation_test.info.yml',
        'basename' => 'content_negotiation_test.info.yml',
        'name' => 'Content negotiation test',
        'info' => 
        array (
          'name' => 'Content negotiation test',
          'type' => 'module',
          'description' => 'Support testing content negotiation variations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'twig_extension_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/twig_extension_test/twig_extension_test.info.yml',
        'basename' => 'twig_extension_test.info.yml',
        'name' => 'Twig Extension Test',
        'info' => 
        array (
          'name' => 'Twig Extension Test',
          'type' => 'module',
          'description' => 'Support module for testing Twig extensions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'decorated_service_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/decorated_service_test/decorated_service_test.info.yml',
        'basename' => 'decorated_service_test.info.yml',
        'name' => 'Decorated Service Test',
        'info' => 
        array (
          'name' => 'Decorated Service Test',
          'type' => 'module',
          'description' => 'Support module for decorated service test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'default_format_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/default_format_test/default_format_test.info.yml',
        'basename' => 'default_format_test.info.yml',
        'name' => 'Default format test',
        'info' => 
        array (
          'name' => 'Default format test',
          'type' => 'module',
          'description' => 'Support module for testing default route format.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'off_canvas_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/off_canvas_test/off_canvas_test.info.yml',
        'basename' => 'off_canvas_test.info.yml',
        'name' => 'Off-canvas tests',
        'info' => 
        array (
          'name' => 'Off-canvas tests',
          'type' => 'module',
          'description' => 'Provides off-canvas test links.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hook_collector_skip_procedural' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/hook_collector_skip_procedural/hook_collector_skip_procedural.info.yml',
        'basename' => 'hook_collector_skip_procedural.info.yml',
        'name' => 'Test skipping procedural for whole module',
        'info' => 
        array (
          'name' => 'Test skipping procedural for whole module',
          'type' => 'module',
          'description' => 'Test skipping procedural for whole module.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_user_config' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/test_user_config/test_user_config.info.yml',
        'basename' => 'test_user_config.info.yml',
        'name' => 'Test User Config',
        'info' => 
        array (
          'name' => 'Test User Config',
          'type' => 'module',
          'description' => 'Provides a test user config.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:field',
            2 => 'drupal:image',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'module_installer_config_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/module_installer_config_test/module_installer_config_test.info.yml',
        'basename' => 'module_installer_config_test.info.yml',
        'name' => 'Module installer config test',
        'info' => 
        array (
          'name' => 'Module installer config test',
          'description' => 'Support module for tests that require a failed module install.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'equivalent_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/equivalent_update_test/equivalent_update_test.info.yml',
        'basename' => 'equivalent_update_test.info.yml',
        'name' => 'Equivalent Update test',
        'info' => 
        array (
          'name' => 'Equivalent Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => '100501',
        'version' => '11.1.9',
      ),
      'system_status_obsolete_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_status_obsolete_test/system_status_obsolete_test.info.yml',
        'basename' => 'system_status_obsolete_test.info.yml',
        'name' => 'System obsolete status test',
        'info' => 
        array (
          'name' => 'System obsolete status test',
          'type' => 'module',
          'description' => 'Support module for testing an obsolete module extension.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'lifecycle' => 'obsolete',
          'lifecycle_link' => 'https://example.com/obsolete',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'post_update_test_failing' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/post_update_test_failing/post_update_test_failing.info.yml',
        'basename' => 'post_update_test_failing.info.yml',
        'name' => 'Post Update test failing',
        'info' => 
        array (
          'name' => 'Post Update test failing',
          'type' => 'module',
          'description' => 'Support module for update testing when a post update is failing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'twig_loader_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/twig_loader_test/twig_loader_test.info.yml',
        'basename' => 'twig_loader_test.info.yml',
        'name' => 'Twig Loader Test',
        'info' => 
        array (
          'name' => 'Twig Loader Test',
          'type' => 'module',
          'description' => 'Support module for testing adding Twig loaders.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_revlog' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_revlog/entity_test_revlog.info.yml',
        'basename' => 'entity_test_revlog.info.yml',
        'name' => 'Entity test revision log',
        'info' => 
        array (
          'name' => 'Entity test revision log',
          'type' => 'module',
          'description' => 'Provides two entity types with revision logging capabilities.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_module_test/system_module_test.info.yml',
        'basename' => 'system_module_test.info.yml',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing System module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'advisory_feed_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/advisory_feed_test/advisory_feed_test.info.yml',
        'basename' => 'advisory_feed_test.info.yml',
        'name' => 'Advisory feed test',
        'info' => 
        array (
          'name' => 'Advisory feed test',
          'type' => 'module',
          'description' => 'Support module for advisory feed testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_schema' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_schema/update_test_schema.info.yml',
        'basename' => 'update_test_schema.info.yml',
        'name' => 'Update test schema',
        'info' => 
        array (
          'name' => 'Update test schema',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_errors_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_errors_test/js_errors_test.info.yml',
        'basename' => 'js_errors_test.info.yml',
        'name' => 'JS Errors test',
        'info' => 
        array (
          'name' => 'JS Errors test',
          'description' => 'Provides a JavaScript error that can be used for tests',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'unique_field_constraint_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/unique_field_constraint_test/unique_field_constraint_test.info.yml',
        'basename' => 'unique_field_constraint_test.info.yml',
        'name' => 'UniqueField Constraint Test',
        'info' => 
        array (
          'name' => 'UniqueField Constraint Test',
          'type' => 'module',
          'description' => 'Support module for UniqueField Constraint testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'cron_queue_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/cron_queue_test/cron_queue_test.info.yml',
        'basename' => 'cron_queue_test.info.yml',
        'name' => 'Cron Queue test',
        'info' => 
        array (
          'name' => 'Cron Queue test',
          'type' => 'module',
          'description' => 'Support module for the cron queue runner.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dialog_renderer_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/dialog_renderer_test/dialog_renderer_test.info.yml',
        'basename' => 'dialog_renderer_test.info.yml',
        'name' => 'Dialog Renderer Test',
        'info' => 
        array (
          'name' => 'Dialog Renderer Test',
          'type' => 'module',
          'description' => 'Support module for Dialog Renderer tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecation_test/deprecation_test.info.yml',
        'basename' => 'deprecation_test.info.yml',
        'name' => 'Deprecation test',
        'info' => 
        array (
          'name' => 'Deprecation test',
          'type' => 'module',
          'description' => 'Support module for testing deprecation behaviors.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'olivero_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/olivero_test/olivero_test.info.yml',
        'basename' => 'olivero_test.info.yml',
        'name' => 'Olivero tests',
        'info' => 
        array (
          'name' => 'Olivero tests',
          'type' => 'module',
          'description' => 'Support module for testing the Olivero theme.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:contact',
            2 => 'drupal:form_test',
            3 => 'drupal:image',
            4 => 'drupal:path',
            5 => 'drupal:search',
            6 => 'drupal:taxonomy',
            7 => 'drupal:views',
            8 => 'drupal:js_message_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jquery_keyevent_polyfill_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/jquery_keyevent_polyfill_test/jquery_keyevent_polyfill_test.info.yml',
        'basename' => 'jquery_keyevent_polyfill_test.info.yml',
        'name' => 'jQuery key event polyfill test',
        'info' => 
        array (
          'name' => 'jQuery key event polyfill test',
          'type' => 'module',
          'description' => 'Polyfills the event.which property, needed for tests',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'twig_namespace_a' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/twig_theme_test/modules/twig_namespace_a/twig_namespace_a.info.yml',
        'basename' => 'twig_namespace_a.info.yml',
        'name' => 'Twig namespace test: Module A',
        'info' => 
        array (
          'name' => 'Twig namespace test: Module A',
          'type' => 'module',
          'description' => 'Support module for Twig namespace testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'twig_namespace_b' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/twig_theme_test/modules/twig_namespace_b/twig_namespace_b.info.yml',
        'basename' => 'twig_namespace_b.info.yml',
        'name' => 'Twig namespace test: Module A',
        'info' => 
        array (
          'name' => 'Twig namespace test: Module A',
          'type' => 'module',
          'description' => 'Support module for Twig namespace testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'twig_theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/twig_theme_test/twig_theme_test.info.yml',
        'basename' => 'twig_theme_test.info.yml',
        'name' => 'Twig theme test',
        'info' => 
        array (
          'name' => 'Twig theme test',
          'type' => 'module',
          'description' => 'Support module for Twig theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'path_changed_helper_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/path_changed_helper_test/path_changed_helper_test.info.yml',
        'basename' => 'path_changed_helper_test.info.yml',
        'name' => 'PathChangedHelper test',
        'info' => 
        array (
          'name' => 'PathChangedHelper test',
          'type' => 'module',
          'description' => 'Create routes to test the PathChangedHelper class.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_0' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_0/update_test_0.info.yml',
        'basename' => 'update_test_0.info.yml',
        'name' => 'Update test 0',
        'info' => 
        array (
          'name' => 'Update test 0',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'error_service_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/error_service_test/error_service_test.info.yml',
        'basename' => 'error_service_test.info.yml',
        'name' => 'Error service test',
        'info' => 
        array (
          'name' => 'Error service test',
          'type' => 'module',
          'description' => 'Support module for causing bedlam in container rebuilds.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/theme_test/theme_test.info.yml',
        'basename' => 'theme_test.info.yml',
        'name' => 'Theme test',
        'info' => 
        array (
          'name' => 'Theme test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_test_invalid' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/sdc_test_invalid/sdc_test_invalid.info.yml',
        'basename' => 'sdc_test_invalid.info.yml',
        'name' => 'Components Test',
        'info' => 
        array (
          'name' => 'Components Test',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'theme_suggestions_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/theme_suggestions_test/theme_suggestions_test.info.yml',
        'basename' => 'theme_suggestions_test.info.yml',
        'name' => 'Theme suggestions test',
        'info' => 
        array (
          'name' => 'Theme suggestions test',
          'type' => 'module',
          'description' => 'Support module for testing theme suggestions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_testing_ajax_request_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_testing_ajax_request_test/js_testing_ajax_request_test.info.yml',
        'basename' => 'js_testing_ajax_request_test.info.yml',
        'name' => 'AJAX request tracking',
        'info' => 
        array (
          'name' => 'AJAX request tracking',
          'description' => 'Tracks AJAX requests to allow JS tests to reliably wait and observe these.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hold_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/hold_test/hold_test.info.yml',
        'basename' => 'hold_test.info.yml',
        'name' => 'Hold test',
        'info' => 
        array (
          'name' => 'Hold test',
          'type' => 'module',
          'description' => 'Support testing with request/response hold.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/requirements2_test/requirements2_test.info.yml',
        'basename' => 'requirements2_test.info.yml',
        'name' => 'Requirements 2 Test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'type' => 'module',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'drupal:requirements1_test',
            1 => 'drupal:comment',
          ),
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'respond_install_uninstall_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/respond_install_uninstall_hook_test/respond_install_uninstall_hook_test.info.yml',
        'basename' => 'respond_install_uninstall_hook_test.info.yml',
        'name' => 'Hooks in ModuleInstaller',
        'info' => 
        array (
          'name' => 'Hooks in ModuleInstaller',
          'type' => 'module',
          'description' => 'Test hooks invoked when modules are installed or uninstalled.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_failing' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_failing/update_test_failing.info.yml',
        'basename' => 'update_test_failing.info.yml',
        'name' => 'Update test failing',
        'info' => 
        array (
          'name' => 'Update test failing',
          'type' => 'module',
          'description' => 'Support module for update testing when an update hook is failing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/batch_test/batch_test.info.yml',
        'basename' => 'batch_test.info.yml',
        'name' => 'Batch API test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'type' => 'module',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecated_module' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecated_module/deprecated_module.info.yml',
        'basename' => 'deprecated_module.info.yml',
        'name' => 'Deprecated module',
        'info' => 
        array (
          'name' => 'Deprecated module',
          'type' => 'module',
          'description' => 'Deprecated module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'lifecycle' => 'deprecated',
          'lifecycle_link' => 'http://example.com/deprecated',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'csrf_race_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/csrf_race_test/csrf_race_test.info.yml',
        'basename' => 'csrf_race_test.info.yml',
        'name' => 'CSRF race test',
        'info' => 
        array (
          'name' => 'CSRF race test',
          'type' => 'module',
          'description' => 'Check that CSRF token is generated once.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'token_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/token_test/token_test.info.yml',
        'basename' => 'token_test.info.yml',
        'name' => 'Token test',
        'info' => 
        array (
          'name' => 'Token test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jswebassert_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/jswebassert_test/jswebassert_test.info.yml',
        'basename' => 'jswebassert_test.info.yml',
        'name' => 'JS WebAssert test module',
        'info' => 
        array (
          'name' => 'JS WebAssert test module',
          'type' => 'module',
          'description' => 'Module for the JSWebAssert test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_reference_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_reference_test_views/entity_reference_test_views.info.yml',
        'basename' => 'entity_reference_test_views.info.yml',
        'name' => 'Entity reference test views',
        'info' => 
        array (
          'name' => 'Entity reference test views',
          'type' => 'module',
          'description' => 'Provides default views for views entity reference tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_2/update_test_2.info.yml',
        'basename' => 'update_test_2.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'mail_cancel_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/mail_cancel_test/mail_cancel_test.info.yml',
        'basename' => 'mail_cancel_test.info.yml',
        'name' => 'Cancel mail test support',
        'info' => 
        array (
          'name' => 'Cancel mail test support',
          'description' => 'Test that the mail can be cancelled.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_incompatible_module_version_test/system_incompatible_module_version_test.info.yml',
        'basename' => 'system_incompatible_module_version_test.info.yml',
        'name' => 'System incompatible module version test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '1.0',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'render_attached_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/render_attached_test/render_attached_test.info.yml',
        'basename' => 'render_attached_test.info.yml',
        'name' => 'Rendering #attached test',
        'info' => 
        array (
          'name' => 'Rendering #attached test',
          'type' => 'module',
          'description' => 'Support module for HtmlResponseAttachmentsTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hook_collector_on_behalf_procedural' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/hook_collector_on_behalf_procedural/hook_collector_on_behalf_procedural.info.yml',
        'basename' => 'hook_collector_on_behalf_procedural.info.yml',
        'name' => 'Test Hooks on behalf of other modules',
        'info' => 
        array (
          'name' => 'Test Hooks on behalf of other modules',
          'type' => 'module',
          'description' => 'Test hooks invoked on behalf of other modules when installed later.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'pager_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/pager_test/pager_test.info.yml',
        'basename' => 'pager_test.info.yml',
        'name' => 'Pager Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Pager Test',
          'description' => 'Support module for pager tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'theme_region_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/theme_region_test/theme_region_test.info.yml',
        'basename' => 'theme_region_test.info.yml',
        'name' => 'Theme region test',
        'info' => 
        array (
          'name' => 'Theme region test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing regions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_mapping_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/config_mapping_test/config_mapping_test.info.yml',
        'basename' => 'config_mapping_test.info.yml',
        'name' => 'Config mapping test',
        'info' => 
        array (
          'name' => 'Config mapping test',
          'type' => 'module',
          'description' => 'Test configuration mapping.',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:comment',
          ),
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'experimental_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/experimental_module_test/experimental_module_test.info.yml',
        'basename' => 'experimental_module_test.info.yml',
        'name' => 'Experimental Test',
        'info' => 
        array (
          'name' => 'Experimental Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test experimental functionality.',
          'package' => 'Core (Experimental)',
          'lifecycle' => 'experimental',
          'lifecycle_link' => 'https://example.com/experimental',
          'version' => '8.y.x-unstable',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/module_test/module_test.info.yml',
        'basename' => 'module_test.info.yml',
        'name' => 'Module test',
        'info' => 
        array (
          'name' => 'Module test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_dependencies_test/system_dependencies_test.info.yml',
        'basename' => 'system_dependencies_test.info.yml',
        'name' => 'System dependency test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:_missing_dependency',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/session_test/session_test.info.yml',
        'basename' => 'session_test.info.yml',
        'name' => 'Session test',
        'info' => 
        array (
          'name' => 'Session test',
          'type' => 'module',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'tabbingmanager_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/tabbingmanager_test/tabbingmanager_test.info.yml',
        'basename' => 'tabbingmanager_test.info.yml',
        'name' => 'Tabbing Manager Test',
        'info' => 
        array (
          'name' => 'Tabbing Manager Test',
          'type' => 'module',
          'description' => 'Module for the testing tabbing manager',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/cache_test/cache_test.info.yml',
        'basename' => 'cache_test.info.yml',
        'name' => 'Cache test',
        'info' => 
        array (
          'name' => 'Cache test',
          'type' => 'module',
          'description' => 'Support module for cache system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'delay_cache_tags_invalidation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/delay_cache_tags_invalidation/delay_cache_tags_invalidation.info.yml',
        'basename' => 'delay_cache_tags_invalidation.info.yml',
        'name' => 'Delay Cache Tags Invalidation Test',
        'info' => 
        array (
          'name' => 'Delay Cache Tags Invalidation Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'module_install_class_loader_test2' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/module_install_class_loader_test2/module_install_class_loader_test2.info.yml',
        'basename' => 'module_install_class_loader_test2.info.yml',
        'name' => 'Module install class loader test2',
        'info' => 
        array (
          'name' => 'Module install class loader test2',
          'description' => 'Support module for tests that the class loader behaves as expected during module install.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:module_install_class_loader_test1',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecation_hook_attribute_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecation_hook_attribute_test/deprecation_hook_attribute_test.info.yml',
        'basename' => 'deprecation_hook_attribute_test.info.yml',
        'name' => 'Deprecation test',
        'info' => 
        array (
          'name' => 'Deprecation test',
          'type' => 'module',
          'description' => 'Support module for testing deprecation behaviors.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_reference_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_reference_test/entity_reference_test.info.yml',
        'basename' => 'entity_reference_test.info.yml',
        'name' => 'Entity Reference Test',
        'info' => 
        array (
          'name' => 'Entity Reference Test',
          'type' => 'module',
          'description' => 'Support module for the Entity Reference tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:user',
            2 => 'drupal:views',
            3 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'image_lazy_load_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/image_lazy_load_test/image_lazy_load_test.info.yml',
        'basename' => 'image_lazy_load_test.info.yml',
        'name' => 'Image lazy load',
        'info' => 
        array (
          'name' => 'Image lazy load',
          'type' => 'module',
          'description' => 'Support module for image loading attribute tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_install' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_install/entity_test_install.info.yml',
        'basename' => 'entity_test_install.info.yml',
        'name' => 'Entity test install',
        'info' => 
        array (
          'name' => 'Entity test install',
          'type' => 'module',
          'description' => 'Provides optional install config for entity_test.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_1/update_test_1.info.yml',
        'basename' => 'update_test_1.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_3/update_test_3.info.yml',
        'basename' => 'update_test_3.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_update' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_update/entity_test_update.info.yml',
        'basename' => 'entity_test_update.info.yml',
        'name' => 'Entity Update Test',
        'info' => 
        array (
          'name' => 'Entity Update Test',
          'type' => 'module',
          'description' => 'Provides an entity type for testing definition and schema updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'action_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/action_test/action_test.info.yml',
        'basename' => 'action_test.info.yml',
        'name' => 'Action test',
        'info' => 
        array (
          'name' => 'Action test',
          'type' => 'module',
          'description' => 'Support module for action testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'experimental_module_requirements_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/experimental_module_requirements_test/experimental_module_requirements_test.info.yml',
        'basename' => 'experimental_module_requirements_test.info.yml',
        'name' => 'Experimental Requirements Test',
        'info' => 
        array (
          'name' => 'Experimental Requirements Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test hook_requirements() with an experimental module.',
          'package' => 'Core (Experimental)',
          'lifecycle' => 'experimental',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'experimental_module_dependency_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/experimental_module_dependency_test/experimental_module_dependency_test.info.yml',
        'basename' => 'experimental_module_dependency_test.info.yml',
        'name' => 'Experimental Dependency Test',
        'info' => 
        array (
          'name' => 'Experimental Dependency Test',
          'type' => 'module',
          'description' => 'Module with a dependency in the experimental package.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:experimental_module_test',
          ),
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test/entity_test.info.yml',
        'basename' => 'entity_test.info.yml',
        'name' => 'Entity CRUD test module',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'type' => 'module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
            2 => 'drupal:system',
            3 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'many_assets_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/many_assets_test/many_assets_test.info.yml',
        'basename' => 'many_assets_test.info.yml',
        'name' => 'Many assets test',
        'info' => 
        array (
          'name' => 'Many assets test',
          'type' => 'module',
          'description' => 'Tests loading order of many assets',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hook_collector_skip_procedural_attribute' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/hook_collector_skip_procedural_attribute/hook_collector_skip_procedural_attribute.info.yml',
        'basename' => 'hook_collector_skip_procedural_attribute.info.yml',
        'name' => 'Test skipping procedural for part of the module',
        'info' => 
        array (
          'name' => 'Test skipping procedural for part of the module',
          'type' => 'module',
          'description' => 'Test skipping procedural for part of the module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'procedural_hooks' => 'scan',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_core_semver_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_core_semver_test/system_core_semver_test.info.yml',
        'basename' => 'system_core_semver_test.info.yml',
        'name' => 'System core ^8 version test',
        'info' => 
        array (
          'name' => 'System core ^8 version test',
          'type' => 'module',
          'description' => 'Support module for testing core using semver.',
          'package' => 'Testing',
          'version' => '1.0.0',
          'core_version_requirement' => '^8 || ^9 || ^10',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'new_dependency_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/new_dependency_test/new_dependency_test.info.yml',
        'basename' => 'new_dependency_test.info.yml',
        'name' => 'New Dependency test',
        'info' => 
        array (
          'name' => 'New Dependency test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:new_dependency_test_with_service',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_script_test/update_script_test.info.yml',
        'basename' => 'update_script_test.info.yml',
        'name' => 'Update script test',
        'info' => 
        array (
          'name' => 'Update script test',
          'type' => 'module',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'http_middleware_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/http_middleware_test/http_middleware_test.info.yml',
        'basename' => 'http_middleware_test.info.yml',
        'name' => 'Test HTTP Middleware',
        'info' => 
        array (
          'name' => 'Test HTTP Middleware',
          'type' => 'module',
          'description' => 'Provides a test http middleware for automated tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'condition_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/condition_test/condition_test.info.yml',
        'basename' => 'condition_test.info.yml',
        'name' => 'Condition Test Support',
        'info' => 
        array (
          'name' => 'Condition Test Support',
          'type' => 'module',
          'description' => 'Test general form component for condition plugins.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_test_replacements' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/sdc_test_replacements/sdc_test_replacements.info.yml',
        'basename' => 'sdc_test_replacements.info.yml',
        'name' => 'Components Test Replacements',
        'info' => 
        array (
          'name' => 'Components Test Replacements',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'install_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/install_form_test/install_form_test.info.yml',
        'basename' => 'install_form_test.info.yml',
        'name' => 'Install Form Test',
        'info' => 
        array (
          'name' => 'Install Form Test',
          'type' => 'module',
          'description' => 'Test the SiteSettingsForm can be extended.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'error_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/error_test/error_test.info.yml',
        'basename' => 'error_test.info.yml',
        'name' => 'Error test',
        'info' => 
        array (
          'name' => 'Error test',
          'type' => 'module',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'generic_module2_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/generic_module2_test/generic_module2_test.info.yml',
        'basename' => 'generic_module2_test.info.yml',
        'name' => 'Generic Module1 test',
        'info' => 
        array (
          'name' => 'Generic Module1 test',
          'type' => 'module',
          'description' => 'A another testing module with no special functionality. It just exists. Can we say anymore about ourselves? 🤯',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/form_test/form_test.info.yml',
        'basename' => 'form_test.info.yml',
        'name' => 'FormAPI Test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'type' => 'module',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:filter',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/ajax_test/ajax_test.info.yml',
        'basename' => 'ajax_test.info.yml',
        'name' => 'AJAX Test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'type' => 'module',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'link_generation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/link_generation_test/link_generation_test.info.yml',
        'basename' => 'link_generation_test.info.yml',
        'name' => 'Link generation test support',
        'info' => 
        array (
          'name' => 'Link generation test support',
          'type' => 'module',
          'description' => 'Test hooks fired in link generation.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'module_required_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/module_required_test/module_required_test.info.yml',
        'basename' => 'module_required_test.info.yml',
        'name' => 'Module required test',
        'info' => 
        array (
          'name' => 'Module required test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node (>=8.x)',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'invalid_module_name_over_the_maximum_allowed_character_length' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/invalid_module_name_over_the_maximum_allowed_character_length/invalid_module_name_over_the_maximum_allowed_character_length.info.yml',
        'basename' => 'invalid_module_name_over_the_maximum_allowed_character_length.info.yml',
        'name' => 'Module name length test',
        'info' => 
        array (
          'name' => 'Module name length test',
          'type' => 'module',
          'description' => 'Test module with a name over the maximum allowed characters.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_interaction_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_interaction_test/js_interaction_test.info.yml',
        'basename' => 'js_interaction_test.info.yml',
        'name' => 'JS Interaction Test',
        'info' => 
        array (
          'name' => 'JS Interaction Test',
          'type' => 'module',
          'description' => 'Module for testing fault-tolerant interactions in JavaScript tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hook_collector_preprocess_no_function' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/hook_collector_preprocess_no_function/hook_collector_preprocess_no_function.info.yml',
        'basename' => 'hook_collector_preprocess_no_function.info.yml',
        'name' => 'Test Hook preprocess no function in 11.1',
        'info' => 
        array (
          'name' => 'Test Hook preprocess no function in 11.1',
          'type' => 'module',
          'description' => 'Test exception',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'session_exists_cache_context_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/session_exists_cache_context_test/session_exists_cache_context_test.info.yml',
        'basename' => 'session_exists_cache_context_test.info.yml',
        'name' => 'session.exists cache context test',
        'info' => 
        array (
          'name' => 'session.exists cache context test',
          'type' => 'module',
          'description' => 'Support module for session.exists cache context testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecated_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecated_module_test/deprecated_module_test.info.yml',
        'basename' => 'deprecated_module_test.info.yml',
        'name' => 'Deprecated module test',
        'info' => 
        array (
          'name' => 'Deprecated module test',
          'type' => 'module',
          'description' => 'Deprecated module test',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'lazy_route_provider_install_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/lazy_route_provider_install_test/lazy_route_provider_install_test.info.yml',
        'basename' => 'lazy_route_provider_install_test.info.yml',
        'name' => 'Lazy route provider install test',
        'info' => 
        array (
          'name' => 'Lazy route provider install test',
          'description' => 'Helps test a bug triggered by the url_generator maintaining a stale route provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'service_provider_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/service_provider_test/service_provider_test.info.yml',
        'basename' => 'service_provider_test.info.yml',
        'name' => 'Service Provider test',
        'info' => 
        array (
          'name' => 'Service Provider test',
          'type' => 'module',
          'description' => 'Support module for service provider testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'plugin_test_extended' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/plugin_test_extended/plugin_test_extended.info.yml',
        'basename' => 'plugin_test_extended.info.yml',
        'name' => 'Plugin Test Extended',
        'info' => 
        array (
          'name' => 'Plugin Test Extended',
          'type' => 'module',
          'description' => 'Test annotations can extend other annotations in a different namespace.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'path_encoded_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/path_encoded_test/path_encoded_test.info.yml',
        'basename' => 'path_encoded_test.info.yml',
        'name' => 'Path encoded character test',
        'info' => 
        array (
          'name' => 'Path encoded character test',
          'type' => 'module',
          'description' => 'Support module for testing path aliases on a route with encoded characters in the path.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_last_removed' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_last_removed/update_test_last_removed.info.yml',
        'basename' => 'update_test_last_removed.info.yml',
        'name' => 'Update test with hook_update_last_removed() implementation',
        'info' => 
        array (
          'name' => 'Update test with hook_update_last_removed() implementation',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_project_namespace_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_project_namespace_test/system_project_namespace_test.info.yml',
        'basename' => 'system_project_namespace_test.info.yml',
        'name' => 'System project namespace',
        'info' => 
        array (
          'name' => 'System project namespace',
          'type' => 'module',
          'description' => 'Support module for testing project namespace system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/layout_test/layout_test.info.yml',
        'basename' => 'layout_test.info.yml',
        'name' => 'Layout test',
        'info' => 
        array (
          'name' => 'Layout test',
          'type' => 'module',
          'description' => 'Support module for testing layouts.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/requirements1_test/requirements1_test.info.yml',
        'basename' => 'requirements1_test.info.yml',
        'name' => 'Requirements 1 Test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'type' => 'module',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'plugin_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/plugin_test/plugin_test.info.yml',
        'basename' => 'plugin_test.info.yml',
        'name' => 'Plugin Test Support',
        'info' => 
        array (
          'name' => 'Plugin Test Support',
          'type' => 'module',
          'description' => 'Test that plugins can provide plugins and provide namespace discovery for plugin test implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecated_module_with_non_deprecated_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecated_module_with_non_deprecated_dependency/deprecated_module_with_non_deprecated_dependency.info.yml',
        'basename' => 'deprecated_module_with_non_deprecated_dependency.info.yml',
        'name' => 'Deprecated module with non deprecated dependency',
        'info' => 
        array (
          'name' => 'Deprecated module with non deprecated dependency',
          'type' => 'module',
          'description' => 'Deprecated module with non deprecated dependency',
          'package' => 'Testing',
          'version' => 'VERSION',
          'lifecycle' => 'deprecated',
          'lifecycle_link' => 'http://example.com/deprecated',
          'dependencies' => 
          array (
            0 => 'drupal:drupal_system_listing_compatible_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'early_rendering_controller_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/early_rendering_controller_test/early_rendering_controller_test.info.yml',
        'basename' => 'early_rendering_controller_test.info.yml',
        'name' => 'Early rendering controller test',
        'info' => 
        array (
          'name' => 'Early rendering controller test',
          'type' => 'module',
          'description' => 'Support module for EarlyRenderingControllerTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'theme_page_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/theme_page_test/theme_page_test.info.yml',
        'basename' => 'theme_page_test.info.yml',
        'name' => 'Theme page test',
        'info' => 
        array (
          'name' => 'Theme page test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'container_rebuild_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/container_rebuild_test/container_rebuild_test.info.yml',
        'basename' => 'container_rebuild_test.info.yml',
        'name' => 'Service Provider test',
        'info' => 
        array (
          'name' => 'Service Provider test',
          'type' => 'module',
          'description' => 'Support module for service provider testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_core_incompatible_semver_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_core_incompatible_semver_test/system_core_incompatible_semver_test.info.yml',
        'basename' => 'system_core_incompatible_semver_test.info.yml',
        'name' => 'System core incompatible semver test',
        'info' => 
        array (
          'name' => 'System core incompatible semver test',
          'type' => 'module',
          'description' => 'Support module for testing core incompatible semver.',
          'package' => 'Testing',
          'version' => '1.0.0',
          'core_version_requirement' => '^7',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_operation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_operation/entity_test_operation.info.yml',
        'basename' => 'entity_test_operation.info.yml',
        'name' => 'Entity Operation Test',
        'info' => 
        array (
          'name' => 'Entity Operation Test',
          'type' => 'module',
          'description' => 'Provides a test operation to entities.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'csrf_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/csrf_test/csrf_test.info.yml',
        'basename' => 'csrf_test.info.yml',
        'name' => 'CSRF test',
        'info' => 
        array (
          'name' => 'CSRF test',
          'type' => 'module',
          'description' => 'Support testing protecting routes with CSRF token.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_broken_theme_hook' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_broken_theme_hook/update_test_broken_theme_hook.info.yml',
        'basename' => 'update_test_broken_theme_hook.info.yml',
        'name' => 'Update test with broken theme hook',
        'info' => 
        array (
          'name' => 'Update test with broken theme hook',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'autowire_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/autowire_test/autowire_test.info.yml',
        'basename' => 'autowire_test.info.yml',
        'name' => 'Auto-wiring test',
        'info' => 
        array (
          'name' => 'Auto-wiring test',
          'type' => 'module',
          'description' => 'Support module for auto-wiring testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hook_collector_hook_attribute' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/hook_collector_hook_attribute/hook_collector_hook_attribute.info.yml',
        'basename' => 'hook_collector_hook_attribute.info.yml',
        'name' => 'Test Hook attribute',
        'info' => 
        array (
          'name' => 'Test Hook attribute',
          'type' => 'module',
          'description' => 'Test Hook attribute with named arguments, and class with invoke method',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'render_array_non_html_subscriber_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/render_array_non_html_subscriber_test/render_array_non_html_subscriber_test.info.yml',
        'basename' => 'render_array_non_html_subscriber_test.info.yml',
        'name' => 'Array rendering for non-HTML requests subscriber test',
        'info' => 
        array (
          'name' => 'Array rendering for non-HTML requests subscriber test',
          'type' => 'module',
          'description' => 'Support module for RenderArrayNonHtmlSubscriberTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'position_shim_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/position_shim_test/position_shim_test.info.yml',
        'basename' => 'position_shim_test.info.yml',
        'name' => 'Position Shim Test',
        'info' => 
        array (
          'name' => 'Position Shim Test',
          'type' => 'module',
          'description' => 'Module for the testing jQuery UI position shim',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'paramconverter_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/paramconverter_test/paramconverter_test.info.yml',
        'basename' => 'paramconverter_test.info.yml',
        'name' => 'ParamConverter test',
        'info' => 
        array (
          'name' => 'ParamConverter test',
          'type' => 'module',
          'description' => 'Support module for paramconverter testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_bundle_class' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_bundle_class/entity_test_bundle_class.info.yml',
        'basename' => 'entity_test_bundle_class.info.yml',
        'name' => 'Entity Bundle Class Test',
        'info' => 
        array (
          'name' => 'Entity Bundle Class Test',
          'type' => 'module',
          'description' => 'Support module for testing entity bundle classes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_displace' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_displace/js_displace.info.yml',
        'basename' => 'js_displace.info.yml',
        'name' => 'JS Displace Tests',
        'info' => 
        array (
          'name' => 'JS Displace Tests',
          'type' => 'module',
          'description' => 'Support module for testing Drupal.displace() JavaScript API.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'legacy_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/legacy_hook_test/legacy_hook_test.info.yml',
        'basename' => 'legacy_hook_test.info.yml',
        'name' => 'LegacyHook attribute test',
        'info' => 
        array (
          'name' => 'LegacyHook attribute test',
          'type' => 'module',
          'description' => 'LegacyHook attribute test module',
          'package' => 'test',
          'core_version_requirement' => '^10 || ^11',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_mail_failure_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_mail_failure_test/system_mail_failure_test.info.yml',
        'basename' => 'system_mail_failure_test.info.yml',
        'name' => 'System mail failure test',
        'info' => 
        array (
          'name' => 'System mail failure test',
          'type' => 'module',
          'description' => 'Provides a malfunctioning mail service for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'icon_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/icon_test/icon_test.info.yml',
        'basename' => 'icon_test.info.yml',
        'name' => 'Icon Tests',
        'info' => 
        array (
          'name' => 'Icon Tests',
          'type' => 'module',
          'description' => 'Provides test for icons and settings.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/sdc_test/sdc_test.info.yml',
        'basename' => 'sdc_test.info.yml',
        'name' => 'Components Test',
        'info' => 
        array (
          'name' => 'Components Test',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_incompatible_php_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_incompatible_php_version_test/system_incompatible_php_version_test.info.yml',
        'basename' => 'system_incompatible_php_version_test.info.yml',
        'name' => 'System incompatible PHP version test',
        'info' => 
        array (
          'name' => 'System incompatible PHP version test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'php' => 6502,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'render_placeholder_message_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/render_placeholder_message_test/render_placeholder_message_test.info.yml',
        'basename' => 'render_placeholder_message_test.info.yml',
        'name' => 'Placeholder setting a message test',
        'info' => 
        array (
          'name' => 'Placeholder setting a message test',
          'type' => 'module',
          'description' => 'Support module for PlaceholderMessageTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'services_defaults_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/services_defaults_test/services_defaults_test.info.yml',
        'basename' => 'services_defaults_test.info.yml',
        'name' => 'Services _defaults test',
        'info' => 
        array (
          'name' => 'Services _defaults test',
          'type' => 'module',
          'description' => 'Support module for services _defaults',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'nightwatch_theme_install_utility' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/nightwatch_theme_install_utility/nightwatch_theme_install_utility.info.yml',
        'basename' => 'nightwatch_theme_install_utility.info.yml',
        'name' => 'Nightwatch theme install utility',
        'info' => 
        array (
          'name' => 'Nightwatch theme install utility',
          'type' => 'module',
          'description' => 'Helper module facilitate theme installation in Nightwatch tests',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'css_disable_transitions_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/css_disable_transitions_test/css_disable_transitions_test.info.yml',
        'basename' => 'css_disable_transitions_test.info.yml',
        'name' => 'Test disable CSS animations',
        'info' => 
        array (
          'name' => 'Test disable CSS animations',
          'type' => 'module',
          'description' => 'Disables CSS animations for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'trusted_hosts_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/trusted_hosts_test/trusted_hosts_test.info.yml',
        'basename' => 'trusted_hosts_test.info.yml',
        'name' => 'Trusted hosts test module',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Trusted hosts test module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_semver_update_n' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_semver_update_n/update_test_semver_update_n.info.yml',
        'basename' => 'update_test_semver_update_n.info.yml',
        'name' => 'Update test hook_update_n semver',
        'info' => 
        array (
          'name' => 'Update test hook_update_n semver',
          'type' => 'module',
          'description' => 'Support module for update testing with core semver value.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_description' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_description/update_test_description.info.yml',
        'basename' => 'update_test_description.info.yml',
        'name' => 'Update test description',
        'info' => 
        array (
          'name' => 'Update test description',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'driver_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/driver_test/driver_test.info.yml',
        'basename' => 'driver_test.info.yml',
        'name' => 'Contrib database driver test',
        'info' => 
        array (
          'name' => 'Contrib database driver test',
          'type' => 'module',
          'description' => 'Support database contrib driver testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:mysql',
            1 => 'drupal:pgsql',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'http_kernel_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/http_kernel_test/http_kernel_test.info.yml',
        'basename' => 'http_kernel_test.info.yml',
        'name' => 'HttpKernel test',
        'info' => 
        array (
          'name' => 'HttpKernel test',
          'type' => 'module',
          'description' => 'Support module for HttpKernel tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'element_info_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/element_info_test/element_info_test.info.yml',
        'basename' => 'element_info_test.info.yml',
        'name' => 'Element info test',
        'info' => 
        array (
          'name' => 'Element info test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'tabledrag_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/tabledrag_test/tabledrag_test.info.yml',
        'basename' => 'tabledrag_test.info.yml',
        'name' => 'TableDrag test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'TableDrag test',
          'description' => 'Draggable table test module.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'router_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/router_test_directory/router_test.info.yml',
        'basename' => 'router_test.info.yml',
        'name' => 'Router test',
        'info' => 
        array (
          'name' => 'Router test',
          'type' => 'module',
          'description' => 'Support module for routing testing. In a directory that does not match the module name to test that use case.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_no_preexisting' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_no_preexisting/update_test_no_preexisting.info.yml',
        'basename' => 'update_test_no_preexisting.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/test_batch_test/test_batch_test.info.yml',
        'basename' => 'test_batch_test.info.yml',
        'name' => 'Test install batch test',
        'info' => 
        array (
          'name' => 'Test install batch test',
          'type' => 'module',
          'description' => 'Support module for functional tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'binary_file_response_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/binary_file_response_test/binary_file_response_test.info.yml',
        'basename' => 'binary_file_response_test.info.yml',
        'name' => 'Binary File Response test',
        'info' => 
        array (
          'name' => 'Binary File Response test',
          'type' => 'module',
          'description' => 'Support module for Batch Binary File Response tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'js_once_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/js_once_test/js_once_test.info.yml',
        'basename' => 'js_once_test.info.yml',
        'name' => 'JS once Test',
        'info' => 
        array (
          'name' => 'JS once Test',
          'type' => 'module',
          'description' => 'Module for the jsOnceTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'pgsql_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/pgsql_test/pgsql_test.info.yml',
        'basename' => 'pgsql_test.info.yml',
        'name' => 'PostgreSQL Tests',
        'info' => 
        array (
          'name' => 'PostgreSQL Tests',
          'type' => 'module',
          'description' => 'Supports testing pgsql driver.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'router_installer_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/router_installer_test/router_installer_test.info.yml',
        'basename' => 'router_installer_test.info.yml',
        'name' => 'Router installer test',
        'info' => 
        array (
          'name' => 'Router installer test',
          'type' => 'module',
          'description' => 'Support module for routing testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.info.yml',
        'basename' => 'drupal_system_listing_compatible_test.info.yml',
        'name' => 'Drupal system listing compatible test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'type' => 'module',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_schema_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_schema_test/entity_schema_test.info.yml',
        'basename' => 'entity_schema_test.info.yml',
        'name' => 'Entity schema test module',
        'info' => 
        array (
          'name' => 'Entity schema test module',
          'type' => 'module',
          'description' => 'Provides entity and field definitions to test entity schema.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'module_info_type_comment' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/module_info_type_comment/module_info_type_comment.info.yml',
        'basename' => 'module_info_type_comment.info.yml',
        'name' => 'Module info type comment test',
        'info' => 
        array (
          'name' => 'Module info type comment test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'jqueryui_library_assets_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/jqueryui_library_assets_test/jqueryui_library_assets_test.info.yml',
        'basename' => 'jqueryui_library_assets_test.info.yml',
        'name' => 'jQuery UI library assets test',
        'info' => 
        array (
          'name' => 'jQuery UI library assets test',
          'type' => 'module',
          'description' => 'Tests jQuery UI library asset loading',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'downgrade_prevention_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/downgrade_prevention_test/downgrade_prevention_test.info.yml',
        'basename' => 'downgrade_prevention_test.info.yml',
        'name' => '10.4 downgrade prevention test',
        'info' => 
        array (
          'name' => '10.4 downgrade prevention test',
          'type' => 'module',
          'description' => 'Support module for testing that an update hook prevents a downgrade.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => '11102',
        'version' => '11.1.9',
      ),
      'new_dependency_test_with_service' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/new_dependency_test_with_service/new_dependency_test_with_service.info.yml',
        'basename' => 'new_dependency_test_with_service.info.yml',
        'name' => 'New Dependency test with service',
        'info' => 
        array (
          'name' => 'New Dependency test with service',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dependency_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/dependency_version_test/dependency_version_test.info.yml',
        'basename' => 'dependency_version_test.info.yml',
        'name' => 'Dependency version test',
        'info' => 
        array (
          'name' => 'Dependency version test',
          'type' => 'module',
          'description' => 'Support module for version comparison checks.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'decoupled_menus_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/decoupled_menus_test/decoupled_menus_test.info.yml',
        'basename' => 'decoupled_menus_test.info.yml',
        'name' => 'Decoupled menus test module',
        'info' => 
        array (
          'name' => 'Decoupled menus test module',
          'type' => 'module',
          'description' => 'Support module for decoupled_menus endpoint.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:rest',
            1 => 'drupal:user',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/url_alter_test/url_alter_test.info.yml',
        'basename' => 'url_alter_test.info.yml',
        'name' => 'Url_alter tests',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'type' => 'module',
          'description' => 'A support module to test altering the inbound and outbound path.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'module_autoload_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/module_autoload_test/module_autoload_test.info.yml',
        'basename' => 'module_autoload_test.info.yml',
        'name' => 'Module autoload test',
        'info' => 
        array (
          'name' => 'Module autoload test',
          'type' => 'module',
          'description' => 'Support module for module system tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'name_collision_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/name_collision_test/name_collision_test.info.yml',
        'basename' => 'name_collision_test.info.yml',
        'name' => 'Theme Same Name as Module',
        'info' => 
        array (
          'name' => 'Theme Same Name as Module',
          'type' => 'theme',
          'description' => 'Test theme with the same name as a module.',
          'base theme' => false,
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecated_module_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecated_module_dependency/deprecated_module_dependency.info.yml',
        'basename' => 'deprecated_module_dependency.info.yml',
        'name' => 'Deprecated module dependency',
        'info' => 
        array (
          'name' => 'Deprecated module dependency',
          'type' => 'module',
          'description' => 'Module that depends on a deprecated module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:deprecated_module',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/system_test/system_test.info.yml',
        'basename' => 'system_test.info.yml',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'configure' => 'system_test.configure',
          'configure_parameters' => 
          array (
            'foo' => 'bar',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_test_extra' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_test_extra/entity_test_extra.info.yml',
        'basename' => 'entity_test_extra.info.yml',
        'name' => 'Entity test extra',
        'info' => 
        array (
          'name' => 'Entity test extra',
          'type' => 'module',
          'description' => 'Provides extra fields for entity test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_test_replacements_invalid' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/sdc_test_replacements_invalid/sdc_test_replacements_invalid.info.yml',
        'basename' => 'sdc_test_replacements_invalid.info.yml',
        'name' => 'Components Test Replacements (invalid)',
        'info' => 
        array (
          'name' => 'Components Test Replacements (invalid)',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'image_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/image_test/image_test.info.yml',
        'basename' => 'image_test.info.yml',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'hook_collector_on_behalf' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/hook_collector_on_behalf/hook_collector_on_behalf.info.yml',
        'basename' => 'hook_collector_on_behalf.info.yml',
        'name' => 'Test Hooks on behalf of other modules',
        'info' => 
        array (
          'name' => 'Test Hooks on behalf of other modules',
          'type' => 'module',
          'description' => 'Test hooks invoked on behalf of other modules when installed later.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_postupdate' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_postupdate/update_test_postupdate.info.yml',
        'basename' => 'update_test_postupdate.info.yml',
        'name' => 'Update test after',
        'info' => 
        array (
          'name' => 'Update test after',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'update_test_invalid_hook' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/update_test_invalid_hook/update_test_invalid_hook.info.yml',
        'basename' => 'update_test_invalid_hook.info.yml',
        'name' => 'Update test with an invalid hook_update_8000().',
        'info' => 
        array (
          'name' => 'Update test with an invalid hook_update_8000().',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/entity_crud_hook_test/entity_crud_hook_test.info.yml',
        'basename' => 'entity_crud_hook_test.info.yml',
        'name' => 'Entity CRUD Hooks Test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'type' => 'module',
          'description' => 'Support module for CRUD hook tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'performance_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/performance_test/performance_test.info.yml',
        'basename' => 'performance_test.info.yml',
        'name' => 'Performance test',
        'info' => 
        array (
          'name' => 'Performance test',
          'type' => 'module',
          'description' => 'Supports performance testing with PerformanceTestTrait',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'accept_header_routing_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/accept_header_routing_test/accept_header_routing_test.info.yml',
        'basename' => 'accept_header_routing_test.info.yml',
        'name' => 'Accept header based routing test',
        'info' => 
        array (
          'name' => 'Accept header based routing test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'generic_module1_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/generic_module1_test/generic_module1_test.info.yml',
        'basename' => 'generic_module1_test.info.yml',
        'name' => 'Generic Module1 test',
        'info' => 
        array (
          'name' => 'Generic Module1 test',
          'type' => 'module',
          'description' => 'A testing module with no special functionality. It just exists. Can we say anymore about ourselves? 🤯',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_other_node_visitor' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/sdc_other_node_visitor/sdc_other_node_visitor.info.yml',
        'basename' => 'sdc_other_node_visitor.info.yml',
        'name' => 'Add another node visitor',
        'info' => 
        array (
          'name' => 'Add another node visitor',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecated_module_contrib' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/deprecated_module_contrib/deprecated_module_contrib.info.yml',
        'basename' => 'deprecated_module_contrib.info.yml',
        'name' => 'Deprecated module contrib',
        'info' => 
        array (
          'name' => 'Deprecated module contrib',
          'type' => 'module',
          'description' => 'Deprecated module contrib',
          'package' => 'Testing',
          'version' => 'VERSION',
          'lifecycle' => 'deprecated',
          'lifecycle_link' => 'http://example.com/deprecated',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'logger_aware_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/modules/logger_aware_test/logger_aware_test.info.yml',
        'basename' => 'logger_aware_test.info.yml',
        'name' => 'Logger Aware Autoconfigure Test',
        'info' => 
        array (
          'name' => 'Logger Aware Autoconfigure Test',
          'type' => 'module',
          'description' => 'Test logger aware auto-configuration support',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_updates' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_updates/test_theme_updates.info.yml',
        'basename' => 'test_theme_updates.info.yml',
        'name' => 'Test Theme Updates',
        'info' => 
        array (
          'name' => 'Test Theme Updates',
          'type' => 'theme',
          'description' => 'A theme that has a post update.',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_nyan_cat_engine' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_nyan_cat_engine/test_theme_nyan_cat_engine.info.yml',
        'basename' => 'test_theme_nyan_cat_engine.info.yml',
        'name' => 'Test theme for Nyan Cat engine',
        'info' => 
        array (
          'name' => 'Test theme for Nyan Cat engine',
          'type' => 'theme',
          'description' => 'Theme for testing the theme system with the Nyan Cat theme engine',
          'version' => 'VERSION',
          'engine' => 'nyan_cat',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_twig_registry_loader_subtheme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_twig_registry_loader_subtheme/test_theme_twig_registry_loader_subtheme.info.yml',
        'basename' => 'test_theme_twig_registry_loader_subtheme.info.yml',
        'name' => 'Twig registry loader test subtheme',
        'info' => 
        array (
          'name' => 'Twig registry loader test subtheme',
          'type' => 'theme',
          'base theme' => 'test_theme_twig_registry_loader_theme',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'obsolete_theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/obsolete_theme_test/obsolete_theme_test.info.yml',
        'basename' => 'obsolete_theme_test.info.yml',
        'name' => 'Obsolete theme test',
        'info' => 
        array (
          'name' => 'Obsolete theme test',
          'type' => 'theme',
          'description' => 'Obsolete test theme.',
          'version' => 'VERSION',
          'lifecycle' => 'obsolete',
          'lifecycle_link' => 'https://example.com/obsolete',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_twig_registry_loader_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_twig_registry_loader_theme/test_theme_twig_registry_loader_theme.info.yml',
        'basename' => 'test_theme_twig_registry_loader_theme.info.yml',
        'name' => 'Twig registry loader test theme',
        'info' => 
        array (
          'name' => 'Twig registry loader test theme',
          'type' => 'theme',
          'base theme' => 'test_theme_twig_registry_loader',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_twig_registry_loader' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_twig_registry_loader/test_theme_twig_registry_loader.info.yml',
        'basename' => 'test_theme_twig_registry_loader.info.yml',
        'name' => 'Twig registry loader test',
        'info' => 
        array (
          'name' => 'Twig registry loader test',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_child_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_child_theme/test_child_theme.info.yml',
        'basename' => 'test_child_theme.info.yml',
        'name' => 'Theme test child theme',
        'info' => 
        array (
          'name' => 'Theme test child theme',
          'type' => 'theme',
          'version' => 'VERSION',
          'base theme' => 'test_parent_theme',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_invalid_base_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_invalid_base_theme/test_invalid_base_theme.info.yml',
        'basename' => 'test_invalid_base_theme.info.yml',
        'name' => 'Theme test with invalid base theme',
        'info' => 
        array (
          'name' => 'Theme test with invalid base theme',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent base theme.',
          'version' => 'VERSION',
          'base theme' => 'not_real_test_base_theme',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_theme_test_base' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/sdc_theme_test_base/sdc_theme_test_base.info.yml',
        'basename' => 'sdc_theme_test_base.info.yml',
        'name' => 'SDC test theme',
        'info' => 
        array (
          'name' => 'SDC test theme',
          'type' => 'theme',
          'description' => 'Test theme for sdc.',
          'version' => 'VERSION',
          'base theme' => 'starterkit_theme',
          'enforce_prop_schemas' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_theme_test_enforce_schema' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/sdc_theme_test_enforce_schema/sdc_theme_test_enforce_schema.info.yml',
        'basename' => 'sdc_theme_test_enforce_schema.info.yml',
        'name' => 'SDC test theme',
        'info' => 
        array (
          'name' => 'SDC test theme',
          'type' => 'theme',
          'description' => 'Test theme for sdc that enforces schema definitions.',
          'version' => 'VERSION',
          'base theme' => 'sdc_theme_test',
          'enforce_prop_schemas' => true,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'nyan_cat' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/engines/nyan_cat/nyan_cat.info.yml',
        'basename' => 'nyan_cat.info.yml',
        'name' => 'Nyan cat',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Nyan cat',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_mixed_module_dependencies' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_mixed_module_dependencies/test_theme_mixed_module_dependencies.info.yml',
        'basename' => 'test_theme_mixed_module_dependencies.info.yml',
        'name' => 'Test Theme with a Module Dependency and Base Theme with a Different Module Dependency',
        'info' => 
        array (
          'name' => 'Test Theme with a Module Dependency and Base Theme with a Different Module Dependency',
          'type' => 'theme',
          'base theme' => 'test_theme_depending_on_modules',
          'dependencies' => 
          array (
            0 => 'help',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_libraries_empty' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_libraries_empty/test_theme_libraries_empty.info.yml',
        'basename' => 'test_theme_libraries_empty.info.yml',
        'name' => 'Test theme libraries empty',
        'info' => 
        array (
          'name' => 'Test theme libraries empty',
          'type' => 'theme',
          'description' => 'Test theme with empty libraries in theme.info.yml',
          'version' => 'VERSION',
          'base theme' => 'starterkit_theme',
          'libraries' => NULL,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_subsubtheme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_subsubtheme/test_subsubtheme.info.yml',
        'basename' => 'test_subsubtheme.info.yml',
        'name' => 'Theme test subsubtheme',
        'info' => 
        array (
          'name' => 'Theme test subsubtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_subtheme as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'test_subtheme',
          'libraries-override' => 
          array (
            'test_base_theme/global-styling' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'css/sub-sub-last-override.css' => false,
                ),
              ),
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_libraries_override_with_drupal_settings' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_libraries_override_with_drupal_settings/test_theme_libraries_override_with_drupal_settings.info.yml',
        'basename' => 'test_theme_libraries_override_with_drupal_settings.info.yml',
        'name' => 'Test theme libraries-override',
        'info' => 
        array (
          'name' => 'Test theme libraries-override',
          'type' => 'theme',
          'description' => 'Theme with drupalSettings libraries-override',
          'version' => 'VERSION',
          'base theme' => 'starterkit_theme',
          'libraries-override' => 
          array (
            'core/drupal.ajax' => 
            array (
              'drupalSettings' => 
              array (
                'ajaxPageState' => 
                array (
                ),
              ),
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_libraries_extend' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_libraries_extend/test_theme_libraries_extend.info.yml',
        'basename' => 'test_theme_libraries_extend.info.yml',
        'name' => 'Test theme libraries-extend',
        'info' => 
        array (
          'name' => 'Test theme libraries-extend',
          'type' => 'theme',
          'description' => 'Test Theme with libraries-extend',
          'version' => 'VERSION',
          'base theme' => 'starterkit_theme',
          'libraries-extend' => 
          array (
            'starterkit_theme/test-navigation' => 
            array (
              0 => 'test_theme_libraries_extend/extend_one',
              1 => 'test_theme_libraries_extend/extend_two',
            ),
            'core/drupal.dialog' => 
            array (
              0 => 'test_theme_libraries_extend/non_existent_library',
            ),
            'test_theme/collapse' => 
            array (
              0 => 
              array (
                'not_a_string' => 
                array (
                  'expected' => 'an exception',
                ),
              ),
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_ckeditor_stylesheets_without_5' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_ckeditor_stylesheets_without_5/test_ckeditor_stylesheets_without_5.info.yml',
        'basename' => 'test_ckeditor_stylesheets_without_5.info.yml',
        'name' => 'No setting for CKEditor 5 stylesheets',
        'info' => 
        array (
          'name' => 'No setting for CKEditor 5 stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses ckeditor_stylesheets without ckeditor5-stylesheets.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor_stylesheets' => 
          array (
            0 => '/core/modules/system/tests/themes/test_ckeditor_stylesheets_without_5/css/yokotsoko.css',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_wild_west' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_wild_west/test_wild_west.info.yml',
        'basename' => 'test_wild_west.info.yml',
        'name' => 'Test Wild West',
        'info' => 
        array (
          'name' => 'Test Wild West',
          'type' => 'theme',
          'description' => 'A theme that doesn\'t use Stable 9 as its base. It tests the wild west instead.',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme/test_theme.info.yml',
        'basename' => 'test_theme.info.yml',
        'name' => '<strong>Test theme</strong>',
        'info' => 
        array (
          'name' => '<strong>Test theme</strong>',
          'type' => 'theme',
          'description' => 'Theme for testing the theme system',
          'version' => 'VERSION',
          'base theme' => 'starterkit_theme',
          'logo' => 'images/logo2.svg',
          'libraries' => 
          array (
            0 => 'test_theme/global-styling',
          ),
          'libraries-override' => 
          array (
            'core/drupal.collapse' => 'test_theme/collapse',
            'core/drupal.progress' => false,
            'starterkit_theme/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/button.css' => 'css/my-button.css',
                  'css/components/container-inline.css' => '/themes/my_theme/css/my-container-inline.css',
                  'css/components/details.css' => '/themes/my_theme/css/my-details.css',
                ),
              ),
            ),
            'starterkit_theme/dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/dialog.css' => false,
                ),
              ),
            ),
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable9/css/system/components/js.module.css' => false,
                ),
              ),
            ),
            'core/drupal.batch' => 
            array (
              'js' => 
              array (
                'misc/batch.js' => 'js/collapse.js',
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable9/css/core/dropbutton/dropbutton.css' => '/themes/my_theme/css/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable9/css/core/vertical-tabs.css' => 'public://my_css/vertical-tabs.css',
                ),
              ),
            ),
            'core/drupal.displace' => 
            array (
              'js' => 
              array (
                'misc/displace.js' => '//my-server/my_theme/js/overridden.js',
              ),
            ),
            'core/drupal.announce' => 
            array (
              'js' => 
              array (
                'misc/announce.js' => 'http://example.com/my_theme/js/announce.js',
              ),
            ),
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'left' => 'Left',
            'right' => 'Right',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_settings' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_settings/test_theme_settings.info.yml',
        'basename' => 'test_theme_settings.info.yml',
        'name' => 'Theme test theme-settings.php',
        'info' => 
        array (
          'name' => 'Theme test theme-settings.php',
          'type' => 'theme',
          'description' => 'Test theme that extends theme settings options via theme-settings.php file',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/sdc_theme_test/sdc_theme_test.info.yml',
        'basename' => 'sdc_theme_test.info.yml',
        'name' => 'SDC test theme',
        'info' => 
        array (
          'name' => 'SDC test theme',
          'type' => 'theme',
          'description' => 'Test theme for sdc.',
          'version' => 'VERSION',
          'base theme' => 'sdc_theme_test_base',
          'enforce_prop_schemas' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'experimental_theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/experimental_theme_test/experimental_theme_test.info.yml',
        'basename' => 'experimental_theme_test.info.yml',
        'name' => 'Experimental test',
        'info' => 
        array (
          'name' => 'Experimental test',
          'type' => 'theme',
          'description' => 'Experimental test theme.',
          'version' => 'VERSION',
          'base theme' => false,
          'lifecycle' => 'experimental',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_subtheme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_subtheme/test_subtheme.info.yml',
        'basename' => 'test_subtheme.info.yml',
        'name' => 'Theme test subtheme',
        'info' => 
        array (
          'name' => 'Theme test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_base_theme as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'test_base_theme',
          'libraries' => 
          array (
            0 => 'test_subtheme/global-styling',
          ),
          'libraries-override' => 
          array (
            'theme_test/theme_stylesheets_override_and_remove_test' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'css/sub-remove.css' => false,
                ),
              ),
            ),
            'test_base_theme/global-styling' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'base-add.sub-remove.css' => false,
                ),
              ),
            ),
          ),
          'libraries-extend' => 
          array (
            'starterkit_theme/base' => 
            array (
              0 => 'test_subtheme/global-styling',
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_libraries_override_with_invalid_asset' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_libraries_override_with_invalid_asset/test_theme_libraries_override_with_invalid_asset.info.yml',
        'basename' => 'test_theme_libraries_override_with_invalid_asset.info.yml',
        'name' => 'Test theme libraries-override',
        'info' => 
        array (
          'name' => 'Test theme libraries-override',
          'type' => 'theme',
          'description' => 'Theme with invalid libraries-override asset spec.',
          'version' => 'VERSION',
          'base theme' => 'starterkit_theme',
          'libraries-override' => 
          array (
            'core/drupal.dialog' => 
            array (
              'css' => false,
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_module_required_by_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_depending_on_modules/test_module_required_by_theme/test_module_required_by_theme.info.yml',
        'basename' => 'test_module_required_by_theme.info.yml',
        'name' => 'Test Module Required by Theme',
        'info' => 
        array (
          'name' => 'Test Module Required by Theme',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_another_module_required_by_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_depending_on_modules/test_another_module_required_by_theme/test_another_module_required_by_theme.info.yml',
        'basename' => 'test_another_module_required_by_theme.info.yml',
        'name' => 'Test Another Module Required by Theme',
        'info' => 
        array (
          'name' => 'Test Another Module Required by Theme',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_depending_on_modules' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_depending_on_modules/test_theme_depending_on_modules.info.yml',
        'basename' => 'test_theme_depending_on_modules.info.yml',
        'name' => 'Test Theme Depending on Modules',
        'info' => 
        array (
          'name' => 'Test Theme Depending on Modules',
          'type' => 'theme',
          'base theme' => 'stark',
          'dependencies' => 
          array (
            0 => 'test_module_required_by_theme',
            1 => 'test_another_module_required_by_theme',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_core_semver' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_core_semver/test_core_semver.info.yml',
        'basename' => 'test_core_semver.info.yml',
        'name' => 'Theme test with semver core version',
        'info' => 
        array (
          'name' => 'Theme test with semver core version',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Test theme which has semver core version.',
          'version' => 'VERSION',
          'core_version_requirement' => '^8 || ^9 || ^10',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_invalid_region' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_invalid_region/test_invalid_region.info.yml',
        'basename' => 'test_invalid_region.info.yml',
        'name' => 'Theme test with missing content region',
        'info' => 
        array (
          'name' => 'Theme test with missing content region',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Test theme which has a non-existent content region.',
          'version' => 'VERSION',
          'regions' => 
          array (
            0 => 
            array (
              'foo' => 'Foo',
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_ckeditor_stylesheets_external' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_ckeditor_stylesheets_external/test_ckeditor_stylesheets_external.info.yml',
        'basename' => 'test_ckeditor_stylesheets_external.info.yml',
        'name' => 'Test external CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test external CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses an external CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor_stylesheets' => 
          array (
            0 => 'https://fonts.googleapis.com/css?family=Open+Sans',
          ),
          'ckeditor5-stylesheets' => 
          array (
            0 => 'https://fonts.googleapis.com/css?family=Open+Sans',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_invalid_engine' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_invalid_engine/test_invalid_engine.info.yml',
        'basename' => 'test_invalid_engine.info.yml',
        'name' => 'Theme test with invalid theme engine',
        'info' => 
        array (
          'name' => 'Theme test with invalid theme engine',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent theme engine.',
          'version' => 'VERSION',
          'engine' => 'not_real_engine',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_ckeditor_stylesheets_protocol_relative' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_ckeditor_stylesheets_protocol_relative/test_ckeditor_stylesheets_protocol_relative.info.yml',
        'basename' => 'test_ckeditor_stylesheets_protocol_relative.info.yml',
        'name' => 'Test protocol-relative CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test protocol-relative CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses a protocol-relative CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor_stylesheets' => 
          array (
            0 => '//fonts.googleapis.com/css?family=Open+Sans',
          ),
          'ckeditor5-stylesheets' => 
          array (
            0 => '//fonts.googleapis.com/css?family=Open+Sans',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sdc_theme_test_enforce_schema_invalid' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/sdc_theme_test_enforce_schema_invalid/sdc_theme_test_enforce_schema_invalid.info.yml',
        'basename' => 'sdc_theme_test_enforce_schema_invalid.info.yml',
        'name' => 'SDC test theme',
        'info' => 
        array (
          'name' => 'SDC test theme',
          'type' => 'theme',
          'description' => 'Test theme for sdc that enforces schema and provides a schema-less component.',
          'version' => 'VERSION',
          'base theme' => 'sdc_theme_test',
          'enforce_prop_schemas' => true,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_having_veery_long_name_which_is_too_long' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_having_veery_long_name_which_is_too_long/test_theme_having_veery_long_name_which_is_too_long.info.yml',
        'basename' => 'test_theme_having_veery_long_name_which_is_too_long.info.yml',
        'name' => 'Test theme with a too long name',
        'info' => 
        array (
          'type' => 'theme',
          'base theme' => 'stable9',
          'name' => 'Test theme with a too long name',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'experimental_theme_dependency_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/experimental_theme_dependency_test/experimental_theme_dependency_test.info.yml',
        'basename' => 'experimental_theme_dependency_test.info.yml',
        'name' => 'Experimental dependency test',
        'info' => 
        array (
          'name' => 'Experimental dependency test',
          'type' => 'theme',
          'description' => 'Experimental dependency test theme.',
          'version' => 'VERSION',
          'base theme' => 'experimental_theme_test',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_invalid_base_theme_sub' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_invalid_base_theme_sub/test_invalid_base_theme_sub.info.yml',
        'basename' => 'test_invalid_base_theme_sub.info.yml',
        'name' => 'Theme test with valid base theme but no grandparent base theme',
        'info' => 
        array (
          'name' => 'Theme test with valid base theme but no grandparent base theme',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent base theme in the base chain.',
          'version' => 'VERSION',
          'base theme' => 'test_invalid_base_theme',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'deprecated_theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/deprecated_theme_test/deprecated_theme_test.info.yml',
        'basename' => 'deprecated_theme_test.info.yml',
        'name' => 'Deprecated theme test',
        'info' => 
        array (
          'name' => 'Deprecated theme test',
          'type' => 'theme',
          'description' => 'Deprecated test theme.',
          'version' => 'VERSION',
          'lifecycle' => 'deprecated',
          'lifecycle_link' => 'https://example.com/deprecated',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_ckeditor_stylesheets_relative' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_ckeditor_stylesheets_relative/test_ckeditor_stylesheets_relative.info.yml',
        'basename' => 'test_ckeditor_stylesheets_relative.info.yml',
        'name' => 'Test relative CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test relative CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses a relative CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/yokotsoko.css',
          ),
          'ckeditor5-stylesheets' => 
          array (
            0 => 'css/yokotsoko.css',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_parent_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_parent_theme/test_parent_theme.info.yml',
        'basename' => 'test_parent_theme.info.yml',
        'name' => 'Theme test parent theme',
        'info' => 
        array (
          'name' => 'Theme test parent theme',
          'type' => 'theme',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_deprecated_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_deprecated_theme/test_deprecated_theme.info.yml',
        'basename' => 'test_deprecated_theme.info.yml',
        'name' => 'Test deprecated theme',
        'info' => 
        array (
          'name' => 'Test deprecated theme',
          'type' => 'theme',
          'description' => 'Support module for testing deprecated themes.',
          'version' => 'VERSION',
          'base theme' => false,
          'lifecycle' => 'deprecated',
          'lifecycle_link' => 'http://example.com/deprecated_theme',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_module_incompatible_constraint' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_depending_on_constrained_modules/test_module_incompatible_constraint/test_module_incompatible_constraint.info.yml',
        'basename' => 'test_module_incompatible_constraint.info.yml',
        'name' => 'Test Module Theme Depends on with Incompatible Constraint',
        'info' => 
        array (
          'name' => 'Test Module Theme Depends on with Incompatible Constraint',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.x-1.8',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_module_compatible_constraint' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_depending_on_constrained_modules/test_module_compatible_constraint/test_module_compatible_constraint.info.yml',
        'basename' => 'test_module_compatible_constraint.info.yml',
        'name' => 'Test Module Theme Depends on with Compatible Constraint',
        'info' => 
        array (
          'name' => 'Test Module Theme Depends on with Compatible Constraint',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.x-1.2',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_depending_on_constrained_modules' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_depending_on_constrained_modules/test_theme_depending_on_constrained_modules.info.yml',
        'basename' => 'test_theme_depending_on_constrained_modules.info.yml',
        'name' => 'Test Theme Depending on Version Constrained Modules',
        'info' => 
        array (
          'name' => 'Test Theme Depending on Version Constrained Modules',
          'type' => 'theme',
          'base theme' => 'stark',
          'dependencies' => 
          array (
            0 => 'test_module_compatible_constraint (>=8.x-1.x)',
            1 => 'test_module_incompatible_constraint (>=8.x-2.x)',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_ckeditor_stylesheets_drupal_root' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_ckeditor_stylesheets_drupal_root/test_ckeditor_stylesheets_drupal_root.info.yml',
        'basename' => 'test_ckeditor_stylesheets_drupal_root.info.yml',
        'name' => 'Test Drupal root CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test Drupal root CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses a Drupal root CKEditor stylesheet.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor5-stylesheets' => 
          array (
            0 => '/core/modules/system/tests/themes/test_ckeditor_stylesheets_drupal_root/css/yokotsoko.css',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_subtheming_ckeditor_stylesheets_without_5' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_subtheming_ckeditor_stylesheets_without_5/test_subtheming_ckeditor_stylesheets_without_5.info.yml',
        'basename' => 'test_subtheming_ckeditor_stylesheets_without_5.info.yml',
        'name' => 'No setting for CKEditor 5 stylesheets here or subtheme',
        'info' => 
        array (
          'name' => 'No setting for CKEditor 5 stylesheets here or subtheme',
          'type' => 'theme',
          'description' => 'A theme that uses ckeditor_stylesheets without ckeditor5-stylesheets, nor does its base theme.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'base theme' => 'test_ckeditor_stylesheets_without_5',
          'ckeditor_stylesheets' => 
          array (
            0 => '/core/modules/system/tests/themes/test_ckeditor_stylesheets_without_5/css/another.css',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_invalid_core_semver' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_invalid_core_semver/test_invalid_core_semver.info.yml',
        'basename' => 'test_invalid_core_semver.info.yml',
        'name' => 'Theme test with invalid semver core version',
        'info' => 
        array (
          'name' => 'Theme test with invalid semver core version',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Test theme which has an invalid semver core version.',
          'version' => 'VERSION',
          'core_version_requirement' => '^7',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_with_deprecated_libraries' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_with_deprecated_libraries/test_theme_with_deprecated_libraries.info.yml',
        'basename' => 'test_theme_with_deprecated_libraries.info.yml',
        'name' => 'Test theme with deprecated libraries',
        'info' => 
        array (
          'name' => 'Test theme with deprecated libraries',
          'type' => 'theme',
          'description' => 'Test theme to test themes with deprecated libraries.',
          'version' => 'VERSION',
          'package' => 'Testing',
          'base theme' => 'test_theme',
          'libraries-override' => 
          array (
            'theme_test/deprecated_library' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'css/foo.css' => 'css/bar.css',
                ),
              ),
            ),
            'theme_test/moved_from' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'css/foo.css' => 'css/bar.css',
                ),
              ),
              'js' => 
              array (
                'js/bar.js' => false,
              ),
            ),
          ),
          'libraries-extend' => 
          array (
            'theme_test/another_deprecated_library' => 
            array (
              0 => 'test_theme_with_deprecated_libraries/library',
            ),
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_with_a_base_theme_depending_on_modules' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_with_a_base_theme_depending_on_modules/test_theme_with_a_base_theme_depending_on_modules.info.yml',
        'basename' => 'test_theme_with_a_base_theme_depending_on_modules.info.yml',
        'name' => 'Test Theme with a Base Theme Depending on Modules',
        'info' => 
        array (
          'name' => 'Test Theme with a Base Theme Depending on Modules',
          'type' => 'theme',
          'base theme' => 'test_theme_depending_on_modules',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_messages' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_messages/test_messages.info.yml',
        'basename' => 'test_messages.info.yml',
        'name' => 'Theme test messages',
        'info' => 
        array (
          'name' => 'Theme test messages',
          'type' => 'theme',
          'description' => 'Test theme which provides another div for messages.',
          'version' => 'VERSION',
          'base theme' => 'starterkit_theme',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_theme/test_theme_theme.info.yml',
        'basename' => 'test_theme_theme.info.yml',
        'name' => 'Theme test theme.theme file',
        'info' => 
        array (
          'name' => 'Theme test theme.theme file',
          'type' => 'theme',
          'description' => 'Test theme that extends theme settings options via theme.theme file',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_settings_features' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_settings_features/test_theme_settings_features.info.yml',
        'basename' => 'test_theme_settings_features.info.yml',
        'name' => 'Test features',
        'info' => 
        array (
          'name' => 'Test features',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Test theme to test theme settings with limited features.',
          'features' => 
          array (
            0 => 'node_user_picture',
            1 => 'comment_user_picture',
            2 => 'comment_user_verification',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_theme_depending_on_nonexisting_module' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/tests/themes/test_theme_depending_on_nonexisting_module/test_theme_depending_on_nonexisting_module.info.yml',
        'basename' => 'test_theme_depending_on_nonexisting_module.info.yml',
        'name' => 'Test Theme Depending on Nonexisting Module',
        'info' => 
        array (
          'name' => 'Test Theme Depending on Nonexisting Module',
          'type' => 'theme',
          'base theme' => 'stark',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'test_module_non_existing',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/system/system.info.yml',
        'basename' => 'system.info.yml',
        'name' => 'System',
        'info' => 
        array (
          'name' => 'System',
          'type' => 'module',
          'description' => 'Provides user interfaces for core systems.',
          'package' => 'Core',
          'version' => 'VERSION',
          'required' => true,
          'configure' => 'system.admin_config_system',
        ),
        'schema_version' => '11102',
        'version' => '11.1.9',
      ),
      'ckeditor5_drupalelementstyle_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_drupalelementstyle_test/ckeditor5_drupalelementstyle_test.info.yml',
        'basename' => 'ckeditor5_drupalelementstyle_test.info.yml',
        'name' => 'CKEditor 5 Drupal Element Style Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Drupal Element Style Test',
          'type' => 'module',
          'description' => 'Provides ability to run DrupalElementStyle CKEditor 5 plugin in multiple ways.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:ckeditor5',
            1 => 'drupal:media',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_read_only_mode' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_read_only_mode/ckeditor5_read_only_mode.info.yml',
        'basename' => 'ckeditor5_read_only_mode.info.yml',
        'name' => 'CKEditor 5 read-only mode test',
        'info' => 
        array (
          'name' => 'CKEditor 5 read-only mode test',
          'type' => 'module',
          'description' => 'Provides code for testing disabled CKEditor 5 editors.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_incompatible_filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_incompatible_filter_test/ckeditor5_incompatible_filter_test.info.yml',
        'basename' => 'ckeditor5_incompatible_filter_test.info.yml',
        'name' => 'CKEditor 5 Incompatible Filter Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Incompatible Filter Test',
          'type' => 'module',
          'description' => 'Provides a filter incompatible with CKEditor 5',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor_test/ckeditor_test.info.yml',
        'basename' => 'ckeditor_test.info.yml',
        'name' => 'CKEditor Test',
        'info' => 
        array (
          'name' => 'CKEditor Test',
          'type' => 'module',
          'description' => 'Provides test a test editor that with the ID ckeditor.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:editor_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_test_module_allowed_image' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_test_module_allowed_image/ckeditor5_test_module_allowed_image.info.yml',
        'basename' => 'ckeditor5_test_module_allowed_image.info.yml',
        'name' => 'CKEditor 5 Module Allowed Image',
        'info' => 
        array (
          'name' => 'CKEditor 5 Module Allowed Image',
          'type' => 'module',
          'description' => 'Alters the allowed image types.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_plugin_elements_subset' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_plugin_elements_subset/ckeditor5_plugin_elements_subset.info.yml',
        'basename' => 'ckeditor5_plugin_elements_subset.info.yml',
        'name' => 'CKEditor 5 Plugin Elements Subset Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Plugin Elements Subset Test',
          'type' => 'module',
          'description' => 'Provides test plugin to test CKEditor5PluginElementsSubsetInterface',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_automatic_link_decorator_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_automatic_link_decorator_test_2/ckeditor5_automatic_link_decorator_test_2.info.yml',
        'basename' => 'ckeditor5_automatic_link_decorator_test_2.info.yml',
        'name' => 'CKEditor 5 Automatic Link Decorator Test (External links)',
        'info' => 
        array (
          'name' => 'CKEditor 5 Automatic Link Decorator Test (External links)',
          'type' => 'module',
          'description' => 'Provides infrastructure for testing CKEditor 5 external links automatic link decorator.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_manual_decorator_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_manual_decorator_test/ckeditor5_manual_decorator_test.info.yml',
        'basename' => 'ckeditor5_manual_decorator_test.info.yml',
        'name' => 'CKEditor 5 Manual Decorator Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Manual Decorator Test',
          'type' => 'module',
          'description' => 'Provides configuration for CKEditor 5 link plugin manual decorator.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_definition_supporting_element' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_definition_supporting_element/ckeditor5_definition_supporting_element.info.yml',
        'basename' => 'ckeditor5_definition_supporting_element.info.yml',
        'name' => 'CKEditor 5 Definition Supporting Tags Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Definition Supporting Tags Test',
          'type' => 'module',
          'description' => 'Provides test plugins for CKEditor 5 to test finding plugin definitions that support specific tags.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_plugin_conditions_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_plugin_conditions_test/ckeditor5_plugin_conditions_test.info.yml',
        'basename' => 'ckeditor5_plugin_conditions_test.info.yml',
        'name' => 'CKEditor 5 Plugin Conditions Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Plugin Conditions Test',
          'type' => 'module',
          'description' => 'Provides test plugins for CKEditor 5 to test plugin conditions.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_plugin_elements_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_plugin_elements_test/ckeditor5_plugin_elements_test.info.yml',
        'basename' => 'ckeditor5_plugin_elements_test.info.yml',
        'name' => 'CKEditor 5 Plugin Elements Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Plugin Elements Test',
          'type' => 'module',
          'description' => 'Provides test plugins for CKEditor 5 to test allowed elements parsing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_test/ckeditor5_test.info.yml',
        'basename' => 'ckeditor5_test.info.yml',
        'name' => 'CKEditor 5 Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Test',
          'type' => 'module',
          'description' => 'Provides test layout and component plugins for CKEditor 5.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
            1 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5_automatic_link_decorator_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/tests/modules/ckeditor5_automatic_link_decorator_test/ckeditor5_automatic_link_decorator_test.info.yml',
        'basename' => 'ckeditor5_automatic_link_decorator_test.info.yml',
        'name' => 'CKEditor 5 Automatic Link Decorator Test',
        'info' => 
        array (
          'name' => 'CKEditor 5 Automatic Link Decorator Test',
          'type' => 'module',
          'description' => 'Provides infrastructure for testing CKEditor 5 automatic link decorators.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ckeditor5:ckeditor5',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'ckeditor5' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/ckeditor5/ckeditor5.info.yml',
        'basename' => 'ckeditor5.info.yml',
        'name' => 'CKEditor 5',
        'info' => 
        array (
          'name' => 'CKEditor 5',
          'type' => 'module',
          'description' => 'Provides the CKEditor 5 rich text editor.',
          'version' => 'VERSION',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_access_test/user_access_test.info.yml',
        'basename' => 'user_access_test.info.yml',
        'name' => 'User access tests',
        'info' => 
        array (
          'name' => 'User access tests',
          'type' => 'module',
          'description' => 'Support module for user access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_permissions_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_permissions_test/user_permissions_test.info.yml',
        'basename' => 'user_permissions_test.info.yml',
        'name' => 'User permission tests',
        'info' => 
        array (
          'name' => 'User permission tests',
          'type' => 'module',
          'description' => 'Support module for user permission testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_config_override_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_config_override_test/user_config_override_test.info.yml',
        'basename' => 'user_config_override_test.info.yml',
        'name' => 'Permission config overrider',
        'info' => 
        array (
          'name' => 'Permission config overrider',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_auth_decorator_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_auth_decorator_test/user_auth_decorator_test.info.yml',
        'basename' => 'user_auth_decorator_test.info.yml',
        'name' => 'User Auth Service decorated only with UserAuthInterface',
        'info' => 
        array (
          'name' => 'User Auth Service decorated only with UserAuthInterface',
          'type' => 'module',
          'description' => 'Support module for user authentication testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_form_test/user_form_test.info.yml',
        'basename' => 'user_form_test.info.yml',
        'name' => 'User module form tests',
        'info' => 
        array (
          'name' => 'User module form tests',
          'type' => 'module',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_language_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_language_test/user_language_test.info.yml',
        'basename' => 'user_language_test.info.yml',
        'name' => 'User language tests',
        'info' => 
        array (
          'name' => 'User language tests',
          'type' => 'module',
          'description' => 'Support module for user language testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_custom_pass_hash_params_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_custom_pass_hash_params_test/user_custom_pass_hash_params_test.info.yml',
        'basename' => 'user_custom_pass_hash_params_test.info.yml',
        'name' => 'User custom password hash params test',
        'info' => 
        array (
          'name' => 'User custom password hash params test',
          'type' => 'module',
          'description' => 'Support module for testing custom hashing password algorithm parameters.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_hooks_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_hooks_test/user_hooks_test.info.yml',
        'basename' => 'user_hooks_test.info.yml',
        'name' => 'User module hooks tests',
        'info' => 
        array (
          'name' => 'User module hooks tests',
          'type' => 'module',
          'description' => 'Support module for user hooks testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/modules/user_test_views/user_test_views.info.yml',
        'basename' => 'user_test_views.info.yml',
        'name' => 'User test views',
        'info' => 
        array (
          'name' => 'User test views',
          'type' => 'module',
          'description' => 'Provides default views for views user tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/tests/themes/user_test_theme/user_test_theme.info.yml',
        'basename' => 'user_test_theme.info.yml',
        'name' => 'User Test theme',
        'info' => 
        array (
          'name' => 'User Test theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing the available fields in user twig template',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/user/user.info.yml',
        'basename' => 'user.info.yml',
        'name' => 'User',
        'info' => 
        array (
          'name' => 'User',
          'type' => 'module',
          'description' => 'Allows users to register and log in, and manages user roles and permissions.',
          'package' => 'Core',
          'version' => 'VERSION',
          'required' => true,
          'configure' => 'user.admin_index',
          'dependencies' => 
          array (
            0 => 'drupal:system',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dblog_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/dblog/tests/modules/dblog_test_views/dblog_test_views.info.yml',
        'basename' => 'dblog_test_views.info.yml',
        'name' => 'Dblog test views',
        'info' => 
        array (
          'name' => 'Dblog test views',
          'type' => 'module',
          'description' => 'Provides default views for views dblog tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:dblog',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/dblog/dblog.info.yml',
        'basename' => 'dblog.info.yml',
        'name' => 'Database Logging',
        'info' => 
        array (
          'name' => 'Database Logging',
          'type' => 'module',
          'description' => 'Logs system events in the database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_tag_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_tag_test/migrate_tag_test.info.yml',
        'basename' => 'migrate_tag_test.info.yml',
        'name' => 'Migration Tag Test',
        'info' => 
        array (
          'name' => 'Migration Tag Test',
          'type' => 'module',
          'description' => 'Provide migrations for testing \'migration_tags\' property',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_expected_migrations_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_expected_migrations_test/migrate_expected_migrations_test.info.yml',
        'basename' => 'migrate_expected_migrations_test.info.yml',
        'name' => 'Migration Expected Migrations Test',
        'info' => 
        array (
          'name' => 'Migration Expected Migrations Test',
          'type' => 'module',
          'description' => 'Provides test migrations to test getMigrationDependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_events_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_events_test/migrate_events_test.info.yml',
        'basename' => 'migrate_events_test.info.yml',
        'name' => 'Migrate events test',
        'info' => 
        array (
          'name' => 'Migrate events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_sql_count_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_sql_count_cache_test/migrate_sql_count_cache_test.info.yml',
        'basename' => 'migrate_sql_count_cache_test.info.yml',
        'name' => 'Migrate SqlBase count cache test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migrate SqlBase count cache test',
          'description' => 'Provides a source plugin to test that counts are cached in SQL sources.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_high_water_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_high_water_test/migrate_high_water_test.info.yml',
        'basename' => 'migrate_high_water_test.info.yml',
        'name' => 'Migration High Water Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migration High Water Test',
          'description' => 'Provides test fixtures for testing high water marks.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_missing_database_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_missing_database_test/migrate_missing_database_test.info.yml',
        'basename' => 'migrate_missing_database_test.info.yml',
        'name' => 'Migration missing database test',
        'info' => 
        array (
          'name' => 'Migration missing database test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_entity_test/migrate_entity_test.info.yml',
        'basename' => 'migrate_entity_test.info.yml',
        'name' => 'Migrate entity test',
        'info' => 
        array (
          'name' => 'Migrate entity test',
          'type' => 'module',
          'description' => 'Support module for entity destination test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_cache_counts_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_cache_counts_test/migrate_cache_counts_test.info.yml',
        'basename' => 'migrate_cache_counts_test.info.yml',
        'name' => 'Cacheable Embedded Data Test',
        'info' => 
        array (
          'name' => 'Cacheable Embedded Data Test',
          'type' => 'module',
          'description' => 'Module containing a cacheable embedded data source.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'message_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/message_test/message_test.info.yml',
        'basename' => 'message_test.info.yml',
        'name' => 'Test display of migrate message',
        'info' => 
        array (
          'name' => 'Test display of migrate message',
          'type' => 'module',
          'description' => 'Tests the display of migrate messages.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_lookup_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_lookup_test/migrate_lookup_test.info.yml',
        'basename' => 'migrate_lookup_test.info.yml',
        'name' => 'Migration Lookup Test',
        'info' => 
        array (
          'name' => 'Migration Lookup Test',
          'type' => 'module',
          'description' => 'Provides test migrations to test migration lookup service.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_query_batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_query_batch_test/migrate_query_batch_test.info.yml',
        'basename' => 'migrate_query_batch_test.info.yml',
        'name' => 'Migrate query batch Source test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migrate query batch Source test',
          'description' => 'Provides a database table and records for SQL import with batch testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_no_migrate_drupal_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_no_migrate_drupal_test/migrate_no_migrate_drupal_test.info.yml',
        'basename' => 'migrate_no_migrate_drupal_test.info.yml',
        'name' => 'Migrate No Migrate Drupal Test',
        'info' => 
        array (
          'name' => 'Migrate No Migrate Drupal Test',
          'type' => 'module',
          'description' => 'Provides fixture for testing without migrate_drupal.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_skip_all_rows_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_skip_all_rows_test/migrate_skip_all_rows_test.info.yml',
        'basename' => 'migrate_skip_all_rows_test.info.yml',
        'name' => 'Migrate module prepareRow tests',
        'info' => 
        array (
          'name' => 'Migrate module prepareRow tests',
          'type' => 'module',
          'description' => 'Support module for source plugin prepareRow testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_track_changes_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_track_changes_test/migrate_track_changes_test.info.yml',
        'basename' => 'migrate_track_changes_test.info.yml',
        'name' => 'Migration Track Changes Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migration Track Changes Test',
          'description' => 'Provides test fixtures for testing track changes marks.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_external_translated_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_external_translated_test/migrate_external_translated_test.info.yml',
        'basename' => 'migrate_external_translated_test.info.yml',
        'name' => 'Migration external translated test',
        'info' => 
        array (
          'name' => 'Migration external translated test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_prepare_row_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_prepare_row_test/migrate_prepare_row_test.info.yml',
        'basename' => 'migrate_prepare_row_test.info.yml',
        'name' => 'Migrate module prepareRow tests',
        'info' => 
        array (
          'name' => 'Migrate module prepareRow tests',
          'type' => 'module',
          'description' => 'Support module for source plugin prepareRow testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate_stub_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/tests/modules/migrate_stub_test/migrate_stub_test.info.yml',
        'basename' => 'migrate_stub_test.info.yml',
        'name' => 'Migration Stub Test',
        'info' => 
        array (
          'name' => 'Migration Stub Test',
          'type' => 'module',
          'description' => 'Provides test migrations to test migration  stub service.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'migrate' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/migrate/migrate.info.yml',
        'basename' => 'migrate.info.yml',
        'name' => 'Migrate',
        'info' => 
        array (
          'name' => 'Migrate',
          'type' => 'module',
          'description' => 'Provides a framework for migrating data to Drupal.',
          'package' => 'Migration',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workspace_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workspaces/tests/modules/workspace_access_test/workspace_access_test.info.yml',
        'basename' => 'workspace_access_test.info.yml',
        'name' => 'Workspace Access Test',
        'info' => 
        array (
          'name' => 'Workspace Access Test',
          'type' => 'module',
          'description' => 'Provides supporting code for testing access for workspaces.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workspaces_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workspaces/tests/modules/workspaces_test/workspaces_test.info.yml',
        'basename' => 'workspaces_test.info.yml',
        'name' => 'Workspace Test',
        'info' => 
        array (
          'name' => 'Workspace Test',
          'type' => 'module',
          'description' => 'Provides supporting code for testing workspaces.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workspace_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workspaces/tests/modules/workspace_update_test/workspace_update_test.info.yml',
        'basename' => 'workspace_update_test.info.yml',
        'name' => 'Workspace Update Test',
        'info' => 
        array (
          'name' => 'Workspace Update Test',
          'type' => 'module',
          'description' => 'Provides supporting code for testing workspaces during database updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workspaces' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workspaces/workspaces.info.yml',
        'basename' => 'workspaces.info.yml',
        'name' => 'Workspaces',
        'info' => 
        array (
          'name' => 'Workspaces',
          'type' => 'module',
          'description' => 'Provides an API for staging and previewing content in a full site context.',
          'version' => 'VERSION',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => '11102',
        'version' => '11.1.9',
      ),
      'page_cache' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/page_cache/page_cache.info.yml',
        'basename' => 'page_cache.info.yml',
        'name' => 'Internal Page Cache',
        'info' => 
        array (
          'name' => 'Internal Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for anonymous users and can be used when external page cache is not available.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'menu_ui' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/menu_ui/menu_ui.info.yml',
        'basename' => 'menu_ui.info.yml',
        'name' => 'Menu UI',
        'info' => 
        array (
          'name' => 'Menu UI',
          'type' => 'module',
          'description' => 'Provides a user interface for managing menus.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.menu.collection',
          'dependencies' => 
          array (
            0 => 'drupal:menu_link_content',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'breakpoint_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/breakpoint/tests/modules/breakpoint_module_test/breakpoint_module_test.info.yml',
        'basename' => 'breakpoint_module_test.info.yml',
        'name' => 'Breakpoint test module',
        'info' => 
        array (
          'name' => 'Breakpoint test module',
          'type' => 'module',
          'description' => 'Test module for breakpoint.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'breakpoint_theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/breakpoint/tests/themes/breakpoint_theme_test/breakpoint_theme_test.info.yml',
        'basename' => 'breakpoint_theme_test.info.yml',
        'name' => 'Breakpoint test theme',
        'info' => 
        array (
          'name' => 'Breakpoint test theme',
          'type' => 'theme',
          'description' => 'Test theme for breakpoint.',
          'version' => 'VERSION',
          'base theme' => 'olivero',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'breakpoint' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/breakpoint/breakpoint.info.yml',
        'basename' => 'breakpoint.info.yml',
        'name' => 'Breakpoint',
        'info' => 
        array (
          'name' => 'Breakpoint',
          'type' => 'module',
          'description' => 'Manages breakpoints and breakpoint groups for responsive designs.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rest_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/rest/tests/modules/rest_test_views/rest_test_views.info.yml',
        'basename' => 'rest_test_views.info.yml',
        'name' => 'REST test views',
        'info' => 
        array (
          'name' => 'REST test views',
          'type' => 'module',
          'description' => 'Provides default views for views REST tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:rest',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rest_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/rest/tests/modules/rest_test/rest_test.info.yml',
        'basename' => 'rest_test.info.yml',
        'name' => 'REST test',
        'info' => 
        array (
          'name' => 'REST test',
          'type' => 'module',
          'description' => 'Provides test hooks and resources for REST module.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_test_rest' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/rest/tests/modules/config_test_rest/config_test_rest.info.yml',
        'basename' => 'config_test_rest.info.yml',
        'name' => 'Configuration test REST',
        'info' => 
        array (
          'name' => 'Configuration test REST',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'rest' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/rest/rest.info.yml',
        'basename' => 'rest.info.yml',
        'name' => 'RESTful Web Services',
        'info' => 
        array (
          'name' => 'RESTful Web Services',
          'type' => 'module',
          'description' => 'Provides a framework for exposing REST resources.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'datetime_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/datetime/tests/modules/datetime_test/datetime_test.info.yml',
        'basename' => 'datetime_test.info.yml',
        'name' => 'Datetime test',
        'info' => 
        array (
          'name' => 'Datetime test',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'datetime' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/datetime/datetime.info.yml',
        'basename' => 'datetime.info.yml',
        'name' => 'Datetime',
        'info' => 
        array (
          'name' => 'Datetime',
          'type' => 'module',
          'description' => 'Defines field types for storing dates and times.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'fixture_manipulator' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/modules/fixture_manipulator/fixture_manipulator.info.yml',
        'basename' => 'fixture_manipulator.info.yml',
        'name' => 'Fixture manipulator',
        'info' => 
        array (
          'name' => 'Fixture manipulator',
          'description' => 'Manipulate fixtures for tests.',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'package_manager_bypass' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/modules/package_manager_bypass/package_manager_bypass.info.yml',
        'basename' => 'package_manager_bypass.info.yml',
        'name' => 'Package Manager Bypass',
        'info' => 
        array (
          'name' => 'Package Manager Bypass',
          'description' => 'Mocks PathLocator service, decorates Beginner & Committer services (adds logging) and by default bypasses the Stager service (to minimize I/O during tests).',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'auto_updates:package_manager',
            1 => 'auto_updates:fixture_manipulator',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'package_manager_test_validation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/modules/package_manager_test_validation/package_manager_test_validation.info.yml',
        'basename' => 'package_manager_test_validation.info.yml',
        'name' => 'Package Manager Validation Test',
        'info' => 
        array (
          'name' => 'Package Manager Validation Test',
          'description' => 'Provides an event subscriber to test Package Manager validation.',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'auto_updates:package_manager',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'package_manager_test_update' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/modules/package_manager_test_update/package_manager_test_update.info.yml',
        'basename' => 'package_manager_test_update.info.yml',
        'name' => 'Package Manager Test Update',
        'info' => 
        array (
          'name' => 'Package Manager Test Update',
          'description' => 'A module to test updates',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'package_manager_test_api' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/modules/package_manager_test_api/package_manager_test_api.info.yml',
        'basename' => 'package_manager_test_api.info.yml',
        'name' => 'Package Manager Test API',
        'info' => 
        array (
          'name' => 'Package Manager Test API',
          'description' => 'Provides API endpoints for doing stage operations in functional tests.',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'auto_updates:package_manager',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'package_manager_test_release_history' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/modules/package_manager_test_release_history/package_manager_test_release_history.info.yml',
        'basename' => 'package_manager_test_release_history.info.yml',
        'name' => 'Package Manager Test Release history',
        'info' => 
        array (
          'name' => 'Package Manager Test Release history',
          'type' => 'module',
          'description' => 'Provides a mechanism for serving fake release history metadata in functional tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:update',
            1 => 'drupal:update_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'package_manager_test_event_logger' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/modules/package_manager_test_event_logger/package_manager_test_event_logger.info.yml',
        'basename' => 'package_manager_test_event_logger.info.yml',
        'name' => 'Package Manager Test Event Logger',
        'info' => 
        array (
          'name' => 'Package Manager Test Event Logger',
          'description' => 'Provides an event subscriber to test logging during events in Package Manager',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'auto_updates:package_manager',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'example' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/package_manager/tests/fixtures/fake_site/modules/example/example.info.yml',
        'basename' => 'example.info.yml',
        'name' => 'Example',
        'info' => 
        array (
          'name' => 'Example',
          'type' => 'module',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config_translation/tests/modules/config_translation_test/config_translation_test.info.yml',
        'basename' => 'config_translation_test.info.yml',
        'name' => 'Configuration Translation Test',
        'info' => 
        array (
          'name' => 'Configuration Translation Test',
          'description' => 'Helpers to test the configuration translation system',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_translation',
            1 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_translation_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config_translation/tests/themes/config_translation_test_theme/config_translation_test_theme.info.yml',
        'basename' => 'config_translation_test_theme.info.yml',
        'name' => 'Configuration Translation Test Theme',
        'info' => 
        array (
          'name' => 'Configuration Translation Test Theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing the configuration translation mapper system',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'config_translation' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/config_translation/config_translation.info.yml',
        'basename' => 'config_translation.info.yml',
        'name' => 'Configuration Translation',
        'info' => 
        array (
          'name' => 'Configuration Translation',
          'type' => 'module',
          'description' => 'Allows users to translate configuration text.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'configure' => 'config_translation.mapper_list',
          'dependencies' => 
          array (
            0 => 'drupal:locale',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'path_test_node_grants' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/path/tests/modules/path_test_node_grants/path_test_node_grants.info.yml',
        'basename' => 'path_test_node_grants.info.yml',
        'name' => 'Path test with node grants',
        'info' => 
        array (
          'name' => 'Path test with node grants',
          'type' => 'module',
          'description' => 'Tests URL alias with hook_node_grants implementation',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/path/path.info.yml',
        'basename' => 'path.info.yml',
        'name' => 'Path',
        'info' => 
        array (
          'name' => 'Path',
          'type' => 'module',
          'description' => 'Allows users to create custom URLs for existing paths on the site.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.path_alias.collection',
          'dependencies' => 
          array (
            0 => 'drupal:path_alias',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'language_entity_field_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/language/tests/language_entity_field_access_test/language_entity_field_access_test.info.yml',
        'basename' => 'language_entity_field_access_test.info.yml',
        'name' => 'Language entity field access test',
        'info' => 
        array (
          'name' => 'Language entity field access test',
          'type' => 'module',
          'description' => 'Support module for verifying entity field access and the language selector.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:text',
            2 => 'drupal:field',
            3 => 'drupal:filter',
            4 => 'drupal:language',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'language_elements_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/language/tests/language_elements_test/language_elements_test.info.yml',
        'basename' => 'language_elements_test.info.yml',
        'name' => 'Language form elements test',
        'info' => 
        array (
          'name' => 'Language form elements test',
          'type' => 'module',
          'description' => 'Support module for the language form elements tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'language_config_override_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/language/tests/language_config_override_test/language_config_override_test.info.yml',
        'basename' => 'language_config_override_test.info.yml',
        'name' => 'Language config override test',
        'info' => 
        array (
          'name' => 'Language config override test',
          'type' => 'module',
          'description' => 'Support module for the language config override test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'language_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/language/tests/language_test/language_test.info.yml',
        'basename' => 'language_test.info.yml',
        'name' => 'Language test',
        'info' => 
        array (
          'name' => 'Language test',
          'type' => 'module',
          'description' => 'Support module for the language layer tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_module' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/language/tests/test_module/test_module.info.yml',
        'basename' => 'test_module.info.yml',
        'name' => 'Test Module',
        'info' => 
        array (
          'name' => 'Test Module',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'language_events_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/language/tests/language_events_test/language_events_test.info.yml',
        'basename' => 'language_events_test.info.yml',
        'name' => 'Language events test',
        'info' => 
        array (
          'name' => 'Language events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'language' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/language/language.info.yml',
        'basename' => 'language.info.yml',
        'name' => 'Language',
        'info' => 
        array (
          'name' => 'Language',
          'type' => 'module',
          'description' => 'Allows users to configure available languages.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'configure' => 'entity.configurable_language.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_test_oembed' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media/tests/modules/media_test_oembed/media_test_oembed.info.yml',
        'basename' => 'media_test_oembed.info.yml',
        'name' => 'Media oEmbed test',
        'info' => 
        array (
          'name' => 'Media oEmbed test',
          'description' => 'Provides functionality to mimic an oEmbed provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_test_source' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media/tests/modules/media_test_source/media_test_source.info.yml',
        'basename' => 'media_test_source.info.yml',
        'name' => 'Test media source',
        'info' => 
        array (
          'name' => 'Test media source',
          'type' => 'module',
          'description' => 'Provides test media source to test configuration forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_test_type' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media/tests/modules/media_test_type/media_test_type.info.yml',
        'basename' => 'media_test_type.info.yml',
        'name' => 'Media test type',
        'info' => 
        array (
          'name' => 'Media test type',
          'type' => 'module',
          'description' => 'Provides test type for a media item.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:media_test_source',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_test_embed' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media/tests/modules/media_test_embed/media_test_embed.info.yml',
        'basename' => 'media_test_embed.info.yml',
        'name' => 'Media Embed text editor plugin test',
        'info' => 
        array (
          'name' => 'Media Embed text editor plugin test',
          'description' => 'Provides functionality to test embedding media items in text editors.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media/tests/modules/media_test_views/media_test_views.info.yml',
        'basename' => 'media_test_views.info.yml',
        'name' => 'Media test views',
        'info' => 
        array (
          'name' => 'Media test views',
          'type' => 'module',
          'description' => 'Provides default views for views media tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/media/media.info.yml',
        'basename' => 'media.info.yml',
        'name' => 'Media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Manages the creation, configuration, and display of media items.',
          'type' => 'module',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:image',
            2 => 'drupal:user',
          ),
          'configure' => 'media.settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'history_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/history/tests/themes/history_test_theme/history_test_theme.info.yml',
        'basename' => 'history_test_theme.info.yml',
        'name' => 'History Test Theme',
        'info' => 
        array (
          'name' => 'History Test Theme',
          'type' => 'theme',
          'description' => 'Theme for history tests.',
          'version' => 'VERSION',
          'base theme' => 'stark',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'history' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/history/history.info.yml',
        'basename' => 'history.info.yml',
        'name' => 'History',
        'info' => 
        array (
          'name' => 'History',
          'type' => 'module',
          'description' => 'Records which content users have viewed and marks it as new or updated.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_layout_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field_layout/tests/modules/field_layout_test/field_layout_test.info.yml',
        'basename' => 'field_layout_test.info.yml',
        'name' => 'Field Layout test',
        'info' => 
        array (
          'name' => 'Field Layout test',
          'type' => 'module',
          'description' => 'Support module for Field Layout tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_layout' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field_layout/field_layout.info.yml',
        'basename' => 'field_layout.info.yml',
        'name' => 'Field Layout',
        'info' => 
        array (
          'name' => 'Field Layout',
          'type' => 'module',
          'description' => 'Allows users to configure the display and form display by arranging fields in several columns.',
          'package' => 'Core (Experimental)',
          'lifecycle' => 'experimental',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'big_pipe_bypass_js' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/big_pipe/tests/modules/big_pipe_bypass_js/big_pipe_bypass_js.info.yml',
        'basename' => 'big_pipe_bypass_js.info.yml',
        'name' => 'BigPipe bypass JS',
        'info' => 
        array (
          'name' => 'BigPipe bypass JS',
          'type' => 'module',
          'description' => 'Prevents the loading of Big Pipe JavaScript. Used for testing preview templates.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'big_pipe_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/big_pipe/tests/modules/big_pipe_test/big_pipe_test.info.yml',
        'basename' => 'big_pipe_test.info.yml',
        'name' => 'BigPipe test',
        'info' => 
        array (
          'name' => 'BigPipe test',
          'type' => 'module',
          'description' => 'Support module for BigPipe testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'big_pipe_regression_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/big_pipe/tests/modules/big_pipe_regression_test/big_pipe_regression_test.info.yml',
        'basename' => 'big_pipe_regression_test.info.yml',
        'name' => 'BigPipe regression test',
        'info' => 
        array (
          'name' => 'BigPipe regression test',
          'type' => 'module',
          'description' => 'Support module for BigPipe regression testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'big_pipe_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/big_pipe/tests/themes/big_pipe_test_theme/big_pipe_test_theme.info.yml',
        'basename' => 'big_pipe_test_theme.info.yml',
        'name' => 'BigPipe test theme',
        'info' => 
        array (
          'name' => 'BigPipe test theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing BigPipe edge cases.',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'big_pipe' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/big_pipe/big_pipe.info.yml',
        'basename' => 'big_pipe.info.yml',
        'name' => 'BigPipe',
        'info' => 
        array (
          'name' => 'BigPipe',
          'type' => 'module',
          'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'editor_private_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/editor/tests/modules/editor_private_test/editor_private_test.info.yml',
        'basename' => 'editor_private_test.info.yml',
        'name' => 'Text Editor Private test',
        'info' => 
        array (
          'name' => 'Text Editor Private test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor Private module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
            1 => 'drupal:editor_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'editor_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/editor/tests/modules/editor_test/editor_test.info.yml',
        'basename' => 'editor_test.info.yml',
        'name' => 'Text Editor test',
        'info' => 
        array (
          'name' => 'Text Editor test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'editor' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/editor/editor.info.yml',
        'basename' => 'editor.info.yml',
        'name' => 'Text Editor',
        'info' => 
        array (
          'name' => 'Text Editor',
          'type' => 'module',
          'description' => 'Provides a framework to associate text editors (like WYSIWYGs) and toolbars with text formats.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
            1 => 'drupal:file',
          ),
          'configure' => 'filter.admin_overview',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_layout_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_discovery/tests/themes/test_layout_theme/test_layout_theme.info.yml',
        'basename' => 'test_layout_theme.info.yml',
        'name' => 'Test layout theme',
        'info' => 
        array (
          'name' => 'Test layout theme',
          'type' => 'theme',
          'description' => 'Theme for testing a theme-provided layout',
          'version' => 'VERSION',
          'base theme' => 'stark',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'layout_discovery' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/layout_discovery/layout_discovery.info.yml',
        'basename' => 'layout_discovery.info.yml',
        'name' => 'Layout Discovery',
        'info' => 
        array (
          'name' => 'Layout Discovery',
          'type' => 'module',
          'description' => 'Provides a way for modules or themes to register layouts.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_query_alter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/search/tests/modules/search_query_alter/search_query_alter.info.yml',
        'basename' => 'search_query_alter.info.yml',
        'name' => 'Test Search Query Alter',
        'info' => 
        array (
          'name' => 'Test Search Query Alter',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_date_query_alter' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/search/tests/modules/search_date_query_alter/search_date_query_alter.info.yml',
        'basename' => 'search_date_query_alter.info.yml',
        'name' => 'Search Date Query Alter',
        'info' => 
        array (
          'name' => 'Search Date Query Alter',
          'type' => 'module',
          'description' => 'Test module that adds date conditions to node searches.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_langcode_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/search/tests/modules/search_langcode_test/search_langcode_test.info.yml',
        'basename' => 'search_langcode_test.info.yml',
        'name' => 'Test search entity langcode',
        'info' => 
        array (
          'name' => 'Test search entity langcode',
          'type' => 'module',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/search/tests/modules/search_embedded_form/search_embedded_form.info.yml',
        'basename' => 'search_embedded_form.info.yml',
        'name' => 'Search Embedded Form',
        'info' => 
        array (
          'name' => 'Search Embedded Form',
          'type' => 'module',
          'description' => 'Support module for Search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/search/tests/modules/search_extra_type/search_extra_type.info.yml',
        'basename' => 'search_extra_type.info.yml',
        'name' => 'Test Search Type',
        'info' => 
        array (
          'name' => 'Test Search Type',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:test_page_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/search/search.info.yml',
        'basename' => 'search.info.yml',
        'name' => 'Search',
        'info' => 
        array (
          'name' => 'Search',
          'type' => 'module',
          'description' => 'Allows users to create search pages based on plugins provided by other modules.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.search_page.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workflow_third_party_settings_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workflows/tests/modules/workflow_third_party_settings_test/workflow_third_party_settings_test.info.yml',
        'basename' => 'workflow_third_party_settings_test.info.yml',
        'name' => 'Workflow Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Workflow Third Party Settings Test',
          'type' => 'module',
          'description' => 'Allows third party settings on workflows to be tested.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workflow_type_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workflows/tests/modules/workflow_type_test/workflow_type_test.info.yml',
        'basename' => 'workflow_type_test.info.yml',
        'name' => 'Workflow Type Test',
        'info' => 
        array (
          'name' => 'Workflow Type Test',
          'type' => 'module',
          'description' => 'Provides a workflow type plugin for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'workflows' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/workflows/workflows.info.yml',
        'basename' => 'workflows.info.yml',
        'name' => 'Workflows',
        'info' => 
        array (
          'name' => 'Workflows',
          'type' => 'module',
          'description' => 'Provides an interface to create workflows with transitions between different states (for example publication or user status) provided by other modules.',
          'version' => 'VERSION',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'sqlite' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/sqlite/sqlite.info.yml',
        'basename' => 'sqlite.info.yml',
        'name' => 'SQLite',
        'info' => 
        array (
          'name' => 'SQLite',
          'type' => 'module',
          'description' => 'Provides the SQLite database driver.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'inline_form_errors' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/inline_form_errors/inline_form_errors.info.yml',
        'basename' => 'inline_form_errors.info.yml',
        'name' => 'Inline Form Errors',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Inline Form Errors',
          'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block/tests/modules/block_test/themes/block_test_theme/block_test_theme.info.yml',
        'basename' => 'block_test_theme.info.yml',
        'name' => 'Block test theme',
        'info' => 
        array (
          'name' => 'Block test theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing the block system',
          'version' => 'VERSION',
          'regions' => 
          array (
            'sidebar_first' => 'Left sidebar',
            'sidebar_second' => 'Right sidebar',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
            1 => 'sidebar_second',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block_test_special_chars_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block/tests/modules/block_test/themes/block_test_special_chars_theme/block_test_special_chars_theme.info.yml',
        'basename' => 'block_test_special_chars_theme.info.yml',
        'name' => '<"Cat" & \'Mouse\'>',
        'info' => 
        array (
          'name' => '<"Cat" & \'Mouse\'>',
          'type' => 'theme',
          'base theme' => 'stable9',
          'description' => 'Theme for testing special characters in block admin.',
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block/tests/modules/block_test/block_test.info.yml',
        'basename' => 'block_test.info.yml',
        'name' => 'Block test',
        'info' => 
        array (
          'name' => 'Block test',
          'type' => 'module',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block/tests/modules/block_test_views/block_test_views.info.yml',
        'basename' => 'block_test_views.info.yml',
        'name' => 'Block test views',
        'info' => 
        array (
          'name' => 'Block test views',
          'type' => 'module',
          'description' => 'Provides a view and block to test block displays in views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/block/block.info.yml',
        'basename' => 'block.info.yml',
        'name' => 'Block',
        'info' => 
        array (
          'name' => 'Block',
          'type' => 'module',
          'description' => 'Allows users to configure blocks (containing content, forms, etc.) and to place them in the regions of a theme.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'block.admin_display',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'link_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/link/tests/modules/link_test_views/link_test_views.info.yml',
        'basename' => 'link_test_views.info.yml',
        'name' => 'Link test views',
        'info' => 
        array (
          'name' => 'Link test views',
          'type' => 'module',
          'description' => 'Provides default views for views link tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'drupal:link',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'link_test_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/link/tests/themes/link_test_theme/link_test_theme.info.yml',
        'basename' => 'link_test_theme.info.yml',
        'name' => 'Link Test Theme',
        'info' => 
        array (
          'name' => 'Link Test Theme',
          'type' => 'theme',
          'description' => 'Theme for testing link module',
          'version' => 'VERSION',
          'base theme' => 'stark',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/link/link.info.yml',
        'basename' => 'link.info.yml',
        'name' => 'Link',
        'info' => 
        array (
          'name' => 'Link',
          'type' => 'module',
          'description' => 'Provides a field type for internal and external URLs.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'automated_cron' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/automated_cron/automated_cron.info.yml',
        'basename' => 'automated_cron.info.yml',
        'name' => 'Automated Cron',
        'info' => 
        array (
          'name' => 'Automated Cron',
          'type' => 'module',
          'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'system.cron_settings',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/tests/modules/field_test_views/field_test_views.info.yml',
        'basename' => 'field_test_views.info.yml',
        'name' => 'Field test views',
        'info' => 
        array (
          'name' => 'Field test views',
          'type' => 'module',
          'description' => 'Provides default views for views field tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_test_config' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/tests/modules/field_test_config/field_test_config.info.yml',
        'basename' => 'field_test_config.info.yml',
        'name' => 'Field API configuration tests',
        'info' => 
        array (
          'name' => 'Field API configuration tests',
          'type' => 'module',
          'description' => 'Support module for the Field API configuration tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/tests/modules/field_test/field_test.info.yml',
        'basename' => 'field_test.info.yml',
        'name' => 'Field API Test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_plugins_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/tests/modules/field_plugins_test/field_plugins_test.info.yml',
        'basename' => 'field_plugins_test.info.yml',
        'name' => 'Field Plugins Test',
        'info' => 
        array (
          'name' => 'Field Plugins Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_test_boolean_access_denied' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/tests/modules/field_test_boolean_access_denied/field_test_boolean_access_denied.info.yml',
        'basename' => 'field_test_boolean_access_denied.info.yml',
        'name' => 'Boolean field Test',
        'info' => 
        array (
          'name' => 'Boolean field Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_third_party_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/tests/modules/field_third_party_test/field_third_party_test.info.yml',
        'basename' => 'field_third_party_test.info.yml',
        'name' => 'Field Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Field Third Party Settings Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:field_test',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_timestamp_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/tests/modules/field_timestamp_test/field_timestamp_test.info.yml',
        'basename' => 'field_timestamp_test.info.yml',
        'name' => 'Field Timestamp Test',
        'info' => 
        array (
          'name' => 'Field Timestamp Test',
          'type' => 'module',
          'description' => 'Support module for the Timestamp field item test.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:field',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/field/field.info.yml',
        'basename' => 'field.info.yml',
        'name' => 'Field',
        'info' => 
        array (
          'name' => 'Field',
          'type' => 'module',
          'description' => 'Provides the capabilities to add fields to entities.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'serialization_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/serialization/tests/serialization_test/serialization_test.info.yml',
        'basename' => 'serialization_test.info.yml',
        'name' => 'Serialization test module',
        'info' => 
        array (
          'name' => 'Serialization test module',
          'type' => 'module',
          'description' => 'Support module for serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'field_normalization_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/serialization/tests/modules/field_normalization_test/field_normalization_test.info.yml',
        'basename' => 'field_normalization_test.info.yml',
        'name' => 'FieldItem normalization test support',
        'info' => 
        array (
          'name' => 'FieldItem normalization test support',
          'type' => 'module',
          'description' => 'Provides test support for fieldItem normalization test support.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_fieldtype_boolean_emoji_normalizer' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/serialization/tests/modules/test_fieldtype_boolean_emoji_normalizer/test_fieldtype_boolean_emoji_normalizer.info.yml',
        'basename' => 'test_fieldtype_boolean_emoji_normalizer.info.yml',
        'name' => 'Test @FieldType normalizer',
        'info' => 
        array (
          'name' => 'Test @FieldType normalizer',
          'type' => 'module',
          'description' => 'Provides test support for @FieldType-level normalization.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'user_route_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/serialization/tests/modules/user_route_alter_test/user_route_alter_test.info.yml',
        'basename' => 'user_route_alter_test.info.yml',
        'name' => 'User route alter test support',
        'info' => 
        array (
          'name' => 'User route alter test support',
          'description' => 'Provides test support for user route alter tests.',
          'type' => 'module',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'entity_serialization_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/serialization/tests/modules/entity_serialization_test/entity_serialization_test.info.yml',
        'basename' => 'entity_serialization_test.info.yml',
        'name' => 'Entity serialization test support',
        'info' => 
        array (
          'name' => 'Entity serialization test support',
          'type' => 'module',
          'description' => 'Provides test support for entity serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'test_datatype_boolean_emoji_normalizer' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/serialization/tests/modules/test_datatype_boolean_emoji_normalizer/test_datatype_boolean_emoji_normalizer.info.yml',
        'basename' => 'test_datatype_boolean_emoji_normalizer.info.yml',
        'name' => 'Test @DataType normalizer',
        'info' => 
        array (
          'name' => 'Test @DataType normalizer',
          'type' => 'module',
          'description' => 'Provides test support for @DataType-level normalization.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'serialization' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/serialization/serialization.info.yml',
        'basename' => 'serialization.info.yml',
        'name' => 'Serialization',
        'info' => 
        array (
          'name' => 'Serialization',
          'type' => 'module',
          'description' => 'Provides a service for converting data to and from formats such as JSON and XML.',
          'package' => 'Web services',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/text/text.info.yml',
        'basename' => 'text.info.yml',
        'name' => 'Text',
        'info' => 
        array (
          'name' => 'Text',
          'type' => 'module',
          'description' => 'Defines field types for short and long text with optional summaries.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:filter',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'announce_feed_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/announcements_feed/tests/modules/announce_feed_test/announce_feed_test.info.yml',
        'basename' => 'announce_feed_test.info.yml',
        'name' => 'Announce feed test',
        'info' => 
        array (
          'name' => 'Announce feed test',
          'type' => 'module',
          'description' => 'Support module for announce feed testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'announcements_feed' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/announcements_feed/announcements_feed.info.yml',
        'basename' => 'announcements_feed.info.yml',
        'name' => 'Announcements',
        'info' => 
        array (
          'name' => 'Announcements',
          'type' => 'module',
          'description' => 'Displays announcements from the Drupal community.',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'image_test_views' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/image/tests/modules/image_test_views/image_test_views.info.yml',
        'basename' => 'image_test_views.info.yml',
        'name' => 'Image test views',
        'info' => 
        array (
          'name' => 'Image test views',
          'type' => 'module',
          'description' => 'Provides default views for views image tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'image_access_test_hidden' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/image/tests/modules/image_access_test_hidden/image_access_test_hidden.info.yml',
        'basename' => 'image_access_test_hidden.info.yml',
        'name' => 'Image access test for hidden fields',
        'info' => 
        array (
          'name' => 'Image access test for hidden fields',
          'type' => 'module',
          'description' => 'Provides an entity field access hook implementation to set an image field as hidden.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/image/tests/modules/image_module_test/image_module_test.info.yml',
        'basename' => 'image_module_test.info.yml',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/modules/image/image.info.yml',
        'basename' => 'image.info.yml',
        'name' => 'Image',
        'info' => 
        array (
          'name' => 'Image',
          'type' => 'module',
          'description' => 'Defines a field type for image media and provides display configuration tools.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
          'configure' => 'entity.image_style.collection',
        ),
        'schema_version' => 11000,
        'version' => '11.1.9',
      ),
    ),
    'themes' => 
    array (
      'bootstrap' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/themes/bootstrap/bootstrap.info.yml',
        'basename' => 'bootstrap.info.yml',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'type' => 'theme',
          'base theme' => false,
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
        ),
        'version' => '11.1.9',
      ),
      'connect_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/themes/connect_theme/connect_theme.info.yml',
        'basename' => 'connect_theme.info.yml',
        'name' => 'connect_theme',
        'info' => 
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
        ),
        'version' => '11.1.9',
        'owner' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/themes/connect_theme/connect_theme.theme',
        'prefix' => 'connect_theme',
      ),
      'stable9' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/stable9/stable9.info.yml',
        'basename' => 'stable9.info.yml',
        'name' => 'Stable 9',
        'info' => 
        array (
          'name' => 'Stable 9',
          'type' => 'theme',
          'description' => 'A base theme using Drupal 9.0.0\'s core markup and CSS.',
          'package' => 'Core',
          'version' => 'VERSION',
          'base theme' => false,
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
        ),
        'version' => '11.1.9',
      ),
      'twig' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/engines/twig/twig.info.yml',
        'basename' => 'twig.info.yml',
        'name' => 'Twig',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Twig',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'version' => '11.1.9',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/stark/stark.info.yml',
        'basename' => 'stark.info.yml',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'type' => 'theme',
          'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'base theme' => false,
          'starterkit' => false,
        ),
        'version' => '11.1.9',
      ),
      'olivero' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/olivero/olivero.info.yml',
        'basename' => 'olivero.info.yml',
        'name' => 'Olivero',
        'info' => 
        array (
          'name' => 'Olivero',
          'type' => 'theme',
          'base theme' => false,
          'description' => 'A clean, accessible, and flexible Drupal front-end theme.',
          'alt text' => 'Screenshot of Olivero, Drupal front-end theme.',
          'package' => 'Core',
          'version' => 'VERSION',
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
        ),
        'version' => '11.1.9',
      ),
      'starterkit_theme' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/starterkit_theme/starterkit_theme.info.yml',
        'basename' => 'starterkit_theme.info.yml',
        'name' => 'Starterkit theme',
        'info' => 
        array (
          'name' => 'Starterkit theme',
          'type' => 'theme',
          'base theme' => 'stable9',
          'hidden' => true,
          'version' => 'VERSION',
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
        ),
        'version' => '11.1.9',
      ),
      'claro' => 
      array (
        'filename' => '/var/aegir/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/themes/claro/claro.info.yml',
        'basename' => 'claro.info.yml',
        'name' => 'Claro',
        'info' => 
        array (
          'name' => 'Claro',
          'type' => 'theme',
          'base theme' => false,
          'description' => 'A clean, accessible, and powerful Drupal administration theme.',
          'alt text' => 'Screenshot of Claro, Drupal administration theme.',
          'package' => 'Core',
          'version' => 'VERSION',
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
          ),
        ),
        'version' => '11.1.9',
      ),
    ),
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
      'demo_umami' => 
      array (
        'name' => 'Demo: Umami Food Magazine (Experimental)',
        'info' => 
        array (
          'name' => 'Demo: Umami Food Magazine (Experimental)',
          'type' => 'profile',
          'description' => 'Install an example site that shows off some of Drupal’s capabilities.',
          'version' => 'VERSION',
          'install' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'big_pipe',
            3 => 'block',
            4 => 'breakpoint',
            5 => 'ckeditor5',
            6 => 'config',
            7 => 'contextual',
            8 => 'contact',
            9 => 'layout_builder',
            10 => 'layout_discovery',
            11 => 'menu_link_content',
            12 => 'datetime',
            13 => 'block_content',
            14 => 'editor',
            15 => 'help',
            16 => 'image',
            17 => 'media',
            18 => 'media_library',
            19 => 'menu_ui',
            20 => 'options',
            21 => 'path',
            22 => 'page_cache',
            23 => 'dynamic_page_cache',
            24 => 'taxonomy',
            25 => 'dblog',
            26 => 'search',
            27 => 'shortcut',
            28 => 'toolbar',
            29 => 'field_ui',
            30 => 'file',
            31 => 'views',
            32 => 'views_ui',
            33 => 'automated_cron',
            34 => 'responsive_image',
            35 => 'content_moderation',
            36 => 'workflows',
            37 => 'language',
            38 => 'locale',
            39 => 'config_translation',
            40 => 'content_translation',
            41 => 'announcements_feed',
          ),
          'themes' => 
          array (
            0 => 'claro',
            1 => 'umami',
          ),
          'keep_english' => true,
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/profiles/demo_umami/demo_umami.info.yml',
        'path' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/profiles/demo_umami',
        'version' => '11.1.9',
      ),
      'minimal' => 
      array (
        'name' => 'Minimal',
        'info' => 
        array (
          'name' => 'Minimal',
          'type' => 'profile',
          'description' => 'Build a custom site without pre-configured functionality. Suitable for advanced users.',
          'version' => 'VERSION',
          'install' => 
          array (
            0 => 'node',
            1 => 'block',
            2 => 'dblog',
            3 => 'page_cache',
            4 => 'dynamic_page_cache',
          ),
          'themes' => 
          array (
            0 => 'stark',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/profiles/minimal/minimal.info.yml',
        'path' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/profiles/minimal',
        'version' => '11.1.9',
      ),
      'standard' => 
      array (
        'name' => 'Standard',
        'info' => 
        array (
          'name' => 'Standard',
          'type' => 'profile',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => 'VERSION',
          'install' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'block',
            3 => 'breakpoint',
            4 => 'ckeditor5',
            5 => 'config',
            6 => 'comment',
            7 => 'contextual',
            8 => 'contact',
            9 => 'menu_link_content',
            10 => 'datetime',
            11 => 'block_content',
            12 => 'editor',
            13 => 'help',
            14 => 'image',
            15 => 'menu_ui',
            16 => 'options',
            17 => 'path',
            18 => 'page_cache',
            19 => 'dynamic_page_cache',
            20 => 'big_pipe',
            21 => 'taxonomy',
            22 => 'dblog',
            23 => 'search',
            24 => 'shortcut',
            25 => 'toolbar',
            26 => 'field_ui',
            27 => 'file',
            28 => 'views',
            29 => 'views_ui',
            30 => 'automated_cron',
            31 => 'announcements_feed',
          ),
          'themes' => 
          array (
            0 => 'olivero',
            1 => 'claro',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/profiles/standard/standard.info.yml',
        'path' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/profiles/standard',
        'version' => '11.1.9',
      ),
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
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'demo_umami' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
        'umami' => 
        array (
          'filename' => '/web/platforms/devportal-11.x-10.0.8.6-20260106-1039/core/profiles/demo_umami/themes/umami/umami.info.yml',
          'basename' => 'umami.info.yml',
          'name' => 'Umami',
          'info' => 
          array (
            'name' => 'Umami',
            'type' => 'theme',
            'base theme' => false,
            'description' => 'The theme used for the Umami food magazine demonstration site.',
            'version' => 'VERSION',
            'libraries' => 
            array (
              0 => 'umami/classy.base',
              1 => 'core/normalize',
              2 => 'core/drupal.message',
              3 => 'umami/global',
            ),
            'libraries-override' => 
            array (
              'layout_builder/twocol_section' => 
              array (
                'css' => 
                array (
                  'theme' => 
                  array (
                    'layouts/twocol_section/twocol_section.css' => 'layouts/twocol_section/twocol_section.css',
                  ),
                ),
              ),
              'layout_builder/threecol_section' => 
              array (
                'css' => 
                array (
                  'theme' => 
                  array (
                    'layouts/threecol_section/threecol_section.css' => 'layouts/threecol_section/threecol_section.css',
                  ),
                ),
              ),
              'layout_builder/fourcol_section' => 
              array (
                'css' => 
                array (
                  'theme' => 
                  array (
                    'layouts/fourcol_section/fourcol_section.css' => 'layouts/fourcol_section/fourcol_section.css',
                  ),
                ),
              ),
            ),
            'libraries-extend' => 
            array (
              'core/drupal.message' => 
              array (
                0 => 'umami/messages',
              ),
              'core/drupal.dialog' => 
              array (
                0 => 'umami/classy.dialog',
              ),
              'core/drupal.dropbutton' => 
              array (
                0 => 'umami/classy.dropbutton',
              ),
              'core/drupal.progress' => 
              array (
                0 => 'umami/classy.progress',
              ),
              'file/drupal.file' => 
              array (
                0 => 'umami/classy.file',
              ),
              'filter/drupal.filter.admin' => 
              array (
                0 => 'umami/filter',
              ),
              'filter/drupal.filter' => 
              array (
                0 => 'umami/filter',
              ),
              'media/media_embed_ckeditor_theme' => 
              array (
                0 => 'umami/classy.media_embed_ckeditor_theme',
              ),
              'media_library/view' => 
              array (
                0 => 'umami/classy.media_library',
              ),
              'media_library/widget' => 
              array (
                0 => 'umami/classy.media_library',
              ),
              'user/drupal.user' => 
              array (
                0 => 'umami/user',
              ),
              'node/drupal.node.preview' => 
              array (
                0 => 'umami/drupal.node.preview',
              ),
            ),
            'regions' => 
            array (
              'pre_header' => 'Pre-header',
              'header' => 'Header',
              'highlighted' => 'Highlighted',
              'tabs' => 'Tabs',
              'banner_top' => 'Banner Top',
              'breadcrumbs' => 'Breadcrumbs',
              'page_title' => 'Page Title',
              'content' => 'Content',
              'sidebar' => 'Sidebar',
              'content_bottom' => 'Content Bottom',
              'footer' => 'Footer',
              'bottom' => 'Bottom',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
          ),
          'version' => '11.1.9',
        ),
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'apim_profile' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);