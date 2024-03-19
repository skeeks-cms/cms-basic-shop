<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 10.11.2017
 */
return [

    "name" => "SkeekS CMS",
    'id' => 'skeeks-cms-app',
    
    'language' => 'ru',
    
    'timeZone' => 'UTC',
    
    'aliases'     => [
        '@common'   => '@root/common',
        '@frontend' => '@root/frontend',
        '@console'  => '@root/console',
    ],
    
    'components' => [
        
        'formatter' => [
            'defaultTimeZone' => 'UTC',
            'timeZone'        => 'Europe/Moscow',
            
            'numberFormatterOptions' => [
                NumberFormatter::MIN_FRACTION_DIGITS => 0,
                NumberFormatter::MAX_FRACTION_DIGITS => 2,
            ],
        ],
        
        'storage' => [
            'components' => [
                'sx' => [
                    'class' => \skeeks\cms\components\storage\SkeeksSuppliersCluster::class,
                    'priority' => 200,
                ],
            ],
        ],
        
        'urlManager' => [
            'rules' => [
                
                'u' => 'cms/user/index',
                'u/<username>' => 'cms/user/view',
                'u/<username>/<action>' => 'cms/user/<action>',

                '~<_a:(login|logout|register|forget|reset-password|approve-email)>' => 'cms/auth/<_a>',

                'skeeks-cms' => 'cms/cms/index',
                'skeeks-cms/<action>' => 'cms/cms/<action>',

                'favicon.<extension:\w+>' => '/cms/favicon/on-request',

                "image-preview" => [
                    "class" => 'skeeks\cms\components\urlRules\UrlRuleImagePreview'
                ],

                "storage-file" => [
                    "class" => 'skeeks\cms\components\urlRules\UrlRuleStorageFile'
                ],

                'saved-filter' => [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleSavedFilter::class
                ],

                'content-element' => [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleContentElement::class,
                ],

                'shop-brand' => [
                    'class' => \skeeks\cms\shop\urlRules\UrlRuleBrand::class
                ],

                'shop-collection' => [
                    'class' => \skeeks\cms\shop\urlRules\UrlRuleCollection::class
                ],

                '~search' => 'cmsSearch/result/index',

                'tree' => [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleTree::class,
                ]
            ]
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=' . $params['db']['host'] . ';dbname=' . $params['db']['dbname'],
            'username' => $params['db']['username'],
            'password' => $params['db']['password'],
            
            'charset'             => 'utf8mb4', //чтобы работали символы 🌿
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
        'cmsAgent'     => [
            'onHitsEnabled' => false,
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@skeeks/cmsbasicshop/messages',
                ],
            ],
        ],
    ]

];

