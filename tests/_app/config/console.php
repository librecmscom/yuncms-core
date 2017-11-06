<?php

return [
    'id' => 'yii2-test-console',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@yuncms/user' => dirname(dirname(dirname(__DIR__))),
        '@tests' => dirname(dirname(__DIR__)),
    ],
    'controllerMap' => [
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            //自动应答
            'interactive' => 0,
            //命名空间
            'migrationNamespaces' => [
                'yuncms\user\migrations',
            ],
            // 完全禁用非命名空间迁移
            'migrationPath' => null,
        ],
    ],
    'components' => [
        'log'   => null,
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@runtime/cache',
        ],
        'settings' => [
            'class' => 'yuncms\system\components\Settings',
            'frontCache' => 'cache'
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
        'db'    => require __DIR__ . '/db.php',
    ],
];
