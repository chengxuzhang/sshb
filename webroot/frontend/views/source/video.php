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
                <a href="soft.html"><span>下载与视频</span></a>
                <a href="video.html"><span class="zj_yy_act">视频培训</span></a>
            </h3>
            <div class="zj_yy_banner yy_vd_banner">
                <div class="zj_yy_bancon">
                    <h3 class="text-center yy_vd_down"></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row yy_vd_tab">
        <div class="col-lg-12 col-xs-12 yy_vd_cz">
            <div class="col-lg-3 col-xs-3">
                <ul id="myTab" class="nav nav-tabs yy_vd_nav">
                    <li class="active"><a href="#yy_vd_jc" data-toggle="tab">基础操作</a></li>
                    <li><a href="#yy_vd_jj" data-toggle="tab">进阶操作</a></li>
                    <li><a href="#yy_vd_jcsp" data-toggle="tab">精彩案例</a></li>
                    <li><a href="#yy_vd_mx" data-toggle="tab">模型制作</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-xs-9 yy_vd_con">
                <div id="myTabContent" class="tab-content yy_vd_rj">
                    <div class="tab-pane fade in active" id="yy_vd_jc">
                        <ul class="yy_vd_rjjj">
                            <li class="text-center tc_72">
                                <img src="../images/sp_icon1.png"/>
                                <img src="../images/sp_icon7.png" style="position: absolute; margin-left: -120px;margin-top: 140px;"/>
                                <p>软件简介</p>
                            </li>
                            <li class="text-center tc_73">
                                <img src="../images/sp_icon2.png"/>
                                <img src="../images/sp_icon7.png" style="position: absolute; margin-left: -120px;margin-top: 140px;"/>
                                <p>户型绘制</p>
                            </li>
                            <li class="text-center tc_74">
                                <img src="../images/sp_icon3.png"/>
                                <img src="../images/sp_icon7.png" style="position: absolute; margin-left: -120px;margin-top: 140px;"/>
                                <p>基础硬装</p>
                            </li>
                            <li class="text-center tc_75">
                                <img src="../images/sp_icon4.png"/>
                                <img src="../images/sp_icon7.png" style="position: absolute; margin-left: -120px;margin-top: 140px;"/>
                                <p>软装搭配</p>
                            </li>
                            <li class="text-center tc_76">
                                <img src="../images/sp_icon5.png"/>
                                <img src="../images/sp_icon7.png" style="position: absolute; margin-left: -120px;margin-top: 140px;"/>
                                <p>VR体验</p>
                            </li>
                            <li class="text-center tc_77">
                                <img src="../images/sp_icon6.png"/>
                                <img src="../images/sp_icon7.png" style="position: absolute; margin-left: -120px;margin-top: 140px;"/>
                                <p>方案分享</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="yy_vd_jj">
                        <div class="col-lg-12 col-xs-12">
                            <ul id="myTab" class="nav nav-tabs yy_vd_zn">
                                <li class="active"><a href="#yy_vd_zn1" data-toggle="tab">智能家居</a></li>
                                <li><a href="#yy_vd_zn2" data-toggle="tab">全景图</a></li>
                                <li><a href="#yy_vd_zn3" data-toggle="tab">使用技巧</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div id="myTabContent_4" class="tab-content">
                                <div class="tab-pane fade in active" id="yy_vd_zn1">
                                    <ul class="yy_vd_jjcz">
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/znjj_3.png" class="img-responsive yy_img tc_1"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>智能设计</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/znjj_4.png" class="img-responsive yy_img tc_2"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>智能设计-配置客餐厅</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/znjj_6.png" class="img-responsive yy_img tc_3"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>智能设计-配置卧室</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/znjj_5.png" class="img-responsive yy_img tc_4"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>智能设计-配置卫生间</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/znjj_1.jpg" class="img-responsive yy_img tc_5"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>顶面工具</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/znjj_2.jpg" class="img-responsive yy_img tc_6"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>墙面工具</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="yy_vd_zn2">
                                    <ul class="yy_vd_jjcz">
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/qjt_2.png" class="img-responsive yy_img tc_7"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>功能介绍</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/qjt_3.png" class="img-responsive yy_img tc_8"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>效果提升</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/qjt_1.jpg" class="img-responsive yy_img tc_9"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>初始空间及视角配置</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="yy_vd_zn3">
                                    <ul class="yy_vd_jjcz" style="height: 428px; overflow: auto;">
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_3.jpg" class="img-responsive yy_img tc_10"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>光源使用</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_5.jpg" class="img-responsive yy_img tc_11"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>全局反射</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_4.jpg" class="img-responsive yy_img tc_12"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>后期效果</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_7.jpg" class="img-responsive yy_img tc_13"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>私有模型上传</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_6.jpg" class="img-responsive yy_img tc_14"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>私有模型材质系统</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_1.jpg" class="img-responsive yy_img tc_15"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>橱柜设计</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_2.jpg" class="img-responsive yy_img tc_16"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>公用模型材质替换</p>
                                        </li>
                                        <li class="text-center yy_vd_all">
                                            <img src="../images/syxq_8.png" class="img-responsive yy_img tc_17"/>
                                            <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                            <p>物品标签</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yy_vd_jcsp">
                        <ul class="yy_vd_jjcz">
                            <li class="text-center yy_vd_all">
                                <img src="../images/jcal.jpg" class="img-responsive yy_img tc_18"/>
                                <img src="../images/sp_icon8.png" class="yy_vd_play"/>
                                <p>精美案例展示</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="yy_vd_mx">
                        <div class="col-lg-12 col-xs-12 yy_vd_m1">
                            <ul id="myTab" class="nav nav-tabs yy_vd_jjl">
                                <li class="active"><a href="#yy_vdmx_1" data-toggle="tab">家具类</a></li>
                                <li><a href="#yy_vdmx_2" data-toggle="tab">主材类</a></li>
                                <li><a href="#yy_vdmx_3" data-toggle="tab">房型类</a></li>
                                <li><a href="#yy_vdmx_4" data-toggle="tab">采集类</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div id="myTabContent_2" class="tab-content">
                                <div class="tab-pane fade in active" id="yy_vdmx_1">
                                    <div class="col-lg-12 col-xs-12" style="padding: 0 24px;">
                                        <ul id="myTab" class="nav nav-tabs yy_vd_jj_1">
                                            <li class="active"><a href="#yy_vdmxsc_1" data-toggle="tab">模型整理和上传</a></li>
                                            <li><a href="#yy_vdmxsc_2" data-toggle="tab">模型参数调整</a></li>
                                            <li><a href="#yy_vdmxsc_3" data-toggle="tab">交互模型制作方法</a></li>
                                            <li style="margin-right: 0;"><a href="#yy_vdmxsc_4" data-toggle="tab">更多帮助</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div id="myTabContent_3" class="tab-content">
                                            <div class="tab-pane fade in active" id="yy_vdmxsc_1">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_19">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>模型批量转化上传</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_20">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>环境设置</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_21">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>天球制作方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_22">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>一键上传模型</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_23">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>上传模型预览图制作方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_24">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>一键上传造型</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_2">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_25">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>基础木纹</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_26">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>基础瓷、大理石</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_27">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>玻璃</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_28">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>基础金属</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_29">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>基础塑料</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_30">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>模糊玻璃</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_31">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>镂空布料</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_32">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>半透明塑料</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_33">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>水晶玻璃</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_34">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>布料</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_35">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>纱</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_3">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_36">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>交互灯_落地灯</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_37">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>交互灯_吊灯</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_38">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>交互家具_开关门</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_39">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>交互家具_衣柜</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_40">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>交互家具_折叠床</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_4">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_41">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>CB安装方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_42">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>NDO安装方法</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="yy_vdmx_2">
                                    <div class="col-lg-12 col-xs-12" style="padding: 0 24px;">
                                        <ul id="myTab" class="nav nav-tabs yy_vd_jj_1">
                                            <li class="active"><a href="#yy_vdmxsc_1_1" data-toggle="tab">壁纸以及地板制作</a></li>
                                            <li><a href="#yy_vdmxsc_2_1" data-toggle="tab">瓷砖制作</a></li>
                                            <li><a href="#yy_vdmxsc_3_1" data-toggle="tab">上传方法</a></li>
                                            <li style="margin-right: 0;"><a href="#yy_vdmxsc_4_1" data-toggle="tab">注意事项</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div id="myTabContent_3" class="tab-content">
                                            <div class="tab-pane fade in active" id="yy_vdmxsc_1_1">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_43">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>批量转化贴图制作方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_44">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>壁纸颜色贴图制作方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_45">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>壁纸法线贴图制作方法_A</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_46">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>壁纸法线贴图制作方法_B</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_47">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>地板颜色贴图制作方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_48">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>地板法线贴图制作方法</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_2_1">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_49">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>瓷砖颜色贴图制作方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_50">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>瓷砖贴图制作方法</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_3_1">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_51">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>贴图类模型上传及调整···</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_4_1">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_52">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>主材类贴图尺寸规则···</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="yy_vdmx_3">
                                    <div class="col-lg-12 col-xs-12" style="padding: 0 24px;">
                                        <ul id="myTab" class="nav nav-tabs yy_vd_jj_1">
                                            <li class="active"><a href="#yy_vdmxsc_1_2" data-toggle="tab">房型制作与上传</a></li>
                                            <li><a href="#yy_vdmxsc_2_2" data-toggle="tab">别墅户</a></li>
                                            <li><a href="#yy_vdmxsc_3_2" data-toggle="tab">问题以及解决方法</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div id="myTabContent_3" class="tab-content">
                                            <div class="tab-pane fade in active" id="yy_vdmxsc_1_2">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_53">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>1、软件环境</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_54">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>2、项目工程文件介绍</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_55">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>3、CAD文件整理</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_56">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>4、在SketchUp中制作房型</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_57">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>5、在3Dmax中房型的处理···</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_58">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>6、配置环境烘焙房型上传···</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_59">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>7、房型材质设定功能</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_60">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>8、全屋全景图设置</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_2_2">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_61">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>别墅房制作</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_62">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>别墅房型全景图配置</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_63">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>创建拐角楼梯碰撞盒</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_64">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>创建旋转楼梯碰撞盒</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="yy_vdmxsc_3_2">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_65">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>模型造成碰撞盒错误解决办法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_66">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>Pak文件0KB的解决办法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_67">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>房型插件失效的解决办法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_68">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>全景图无法生成解决办法</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="yy_vdmx_4">
                                    <div class="col-lg-12 col-xs-12" style="padding: 0 24px;">
                                        <ul id="myTab" class="nav nav-tabs yy_vd_jj_1">
                                            <li class="active"><a href="#yy_vdmxsc_1_3" data-toggle="tab">模型采集</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div id="myTabContent_3" class="tab-content">
                                            <div class="tab-pane fade in active" id="yy_vdmxsc_1_3">
                                                <div class="col-lg-12 col-xs-12 yy_vd_jcmw">
                                                    <div class="col-lg-3 col-xs-3 tc_69">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>家具采集方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_70">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>地板采集方法</span>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-3 tc_71">
                                                        <img src="../images/sp_icon8.png"/>
                                                        <span>四方连续贴图制作方法</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 尾部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 尾部结束 -->
</div>