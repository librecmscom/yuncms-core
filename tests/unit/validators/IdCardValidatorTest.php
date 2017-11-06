<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace tests\validators;

use yuncms\core\validators\IdCardValidator;

/**
 * Class IdCardValidatorTest
 * @package tests\validators
 */
class IdCardValidatorTest extends \Codeception\Test\Unit
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockApplication();
    }

    public function testPastDateValidator()
    {
        $validator = new IdCardValidator();
        $this->assertFalse($validator->validate('370'));
        $this->assertTrue($validator->validate('110102199901016072'));
        $this->assertTrue($validator->validate('110226199901014989'));
        $this->assertFalse($validator->validate('110226199901014988'));
    }
}