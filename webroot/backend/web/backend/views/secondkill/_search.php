<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SecondKillSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="second-kill-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'productId') ?>

    <?= $form->field($model, 'oldPrice') ?>

    <?= $form->field($model, 'newPrice') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'sellCount') ?>

    <?php // echo $form->field($model, 'startTime') ?>

    <?php // echo $form->field($model, 'endTime') ?>

    <?php // echo $form->field($model, 'pic') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'smallPic') ?>

    <?php // echo $form->field($model, 'createTime') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
