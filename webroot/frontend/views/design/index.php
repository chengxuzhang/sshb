<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/design.css") ?>
<style>
    .bimvr_nav{
        background: none;
    }
    .zj_color_current{
        background-color: white;
        color:rgba(0,110,255,1) !important;
    }
    .runNum{
        margin: 0 auto;
        padding: 0;
        overflow: hidden;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-weight: bold;
        position: relative;
        display: inline-block;
    }
    .runNum>li{
        list-style: none;
        width: 10px;
        float: left;
        position: absolute;
        color: white;
        font-size: 24px;
    }
    .bimvr_nav,.navbar-default{
        background-color: transparent;
        border-bottom: 1px solid rgba(0,93,218,1) !important;
    }
    html,body{
        overflow-y: hidden;
        overflow-x: hidden;
    }
    hr{
        width: 180px;
        margin: 0 auto;
    }
    /*媒体查询*/
    @media screen and (max-width: 980px) {
        .runNum{
            height: 30px;
            line-height: 30px;
        }
    }
</style>

<!--wrap-->
<div class="container-fluid">
    <!--mp-->
    <div class="row vr_nav visible-xs">
        <nav class="navbar navbar-default m_loser" role="navigation" style="margin: 0;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#example-navbar-collapse">
                        <img src="../m-images/icon_daohang.png" class="m_dh" style="position: absolute;"/>
                        <img src="../m-images/close.png" class="m_dh1" style="position: absolute;"/>
                    </button>
                    <a class="navbar-brand" href="#" style="padding-left: 30px;"><img src="../m-images/logo_black_xiao.png" class="img-responsive" style="width: 40%;"/></a>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav m_menu">
                        <!-- 手机端头部开始 -->
                        <?php echo $this->render('/common/_m_header'); ?>
                        <!-- 手机端头部结束 -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--nav-->
    <div class="row vr_nav bimvr_nav hidden-xs">
        <div class="vr_nav_con">
            <div class="col-lg-3 col-md-3 col-sm-3 zj_logo hidden-xs"><h1><a href="/"><img src="../images/logo_bai.png"/></a></h1></div>
            <div class="col-lg-3 zj_logo_m visible-xs"><h1><img src="../images/logo_bai.png"/></h1></div>
            <ul class="col-lg-9 col-md-9 col-sm-9 zj_menu hidden-xs">
                <!-- 头部开始 -->
                <?php echo $this->render('/common/_header'); ?>
                <!-- 头部结束 -->
            </ul>
        </div>
    </div>
    <div class="row design_banner hidden-xs">
        <div class="design_video">
            <video width="auto" height="auto" src="https://zhenjia002.oss-cn-beijing.aliyuncs.com/zhenjia/video/20190220/Yue7C7O79bsbKVxd8qqDXVCIdj1iRPjR/RGJw2Kadbj.mp4" loop="loop" autoplay="autoplay"></video>
        </div>
        <div class="design_mask"></div>
        <div class="zj_design_1">
            <div class="col-lg-12 col-xs-12 zj_design_card">
                <div class="zj_design_box">
                    <img src="images/2_slices/rg.png" alt="">
                    <div style="padding: 95px 0 0 35px;float:left;">
                        <span class="title">一分钟生成效果图</span>
                        <span class="remark">用人工智能分析出您的专属家</span>
                        <a href="/say.html" class="btn_tiyan" id="btn_tiyan">开始体验</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="zj_design_footer">
            <ul>
                <li>
                    <ul class="runNum" id="tiyan"></ul>
                    <hr>
                    <span class="txt">用户体验数量</span>
                </li>
                <li>
                    <ul class="runNum" id="soft"></ul>
                    <hr>
                    <span class="txt">已使用真家软件数量</span>
                </li>
                <li>
                    <span class="num"><?= CacheConfig::getConfigCache("design_soft_comment") ?>%</span>
                    <hr style="margin-top: 5px;">
                    <span class="txt">客户满意好评率</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row design_banner visible-xs">
        <div class="design_mask"></div>
        <div class="zj_design_1">
            <div class="col-lg-12 col-xs-12">
                <div class="zj_design_box">
                    <img src="images/2_slices/rg.png" alt="">
                    <div style="padding: 35px 0 0;">
                        <span class="title">一分钟生成效果图</span>
                        <span class="remark">用人工智能分析出您的专属家</span>
                        <a href="/say.html" class="btn_tiyan">开始体验</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="zj_design_footer">
            <ul>
                <li>
                    <ul class="runNum" id="tiyan1"></ul>
                    <hr>
                    <span class="txt">用户体验数量</span>
                </li>
                <li>
                    <ul class="runNum" id="soft1"></ul>
                    <hr>
                    <span class="txt">已使用真家软件数量</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    var ismovecard = false;
</script>
<?= Html::jsFile("@web/js/jquery.hover3d.js") ?>
<script>
    $(document).ready(function(){
        if(isFirefox=navigator.userAgent.indexOf("Firefox")>0){
            return false;
        }
        $(".zj_design_card").hover3d({
            selector: ".zj_design_box",
            shine: true,
//            sensitivity: 20,
        });
    });
</script>
<?= Html::jsFile("@web/js/number-scroll.js") ?>
<script type="text/javascript">
    if(window.localStorage.zhenjia_tiyan_num){
        $("#tiyan").runNum(parseInt(window.localStorage.zhenjia_tiyan_num));
    }else{
        $("#tiyan").runNum(<?= CacheConfig::getConfigCache("design_tiyan") ?>);
    }
    if(window.localStorage.zhenjia_soft_num){
        $("#soft").runNum(parseInt(window.localStorage.zhenjia_soft_num),{interval:5000,type:2});
    }else{
        $("#soft").runNum(<?= CacheConfig::getConfigCache("design_soft") ?>,{interval:5000,type:2});
    }

    if(window.localStorage.zhenjia_tiyan_num){
        $("#tiyan1").runNum(parseInt(window.localStorage.zhenjia_tiyan_num));
    }else{
        $("#tiyan1").runNum(<?= CacheConfig::getConfigCache("design_tiyan") ?>);
    }
    if(window.localStorage.zhenjia_soft_num){
        $("#soft1").runNum(parseInt(window.localStorage.zhenjia_soft_num),{interval:5000,type:2});
    }else{
        $("#soft1").runNum(<?= CacheConfig::getConfigCache("design_soft") ?>,{interval:5000,type:2});
    }

    $("#btn_tiyan").click(function () {
        console.log("天眼");
    });

    $("#btn_tiyan").mouseenter(function () {
        $(this).parent().parent().attr("style","");
        ismovecard = true;
    });
    $("#btn_tiyan").mouseleave(function () {
        ismovecard = false;
    })
</script>
<?= CacheConfig::getConfigCache("baidu_tongji") ?>

