<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ExperienceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experience-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline']
    ]); ?>

    <?= $form->field($model, 'name')->label(false)->textInput(['placeholder'=>'姓名']) ?>

    <?= $form->field($model, 'phone')->label(false)->textInput(['placeholder'=>'电话']) ?>

    <?= $form->field($model, 'type')->label(false)->textInput(['placeholder'=>'来源']) ?>

    <?= $form->field($model, 'province')->label(false)->textInput(['placeholder'=>'省份']) ?>

    <?php echo $form->field($model, 'city')->label(false)->textInput(['placeholder'=>'城市']) ?>

    <?php // echo $form->field($model, 'createTime') ?>

    <?php echo $form->field($model, 'status')->dropDownList($model->statusParams ,['prompt'=>'选择处理结果'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app/html', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app/html', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
