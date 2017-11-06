<?php

return [
    'id' => 'yii2-tests',
    'basePath' => dirname(__DIR__),
    'language' => 'en-US',
    'aliases' => [
        '@yuncms/core' => dirname(dirname(dirname(__DIR__))),
        '@bower' => '@vendor/bower-asset',
    ],
    'modules' => [
        'core' => [
            'class' => 'yuncms\core\backend\Module'
        ]
    ],
    'components' => [
        'db' => require __DIR__ . '/db.php',
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@runtime/cache',
        ],
        'settings' => [
            'class' => 'yuncms\core\components\Settings',
            'frontCache' => 'cache'
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
        ],
        'i18n' => [
            'translations' => [
                'core*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'class' => 'yii\\i18n\\PhpMessageSource',
                        'sourceLanguage' => 'en-US',
                        'basePath' => '@yuncms/core/messages',
                    ],
                ],
            ]
        ],
    ],
    'params' => [],
];