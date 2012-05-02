<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/udiff4-livecoding/');
define('HTTP_IMAGE', 'http://localhost/udiff4-livecoding/image/');
define('HTTP_ADMIN', 'http://localhost/udiff4-livecoding/admin/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/udiff4-livecoding/');
define('HTTPS_IMAGE', 'http://localhost/udiff4-livecoding/image/');

// DIR
define('DIR_APPLICATION', '/var/www/udiff4-livecoding/catalog/');
define('DIR_SYSTEM', '/var/www/udiff4-livecoding/system/');
define('DIR_DATABASE', '/var/www/udiff4-livecoding/system/database/');
define('DIR_LANGUAGE', '/var/www/udiff4-livecoding/catalog/language/');
define('DIR_TEMPLATE', '/var/www/udiff4-livecoding/catalog/view/theme/');
define('DIR_CONFIG', '/var/www/udiff4-livecoding/system/config/');
define('DIR_IMAGE', '/var/www/udiff4-livecoding/image/');
define('DIR_CACHE', '/var/www/udiff4-livecoding/system/cache/');
define('DIR_DOWNLOAD', '/var/www/udiff4-livecoding/download/');
define('DIR_LOGS', '/var/www/udiff4-livecoding/system/logs/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'udiff4-livecodin');
define('DB_PASSWORD', 'UPxKNQmdGGh4ntqs');
define('DB_DATABASE', 'udiff4-livecodin');
define('DB_PREFIX', '');

// Path to Lithium library
define('LITHIUM_LIBRARY_PATH', dirname(__DIR__) .  '/libraries/lithium/');
define('LITHIUM_APP_PATH', dirname(__DIR__));

// Load Lithium library and application
if(!include LITHIUM_LIBRARY_PATH . 'core/Libraries.php') {
    trigger_error('Could not load Lithium', E_USER_ERROR);
}

use lithium\core\Libraries;

// Lithium core libraries
Libraries::add('lithium');

// Application Lithium code
Libraries::add('udiff4-livecoding', array(
    'default' => true
));

use lithium\data\Connections;

Connections::add('default', [
    'type' => 'database',
    'adapter' => 'MySql',
    'host' => DB_HOSTNAME,
    'database' => DB_DATABASE,
    'login' => DB_USERNAME,
    'password' => DB_PASSWORD
]);
?>
