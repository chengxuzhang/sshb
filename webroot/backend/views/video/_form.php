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
    layui.config({
        base: '/layui/lay/modules/' //layui自定义layui组件目录
    }).use(['form','upload', 'croppers'], function(){
        var form = layui.form;
        var upload = layui.upload;
        var croppers = layui.croppers;

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

        //创建一个头像上传组件
        croppers.render({
            elem: '#test1'
            , saveW: 420     //保存宽度
            , saveH: 300   //保存高度
            , mark: 420/300    //选取比例
            , field: 'upload'
            , area: '900px'  //弹窗宽度
            , url: "/video/upload?action=uploadimage"  //图片上传接口返回和（layui 的upload 模块）返回的JOSN一样
            , done: function (data) { //上传完毕回调
                layer.msg("上传成功！");
                $("#picUrl").val(data.url);
                $("#demo1").attr("src", "<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname"); ?>" + data.url);
            }
        })

        // 页面初始化设置视频
        var videoSrc = "<?= CacheConfig::getConfigCache("endpoint"); ?>" + $("#video").val();
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
