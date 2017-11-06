<?php

return [
    'id' => 'yii2-user-tests',
    'basePath' => dirname(__DIR__),
    'language' => 'en-US',
    'aliases' => [
        '@yuncms/core' => dirname(dirname(dirname(__DIR__))),
        '@tests' => dirname(dirname(__DIR__)),
        '@bower' => '@vendor/bower-asset',
    ],
    'components' => [
        'db' => require __DIR__ . '/db.php',
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@runtime/cache',
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