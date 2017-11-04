<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\validators;

use tests\TestCase;
use yuncms\core\validators\PastDateValidator;

/**
 * Class PastDateValidatorTest
 * @package tests\validators
 */
class PastDateValidatorTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockApplication();
    }

    public function testPastDateValidator()
    {
        $validator = new PastDateValidator();
        $this->assertTrue($validator->validate(strtotime("1920-10-21 16:00:10")));
        $this->assertTrue($validator->validate(strtotime("1970-10-21 16:00:10")));
        $this->assertTrue($validator->validate(strtotime("2009-10-21 16:00:10")));
        $this->assertFalse($validator->validate(strtotime("2099-10-21 16:00:10")));
    }
}