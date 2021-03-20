<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/store.css") ?>
<?= Html::cssFile("@web/css/banner.css") ?>
<?= Html::jsFile("@web/js/banner.js") ?>

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
    <div class="row hidden-xs">
        <div class="zj_store_banner">
            <div class="w">
                <p class="f">智慧门店</p>
                <p class="s">SMART STORE</p>
                <p class="t">技术驱动智慧门店发展，数据重构消费体验升级。</p>
            </div>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="zj_store_banner">
            <div class="w">
                <p class="f">智慧门店</p>
                <p class="s">SMART STORE</p>
                <p class="t">技术驱动智慧门店发展，数据重构消费体验升级。</p>
            </div>
        </div>
    </div>

    <div class="row hidden-xs">
        <div class="zj_store_hdp">
            <div class="hdp">
                <div class="title">
                    优秀客户案例
                </div>
                <div class="train_banner">
                    <ul class="banner_images clearfix">
                        <?php foreach ($hdp as $k => $v){ ?>
                        <li>
                            <div class="cover">
                                <span><?= $v->title; ?></span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;<?= $v->remark; ?></span>
                            </div>
                            <a href="#"><img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$v->pic ?>" alt=""></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="banner_index clearfix">
                        <div class="banner_index-frame">
                            <li class='current'></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row visible-xs">
        <div class="zj_store_hdp_m">
            <div class="title">
                优秀客户案例
            </div>
            <div class="list" id="hdplist">
                <ul>
                    <?php $hdp1 = 0; ?>
                    <?php foreach ($hdp as $k => $v){ ?>
                    <li <?= ($hdp1 == 0) ? 'class="active"':''; ?>>
                        <div class="t"><?= $v->title; ?><div class="icon <?= ($hdp1 == 0) ? 'active':''; ?>"></div></div>
                        <div class="content">
                            <div class="cover">
                                <span class="word"><?= $v->remark; ?></span>
                            </div>
                            <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$v->pic ?>?x-oss-process=image/auto-orient,1/interlace,1/resize,m_lfit,w_420/quality,q_90" alt="">
                        </div>
                    </li>
                    <?php $hdp1++;} ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row visible-xs">
        <div class="zj_store_hdp_m">
            <div class="title">
                专业家装智慧门店做行业赋能
            </div>
            <div class="list list2" id="hdplist2">
                <ul>
                    <li class="active">
                        <div class="t">
                            <img src="../m-images/store/hkc.png" open-src="../m-images/store/hko.png" alt="">
                            智能获客
                            <div class="icon active"></div>
                        </div>
                        <div class="content">
                            <span class="title">海量客源池匹配门店精准推送线索</span>
                            <span class="remark">借用PC网站、APP移动客户端、H5移动网站、新媒体等全网营销，形成海量客源池，根据店面需求，精准推送客户。</span>
                        </div>
                    </li>
                    <li>
                        <div class="t"><img src="../m-images/store/dgc.png" open-src="../m-images/store/dgo.png" alt="">智慧导购<div class="icon"></div></div>
                        <div class="content">
                            <span class="title">门店探针技术结合大数据做用户画像</span>
                            <span class="remark">访客到店后，基于大数据系统精准、多维的用户群体特征分析，输出给客户经理，帮助全面了解访客的行为属性， 大幅提升转化率。</span>
                        </div>
                    </li>
                    <li>
                        <div class="t"><img src="../m-images/store/sjc.png" open-src="../m-images/store/sjo.png" alt="">智能设计<div class="icon"></div></div>
                        <div class="content">
                            <span class="title">人工智能辅助快速设计方案又好又快</span>
                            <span class="remark">人工智能识图，人工智能套用大师设计样板间。快熟出成熟设计方案，大大提升效率，保证设计品质。</span>
                        </div>
                    </li>
                    <li>
                        <div class="t"><img src="../m-images/store/yxc.png" open-src="../m-images/store/yxo.png" alt="">智慧营销<div class="icon"></div></div>
                        <div class="content">
                            <span class="title">裸眼VR沉侵式全屋漫游，多人互动实时换方案</span>
                            <span class="remark">像玩游戏一样，720°查看，自由走动，在逼真的空间感中，实时材质、家居互动替换，还可展示企业实力、产品工艺工法介绍、设计师荣誉增加信任促成交</span>
                        </div>
                    </li>
                    <li>
                        <div class="t"><img src="../m-images/store/jfc.png" open-src="../m-images/store/jfo.png" alt="">智能交付<div class="icon"></div></div>
                        <div class="content">
                            <span class="title">DIM\SAAS\智能工地系统助力商家有序管理工地</span>
                            <span class="remark">APP、小程序、PC云平台，多屏联动把工地实现数据化、网络化，让工地管理从失控到可控，有序管理良好交付。</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php echo $this->render('/common/_m_area',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <?php echo $this->render('/common/_m_erweima'); ?>
    <div class="row hidden-xs">
        <div class="zj_store_hy">
            <div class="title">
                专业家装智慧门店做行业赋能
            </div>
            <div class="list">
                <ul>
                    <?php foreach ($store as $k => $v){ ?>
                    <li>
                        <div class="face">
                            <a href="javascript:;">
                                <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$v->pic; ?>" alt="">
                            </a>
                            <span><?= $v->title; ?></span>
                        </div>
                        <div class="face">
                            <div class="img">
                                <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$v->icon; ?>" alt="">
                            </div>
                            <div class="remark">
                                <span><?= $v->short_title; ?></span>
                                <span><?= $v->remark; ?></span>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div style="height: 200px;" class="hidden-xs"></div>
    <?php echo $this->render('/common/_area',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <!-- 底部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 底部结束 -->
</div>
<script>
    window.onload = function () {
        banner(1460,470);
    }
    $(function () {
        var imgs = [];
        $("#hdplist2 ul li").each(function (k,v) {
            var img = $(v).find("img").eq(0).attr("src");
            imgs.push(img);
        });
        $("#hdplist ul li").click(function () {
            $("#hdplist ul li").removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("#hdplist ul li").each(function (k,v) {
                $(v).find(".icon").eq(0).removeClass("active");
                if(index === k){
                    $(v).find(".icon").eq(0).addClass("active");
                }
            })
        });
        $("#hdplist2 ul li").click(function () {
            $("#hdplist2 ul li").removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("#hdplist2 ul li").each(function (k,v) {
                $(v).find(".icon").eq(0).removeClass("active");
                $(v).find("img").eq(0).attr("src", imgs[k]);
                if(index === k){
                    var oimg = $(v).find("img").eq(0).attr("open-src");
                    $(v).find("img").eq(0).attr("src", oimg);
                    $(v).find(".icon").eq(0).addClass("active");
                }
            })
        });
        $("#hdplist2 ul li").eq(0).click();
    })
</script>
