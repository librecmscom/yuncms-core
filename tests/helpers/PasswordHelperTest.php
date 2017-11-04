<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\helpers;

use Yii;
use tests\TestCase;
use yuncms\core\helpers\PasswordHelper;

/**
 * PasswordHelper test
 */
class PasswordHelperTest extends TestCase
{
    public function testGenerate()
    {
        $a = strlen(PasswordHelper::generate(8));
        $this->assertEquals(8, $a);
    }
}