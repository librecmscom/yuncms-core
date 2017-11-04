<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace yuncms\core\helpers;

/**
 * Class StringHelper
 * @package yuncms\core
 */
class StringHelper extends \yii\helpers\StringHelper
{
    /**
     *
     * 产生指定长度随机数
     * @param int $length
     * @return string 产生的随机字符串
     */
    public static function getNonceStr($length = 32)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
}