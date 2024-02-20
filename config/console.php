<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 10.11.2017
 */
return [
    'basePath' => "@root/console",

    'controllerNamespace' => 'console\controllers',

    'bootstrap' => ['log', 'cms'],

    'aliases' => [
        '@webroot' => '@frontend/web',
        '@web'     => '',
    ],
];
