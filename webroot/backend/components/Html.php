<?php
namespace backend\components;

use yii\helpers\BaseHtml;

class Html extends BaseHtml{

    public static function resetButton($content = 'Reset', $options = [])
    {
        $options['type'] = 'button';
        $options['class'] = 'btn btn-default my-reset';
        return static::button($content, $options);
    }
}