<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?= Html::cssFile('@web/laod/css/fontello.css') ?>

<style>
#icon-list span {
    padding: 10px;
    background: #000000;
    color: #fff;
    border-radius: 100%;
    font-size: 30px;
    font-size: 3.0rem;
    line-height: 0;
    margin-right: 5px;
    margin-top:5px;
    cursor: pointer;
    display: inline-block;
}
</style>

<div id="icon-list" style="display: none;padding: 10px;">
    <span class="icon-glass"></span>
    <span class="icon-music"></span>
    <span class="icon-search"></span>
    <span class="icon-mail"></span>
    <span class="icon-mail-alt"></span>
    <span class="icon-mail-squared"></span>
    <span class="icon-heart"></span>
    <span class="icon-heart-empty"></span>
    <span class="icon-star"></span>
    <span class="icon-star-empty"></span>
    <span class="icon-user"></span>
    <span class="icon-picture"></span>
    <span class="icon-videocam"></span>
    <span class="icon-video"></span>
    <span class="icon-camera"></span>
    <span class="icon-camera-alt"></span>
    <span class="icon-th-list"></span>
    <span class="icon-ok"></span>
    <span class="icon-ok-circled"></span>
    <span class="icon-ok-circled2"></span>
    <span class="icon-ok-squared"></span>
    <span class="icon-cancel"></span>
    <span class="icon-cancel-circled"></span>
    <span class="icon-cancel-circled2"></span>
    <span class="icon-plus"></span>
    <span class="icon-plus-circled"></span>
    <span class="icon-plus-squared"></span>
    <span class="icon-plus-squared-alt"></span>
    <span class="icon-minus"></span>
    <span class="icon-minus-circled"></span>
    <span class="icon-minus-squared"></span>
    <span class="icon-minus-squared-alt"></span>
    <span class="icon-help"></span>
    <span class="icon-help-circled"></span>
    <span class="icon-info-circled"></span>
    <span class="icon-info"></span>
    <span class="icon-home"></span>
    <span class="icon-link"></span>
    <span class="icon-link-ext"></span>
    <span class="icon-link-ext-alt"></span>
    <span class="icon-attach"></span>
    <span class="icon-lock"></span>
    <span class="icon-lock-open-alt"></span>
    <span class="icon-pin"></span>
    <span class="icon-eye"></span>
    <span class="icon-eye-off"></span>
    <span class="icon-tag"></span>
    <span class="icon-bookmark"></span>
    <span class="icon-flag"></span>
    <span class="icon-flag-checkered"></span>
    <span class="icon-thumbs-up"></span>
    <span class="icon-thumbs-down"></span>
    <span class="icon-thumbs-up-alt"></span>
    <span class="icon-thumbs-down-alt"></span>
    <span class="icon-download"></span>
    <span class="icon-upload"></span>
    <span class="icon-download-cloud"></span>
    <span class="icon-upload-cloud"></span>
    <span class="icon-reply"></span>
    <span class="icon-quote-left"></span>
    <span class="icon-forward"></span>
    <span class="icon-quote-right"></span>
    <span class="icon-code"></span>
    <span class="icon-export"></span>
    <span class="icon-export-alt"></span>
    <span class="icon-share"></span>
    <span class="icon-share-squared"></span>
    <span class="icon-pencil"></span>
    <span class="icon-edit"></span>
    <span class="icon-pencil-squared"></span>
    <span class="icon-print"></span>
    <span class="icon-retweet"></span>
    <span class="icon-keyboard"></span>
    <span class="icon-gamepad"></span>
    <span class="icon-comment"></span>
    <span class="icon-chat"></span>
    <span class="icon-comment-empty"></span>
    <span class="icon-bell"></span>
    <span class="icon-bell-alt"></span>
    <span class="icon-attention-alt"></span>
    <span class="icon-attention"></span>
    <span class="icon-attention-circled"></span>
    <span class="icon-location"></span>
    <span class="icon-direction"></span>
    <span class="icon-compass"></span>
    <span class="icon-trash"></span>
    <span class="icon-doc"></span>
    <span class="icon-doc-text"></span>
    <span class="icon-doc-inv"></span>
    <span class="icon-doc-text-inv"></span>
    <span class="icon-folder"></span>
    <span class="icon-folder-open"></span>
    <span class="icon-box"></span>
    <span class="icon-folder-empty"></span>
    <span class="icon-rss"></span>
    <span class="icon-rss-squared"></span>
    <span class="icon-phone"></span>
    <span class="icon-phone-squared"></span>
    <span class="icon-sliders"></span>
    <span class="icon-cog"></span>
    <span class="icon-basket"></span>
    <span class="icon-calendar"></span>
    <span class="icon-calendar-empty"></span>
    <span class="icon-mic"></span>
    <span class="icon-mute"></span>
    <span class="icon-volume-up"></span>
    <span class="icon-volume-down"></span>
    <span class="icon-volume-off"></span>
    <span class="icon-headphones"></span>
    <span class="icon-clock"></span>
    <span class="icon-lightbulb"></span>
    <span class="icon-resize-full"></span>
    <span class="icon-resize-full-alt"></span>
    <span class="icon-resize-small"></span>
    <span class="icon-resize-vertical"></span>
    <span class="icon-resize-horizontal"></span>
    <span class="icon-zoom-in"></span>
    <span class="icon-zoom-out"></span>
    <span class="icon-down-circled2"></span>
    <span class="icon-up-circled2"></span>
    <span class="icon-left-circled2"></span>
    <span class="icon-right-circled2"></span>
    <span class="icon-down-dir"></span>
    <span class="icon-up-dir"></span>
    <span class="icon-left-dir"></span>
    <span class="icon-right-dir"></span>
    <span class="icon-down-open"></span>
    <span class="icon-left-open"></span>
    <span class="icon-right-open"></span>
    <span class="icon-up-open"></span>
    <span class="icon-angle-left"></span>
    <span class="icon-angle-right"></span>
    <span class="icon-angle-up"></span>
    <span class="icon-angle-down"></span>
    <span class="icon-angle-circled-left"></span>
    <span class="icon-angle-circled-right"></span>
    <span class="icon-angle-circled-up"></span>
    <span class="icon-angle-circled-down"></span>
    <span class="icon-angle-double-left"></span>
    <span class="icon-angle-double-right"></span>
    <span class="icon-angle-double-up"></span>
    <span class="icon-angle-double-down"></span>
    <span class="icon-down"></span>
    <span class="icon-left"></span>
    <span class="icon-right"></span>
    <span class="icon-up"></span>
    <span class="icon-down-big"></span>
    <span class="icon-left-big"></span>
    <span class="icon-right-big"></span>
    <span class="icon-up-big"></span>
    <span class="icon-left-circled"></span>
    <span class="icon-right-circled"></span>
    <span class="icon-up-circled"></span>
    <span class="icon-down-circled"></span>
    <span class="icon-cw"></span>
    <span class="icon-arrows-cw"></span>
    <span class="icon-exchange"></span>
    <span class="icon-expand"></span>
    <span class="icon-collapse"></span>
    <span class="icon-expand-right"></span>
    <span class="icon-collapse-left"></span>
    <span class="icon-play"></span>
    <span class="icon-play-circled"></span>
    <span class="icon-play-circled2"></span>
    <span class="icon-stop"></span>
    <span class="icon-eject"></span>
    <span class="icon-desktop"></span>
    <span class="icon-signal"></span>
    <span class="icon-laptop"></span>
    <span class="icon-tablet"></span>
    <span class="icon-mobile"></span>
    <span class="icon-globe"></span>
    <span class="icon-inbox"></span>
    <span class="icon-cloud"></span>
    <span class="icon-flash"></span>
    <span class="icon-moon"></span>
    <span class="icon-umbrella"></span>
    <span class="icon-flight"></span>
    <span class="icon-fighter-jet"></span>
    <span class="icon-paper-plane"></span>
    <span class="icon-paper-plane-empty"></span>
    <span class="icon-space-shuttle"></span>
    <span class="icon-align-left"></span>
    <span class="icon-align-center"></span>
    <span class="icon-align-right"></span>
    <span class="icon-align-justify"></span>
    <span class="icon-list"></span>
    <span class="icon-crop"></span>
    <span class="icon-scissors"></span>
    <span class="icon-off"></span>
    <span class="icon-suitcase"></span>
    <span class="icon-qrcode"></span>
    <span class="icon-check"></span>
    <span class="icon-tint"></span>
    <span class="icon-circle"></span>
    <span class="icon-dot-circled"></span>
    <span class="icon-asterisk"></span>
    <span class="icon-credit-card"></span>
    <span class="icon-gift"></span>
    <span class="icon-floppy"></span>
    <span class="icon-key"></span>
    <span class="icon-rocket"></span>
    <span class="icon-bug"></span>
    <span class="icon-tasks"></span>
    <span class="icon-money"></span>
    <span class="icon-truck"></span>
    <span class="icon-coffee"></span>
    <span class="icon-food"></span>
    <span class="icon-h-sigh"></span>
    <span class="icon-smile"></span>
    <span class="icon-frown"></span>
    <span class="icon-meh"></span>
    <span class="icon-shield"></span>
    <span class="icon-cube"></span>
    <span class="icon-apple"></span>
    <span class="icon-android"></span>
    <span class="icon-foursquare"></span>
    <span class="icon-github-circled"></span>
    <span class="icon-github-squared"></span>
    <span class="icon-gittip"></span>
    <span class="icon-google"></span>
    <span class="icon-html5"></span>
    <span class="icon-pinterest-circled"></span>
    <span class="icon-pinterest-squared"></span>
    <span class="icon-qq"></span>
    <span class="icon-renren"></span>
    <span class="icon-dribbble"></span>
    <span class="icon-tencent-weibo"></span>
    <span class="icon-wechat"></span>
    <span class="icon-weibo"></span>
    <span class="icon-wordpress"></span>
    <span class="icon-youtube"></span>
    <span class="icon-lemon"></span>
    <span class="icon-spin5"></span>
    <span class="icon-spin4"></span>
    <span class="icon-yen"></span>
    <span class="icon-home-1"></span>
    <span class="icon-home-2"></span>
    <span class="icon-home-3"></span>
    <span class="icon-home-circled"></span>
    <span class="icon-home-4"></span>
    <span class="icon-home-5"></span>
</div>

<div class="category-form">
    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'layui-form'],
        'fieldConfig' => [
            'template' => "<div class=\"layui-form-item\">{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],  //修改label的样式
        ],
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->dropDownList($model->commonStatus ,['prompt'=>'选择可见']) ?>

    <?php echo $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::button($model->isNewRecord ? Yii::t('app/html','Create') : Yii::t('app/html','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',"lay-submit"=>"","lay-filter"=>"category"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
    layui.use(['form'], function(){
        var form = layui.form;

        //监听提交
        form.on('submit(category)', function(data){
            $.post("<?= Yii::$app->request->url; ?>",data.field,function (res) {
                if(res.status == 200){
                    layer.msg(res.msg,function () {
                        window.location.href = "/category";
                    })
                }else{
                    layer.msg(res.msg);
                }
            })
            return false;
        });
    });

    $(function(){
        $("input[name='Category[icon]']").click(function(){
            layer.open({
                type: 1,
                title: '选择图标',
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['700px', '450px'],
                content: $('#icon-list')
            });
        });

        $("#icon-list span").click(function(){
            var icon = $(this).attr("class");
            $("input[name='Category[icon]']").val(icon);
            $(".layui-layer-close").click();
        })
    })
</script>
