<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\components\CacheConfig;
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
        'enableClientValidation'=>false,
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],  //修改label的样式
        ],
    ]); ?>

    <?= $form->field($model, 'newPwd')->textInput(['maxlength' => true, 'type'=>'password']) ?>

    <?= $form->field($model, 'newPwdRe')->textInput(['maxlength' => true, 'type'=>'password']) ?>

    <div class="form-group">
        <?= Html::button(Yii::t('app/html', 'Update'), ['class' => 'btn btn-primary',"lay-submit"=>"", "lay-filter"=>"mainform"]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<script>
    layui.use(['form','upload'], function(){
        var form = layui.form;
        var upload = layui.upload;

        //监听提交
        form.on('submit(mainform)', function(data){
            $.post("/site/password",data.field,function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.href = "/site";
                    });
                }else{
                    layer.msg(res.msg);
                }
            });
            return false;
        });
    });
</script>
