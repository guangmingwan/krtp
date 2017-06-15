<?php
Yii::setPathOfAlias('Likai', __DIR__ . '/../../vendor/likai/yii-webserver/src/Likai');
// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
    'commandMap' => array(
        'serve' => array(
            'class' => '\\Likai\\YiiWebserver\\ServerCommand',
            'host' => '127.0.0.1',
            'port' => '8888',
        ),
    ),
);