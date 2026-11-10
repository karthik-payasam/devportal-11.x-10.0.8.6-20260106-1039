<?php
$local_db_enckey = 'cH+jeF831z5Vhe1BT97cC19MvGRJP1Uasw+ByIa+teo=';

putenv('PTLENCKEY=' . $local_db_enckey);
$_ENV['PTLENCKEY'] = $local_db_enckey;
$_SERVER['PTLENCKEY'] = $local_db_enckey;

$memcache_prefix = 'AE8dTRALik2iTSdm34mJCvMRlNC3dAbW';
$conf['mail_line_endings']="\n";
$conf['drupal_http_request_fails'] = FALSE;
$base_url = 'http://csb-test-1.developer.demo.in:8081';
$GLOBALS['real_base_url'] = 'http://csb-test-1.developer.demo.in:8081';
$GLOBALS['real_base_host'] = 'http://csb-test-1.developer.demo.in:8081';
$GLOBALS['real_base_path'] = '/';
if (PHP_SAPI !== 'cli') {
	ini_set('session.cookie_path','/');
	ini_set('session.cookie_secure', '1');
}
$cookie_domain = 'developer.demo.in';
//$databases['default']['default']['init_commands'] = array('SET NAMES utf8mb4 COLLATE utf8mb4_general_ci');
$databases['default']['default'] = [
  'database' => 'ibm_drupal_11_csb_test_1_portal',
  'username' => 'root',
  'password' => 'Root@12345',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
  'init_commands' => [
    'set_names' => 'SET NAMES utf8mb4 COLLATE utf8mb4_general_ci',
  ],
];
header('X-Accel-Expires: 1'); // This disables Speed Booster
if (preg_match("/hybridauth/", $_SERVER['REQUEST_URI'])) {
  $conf['cache'] = 0; // This disables page caching on the fly
}

$settings['trusted_host_patterns'] = array(
	'.*');

# Additional platform wide configuration settings.
if (is_readable('/web/config/memcachecfg.php')) {
  include_once('/web/config/memcachecfg.php');
}
