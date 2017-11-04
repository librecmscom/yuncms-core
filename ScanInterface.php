<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace yuncms\core;

/**
 * 机器审核接口
 * @package yuncms\core
 */
interface ScanInterface
{

    /**
     * 机器审核
     * @param int $id model id
     * @param string $suggestion the ID to be looked for
     * @return void
     */
    public static function review($id, $suggestion);

    /**
     * 获取待审
     * @param int $id
     * @return string 待审核的内容字符串
     */
    public static function findReview($id);
}