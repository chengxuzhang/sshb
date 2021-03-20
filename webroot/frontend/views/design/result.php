<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/design.css") ?>
<style>
    .bimvr_nav,.navbar-default{
        background:rgba(0,110,255,1);
    }
    .zj_color_current{
        background-color: white;
        color:rgba(0,110,255,1) !important;
    }
    .navbar-fixed-top{
        background:rgba(0,110,255,0.5) !important;
    }
</style>

<!--wrap-->
<div class="container-fluid vr_wrap">
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
    <div class="row zj_result_1">
        <div class="zj_result_box">
            <div class="left">
                <span class="title">生活方式</span>
                <span class="title1"><?= $result['title'] ?></span>
                <span class="remark"><?= $result['remark'] ?></span>
            </div>
            <div class="right">
                <img lazy-src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").explode(",",$result['pics'])[0] ?>" alt="" class="lazy">
            </div>
        </div>
    </div>
    <div class="row zj_result_2">
        <div class="zj_result_box">
            <div class="left">
                <img lazy-src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").explode(",",$result['pics'])[1] ?>" alt="" class="lazy">
            </div>
            <div class="right">
                <img lazy-src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").explode(",",$result['pics'])[2] ?>" alt="" class="lazy">
            </div>
        </div>
    </div>
    <div class="row zj_result_3">
        <div class="zj_result_box">
            <div class="left">
                <img lazy-src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").explode(",",$result['pics'])[3] ?>" alt="" class="lazy">
            </div>
            <div class="right">
                <span class="remark">通过测试，想必对自己喜欢的风格心里也有所认知了吧，让我们真家的人工智能设计软件为你的新家规划设计吧！</span>
                <a href="javascript:;" class="zj_sqty">立即体验</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        function changeSize() {
            var h = $(".zj_result_1").find(".right").outerHeight();
            if(goPAGE()){
                $(".zj_result_1").find(".left").css("height","auto");
            }else{
                $(".zj_result_1").find(".left").css("height",h+"px");
            }

            var h2 = $(".zj_result_2").find(".right").outerHeight();
            $(".zj_result_2").find(".left").css("height",h2+"px");

            var h3 = $(".zj_result_3").find(".left").outerHeight();
            if(goPAGE()){
                $(".zj_result_3").find(".right").css("height","auto");
            }else{
                $(".zj_result_3").find(".right").css("height",h3+"px");
            }
        }

        changeSize();
        var n = 1;
        var timer = setInterval(function () {
            n++;
            changeSize();
            if(n>5){
                clearInterval(timer);
            }
        },1000);

        $(window).resize(function () {
            changeSize();
        });

        $(".lazy").each(function (k,v) {
            var img = "";
            if(goPAGE()){
                img = $(v).attr("lazy-src") + "?x-oss-process=image/auto-orient,1/interlace,1/resize,m_lfit,w_420/quality,q_90";
            }else{
                img = $(v).attr("lazy-src");
            }
            $(v).attr("src", img);
        });

        function goPAGE() {
            if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
                /*window.location.href="你的手机版地址";*/
                return true;
            }
            else {
                /*window.location.href="你的电脑版地址";    */
                return false;
            }
        }
    })
</script>

<?= CacheConfig::getConfigCache("baidu_tongji") ?>