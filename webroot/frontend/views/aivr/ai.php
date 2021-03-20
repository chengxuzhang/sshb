<?php

use frontend\components\Html;
use yii\helpers\Url;

$this->title = $title;
?>
<?= Html::cssFile("@web/css/aivr.css") ?>
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
            <video width="auto" height="auto" src="https://zhenjia002.oss-cn-beijing.aliyuncs.com/zhenjia/video/20190219/zylQLP_5NsejJ0NzGxKhYI0-C_Hkn35n/dPQFzSpiTT.mp4?spm=5176.8466032.0.dopenurl.722114505KpYPJ&file=dPQFzSpiTT.mp4" loop="loop" autoplay="autoplay"></video>
        </div>
        <div class="vr_mask"></div>
        <div class="col-lg-12 col-xs-12 bim_banner_con">
            <h3 class="text-center">AI<sup>+</sup>3D云设计系统</h3>
            <p class="text-center vr_yzx">简单高效的装修设计软件，10秒出效果图</p>
            <p class="text-center">
                <a href="#" class="zj_color vr_apply zj_sqty">马上申请</a>
            </p>
        </div>
    </div>
    <div class="row ai_banner visible-xs">
        <div class="col-lg-12 col-xs-12 bim_banner_con">
            <h3 class="text-center">AI<sup>+</sup>3D云设计系统</h3>
            <p class="text-center vr_yzx">简单高效的装修设计软件，10秒出效果图</p>
            <p class="text-center">
                <a href="#" class="zj_color vr_apply zj_sqty">马上申请</a>
            </p>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-lg-12 col-xs-12 img-list">
            <img src="../m-images/aivr/vr1.png" alt="">
            <img src="../m-images/aivr/vr2.png" alt="">
            <img src="../m-images/aivr/vr3.png" alt="">
            <img src="../m-images/aivr/vr4.png" alt="">
            <img src="../m-images/aivr/vr5.png" alt="">
            <img src="../m-images/aivr/vr6.png" alt="">
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
    <div class="row bim_sign hidden-xs">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center vr_sszn">强大的功能，让设计变得如此简单</h3>
            <p style="width: 100%;text-align: center;font-size: 24px;font-weight: 400;">短时间达到超高效果，分分钟做出客户满意的方案</p>
            <div style="width: 100%;margin-top: 80px;">
                <div class="zj_nav3_time">
                    <div class="zj_nav3_time_subdiv up" style="left: 0;top: 0;">
                        <span class="circle"></span>
                        <img src="images/ai/diannao.png">
                        <span class="title">一键生成3d户型</span>
                        <span class="des">智能识图，3秒生成3D户型</span>
                    </div>
                    <div class="zj_nav3_time_subdiv down" style="left: 240px;bottom: 0;">
                        <span class="circle"></span>
                        <img src="images/ai/moxing.png">
                        <span class="title">海量模型</span>
                        <span class="des">海量1:1商品模型应有尽有</span>
                    </div>
                    <div class="zj_nav3_time_subdiv up" style="left: 480px;top: 0;">
                        <span class="circle"></span>
                        <img src="images/ai/xuanran.png">
                        <span class="title">10秒急速渲染</span>
                        <span class="des">一键全屋渲染烘焙，10秒生成全屋实景方案</span>
                    </div>
                    <div class="zj_nav3_time_subdiv down" style="left: 720px;bottom: 0;">
                        <span class="circle"></span>
                        <img src="images/ai/juece.png">
                        <span class="title">快速决策</span>
                        <span class="des">主材任意选择替换，实时渲染继续漫游体验</span>
                    </div>
                    <div class="zj_nav3_time_subdiv up" style="left: 960px;top: 0;">
                        <span class="circle"></span>
                        <img src="images/ai/shigong.png">
                        <span class="title">一键导出施工图纸</span>
                        <span class="des">施工图纸一键导出，设计施工完美衔接</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bim_Effort hidden-xs">
        <div style="margin: 0 auto;width: 1200px;">
            <div class="zj_nav3_people_left">
                <h1>Realhome VR渲染引擎平台人工智能引擎平台</h1>
                <p>
                    <span class="blue">真家科技完全自主知识产权，可不断迭代升级满足前端应用。</span>
                    <span class="des">新一代光线追踪技术实时渲染引擎RealHome Engine，包括核心的蒙特卡罗渐进式渲染算法和实时光线追踪算法。是国内少数拥有核心技术的三维图形引擎。</span>
                </p>
                <div class="zj_nav3_people_li">
                    <ul>
                        <li>
                            <img src="images/ai/yunsuan.png" alt="">
                            <div>
                                <span>VR运算平台</span>
                                <ul>
                                    <li>·渐进式渲染</li>
                                    <li>·虚拟世界生成器</li>
                                    <li>·工具链集成</li>
                                    <li>·实时光线追踪</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="images/ai/dashuju.png" alt="">
                            <div>
                                <span>大数据平台</span>
                                <ul>
                                    <li>·数据集成</li>
                                    <li>·数据存储</li>
                                    <li>·数据挖掘</li>
                                    <li>·可视化分析 </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="images/ai/mark.png" alt="">
                            <div>
                                <span>MARK识别平台 </span>
                                <ul>
                                    <li>·1:1识别</li>
                                    <li>·1：N识别</li>
                                    <li>·文本识别</li>
                                    <li>·图像识别</li>
                                    <li>·音视频识别 </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="images/ai/xunlian.png" alt="">
                            <div>
                                <span>自主训练平台</span>
                                <ul>
                                    <li>·无监督训练</li>
                                    <li>·数据采集</li>
                                    <li>·异构数据结构化</li>
                                    <li>·半监督训练</li>
                                    <li>·数据标注</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="zj_nav3_people_right">
                <img src="images/ai/yinqin.png" alt="" width="552" height="494">
            </div>
        </div>
    </div>
    <div class="row ai_revol hidden-xs">
        <div class="col-lg-12 col-xs-12">
            <div style="width: 1200px;margin: 0 auto;">
                <div class="zj_nav3_keji">
                    <span class="title">科技赋能设计师</span>
                    <span class="small_word">用科技的双手赋能设计师，让家装变得更简单，让我们给您呈现真实的家！</span>
                    <div style="height: 60px;"></div>
                    <span class="list_title">Real-AI模块 </span>
                    <div class="list">
                        <ul>
                            <li>
                                <img src="images/ai/shitu.png" alt="">
                                <span>智能识图建户型  </span>
                            </li>
                            <li>
                                <img src="images/ai/qianyi.png" alt="">
                                <span>智能样板间迁移</span>
                            </li>
                            <li>
                                <img src="images/ai/ruanzhuang.png" alt="">
                                <span>软装搭配智能推荐</span>
                            </li>
                            <li>
                                <img src="images/ai/buju.png" alt="">
                                <span>顶墙造型智能 <br>一键布局</span>
                            </li>
                            <li>
                                <img src="images/ai/gongcheng.png" alt="">
                                <span>隐蔽工程一键 <br>智能完成</span>
                            </li>
                            <li>
                                <img src="images/ai/peishi.png" alt="">
                                <span>配饰智能布置 <br>（迭代完善） </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bim_sign hidden-xs">
        <div class="col-lg-12 col-xs-12">
            <h3 class="text-center vr_sszn">让设计更自由</h3>
            <p style="width: 100%;text-align: center;font-size: 24px;font-weight: 400;">多种强大的个性化功能，分分钟释放您的灵感和创意</p>
            <div style="width: 100%;margin-top: 80px;">
                <div class="zj_nav3_design">
                    <div class="left">
                        <span class="title">自由建模引擎</span>
                        <div>
                            <ul>
                                <li>
                                    <span class="icon">01</span>
                                    <span class="t">自由创建直线、圆、倒角等不同造型。</span>
                                </li>
                                <li>
                                    <span class="icon">02</span>
                                    <span class="t">有机组合建模和石膏线等装饰线条。</span>
                                </li>
                                <li>
                                    <span class="icon">03</span>
                                    <span class="t">完成建模可以保存到素材库重覆使用。</span>
                                </li>
                                <li>
                                    <span class="icon">04</span>
                                    <span class="t">临摹图导入，辅助加快建模效率。</span>
                                </li>
                                <li>
                                    <span class="icon">05</span>
                                    <span class="t">超强材质刷功能，各个环境通用。 </span>
                                </li>
                                <li>
                                    <span class="icon">06</span>
                                    <span class="t">更易上手，游戏般的畅爽体验。</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <img src="images/ai/macbook.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row nav3_bg hidden-xs">
        <div class="col-lg-12 col-xs-12 zj_nav3_bg_div">
            <div style="width: 1200px;margin: 0 auto;">
                <span class="title">真正的所见即所得</span>
                <span class="des">材质更细腻，阳光更真实，效果更自然。智能光环境分析，实现健康家居生活（别墅级体验）</span>
            </div>
        </div>
    </div>
    <div class="row hidden-xs">
        <div class="col-lg-12 col-xs-12 zj_nav3_light">
            <div style="width: 100%;text-align: center;padding-top: 66px;">
                <span class="title">多种灵活的布光环境</span>
                <div class="nav3_ul">
                    <ul>
                        <li>
                            <img src="images/ai/xing.png" alt="">
                            <span>真实物理灯光源</span>
                        </li>
                        <li>
                            <img src="images/ai/juxing.png" alt="">
                            <span>灵活增加虚拟光源</span>
                        </li>
                        <li>
                            <img src="images/ai/heibai.png" alt="">
                            <span>物理灯可调节颜色和亮度</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div style="width: 100%;text-align: center;padding-top: 99px;">
                <span class="title">从效果 — 材料 — 到工厂实现</span>
                <div class="nav3_ul_2">
                    <ul>
                        <li>
                            <img src="images/ai/lfk.png" alt="">
                            <span>识图建户型</span>
                        </li>
                        <li>
                            <img src="images/ai/tuichu.png" alt="">
                            <span>智能样板间迁移</span>
                        </li>
                        <li>
                            <img src="images/ai/qp.png" alt="">
                            <span>软装推荐</span>
                        </li>
                        <li>
                            <img src="images/ai/tu.png" alt="">
                            <span>10秒生成效果图</span>
                        </li>
                        <li>
                            <img src="images/ai/qiang.png" alt="">
                            <span>施工生产</span>
                        </li>
                    </ul>
                </div>
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