<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="config-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class' => 'form-inline'],
    ]); ?>


    <?= $form->field($model, 'fieldName')->label(false)->textInput(['placeholder'=>"配置标识"]) ?>

    <?= $form->field($model, 'type')->label(false)->dropDownList($model->_types ,['prompt'=>'选择分类']) ?>

    <?= $form->field($model, 'isShow')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'选择可见']) ?>

    <?= $form->field($model, 'title')->label(false)->textInput(['placeholder'=>"配置名称"]) ?>

    <?= $form->field($model, 'config_type')->label(false)->dropDownList(getConfigList(\backend\components\CacheConfig::getConfigCache("config_type"), ":") ,['prompt'=>'选择分类']) ?>

    <?= $form->field($model, 'status')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'选择状态']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app/html', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app/html', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
