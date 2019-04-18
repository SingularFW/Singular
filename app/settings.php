<?php
return [
	'settings' => [
		'displayErrorDetails' => true,
		'addContentLengthHeader' => false,
		'view' => [
			'template_path' => APP_DIR.DS.'templates',
			'cache_path' => APP_DIR.DS.'cache'
		],
		'logger' => [
			'name' => 'slim-app',
			'path' => APP_DIR.DS.'logs'.DS.'app.log',
			'level' => \Monolog\Logger::DEBUG,
		],
	],
];
?>