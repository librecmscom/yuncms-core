<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\unit\components;

/**
 * Class SettingsTest
 * @package tests\components
 */
class SettingsTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
        new \yii\console\Application(require(\Yii::getAlias('@tests/_app/config/console.php')));
    }

    public function testSet()
    {
        $this->assertTrue(\Yii::$app->settings->set('test', '123456', 'testkey', 'string'));
        $this->assertTrue(\Yii::$app->settings->has('test', 'testkey'));

        $this->assertTrue(\Yii::$app->settings->set('testkey1.test', '123456', null, 'string'));
        $this->assertTrue(\Yii::$app->settings->has('testkey1.test'));

        $this->assertTrue(\Yii::$app->settings->set('testkey1.test', '654321', null, 'string'));

        $this->assertEquals('654321', \Yii::$app->settings->get('testkey1.test'));
    }

    public function testGet()
    {
        $this->assertTrue(\Yii::$app->settings->set('testkey1.test', '123456', null, 'string'));

        $this->assertEquals('123456', \Yii::$app->settings->get('testkey1.test'));
        $this->assertEquals('123456', \Yii::$app->settings->get('test', 'testkey1'));

        $this->assertEquals(1,\Yii::$app->settings->delete('test', 'testkey1'));
    }

    public function testDelete()
    {
        $this->assertTrue(\Yii::$app->settings->set('test1', '123456', 'testkey', 'string'));

        $this->assertEquals(1,\Yii::$app->settings->delete('testkey2.test'));
        $this->assertFalse(\Yii::$app->settings->has('testkey3.test'));

        $this->assertTrue(\Yii::$app->settings->deleteAll());

    }
}