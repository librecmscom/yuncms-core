<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\components;

use tests\TestCase;

/**
 * Class SettingsTest
 * @package tests\components
 */
class SettingsTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockApplication();
    }

    public function testSet()
    {
        $this->assertTrue(\Yii::$app->settings->set('test', '123456', 'testkey', 'string'));
        $this->assertTrue(\Yii::$app->settings->has('test', 'testkey'));

        $this->assertTrue(\Yii::$app->settings->set('testkey1.test', '123456', null, 'string'));
        $this->assertTrue(\Yii::$app->settings->has('testkey1.test'));
    }
}