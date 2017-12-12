<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace yuncms\core;

use Yii;
use yii\base\Event;
use yii\base\BootstrapInterface;
use yii\web\Application as WebApplication;
use yii\console\Application as ConsoleApplication;
use yii\web\Cookie;

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
//            $app->controllerMap['migrate'] = [
//                'class' => 'yii\console\controllers\MigrateController',
//                'templateFile' => '@yuncms/core/console/views/migration.php',
//                //'migrationNamespaces' => $migrationNamespaces,
//            ];
            //全局任务程序注册
            if (is_file(__DIR__ . '../tasks.php')) {
                $tasks = require(__DIR__ . '../tasks.php');
                foreach ($tasks as $task) {
                    if (isset($task['class'])) {
                        Event::on($task['class'], $task['event'], $task['callback']);
                    } else {
                        Event::on($task[0], $task[1], $task[2]);
                    }
                }
            }
        }
//        else if($app instanceof WebApplication){
//            //自动检测语言
//            if (($language = Yii::$app->request->getQueryParam('language')) !== null) {
//                $app->language = $language;
//                Yii::$app->response->cookies->add(new Cookie(['name' => 'language', 'value' => $language]));
//            } else if (($cookie = Yii::$app->request->cookies->get('language')) !== null) {
//                $app->language = $cookie->value;
//            } else if (($language = Yii::$app->request->getPreferredLanguage()) !== null) {
//                $app->language = $language;
//            }
//        }

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

    /**
     * @param array $packages
     */
    protected function discoverPackages(array $packages)
    {
        foreach ($packages as $package) {
            foreach ($package['observers'] ?? [] as $handler) {
                if (class_exists($handler) && in_array(EventHandlerInterface::class, class_implements($handler), true)) {
                    $this->push($handler);
                }
            }
        }
    }
}