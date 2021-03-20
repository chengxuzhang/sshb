<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="kline-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['class'  => 'form-inline'],
    ]); ?>

    <?= $form->field($model, 'scode')->label(false)->dropDownList($shares) ?>

    <div class="form-group">
        <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
