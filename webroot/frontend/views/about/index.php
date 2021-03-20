<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?= CacheConfig::getConfigCache("mapkey") ?>"></script>

<?= Html::cssFile("@web/css/about.css") ?>

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
    <div class="row visible-xs">
        <div class="col-lg-12 col-xs-12 img-list">
            <img src="../m-images/about/a1.png" alt="" style="margin-top: 50px;">
            <img src="../m-images/about/a2.png" alt="">
        </div>
    </div>
    <div class="row visible-xs">
        <div class="box zj_mobile_licheng">
            <h3 class="title">
                <div class="m_piaofu_about_bg0"></div>
                发展历程
            </h3>
            <div class="list" id="mobileHistory">
                <ul>
                    <?php
                    $index = 0;
                    foreach ($licheng as $k => $v){
                        ?>
                        <li>
                            <div class="t">
                                <div class="title"><?= $v->title; ?></div>
                                <div class="sj"></div>
                                <div class="tip" data-index="<?= $index; ?>"><?= $v->remark; ?></div>
                            </div>
                        </li>
                    <?php $index++;} ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="contact_us">
            <h3>
                <div class="piaofu"></div>
                联系我们
            </h3>
            <div class="list">
                <div class="left">
                    <img src="images/7_slices/dh.png" alt="">
                    <span class="title">全国热线</span>
                    <span class="phone"><?= CacheConfig::getConfigCache("phone") ?></span>
                </div>
                <div class="right">
                    <img src="images/7_slices/email.png" alt="">
                    <span class="title">邮箱</span>
                    <span class="email"><?= CacheConfig::getConfigCache("email") ?></span>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="row hidden-xs" style="margin-top: 60px;">
        <div class="zj_about_banner col-lg-12">
            <div class="word">
                <span><?= $this->title; ?></span>
                <span>ABOUT US</span>
            </div>
        </div>
    </div>
    <div class="row hidden-xs">
        <div class="zj_about_description">
            <div class="title">
                <span>公司简介</span>
                <div class="en"></div>
            </div>
            <div class="box">
                <img src="images/7_slices/bpbxd.jpg" alt="">
                <span><?= \frontend\components\CacheConfig::getConfigCache("aboutremark"); ?></span>
            </div>
            <div class="list">
                <ul>
                    <li>
                        <img src="images/7_slices/niao.png" alt="">
                        <span class="t">使命</span>
                        <span class="r">让设计更简单</span>
                    </li>
                    <li>
                        <img src="images/7_slices/feiji.png" alt="">
                        <span class="t">愿景</span>
                        <span class="r">成为卓越的家居产业 <br>专业设计系统服务商</span>
                    </li>
                    <li>
                        <img src="images/7_slices/dengpao.png" alt="">
                        <span class="t">价值观</span>
                        <span class="r">开放、热爱 、探索</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row hidden-xs">
        <div class="zj_about_licheng">
            <div class="content_lc">
                <div class="title">
                    <span>发展历程</span>
                    <div class="en"></div>
                </div>
                <div class="box" id="myscroll">
                    <div class="list" id="myscrollbox">
                        <ul>
                            <?php
                                $index = 0;
                                foreach ($licheng as $k => $v){
                            ?>
                            <li>
                                <div class="t">
                                    <?= $v->title; ?>
                                    <div class="tip" data-index="<?= $index; ?>"><?= $v->remark; ?></div>
                                </div>
                            </li>
                            <?php $index++;} ?>
                        </ul>
                    </div>
                    <a class="left" id="left" href="javascript:;"></a>
                    <a class="right" id="right" href="javascript:;"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row hidden-xs">
        <div class="zj_about_map">
            <div class="title">
                <span>联系我们</span>
                <div class="en"></div>
            </div>
            <div class="list">
                <ul>
                    <li>
                        <img src="images/7_slices/dh.png" alt="">
                        <span>全国热线</span>
                        <span><?= CacheConfig::getConfigCache("phone") ?></span>
                    </li>
                    <li class="lineli"></li>
                    <li>
                        <img src="images/7_slices/map.png" alt="">
                        <span>北京总部地址</span>
                        <span>
                            <?= CacheConfig::getConfigCache("mapaddress") ?>
                        </span>
                    </li>
                    <li class="lineli"></li>
                    <li>
                        <img src="images/7_slices/email.png" alt="">
                        <span>邮箱</span>
                        <span><?= CacheConfig::getConfigCache("email") ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="map" id="allmap"></div>
    </div>

    <?php echo $this->render('/common/_m_area',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <?php echo $this->render('/common/_m_erweima'); ?>

    <div style="height: 100px;" class="hidden-xs"></div>

    <?php echo $this->render('/common/_area',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <!-- 尾部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 尾部结束 -->
</div>

<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");    // 创建Map实例
    var point = new BMap.Point(<?= CacheConfig::getConfigCache("point") ?>);
    map.centerAndZoom(point, <?= CacheConfig::getConfigCache("maplevel") ?>);  // 初始化地图,设置中心点坐标和地图级别
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);              // 将标注添加到地图中
    var opts = {
        width : 200,     // 信息窗口宽度
        height: 100,     // 信息窗口高度
        title : "<?= CacheConfig::getConfigCache("maptitle") ?>" , // 信息窗口标题
        enableMessage:true,//设置允许信息窗发送短息
        message:"<?= CacheConfig::getConfigCache("mapaddress") ?>"
    };
    var infoWindow = new BMap.InfoWindow("地址：<?= CacheConfig::getConfigCache("mapaddress") ?>", opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow,point); //开启信息窗口
    marker.addEventListener("click", function(){
        map.openInfoWindow(infoWindow,point); //开启信息窗口
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        var blw=$("#myscrollbox li").width();
        //获取单个子元素所需宽度
        var liArr = $("#myscrollbox ul").children("li");
        //获取子元素数量
        var mysw = $("#myscroll").width();
        //获取子元素所在区域宽度
        var mus = parseInt(mysw/blw);
        //计算出需要显示的子元素的数量
        var length = liArr.length-mus;
        $("#myscrollbox").css({"width":liArr.length*blw + "px","left":"0px"});
        //计算子元素可移动次数（被隐藏的子元素数量）
        var i=0;
        $("#right").click(function(){
            i++;
            //点击i加1
            if(i<length){
                $("#myscrollbox").css("left",-(blw*i));
                //子元素集合向左移动，距离为子元素的宽度乘以i。
            }else{
                i=length;
                $("#myscrollbox").css("left",-(blw*length));
                //超出可移动范围后点击不再移动。最后几个隐藏的元素显示时i数值固定位已经移走的子元素数量。
            }
        });
        $("#left").click(function(){
            i--;
            //点击i减1
            if(i>=0){
                $("#myscrollbox").css("left",-(blw*i));
                //子元素集合向右移动，距离为子元素的宽度乘以i。
            }else{
                i=0;
                $("#myscrollbox").css("left",0);
                //超出可移动范围后点击不再移动。最前几个子元素被显示时i为0。
            }
        });
        var currentDiv = $("#myscrollbox .t").eq(0).find(".tip");
        var oldHtml = currentDiv.html();
        currentDiv.show();
        $("#myscrollbox .t").hover(function (event) {
            var index = parseInt($(this).find(".tip").data("index"));
            var left = 300 * index + 36;
            currentDiv.css({"left":left+"px"});
            var html = $(this).find(".tip").html();
            if(index == 0){
                currentDiv.html(oldHtml);
            }else{
                currentDiv.html(html);
            }
        });

        var mw=$("#mobileHistory").width();
        $("#mobileHistory ul li").eq(0).find(".tip").eq(0).show(); // 显示手机端第一个提示
        $("#mobileHistory ul li").eq(0).find(".sj").eq(0).show();
        $("#mobileHistory ul li").eq(0).find(".tip").eq(0).css({"width":(mw+30)+"px"});

        $("#mobileHistory .t").click(function (event) {
            var index = parseInt($(this).find(".tip").data("index"));
            $("#mobileHistory ul li").find(".tip").hide();
            $("#mobileHistory ul li").find(".sj").hide();

            var blw=$("#mobileHistory li").width();

            $("#mobileHistory ul li").eq(index).find(".tip").eq(0).show(); // 显示手机端第一个提示
            $("#mobileHistory ul li").eq(index).find(".sj").eq(0).show();
            $("#mobileHistory ul li").eq(index).find(".tip").eq(0).css({"left":"-"+(blw*index+30)+"px","width":(mw+30)+"px"});
        })
    });
</script>