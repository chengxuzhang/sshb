<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $title;
?>

<div class="zj_line"></div>
<!--back to top-->
<?php echo $this->render('/common/_right'); ?>
<!--wrap-->
<div class="container-fluid m_common">
    <!--nav-->
    <div class="row vr_nav zj_black_bg">
        <div class="vr_nav_con hidden-xs">
            <div class="col-lg-3 col-xs-3 zj_logo hidden-xs"><h1><a href="/"><img src="../images/logo_bai.png"/></a></h1></div>
            <div class="col-lg-3 col-xs-3 zj_logo_m visible-xs"><h1><img src="../images/logo_bai.png"/></h1></div>
            <ul class="col-lg-9 col-xs-9 zj_menu hidden-xs">
                <!-- 头部开始 -->
                <?php echo $this->render('/common/_header'); ?>
                <!-- 头部结束 -->
            </ul>
        </div>
        <div class="visible-xs">
            <nav class="navbar navbar-default m_loser" role="navigation" style="margin: 0;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <img src="../m-images/icon_daohang.png" class="m_dh" style="position: absolute;"/>
                            <img src="../m-images/close.png" class="m_dh1" style="position: absolute;"/>
                        </button>
                        <a class="navbar-brand" href="javascript:;" style="padding-left: 30px;"><img src="../m-images/logo_black_xiao.png" class="img-responsive" style="width: 40%;"/></a>
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
    <div class="row hidden-xs" style="height: 60px;"></div>
    <div class="row ai_banner hidden-xs">
        <div class="bim_video">
            <video width="auto" height="auto" src="https://zhenjia002.oss-cn-beijing.aliyuncs.com/zhenjia/video/20190219/2v3fb9JIzAJl4r7AdfBRaN-mwhq3u-G4/48r2AEPP6X.mp4" loop="loop" autoplay="autoplay"></video>
        </div>
        <div class="vr_mask"></div>
        <div class="col-lg-12 col-xs-12 bim_banner_con">
            <h3 class="text-center">裸眼VR云台让装修像试衣服一样简单</h3>
            <p class="text-center" style="margin-top: 32px;">
                <a href="#" class="zj_color vr_apply zj_sqty">马上体验</a>
            </p>
        </div>
    </div>
    <div class="row ai_banner visible-xs">
        <div class="col-lg-12 col-xs-12 vr_banner_con">
            <h3 class="text-center">裸眼VR云台让装修像试衣服一样简单</h3>
            <p class="text-center">
                <a href="#" class="zj_color vr_apply zj_sqty">马上申请</a>
            </p>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-lg-12 col-xs-12 img-list">
            <img src="../m-images/aivr/ai1.png" alt="">
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-lg-12 col-xs-12 ai-video">
            <div class="remark">
                <span>光线追踪技术实现实时渲染， 逼真展示。 实时画面，每秒30帧，</span>
                <span>影院级别高帧率刷新，真3D、真VR，无需等待，流畅体验。</span>
            </div>
            <div class="video" style="margin-top: 10px;">
                <video muted id="myVideo" class="video-js vjs-default-skin" controls preload="auto" data-setup="{}" style="width: 100%;height: auto;margin: 0 auto;">
                    <source src="https://zhenjia002.oss-cn-beijing.aliyuncs.com/zhenjia/video/20190219/oTJh3FmVQA3rvQ5sXlAbeCpe8Nn-fG--/KhkF7f4Jai.mp4?spm=5176.8466032.0.dopenurl.72211450qbDkw3&file=KhkF7f4Jai.mp4" type='video/mp4' />
                </video>
            </div>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-lg-12 col-xs-12 img-list">
            <img src="../m-images/aivr/ai3.png" alt="">
        </div>
    </div>
    <div class="row nav3_blue_bg visible-xs">
        <div class="col-lg-12 col-xs-12 zj_nav3_blue_bg_div">
            <div style="margin: 0 auto;">
                <span class="title">心动那就行动吧，开始设计之旅！</span>
                <div class="p">
                    <a href="javascript:;" class="zj_sqty">马上体验</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row vr_sign hidden-xs">
        <div class="col-lg-12 col-xs-12">
            <div style="width: 1200px;margin: 0 auto;" class="zj_nav4_row2">
                <ul>
                    <li>
                        <img src="images/ai/huishou.png" alt="">
                        <span class="title">真实效果，做材质替换触动未来之家</span>
                        <span class="des">无缝对接真家AI<sup>+</sup>3D云设计系统，设计方案极速网络导入裸眼VR云台</span>
                        <span class="des">只要有真家设计方案，无需额外工作，多人直接体验虚拟现实快速决策</span>
                    </li>
                    <li>
                        <img src="images/ai/zhanli.png" alt="">
                        <span class="title">裸眼VR沉侵式漫游体验</span>
                        <span class="des">3D漫游、动态交互，VR体验 身临其境。像玩游戏一样，720°查看，</span>
                        <span class="des">前后左右走动，上下视角调，在逼真的空间感中，实时材质、家居互动。</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row vr_Effort hidden-xs">
        <div class="col-lg-12 col-xs-12 zj_nav4_row3" style="position: relative;">
            <span class="des zj_default_color">光线追踪技术实现实时渲染， 逼真展示。 实时画面，每秒30帧， 影院级别高帧率刷新，真3D、真VR，无需等待，流畅体验。  </span>
            <div class="video-box">
                <video muted id="myVideo" class="video-js vjs-default-skin" controls preload="auto" data-setup="{}">
                    <source src="https://zhenjia002.oss-cn-beijing.aliyuncs.com/zhenjia/video/20190219/oTJh3FmVQA3rvQ5sXlAbeCpe8Nn-fG--/KhkF7f4Jai.mp4?spm=5176.8466032.0.dopenurl.72211450qbDkw3&file=KhkF7f4Jai.mp4" type='video/mp4' />
                </video>
            </div>
        </div>
    </div>
    <div class="row nav3_list hidden-xs">
        <div class="col-lg-12 col-xs-12 zj_nav3_list">
            <div style="width: 1200px;margin: 0 auto;">
                <ul>
                    <li>
                        <div class="title_bg">赋能商户</div>
                        <div class="content">
                            <img src="images/ai/shanghu.png" alt="">
                            <div class="m_div">
                                <span class="middle">裸眼VR云台展示效果逼真 <br>让顾客身临其境</span>
                                <span class="middle">顾客可任意选择主材 <br>顺心替换</span>
                            </div>
                            <span class="bottom">产品切换，智能导购</span>
                            <span class="bottom"></span>
                        </div>
                    </li>
                    <li>
                        <div class="title_bg">赋能设计师</div>
                        <div class="content">
                            <img src="images/ai/shejishi.png" alt="">
                            <div class="m_div">
                                <span class="middle">简单易学的制作软件</span>
                                <span class="middle">基于场景推荐模型,智能样板间迁移 <br>设计方案快速输出</span>
                            </div>
                            <span class="bottom">秒级极速渲染，分钟超清出图</span>
                            <span class="bottom">展示设计，助力签单</span>
                        </div>
                    </li>
                    <li>
                        <div class="title_bg">服务消费者</div>
                        <div class="content">
                            <img src="images/ai/xiaofeizhe.png" alt="">
                            <div class="m_div">
                                <span class="middle">智能人工设计 <br>推荐心意效果图</span>
                                <span class="middle">体验裸眼VR云台 <br>真实触动未来之家</span>
                            </div>
                            <span class="bottom">触动未来之家，作品收藏意义</span>
                            <span class="bottom"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php echo $this->render('/common/_erweima',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <!-- 尾部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 尾部结束 -->
</div>
<script src="../js/tc.js"></script>
<script>
    videojs("myVideo").ready(function () {
        var myPlayer = this;
    });
</script>
<style>
    .video-js .vjs-big-play-button {
        left: 48% !important;
        top: 50% !important;
        width: 90px !important;
        line-height: 90px !important;
        text-align: center !important;
        height: 90px !important;
        border-radius: 50% !important;
        border: none !important;
        font-size: 70px !important;
        background: rgba(0, 0, 0, 0.42) !important;
        color: #d1d1d1;
    }
</style>
<?= Html::cssFile("@web/css/aivr.css") ?>