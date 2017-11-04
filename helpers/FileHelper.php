<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace yuncms\core\helpers;

class FileHelper extends \yii\helpers\FileHelper
{
    /**
     * Checks if given fileName has a extension
     *
     * @param string $fileName the filename
     * @return boolean has extension
     */
    public static function hasExtension($fileName)
    {
        return (strpos($fileName, ".") !== false);
    }
}