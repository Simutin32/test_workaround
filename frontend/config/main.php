<?php
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'id'                  => 'app-frontend',
	'basePath'            => dirname(__DIR__),
	'bootstrap'           => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components'          => [
		'request'      => [
			'csrfParam' => '_csrf-frontend',
		],
		'user'         => [
			'identityClass'   => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie'  => [
				'name'     => '_identity-frontend',
				'httpOnly' => true,
			],
		],
		'redis'        => [
			'class'    => 'yii\redis\Connection',
			'hostname' => 'localhost',
			'port'     => 6379,
			'database' => 0,
		],
		'session'      => [
			'class' => 'yii\redis\Session',
		],
		'db'         => [
			'class'    => 'yii\db\Connection',
			'dsn'      => 'mysql:host=127.0.0.1;dbname=example',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
		],
		'log'          => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
				[
					'class'  => 'yii\log\FileTarget',
					'levels' => [
						'error',
						'warning',
					],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],


	],
	'params'              => $params,
];
