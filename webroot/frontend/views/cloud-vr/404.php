<?php

use frontend\components\Html;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/zj-mobile-vr.css") ?>

<div class="page">
    <div class="weui-form">
        <div class="weui-form__text-area"></div>
        <div class="weui-form__text-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__control-area" style="text-align: center;color: red;">
            <span class="icon icon-39"></span><?= $title ?>
        </div>
        <div class="weui-form__opr-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__extra-area">
            <div class="weui-footer">
                <img src="/m-images/vr_logo.png" alt="" style="width: 20%;">
            </div>
        </div>
    </div>
</div>

