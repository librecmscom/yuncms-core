<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

class SettingsCest
{
    public function _before(\FunctionalTester $I)
    {
        $I->wantTo('ensure that settings works');
        $I->haveFixtures([
            'admin' => [
                'class' => \tests\_fixtures\SettingsFixture::className(),
                'dataFile' => codecept_data_dir() . 'settings.php'
            ]
        ]);
        $I->amOnRoute('/core/settings/index');
    }

    public function openSettingsPage(\FunctionalTester $I)
    {
        $I->see('Manage Settings');
    }
}