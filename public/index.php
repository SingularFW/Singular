<?php
if (version_compare(PHP_VERSION, '7.1', '<')) {
	die("Upgrade your PHP version (".PHP_VERSION.") to 7.1 or newer!");
}

define(DS, DIRECTORY_SEPARATOR);
define(ROOT_DIR, dirname(__DIR__, 1));
define(PUBLIC_DIR, __DIR__);
define(APP_DIR, ROOT_DIR.DS.'app');

require_once APP_DIR.DS.'app.php';
?>