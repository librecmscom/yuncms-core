<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace tests\helpers;

use Yii;
use tests\TestCase;
use yuncms\core\helpers\ShortURL;

/**
 * ShortURL test
 */
class ShortURLTest extends TestCase
{
    public function testEncode()
    {
        $shortURL = ShortURL::encode('123456789');
        $this->assertEquals('pgK8p', $shortURL);
    }

    public function testDecode()
    {
        $id = ShortURL::decode('pgK8p');
        $this->assertEquals(123456789, $id);
    }
}