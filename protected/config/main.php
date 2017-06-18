<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
//echo dirname(__FILE__) . '/../vendor/crisu83/yiistrap/';
//die();
//Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../../vendor/crisu83/yiistrap/');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'针织余料交易平台',
    'language'=>'zh_cn',
    // preloading 'log' component
	'preload'=>array('log'),

    // path aliases
    'aliases' => array(
        'bootstrap' => dirname(__FILE__) . '/../../vendor/crisu83/yiistrap/', // change this if necessary
        'vendor.twbs.bootstrap.dist' => realpath(__DIR__ . '/../extensions/bootstrap'),
    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'bootstrap.components.*',
        'bootstrap.behaviors.*',
        'bootstrap.helpers.*',
        'bootstrap.widgets.*'
	),

	'defaultController'=>'post',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
        /*
    'db'=>array(
        'connectionString' => 'sqlite:protected/data/blog.db',
        'tablePrefix' => 'tbl_',
    ),
        */
    // uncomment the following to use a MySQL database

    'db'=>array(
        'connectionString' => 'mysql:host=127.0.0.1;dbname=krtp',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => 'eprinttnirpe2016',
        'charset' => 'utf8',
        'tablePrefix' => 'tbl_',
    ),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
                'post/<id:\d+>/<title:.*?>'=>'post/view',
                'posts/<tag:.*?>'=>'post/index',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
            'cdnUrl'=>"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/",
        ),
	),
    'modules' => array(
            'gii' => array(
                'class'=>'system.gii.GiiModule',
                'password'=>'790128083',
                // If removed, Gii defaults to localhost only. Edit carefully to taste.
                'ipFilters'=>array('127.0.0.1','::1'),
                'generatorPaths' => array('vendor.crisu83.yiistrap.gii'),
        ),
    ),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
    'theme' => 'bootstrap', // requires you to copy the theme under your themes directory

    //not sure whats this for? dont even have a theme folder inside yiistrap-master I downloaded from getyiistrap.com

);