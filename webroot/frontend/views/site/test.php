<?php

use frontend\components\Html;
use yii\helpers\Url;
use zhang\comment\ActiveComment;

$this->title = '测试登录页面';
?>

<div style="width:740px;height: auto;position: relative;left:50%;margin-left:-370px;">
<?php $abc = ActiveComment::begin([
    'type' => 'xin',
    'options' => [
        'id' => 33,
        'title' => 'test',
        'url' => 'http://www.baidu.com',
    ],
]); ?>
<?php ActiveComment::end(); ?>
</div>