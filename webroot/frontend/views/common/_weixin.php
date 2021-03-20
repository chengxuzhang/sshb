<?php 
use yii\helpers\Html;

 ?>

<div class="w_title">
    <h3>
        微信公众订阅号
    </h3>
</div>
<div class="textwidget">
    微信公众订阅号：<?= Yii::$app->cache->get('weixin_name') ?>
    <img src="<?= Yii::$app->cache->get('weixin_pic') ?>">
</div>