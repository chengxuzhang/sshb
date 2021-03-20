<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="shares-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class' => 'form-inline'],
    ]); ?>

    <?= $form->field($model, 'id')->label(false)->textInput(['placeholder'=>'id']) ?>

    <?= $form->field($model, 'code')->label(false)->textInput(['placeholder'=>'code']) ?>

    <?= $form->field($model, 'name')->label(false)->textInput(['placeholder'=>'name']) ?>

    <?= $form->field($model, 'create_time')->label(false)->textInput(['placeholder'=>'create_time']) ?>

    <?= $form->field($model, 'update_time')->label(false)->textInput(['placeholder'=>'update_time']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
