<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $title;
?>

<div class="zj_line"></div>
<!--back to top-->
<?php echo $this->render('/common/_right'); ?>
<!--wrap-->
<div class="container-fluid vr_wrap m_common">
    <!--nav-->
    <div class="row vr_nav">
        <div class="vr_nav_con">
            <div class="col-lg-3 col-xs-3 zj_logo hidden-xs"><h1><a href="/"><img src="../images/logo_bai.png"/></a></h1></div>
            <div class="col-lg-3 col-xs-3 zj_logo_m visible-xs"><h1><img src="../images/logo_bai.png"/></h1></div>
            <ul class="col-lg-9 col-xs-9 zj_menu hidden-xs">
                <!-- 头部开始 -->
                <?php echo $this->render('/common/_header'); ?>
                <!-- 头部结束 -->
            </ul>
        </div>
    </div>
    <div class="row vr_banner hidden-xs">
        <div class="vr_mask"></div>
        <div class="col-lg-12 col-xs-12 vr_banner_con">
            <h3 class="text-center" style="font-size: 40px;">3D云设计系统+VR云台沉浸式体验系统</h3>
            <p class="text-center vr_yzx">省时省力，开创家装“预装修”体系</p>
            <p class="text-center">
                <a href="#" class="zj_color vr_apply zj_sqty">申请体验</a>
                <a href="#" class="zj_color vr_apply vr_play">播放视频</a
            </p>
        </div>
    </div>
    <!--移动端-->
    <div class="row vr_banner visible-xs" style="width: 100%;">
        <div class="vr_mask"></div>
        <div class="col-xs-12 vr_banner_con">
            <h3 class="text-center" style="font-size: 40px;">VR设计系统</h3>
            <p class="text-center vr_yzx">省时省力，开创家装“预装修”体系</p>
            <p class="text-center">
                <a href="#" class="zj_color vr_apply zj_sqty">申请体验</a>
                <a href="#" class="zj_color vr_apply vr_play">播放视频</a
            </p>
        </div>
    </div>
    <div class="row vr_sign">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center vr_sszn"><span class="zj_color">四大平台</span>打造更实用的人机交互体验</h3>
            <p class="text-center">
                <span class="vr_line"></span>
            </p>
        </div>
        <div class="col-lg-12 col-xs-12">
            <div class="b_lb">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../images/sidapingtai.png" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row vr_Effort">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center vr_sszn"><span class="zj_color">十大</span>核心功能点</h3>
            <p class="text-center">
                <span class="vr_line"></span>
            </p>
            <h3 class="text-center">
                <img src="../images/hexin.png" class="vr_eff_img"/>
            </h3>
        </div>
    </div>
    <div class="row vr_ysy">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center"><span class="zj_color">3D云设计系统+VR云台</span>沉浸式体验系统</h3>
            <p class="text-center">
                <span class="vr_line"></span>
            </p>
        </div>
        <div class="col-lg-12 col-xs-12 vr_ysy_con">
            <img src="../images/chenjin.png" class="vr_ysy_img_1"/>
        </div>
    </div>
    <div class="row vr_them">
        <div class="col-lg-12 col-xs-12 vr_them_con">
            <h3 class="text-center">他们正在使用</h3>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_yqzx.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_zzzs.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_lfzs.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_jzyz.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_gj.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_sslj.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_jzzs.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_sczs.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_lhzs.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_bczz.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_qj.png"/>
            </div>
            <div class="col-lg-2 col-xs-2 vr_them_item">
                <img src="../images/logo_zmd.png"/>
            </div>
        </div>
    </div>
    <div class="row vr_bg">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center zj_fz">多种应用形式</h3>
        </div>
        <div class="col-lg-12 col-xs-12 vr_version">
            <div class="col-lg-4 col-xs-4 vr_version_item">
                <ul>
                    <h3 class="text-center">
                        <span><img src="../images/icon_vr_qy.png"/></span>
                        <span class="zj_color">企业版</span>
                    </h3>
                    <li class="text-center">智能设计</li>
                    <li class="text-center">VR体验</li>
                    <li class="text-center">主材、软装上传</li>
                    <li class="text-center">订单系统</li>
                    <li class="text-center">管理后台</li>
                </ul>
            </div>
            <div class="col-lg-4 col-xs-4 vr_version_item">
                <ul>
                    <h3 class="text-center">
                        <span><img src="../images/icon_vr_dz.png"/></span>
                        <span class="zj_color">定制版</span>
                    </h3>
                    <li class="text-center">智能设计</li>
                    <li class="text-center">VR体验</li>
                    <li class="text-center">主材、软装上传</li>
                    <li class="text-center">订单系统</li>
                    <li class="text-center">管理后台</li>
                    <li class="text-center">定制LOGO</li>
                    <li class="text-center">定制类目</li>
                </ul>
            </div>
            <div class="col-lg-4 col-xs-4 vr_version_item">
                <ul>
                    <h3 class="text-center">
                        <span><img src="../images/icon_vr_md.png"/></span>
                        <span class="zj_color">门店版</span>
                    </h3>
                    <li class="text-center">智能设计</li>
                    <li class="text-center">VR体验</li>
                    <li class="text-center">主材、软装上传</li>
                    <li class="text-center">订单系统</li>
                    <li class="text-center">管理后台</li>
                    <li class="text-center">适配触摸屏</li>
                    <li class="text-center">新零售系统</li>
                </ul>
            </div>
        </div>
        <h3 class="vr_ssty text-center">
            <span class="zj_sqty" style="cursor: pointer;">申请体验</span>
        </h3>
    </div>
    <div class="row vr_white"></div>
    <!-- 底部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 底部结束 -->
</div>

<script src="js/tc.js"></script>
