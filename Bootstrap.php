<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace yuncms\core;

use yii\base\Event;
use yii\base\BootstrapInterface;
use yii\console\Application as ConsoleApplication;

/**
 * Class Bootstrap
 * @package yuncms\core
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        if ($app instanceof ConsoleApplication) {
            $app->controllerMap['corn'] = [
                'class' => 'yuncms\core\console\controllers\CronController',
            ];
            $app->controllerMap['migrate'] = [
                'class' => 'yii\console\controllers\MigrateController',
                'templateFile' => '@yuncms/core/console/views/migration.php',
                //'migrationNamespaces' => $migrationNamespaces,
            ];
        }

        //全局事件处理程序注册
        if (is_file(__DIR__ . '../events.php')) {
            $events = require(__DIR__ . '../events.php');
            foreach ($events as $event) {
                if (isset($event['class'])) {
                    Event::on($event['class'], $event['event'], $event['callback']);
                } else {
                    Event::on($event[0], $event[1], $event[2]);
                }
            }
        }
    }
}