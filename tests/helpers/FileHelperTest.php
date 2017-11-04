<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\helpers;

use Yii;
use tests\TestCase;
use yuncms\core\helpers\FileHelper;

/**
 * FileHelperTest
 */
class FileHelperTest extends TestCase
{

    public function testHasExtension()
    {
        $this->assertTrue(FileHelper::hasExtension('filename.txt'));
        $this->assertFalse(FileHelper::hasExtension('filename'));
    }

}