<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="video-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'class' => 'form-inline',
    ]); ?>

    <?= $form->field($model, 'id')->label(false) ?>

    <?= $form->field($model, 'title')->label(false) ?>

    <?= $form->field($model, 'sort')->label(false) ?>

    <?= $form->field($model, 'link')->label(false) ?>

    <?= $form->field($model, 'pic')->label(false) ?>

    <?php // echo $form->field($model, 'keywords')->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
