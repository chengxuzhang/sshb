<?php

use backend\components\CacheConfig;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],  //修改label的样式
        ],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true, 'style'=>'height:120px;']) ?>

    <?= $form->field($model, 'status')->dropDownList($model->commonStatus ,['prompt'=>'选择状态']) ?>

    <?= $form->field($model, 'category_id')->dropDownList(getConfigList(CacheConfig::getConfigCache('product_type'), ":") ,['prompt'=>'选择状态']) ?>

    <?= $form->field($model, 'cover_url', [
        'template' => "<div class=\"layui-form-item\">{label}\n<div class=\"col-lg-4\"><div class=\"layui-upload\">
                        <button type=\"button\" class=\"layui-btn\" id=\"test1\">上传图片</button>
                        <div class=\"layui-upload-list\" id=\"layui-upload-list\">
                        <img class=\"layui-upload-img\" id=\"demo1\"><p id=\"demoText\">
                        </p></div></div>{input}</div></div>",
    ])->textInput([
        'id' => 'coverUrl',
        'type' => 'hidden'
    ]) ?>

    <?php echo $form->field($article, 'content',[
        'template' => "<div class=\"layui-form-item\">{label}\n<div class=\"col-lg-8\">{input}</div></div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ])->widget('backend\components\UEditor',[
        'clientOptions'=>[
            'initialFrameHeight' => '350',
            'autoHeightEnabled' => false,
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::button('保存', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',"lay-submit"=>"", "lay-filter"=>"mainform"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    var coverUrl = $("#coverUrl").val();
    if(coverUrl != '') $('#demo1').attr('src', "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + coverUrl);
    layui.config({
        base: '/layui/lay/modules/' //layui自定义layui组件目录
    }).use(['form', 'upload', 'croppers'], function(){
        var form = layui.form;
        var upload = layui.upload;
        var croppers = layui.croppers;

        //监听提交
        form.on('submit(mainform)', function(data){
            $.post("<?= Yii::$app->request->url; ?>",data.field,function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.href = "/product";
                    });
                }else{
                    layer.msg(res.msg);
                }
            });
            return false;
        });

        //创建一个头像上传组件
        croppers.render({
            elem: '#test1'
            , saveW: 480     //保存宽度
            , saveH: 360   //保存高度
            , mark: 480/360    //选取比例
            , field: 'upload'
            , area: '900px'  //弹窗宽度
            , url: "/product/upload?action=uploadimage"  //图片上传接口返回和（layui 的upload 模块）返回的JOSN一样
            , done: function (data) { //上传完毕回调
                layer.msg("上传成功！");
                $("#coverUrl").val(data.url);
                $("#demo1").attr("src", "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + data.url);
            }
        })

        //调用示例
        layer.photos({
            photos: '#layui-upload-list'
            ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
        });
    });
</script>
