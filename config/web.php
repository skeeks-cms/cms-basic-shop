<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 10.11.2017
 */
return [

    'basePath' => "@root/frontend",

    'controllerNamespace' => 'frontend\controllers',

    'components' => [
        
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => $params["request"]["cookieValidationKey"],
        ],
        
        /*'view' => [
            'theme' => [
                'class' => \skeeks\cms\cmsbasic\DefaultTheme::class,
            ],
        ],*/
    ],
];