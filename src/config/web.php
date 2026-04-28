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
            
            'trustedHosts' => ['127.0.0.1', '127.0.0.82'],
            'secureHeaders' => [
                'X-Forwarded-For',
                'X-Real-IP',
                'X-Forwarded-Proto',
            ],
        ],
        
        /*'view' => [
            'theme' => [
                'class' => \skeeks\cms\cmsbasic\DefaultTheme::class,
            ],
        ],*/
    ],
];