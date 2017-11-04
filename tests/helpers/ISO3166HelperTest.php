<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace tests\helpers;

use Yii;
use tests\TestCase;
use yuncms\core\helpers\ISO3166Helper;

/**
 * ISO3166HelperTest
 */
class ISO3166HelperTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockApplication();
    }

    public function testPhoneCode()
    {
        $this->assertEquals('86', ISO3166Helper::phoneCode('CN'));
        $this->assertEquals('81', ISO3166Helper::phoneCode('JP'));
    }

    public function testIsValid()
    {
        $this->assertTrue(ISO3166Helper::isValid('CN'));
        $this->assertFalse(ISO3166Helper::isValid('CNY'));
    }

    public function testCountry()
    {
        $this->assertArray(ISO3166Helper::$countries);
    }
}