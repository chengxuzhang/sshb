<?php

use frontend\components\Html;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/zj-mobile-vr.css") ?>

<div class="page">
    <div class="weui-form">
        <div class="weui-form__text-area"></div>
        <div class="weui-form__text-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__control-area">
            <a class="weui-btn weui-btn_primary zj-mobile__btn zj-mobile__btn_primary" href="javascript:void(0);" id="showTooltips1">查看VR全景图</a>
            <?php
                if($cloud->pdf == ""){
            ?>
            <a class="weui-btn weui-btn_primary weui-btn_disabled zj-mobile__btn zj-mobile__btn_default" href="javascript:void(0);" onclick="showTips()">效果图pdf展示方案</a>
            <?php }else{ ?>
                <a class="weui-btn weui-btn_primary zj-mobile__btn zj-mobile__btn_default" href="javascript:void(0);" id="showTooltips2">效果图pdf展示方案</a>
            <?php } ?>
        </div>
        <div class="weui-form__opr-area"></div>
        <div class="weui-form__tips-area"></div>
        <div class="weui-form__extra-area">
            <div class="weui-footer">
                <img src="/m-images/vr_logo.png" alt="" style="width: 20%;">
            </div>
        </div>
    </div>
</div>

<script>
    function showTips() {
        $.toast("暂无资源！", "forbidden");
        return;
    }

    $(function(){
        var currentUrl = "<?= Yii::$app->request->get("url"); ?>";
        $('#showTooltips1').on('click', function(){
            $.showLoading();
            $.post("/cloud/mobile/api", {"url":currentUrl, "is_view":10}, function (result) {
                $.hideLoading();
                if(result.result){
                    window.location.href = result.data.url;
                }else{
                    $.toast(result.msg, "forbidden");
                }
            })
        });
        $('#showTooltips2').on('click', function(){
            $.showLoading();
            $.post("/cloud/mobile/api", {"url":currentUrl, "is_down":10}, function (result) {
                $.hideLoading();
                if(result.result){
                    window.location.href = result.data.url;
                }else{
                    $.toast(result.msg, "forbidden");
                }
            })
        });
    });
</script>

