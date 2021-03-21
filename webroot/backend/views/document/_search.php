<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="document-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],
    ]); ?>

    <?= $form->field($model, 'title')->textInput([
            'placeholder'=>'请输入关键词'
    ])->label(false) ?>

    <?= $form->field($model, 'category_id')->dropDownList($category ,['prompt'=>'选择分类'])->label(false) ?>

    <?= $form->field($model, 'display')->dropDownList($model->commonStatus ,['prompt'=>'选择可见'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app/html','Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app/html','Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
