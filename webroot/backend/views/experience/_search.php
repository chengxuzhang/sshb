<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="experience-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['placeholder'=>'姓名'])->label(false) ?>

    <?= $form->field($model, 'phone')->textInput(['placeholder'=>'电话'])->label(false) ?>

    <?= $form->field($model, 'title')->textInput(['placeholder'=>'主题'])->label(false) ?>

    <?= $form->field($model, 'email')->textInput(['placeholder'=>'邮箱'])->label(false) ?>

    <?= $form->field($model, 'content')->textInput(['placeholder'=>'留言内容'])->label(false) ?>

    <?php echo $form->field($model, 'status')->textInput(['placeholder'=>'状态'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('查询', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
