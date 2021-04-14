<?php

use backend\components\CacheConfig;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="video-form">
    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],  //修改label的样式
        ],
    ]); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sort')->textInput() ?>
    <?= $form->field($model, 'link', [
        'template' => "<div class='layui-form-item'>{label}\n<div class=\"col-lg-4\"><div class=\"layui-upload\">
                        <button type=\"button\" class=\"layui-btn btnVideo\" id=\"btnVideo\">上传视频</button>
                        <div class=\"layui-upload-list\" id=\"layui-upload-list\">
                        <video id=\"videoTag\" controls=\"controls\"/>
                        <p id=\"demoText\"></p></div></div>{input}</div></div>",
    ])->textInput([
        'id' => 'video',
        'type' => 'hidden'
    ]) ?>
    <?= $form->field($model, 'pic', [
        'template' => "<div class=\"layui-form-item\">{label}\n<div class=\"col-lg-4\"><div class=\"layui-upload\">
                        <button type=\"button\" class=\"layui-btn\" id=\"test1\">上传图片</button>
                        <div class=\"layui-upload-list\" id=\"layui-upload-list\">
                        <img class=\"layui-upload-img\" id=\"demo1\"><p id=\"demoText\">
                        </p></div></div>{input}</div></div>",
    ])->textInput([
        'id' => 'picUrl',
        'type' => 'hidden'
    ]) ?>
    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true])->hint('多个用逗号隔开') ?>
    <div class="form-group">
        <?= Html::button('保存', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',"lay-submit"=>"", "lay-filter"=>"mainform"]) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<style>
    .layui-upload-img {
        width: 92px;
        height: auto;
        margin: 0 10px 10px 0;
    }
    video{
        width:500px;
        height: auto;
    }
</style>

<script>
    var videoLinkList = []; // 视频地址列表
</script>

<div id="uploadVideo" style="display: none;">
    <div style="padding: 20px;">
        <h5>说明</h5>
        <h6>1.可上传MP4视频文件和m3u8格式的视频文件</h6>
        <h6>2.如果同时选中多个视频进行上传只选择最后一个视频进行保存！</h6>
        <h6>3.如果上传m3u8格式视频，请选中所有的ts文件，并将m3u8文件上传，否则出现视频播放失败！</h6>
        <h4>您所选择的文件列表：</h4>
        <div id="ossfile">你的浏览器不支持flash,Silverlight或者HTML5！</div>
        <br/>
        <div id="container">
            <a id="selectfiles" href="javascript:void(0);" class='btn btn-default btn-md'>选择文件</a>
            <a id="postfiles" href="javascript:void(0);" class='btn btn-primary btn-md'>开始上传</a>
        </div>
        <pre id="console"></pre>
        <p>&nbsp;</p>
    </div>
</div>

<?= Html::cssFile("@web/oss/style.css") ?>
<?= Html::jsFile("@web/oss/lib/plupload-2.1.2/js/plupload.full.min.js") ?>
<?= Html::jsFile("@web/oss/upload.js") ?>

<script>
    var picUrl = $("#picUrl").val();
    if(picUrl != '') $('#demo1').attr('src', "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + picUrl);
    layui.use(['form','upload'], function(){
        var form = layui.form;
        var upload = layui.upload;

        //监听提交
        form.on('submit(mainform)', function(data){
            $.post("<?= Yii::$app->request->url; ?>",data.field,function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.href = "/video";
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
            ,url: '/video/upload?action=uploadimage'
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

        // 页面初始化设置视频
        var videoSrc = "<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname"); ?>" + $("#video").val();
        if($("#video").val() != ''){
            var sourceVideo = $("<source src=\""+ videoSrc +"\">");
            $("#videoTag").append(sourceVideo);
        }

        // 点击按钮上传视频
        $(".btnVideo").click(function () {
            var _this = $(this);
            document.getElementById('ossfile').innerHTML = '';
            layer.open({
                type: 1,
                title: '上传视频管理',
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['700px', '450px'],
                content: $('#uploadVideo'),
                btn: ['确定', '取消'],
                yes: function(index, layero){
                    var videoUrl = "";
                    if(videoLinkList.length<=0){
                        layer.msg("视频还未上传或未上传成功！");
                        return false;
                    }
                    videoUrl = videoLinkList[videoLinkList.length-1];
                    var src = "<?= CacheConfig::getConfigCache("endpoint"); ?>"+videoUrl,
                        sourceDom = $("<source src=\""+ src +"\">");
                    if(_this.parent().find("video").eq(0).find("source")){
                        sourceDom = $("<video controls=\"controls\"><source src=\""+ src +"\"></video>");
                        _this.next().find("video").remove();
                        _this.next().append(sourceDom);
                    }else{
                        _this.parent().find("video").eq(0).append(sourceDom);
                    }
                    _this.parent().parent().find("input").eq(0).val(videoUrl);
                    layer.closeAll();
                }
            });
        });

        //调用示例
        layer.photos({
            photos: '#layui-upload-list'
            ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
        });
    });
</script>
