<?php
session_start();

require_once ROOT_DIR.DS.'vendor'.DS.'autoload.php';

if (file_exists(APP_DIR.DS.'settings.php')) {
	$settings = require_once APP_DIR.DS.'settings.php';
} else {
	$settings = [];
}

$app = new \Slim\App($settings);
$dependencies = require_once APP_DIR.DS.'dependencies.php';
$dependencies($app);
/*$middleware = require_once APP_DIR.DS.'middleware.php';
$middleware($app);*/
//$routes = require_once APP_DIR.DS.'routes.php';
//$routes($app);

$app->run();
?>