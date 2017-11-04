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
        $this->assertTrue($validator->validate("1920-10-21 16:00:10"));
        $this->assertTrue($validator->validate("1970-10-21 16:00:10"));
        $this->assertTrue($validator->validate("2009-10-21 16:00:10"));
        $this->assertFalse($validator->validate("2099-10-21 16:00:10"));
    }
}