<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/bussiness.css") ?>

<div class="zj_line hidden-xs"></div>
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
    <div class="row hidden-xs" style="margin-top: 60px;">
        <div class="zj_bussiness_banner col-lg-12">
            <div class="map">
                <div class="remark">
                    <p class="title">全国诚招代理商</p>
                    <p class="tip">携手与共、共创未来。</p>
                    <a href="javascript:;" class="add zj_sqty">申请加入</a>
                </div>
                <div class="map-service">
                    <div class="map-service-right">
                        <div class="china-map">
                            <div class="region-list active postition-2 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></div>
                                <div class="show-regin"><span>四川</span></div>
                            </div>
                            <div class="region-list waite postition-4 waite-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
                                    <span class="pulse delay-02"></span>
                                </div>
                                <div class="show-regin"><span>陕西</span></div>
                            </div>
                            <div class="region-list waite postition-5 waite-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
                                    <span class="pulse delay-02"></span>
                                </div>
                                <div class="show-regin"><span>湖北</span></div>
                            </div>
                            <div class="region-list active postition-6 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></div>
                                <div class="show-regin"><span>香港</span></div>
                            </div>
                            <div class="region-list active postition-13 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-04"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-03"></span></div>
                                <div class="show-regin"><span>内蒙古</span></div>
                            </div>
                            <div class="region-list  active  postition-11 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></div>
                                <div class="show-regin"><span>山东</span></div>
                            </div>
                            <div class="region-list active postition-7 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
                                    <span class="pulse delay-09"></span>
                                    <span class="pulse delay-08"></span></div>
                                <div class="show-regin"><span>辽宁</span></div>
                            </div>
                            <div class="region-list active postition-8 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></span></div>
                                <div class="show-regin"><span>北京</span></div>
                            </div>
                            <div class="region-list active postition-9 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
                                    <span class="pulse delay-09"></span>
                                    <span class="pulse delay-08"></span></div>
                                <div class="show-regin"><span>江苏</span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row visible-xs" style="margin-top: 50px;">
        <div class="zj_bussiness_banner col-lg-12">
            <div class="map">
                <div class="remark">
                    <p class="title">全国诚招代理商</p>
                    <p class="tip">携手与共、共创未来。</p>
                    <a href="javascript:;" class="add zj_sqty">申请加入</a>
                </div>
                <div class="map-service">
                    <div class="map-service-right">
                        <div class="china-map">
                            <div class="region-list active postition-2 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></div>
                                <div class="show-regin"><span>四川</span></div>
                            </div>
                            <div class="region-list waite postition-4 waite-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
                                    <span class="pulse delay-02"></span>
                                </div>
                                <div class="show-regin"><span>陕西</span></div>
                            </div>
                            <div class="region-list waite postition-5 waite-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-01"></span>
                                    <span class="pulse delay-02"></span>
                                </div>
                                <div class="show-regin"><span>湖北</span></div>
                            </div>
                            <div class="region-list active postition-6 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></div>
                                <div class="show-regin"><span>香港</span></div>
                            </div>
                            <div class="region-list active postition-13 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-04"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-03"></span></div>
                                <div class="show-regin"><span>内蒙古</span></div>
                            </div>
                            <div class="region-list  active  postition-11 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></div>
                                <div class="show-regin"><span>山东</span></div>
                            </div>
                            <div class="region-list active postition-7 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
                                    <span class="pulse delay-09"></span>
                                    <span class="pulse delay-08"></span></div>
                                <div class="show-regin"><span>辽宁</span></div>
                            </div>
                            <div class="region-list active postition-8 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-06"></span>
                                    <span class="pulse delay-05"></span>
                                    <span class="pulse delay-04"></span></span></div>
                                <div class="show-regin"><span>北京</span></div>
                            </div>
                            <div class="region-list active postition-9 online-node">
                                <div class="area-box"><span class="dot"></span><span class="pulse delay-10"></span>
                                    <span class="pulse delay-09"></span>
                                    <span class="pulse delay-08"></span></div>
                                <div class="show-regin"><span>江苏</span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-lg-12 col-xs-12 img-list">
            <img src="../m-images/business/b1.png" alt="" style="margin: 20px auto;">
            <img src="../m-images/business/b2.png" alt="">
            <img src="../m-images/business/b4.png" alt="">
            <img src="../m-images/business/b3.png" alt="">
            <a href="javascript:;" class="zj_sqty">申请加入</a>
        </div>
    </div>
    <?php echo $this->render('/common/_m_area',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <?php echo $this->render('/common/_m_erweima'); ?>
    <div class="row hidden-xs">
        <div class="zj_bussiness_youshi">
            <div class="title">
                我们的优势
            </div>
            <div class="list">
                <ul>
                    <li>
                        <img src="images/4_slices/home.png" alt="">
                        <span class="t">预见未来</span>
                        <hr />
                        <span class="tip">VR样板间的应用可以让业主提前感受到未来建筑，装饰完成之后的效果。以用户价值为核心的VR世界，可以给人们带来身临其境般的感觉。</span>
                    </li>
                    <li>
                        <img src="images/4_slices/hb.png" alt="">
                        <span class="t">满足个性化</span>
                        <hr />
                        <span class="tip">
                            满足不同消费者在不同风格上的需求。主材辅材一键切换，整体风格一键切换。
                        </span>
                    </li>
                    <li>
                        <img src="images/4_slices/book.png" alt="">
                        <span class="t">可移动样板间</span>
                        <hr />
                        <span class="tip">提升企业形象，更是家装行业的促单利器。随时随地方便展示，产品体验沉浸真实。</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row hidden-xs">
        <div class="zj_bussiness_bz">
            <div class="title">
                招商标准
            </div>
            <div class="list">
                <ul>
                    <li>
                        <span>1</span>
                        <span>拥有当地家装企业、家居、建材行业人脉</span>
                    </li>
                    <li>
                        <span>2</span>
                        <span>拥有5人以上专职销售团队</span>
                    </li>
                    <li class="level2">
                        <span>3</span>
                        <span>拥有测量安装团队、提供主材、家具落地安装服务能力</span>
                    </li>
                    <li class="level2">
                        <span>4</span>
                        <span>拥有订单处理能力及解决客户售后问题的能力</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row hidden-xs">
        <div class="zj_bussiness_jm">
            <div class="title">
                加盟流程
            </div>
            <div class="list">
                <div class="_">.........................................................................................................................................................................................</div>
                <ul>
                    <li>
                        <div class="block">
                            <div class="img"><img src="images/4_slices/txt.png" alt=""></div>
                            <span class="t">线上申请</span>
                            <span class="circle">1</span>
                        </div>
                        <div class="line1">
                            <div class="l">...........</div>
                        </div>
                    </li>
                    <li>
                        <div class="block">
                            <div class="img"><img src="images/4_slices/bi.png" alt=""></div>
                            <span class="t">考察评估</span>
                            <span class="circle">2</span>
                        </div>
                        <div class="line1">
                            <div class="l">...........</div>
                        </div>
                    </li>
                    <li>
                        <div class="block">
                            <div class="img"><img src="images/4_slices/ws.png" alt=""></div>
                            <span class="t">确认合作</span>
                            <span class="circle">3</span>
                        </div>
                        <div class="line1">
                            <div class="l">...........</div>
                        </div>
                    </li>
                    <li>
                        <div class="block">
                            <div class="img"><img src="images/4_slices/z.png" alt=""></div>
                            <span class="t">签订合同</span>
                            <span class="circle">4</span>
                        </div>
                        <div class="line1">
                            <div class="l">...........</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row hidden-xs">
        <div class="zj_bussiness_add">
            <a href="javascript:;" class="zj_sqty">申请加入</a>
        </div>
    </div>
    <div style="height: 100px;" class="hidden-xs"></div>

    <?php echo $this->render('/common/_area',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <!-- 尾部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 尾部结束 -->
</div>