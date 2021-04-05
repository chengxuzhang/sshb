<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'class' => 'form-inline',
    ]); ?>

    <?= $form->field($model, 'id')->label(false) ?>

    <?= $form->field($model, 'uid')->label(false) ?>

    <?= $form->field($model, 'name')->label(false) ?>

    <?= $form->field($model, 'title')->label(false) ?>

    <?= $form->field($model, 'category_id')->label(false) ?>

    <?php // echo $form->field($model, 'description')->label(false) ?>

    <?php // echo $form->field($model, 'root')->label(false) ?>

    <?php // echo $form->field($model, 'pid')->label(false) ?>

    <?php // echo $form->field($model, 'model_id')->label(false) ?>

    <?php // echo $form->field($model, 'type')->label(false) ?>

    <?php // echo $form->field($model, 'position')->label(false) ?>

    <?php // echo $form->field($model, 'link_id')->label(false) ?>

    <?php // echo $form->field($model, 'cover_id')->label(false) ?>

    <?php // echo $form->field($model, 'display')->label(false) ?>

    <?php // echo $form->field($model, 'deadline')->label(false) ?>

    <?php // echo $form->field($model, 'attach')->label(false) ?>

    <?php // echo $form->field($model, 'view')->label(false) ?>

    <?php // echo $form->field($model, 'comment')->label(false) ?>

    <?php // echo $form->field($model, 'extend')->label(false) ?>

    <?php // echo $form->field($model, 'level')->label(false) ?>

    <?php // echo $form->field($model, 'create_time')->label(false) ?>

    <?php // echo $form->field($model, 'update_time')->label(false) ?>

    <?php // echo $form->field($model, 'status')->label(false) ?>

    <?php // echo $form->field($model, 'cover_url')->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
