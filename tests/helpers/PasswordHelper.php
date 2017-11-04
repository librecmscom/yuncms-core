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
 * StringHelper test
 */
class StringHelperTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function testGenerate()
    {
        $a = substr(PasswordHelper::generate(8));
        $this->assertEquals(8, $a);
    }
}