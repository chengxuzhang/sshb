<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="shares-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],  //修改label的样式
        ],
    ]); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? '加入' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',"lay-submit"=>"", "lay-filter"=>"mainform"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    layui.use(['form'], function(){
        var form = layui.form;

        //监听提交
        form.on('submit(mainform)', function(data){
            $.post("",data.field,function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.href = "/shares";
                    });
                }else{
                    layer.msg(res.msg);
                }
            });
            return false;
        });
    });
</script>
