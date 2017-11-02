<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace yuncms\core\validators;

class PastDateValidator extends DbDateValidator
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->message = Yii::t('base', 'The date has to be in the past.');
    }

    /**
     * @inheritdoc
     */
    public function validateAttribute($model, $attribute)
    {
        $timestamp = $this->parseDateValue($model->$attribute);
        if ($timestamp !== false && $timestamp > time()) {
            $this->addError($model, $attribute, $this->message);
        }
    }
}