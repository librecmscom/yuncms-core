<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\unit\helpers;

use yuncms\core\helpers\FileHelper;

/**
 * FileHelperTest
 */
class FileHelperTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
        new \yii\console\Application(require(\Yii::getAlias('@tests/_app/config/console.php')));
    }


    public function testHasExtension()
    {
        $this->assertTrue(FileHelper::hasExtension('filename.txt'));
        $this->assertFalse(FileHelper::hasExtension('filename'));
    }

}