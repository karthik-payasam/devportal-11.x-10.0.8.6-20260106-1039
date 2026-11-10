<?php

$memcache_prefix = 'ElR1LCAU9Az7oOPIItk9U0APNGrYj9F9';
$conf['mail_line_endings']="\n";
$conf['drupal_http_request_fails'] = FALSE;

$base_url = 'http://csb-test-2.developer.demo.in:8081';

$GLOBALS['real_base_url'] = 'http://csb-test-2.developer.demo.in:8081';
$GLOBALS['real_base_host'] = 'http://csb-test-2.developer.demo.in:8081';
$GLOBALS['real_base_path'] = '';

if (PHP_SAPI !== 'cli') {
ini_set('session.cookie_path', '/');
ini_set('session.cookie_secure', '0');
}
$cookie_domain = '';

/**
 * Local Windows XAMPP database configuration.
 */
$databases['default']['default'] = [
  'database' => 'ibm_drupal_11',
  'username' => 'root',
  'password' => 'Root@12345',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'isolation_level' => 'READ COMMITTED',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
];


header('X-Accel-Expires: 1'); // This disables Speed Booster
if (preg_match("/hybridauth/", $_SERVER['REQUEST_URI'] ?? '')) {
  $conf['cache'] = 0; // This disables page caching on the fly
}

$settings['trusted_host_patterns'] = array(
	'.*');

# Additional platform wide configuration settings.
if (is_readable('/web/config/memcachecfg.php')) {
  include_once('/web/config/memcachecfg.php');
}


/**
 * Properly rectify Real AES and Key module configuration for Windows XAMPP
 */
$_SERVER['db_enckey'] = base64_decode('cHjeF831z5Vhe1BT97cC19MvGRJP1UaswByIateo=');
putenv("PTLENCKEY=" . $_SERVER['db_enckey']);

// Force the Key module to use the environment variable provider instead of a missing file path
$config['key.key.real_aes_encryption_key']['key_provider'] = 'env';
$config['key.key.real_aes_encryption_key']['key_provider_settings']['env_variable'] = 'db_enckey';




