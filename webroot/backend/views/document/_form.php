<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\components\CacheConfig;
?>

<?= Html::cssFile('@web/tag/css/tab.css') ?>
<?= Html::cssFile('@web/oss-form/style.css') ?>

<div class="document-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class=\"layui-form-item\">{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],  //修改label的样式
        ],
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList($category ,['prompt'=>'选择分类']) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true, 'style'=>'height:120px;']) ?>

    <?= $form->field($model, 'status')->dropDownList($model->commonStatus ,['prompt'=>'选择状态']) ?>

    <?= $form->field($model, 'position')->dropDownList($model->positionParams ,['prompt'=>'是否推荐']) ?>

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
        <?= Html::button($model->isNewRecord ? Yii::t('app/html','Create') : Yii::t('app/html','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',"lay-submit"=>"","lay-filter"=>"document"]) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<style>
    .layui-upload-img {
        width: 92px;
        height: auto;
        margin: 0 10px 10px 0;
    }
</style>

<script>
    var coverUrl = $("#coverUrl").val();
    if(coverUrl != '') $('#demo1').attr('src', "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + coverUrl);
    layui.config({
        base: '/layui/lay/modules/' //layui自定义layui组件目录
    }).use(['upload','layer','form', 'croppers'], function(){
        var $ = layui.jquery
            ,upload = layui.upload
            ,form = layui.form
            ,croppers = layui.croppers
            ,layer = layui.layer;

        //监听提交
        form.on('submit(document)', function(data){
            $.post("<?= Yii::$app->request->url; ?>",data.field,function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.href = "/document";
                    })
                }else{
                    layer.msg(res.msg);
                }
            })
            return false;
        });

        //创建一个头像上传组件
        croppers.render({
            elem: '#test1'
            , saveW: 420     //保存宽度
            , saveH: 300   //保存高度
            , mark: 420/300    //选取比例
            , field: 'upload'
            , area: '900px'  //弹窗宽度
            , url: "/document/upload?action=uploadimage"  //图片上传接口返回和（layui 的upload 模块）返回的JOSN一样
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
