<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<style>
    .img_404{
        width: 100%;
        height:100%;
    }
</style>

<div id="wrapper">
    <div style="width: 926px;height: 520px;margin: 100px auto;position: relative;cursor: pointer">
        <a href="/">
            <?= Html::img("@web/images/404.jpg", ['class'=>'img_404']); ?>
        </a>
    </div>
</div>


