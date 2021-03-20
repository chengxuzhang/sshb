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
    <div class="row vr_nav dhj_yy_nav">
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
    <div class="row zj_yy_menu">
        <div class="col-lg-12 col-xs-12 zj_yy_tab">
            <h3 class="text-center zj_yy_con">
                <a href="soft.html"><span class="zj_yy_act">下载与视频</span></a>
                <a href="video.html"><span>视频培训</span></a>
            </h3>
            <div class="zj_yy_banner">
                <div class="zj_yy_bancon">
                    <div class="zj_yy_jz">
                        <h3 class="text-center">VR设计系统6.5</h3>
                        <p class="text-center"><a href="http://update.dabanjia.com/6.5.1.6/dabanjia5setup.exe"><span class="zj_color"  style="padding: 10px 100px;">免费下载</span></a></p>
                        <p class="text-center">更新日期：2018-06-10     <a href="zj_cpdt.html" target="_blank" style="color: #feb112;">产品动态></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bim_ysy hhr_ysy zj_yy_ysy">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center zj_fz hhr_qd">配置要求</h3>
        </div>
        <div class="col-lg-12 col-xs-12 bim_ysy_con hhr_ysy_con zj_yy_pzyq">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active">
                    <a href="#zj_yy_rj" data-toggle="tab">软件运行</a>
                </li>
                <li><a href="#zj_yy_zc" data-toggle="tab">VR体验</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="zj_yy_rj">
                    <div class="col-lg-12 col-xs-12 yy_sys_xt">
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon1.png"/>
                            <p class="text-center">系统</p>
                        </div>
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon2.png"/>
                            <p class="text-center">CPU</p>
                        </div>
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon3.png"/>
                            <p class="text-center">显卡</p>
                        </div>
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon4.png"/>
                            <p class="text-center">内存</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 yy_sys_tjpz">
                        <div class="yy_sys_tj">
                            <span>推荐配置：</span>
                            <span>64位win10</span>
                            <span>i5四核</span>
                            <span>GTX1060及以上  </span>
                            <span>8G</span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 yy_sys_tjpz">
                        <div class="yy_sys_tj">
                            <span>最低配置：</span>
                            <span>64位win7sp1</span>
                            <span>i5四核</span>
                            <span>GTX1050及以上</span>
                            <span>4G</span>
                        </div>
                    </div>
                    <!--<div class="col-lg-12 text-center yy_sys_cp"><p class="zj_color">旧台式电脑升级1050显卡解决方案</p></div>-->
                </div>
                <div class="tab-pane fade" id="zj_yy_zc">
                    <div class="col-lg-12 col-xs-12 yy_sys_xt">
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon1.png"/>
                            <p class="text-center">系统</p>
                        </div>
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon2.png"/>
                            <p class="text-center">CPU</p>
                        </div>
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon3.png"/>
                            <p class="text-center">显卡</p>
                        </div>
                        <div class="col-lg-3 col-xs-3 text-center">
                            <img src="../images/xtxz_icon4.png"/>
                            <p class="text-center">内存</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 yy_sys_tjpz">
                        <div class="yy_sys_tj">
                            <span>推荐配置：</span>
                            <span>64位win10</span>
                            <span>i5四核</span>
                            <span>GTX1070及以上</span>
                            <span>16G</span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12 yy_sys_tjpz">
                        <div class="yy_sys_tj">
                            <span>最低配置：</span>
                            <span>64位win10</span>
                            <span>i5四核</span>
                            <span>GTX1060及以上 </span>
                            <span>8G</span>
                        </div>
                    </div>
                    <!--<div class="col-lg-12 text-center yy_sys_cp"><p class="zj_color">旧台式电脑升级1050显卡解决方案</p></div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="row bim_ysy hhr_ysy yy_sys_ysy">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center zj_fz hhr_qd" style="margin-top: 60px;">相关下载</h3>
        </div>
        <div class="col-lg-12 col-xs-12 bim_ysy_con hhr_ysy_con yy_sys_con">
            <div class="col-lg-6 col-xs-6 text-center hhr_ysy_con_left" style="border-left: none;">
                <div class="hhr_xt" style="padding: 90px 50px;">
                    <img src="../images/xtxz_icon5.png"/>
                    <p class="hhr_xt_ts">模型打包工具</p>
                    <h3><a href="https://pan.baidu.com/s/1gfdxVTh"><span class="hhr_more">免费下载</span></a></h3>
                </div>
            </div>
            <div class="col-lg-6 col-xs-6 text-center hhr_ysy_con_left">
                <div class="hhr_xt" style="padding: 90px 50px;">
                    <img src="../images/xtxz_icon6.png" style="width: 20%;"/>
                    <p class="hhr_xt_ts">软件运行环境</p>
                    <h3><a href="https://pan.baidu.com/s/1gfqjR0J"><span class="hhr_more">免费下载</span></a></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- 尾部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 尾部结束 -->
</div>