<?php

use frontend\components\Html;
use frontend\components\CacheConfig;

$this->title = $title;
?>
<?= Html::cssFile("@web/css/aivr.css") ?>
<!--wrap-->
<div class="container-fluid vr_wrap">
    <!--mp-->
    <div class="row visible-xs">
        <div class="visible-xs">
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
                            <?php echo $this->render('/common/_mobile_header'); ?>
                            <!-- 手机端头部结束 -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-xs-12 zj_mobile_aivr zj_mobile_aivr_up" style="height: 50vh;">
            <div class="box col-xs-12">
                <span class="title">AI<sup>+</sup>3D云设计系统</span>
                <span class="remark">高效便捷的装修设计软件为设计师插上科技的翅膀<br>让设计创意不受约束</span>
                <a href="/ai.html">了解更多</a>
            </div>
        </div>
        <div class="col-xs-12 zj_mobile_aivr zj_mobile_aivr_down" style="height: 50vh;">
            <div class="box col-xs-12">
                <span class="title">裸眼VR云台</span>
                <span class="remark">裸眼VR展示设计作品，触动未来之家<br>为客户快乐打造真正所见即所得的美好家</span>
                <a href="/vr.html">了解更多</a>
            </div>
        </div>
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
    <div class="row bim_banner bimvr_banner hidden-xs">
        <div class="col-lg-12 col-md-12 col-sm-12 bimvr_banner_con">
            <div class="col-lg-6 col-md-6 col-sm-6 bimvr_left">
                <div class="bimvr_left_con">
                    <h3 class="zj_default_color zj_fz zj_fz_left">AI<sup>+</sup>3D云设计系统</h3>
                    <p class="pf">
                        <span class="zj_default_color">高效便捷的装修设计软件</span>
                        <span class="zj_default_color">为设计师插上科技的翅膀，让设计创意不受约束</span>
                    </p>
                    <h3 style="margin-top: 30px;"><a href="ai.html" class="bimvr_more bimvr_more_left"><span>了解更多</span></a></h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 bimvr_right text-right">
                <div class="bimvr_right_con">
                    <h3 class="zj_default_color zj_fz zj_fz_right">裸眼VR云台</h3>
                    <p class="pf">
                        <span class="zj_default_color">裸眼VR展示设计作品，触动未来之家</span>
                        <span class="zj_default_color">为客户快乐打造真正所见即所得的美好家</span>
                    </p>
                    <h3 style="margin-top: 30px;"><a href="vr.html"  class="bimvr_know"><span>了解更多</span></a></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?= CacheConfig::getConfigCache("baidu_tongji") ?>