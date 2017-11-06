<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\unit\models;

use tests\_fixtures\SettingsFixture;
use yuncms\core\models\Settings;

/**
 * Class SettingsTest
 * @package tests\models
 */
class SettingsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $this->tester->haveFixtures([
            'url' => [
                'class' => SettingsFixture::className(),
                'dataFile' => codecept_data_dir() . 'settings.php'
            ]
        ]);
    }

    public function testFind()
    {
        expect_that(Settings::findOne(['section' => 'core', 'key' => 'url']));
        expect_not(Settings::findOne(['section' => 'system', 'key' => 'url']));
    }
}