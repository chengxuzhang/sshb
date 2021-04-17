<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?= CacheConfig::getConfigCache("mapkey") ?>"></script>

<?php echo $this->render('/common/_check'); ?>
<div class="preloader"></div>
<div id="page-body-wrap">
    <?php echo $this->render('/common/_topbar'); ?>
    <?php echo $this->render('/common/_header'); ?>

    <section id="page-title" style="background-image:url(/images/inner-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h1>联系我们</h1>
                    </div>
                    <div class="page-breadcumb"> <i class="fa fa-map-marker"></i> &nbsp;<span>当前位置： <a href='/'>主页</a> > <a href='/contact.html'>联系我们</a></span> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-container" id="innerpage-wrap">
        <div class="container">
            <div class="row">
                <div class="main col-md-9 inner-left" role="main">
                    <div class="about-page-wrap">
                        <div class="com-cnt page-content" style="font-size: 26px;">
                            <h1>
                                四顺环保
                            </h1>
                            <p>&nbsp;</p>
                            <?= CacheConfig::getConfigCache('footer_remark') ?>
                            <br />
                            <br />
                            <span style="color:#999999;">公司电话：</span><?= CacheConfig::getConfigCache('phone') ?><br />
                            <span style="color:#999999;">公司邮箱：</span><?= CacheConfig::getConfigCache('email') ?><br />
                            <span style="color:#999999;">公司地址：</span><?= CacheConfig::getConfigCache('address') ?><br />
                            <br><br><br>
                            <p>
                                <!--这里放个百度地图-->
                                <div class="map" id="allmap" style="width: 100%;height: 500px;font-size: 14px;"></div>
                            </p>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div id="contact-wrap">
                            <h3 class="msg-title">给我们留言</h3>
                            <form class="add-msg-form layui-form" action="">
                                <div class="row">
                                    <div class="cf-column col-md-6">
                                        <input name="title" type="text" lay-verify="title"  placeholder="主题" />
                                    </div>
                                    <div class="cf-column col-md-6">
                                        <input name="name" type="text" lay-verify="name" placeholder="名字" />
                                    </div>
                                    <div class="cf-column col-md-6">
                                        <input name="email" type="text" lay-verify="email"  placeholder="邮箱" />
                                    </div>
                                    <div class="cf-column col-md-6">
                                        <input name="phone" type="text" lay-verify="phone"  placeholder="电话/手机"/>
                                    </div>
                                    <div class="cf-column col-md-12 cf-tarea">
                                        <textarea name="content" lay-verify="content"  placeholder="留言内容"></textarea>
                                    </div>
                                    <div class="cf-column col-md-12 submit-column">
                                        <button type="submit" id="submit-btn" class="submit-button" lay-submit="" lay-filter="tijiao">立即提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php echo $this->render('/common/_right'); ?>
            </div>
        </div>
    </div>
    <div class="for-bottom-padding"></div>
    <?php echo $this->render('/common/_footer'); ?>
</div>
<script>
    layui.use(['form'], function() {
        var form = layui.form

        form.on('submit(tijiao)', function(data){
            $.post('/contact/experience', data.field, function (res){
                if (res.status === 200) {
                    layer.msg(res.msg, function (){
                        window.location.reload();
                    });
                } else {
                    layer.msg(res.msg);
                }
            })
            return false;
        });
    })
</script>

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