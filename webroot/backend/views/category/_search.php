<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['class'=>'form-inline'],
    ]); ?>

    <?= $form->field($model, 'title')->label(false)->textInput([
            'placeholder'=>'分类名称'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app/html','Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app/html','Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
