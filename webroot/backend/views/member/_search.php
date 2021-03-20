<?php

use backend\components\Html;
use yii\widgets\ActiveForm;
?>

<div class="member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class' => 'form-inline'],
    ]); ?>

    <?= $form->field($model, 'username')->label(false)->textInput(['placeholder'=>'用户名']) ?>

    <?php // echo $form->field($model, 'email')->label(false) ?>

    <?php // echo $form->field($model, 'status')->label(false) ?>

    <?php // echo $form->field($model, 'created_at')->label(false) ?>

    <?php // echo $form->field($model, 'updated_at')->label(false) ?>

    <?php // echo $form->field($model, 'phone')->label(false) ?>

    <?= $form->field($model, 'nickname')->label(false)->textInput(['placeholder'=>'昵称']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app/html', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app/html', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
