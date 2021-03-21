<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\components\CacheConfig;
?>

<style>
    .layui-upload-img {
        width: 92px;
        height: auto;
        margin: 0 10px 10px 0;
    }
</style>

<div class="hdp-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],  //修改label的样式
        ],
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->commonStatus ,['prompt'=>'选择状态']) ?>

    <?= $form->field($model, 'type')->dropDownList(getConfigList(\backend\components\CacheConfig::getConfigCache("hdp"), ":") ,['prompt'=>'选择类型']) ?>

    <?php // $form->field($model, 'create_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icon', [
        'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-4\"><div class=\"layui-upload\">
                        <button type=\"button\" class=\"layui-btn\" id=\"test2\">上传图片</button>
                        <div class=\"layui-upload-list\">
                        <img class=\"layui-upload-img\" id=\"demo2\" style='cursor: pointer;'><p id=\"demoText\">
                        </p></div></div>{input}</div></div>",
    ])->textInput([
        'id' => 'iconUrl',
        'type' => 'hidden'
    ]) ?>

    <?= $form->field($model, 'pic', [
        'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-4\"><div class=\"layui-upload\">
                        <button type=\"button\" class=\"layui-btn\" id=\"test1\">上传图片</button>
                        <div class=\"layui-upload-list\">
                        <img class=\"layui-upload-img\" id=\"demo1\" style='cursor: pointer;'><p id=\"demoText2\">
                        </p></div></div>{input}</div></div>",
    ])->textInput([
        'id' => 'coverUrl',
        'type' => 'hidden'
    ]) ?>

    <?= $form->field($model, 'sort')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? Yii::t('app/html', 'Create') : Yii::t('app/html', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',"lay-submit"=>"", "lay-filter"=>"mainform"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    var coverUrl = $("#coverUrl").val();
    if(coverUrl != '') $('#demo1').attr('src', "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + coverUrl);
    if(coverUrl != '') $('#demo1').attr('layer-src', "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + coverUrl);

    // 图标
    var iconUrl = $("#iconUrl").val();
    if(iconUrl != '') $('#demo2').attr('src', "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + iconUrl);
    if(iconUrl != '') $('#demo2').attr('layer-src', "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + iconUrl);
    layui.use(['form','upload'], function(){
        var form = layui.form;
        var upload = layui.upload;

        //监听提交
        form.on('submit(mainform)', function(data){
            $.post("<?= Yii::$app->request->url; ?>",data.field,function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.href = "/hdp";
                    });
                }else{
                    layer.msg(res.msg);
                }
            });
            return false;
        });

        //普通图片上传
        var uploadInst = upload.render({
            elem: '#test1'
            ,field: 'upload'
            ,accept: 'file' //普通文件
            ,exts: 'jpg|png|bmp|jpeg' //只允许上传图片文件
            ,url: '/hdp/upload?action=uploadimage&nofix=1'
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo1').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                console.log(res);
                if(res.state == 'SUCCESS'){
                    layer.msg("上传成功！");
                    $("#coverUrl").val(res.url);
                }
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });


        //普通图片上传
        var uploadInst2 = upload.render({
            elem: '#test2'
            ,field: 'upload'
            ,accept: 'file' //普通文件
            ,exts: 'jpg|png|bmp|jpeg' //只允许上传图片文件
            ,url: '/hdp/upload?action=uploadimage&nofix=1'
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo2').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                if(res.state == 'SUCCESS'){
                    layer.msg("上传成功！");
                    $("#iconUrl").val(res.url);
                }
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText2');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst2.upload();
                });
            }
        });

        //调用示例
        layer.photos({
            photos: '.layui-upload-list'
            ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
        });
    });
</script>
