<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="config-form">

    <?php $form = ActiveForm::begin([
        'enableClientValidation'=>false,
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],  //修改label的样式
        ],
    ]); ?>

    <?= $form->field($model, 'fieldName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList($model->_types ,['prompt'=>'选择分类']) ?>

    <?= $form->field($model, 'status')->dropDownList($model->commonStatus ,['prompt'=>'选择可见']) ?>

    <?= $form->field($model, 'isShow')->dropDownList($model->commonStatus ,['prompt'=>'选择可见']) ?>

    <?= $form->field($model, 'config_type')->dropDownList(getConfigList(\backend\components\CacheConfig::getConfigCache("config_type"), ":") ,['prompt'=>'选择分类']) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'value')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? Yii::t('app/html', 'Create') : Yii::t('app/html', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',"lay-submit"=>"", "lay-filter"=>"mainform"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    layui.use(['form'], function(){
        var form = layui.form;

        // 提交信息
        common_form(form, "<?= Yii::$app->request->url; ?>", "<?= Yii::$app->controller->id ?>");
    });
</script>
