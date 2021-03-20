<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::cssFile("@web/css/soft.css") ?>

<!--wrap-->
<div class="container-fluid">
    <!--mp-->
    <div class="row visible-xs vr_nav">
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
                        <?php echo $this->render('/common/_m_header'); ?>
                        <!-- 手机端头部结束 -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--nav-->
    <div class="row vr_nav bimvr_nav hidden-xs">
        <div class="vr_nav_con">
            <div class="col-lg-3 col-md-3 col-sm-3 zj_logo hidden-xs"><h1><a href="/"><img src="../images/logo_bai.png"/></a></h1></div>
            <div class="col-lg-3 zj_logo_m visible-xs"><h1><img src="../images/logo_bai.png"/></h1></div>
            <ul class="col-lg-9 col-md-9 col-sm-9 zj_menu hidden-xs">
                <!-- 头部开始 -->
                <?php echo $this->render('/common/_header_soft'); ?>
                <!-- 头部结束 -->
            </ul>
        </div>
    </div>
    <div class="row hidden-xs">
        <div class="zj_soft_1">
            <div class="zj_soft_banner">
                <div class="left">
                    <span class="title">软件下载</span>
                    <span class="en">SOFTWARE DOWNLOAD</span>
                </div>
                <div class="right">
                    <?php if(strpos($soft->link, 'http') === false) { ?>
                    <a href="<?= \frontend\components\CacheConfig::getConfigCache("endpoint") . $soft->link; ?>" target="_blank"></a>
                    <?php }else{ ?>
                    <a href="<?= $soft->link; ?>" target="_blank"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row visible-xs">
        <div class="zj_soft_mobile_1">
            <div class="zj_soft_banner">
                <div class="left">
                    <span class="title">软件下载</span>
                    <span class="en">SOFTWARE DOWNLOAD</span>
                </div>
            </div>
            <div class="tab" id="tab_mobile">
                <ul>
                    <li class="current">软件下载</li>
                    <li>视频教程</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row hidden-xs">
        <div class="zj_soft_2">
            <div class="zj_soft_box">
                <div style="position: relative;">
                    <div class="tab" id="tab">
                        <ul>
                            <li class="current">软件下载</li>
                            <li>视频教程</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="downsoft">
        <div class="row hidden-xs">
            <div class="zj_soft_2">
                <div class="title">配置需求</div>
                <div class="zj_soft_box">
                    <div class="soft">
                        <div class="table">
                            <table>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>系统</th>
                                    <th>CPU</th>
                                    <th>显卡</th>
                                    <th>内存</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>推荐配置</td>
                                    <td>64位win10</td>
                                    <td>i7 8500</td>
                                    <td>GTX1060 3G及以上</td>
                                    <td>8G</td>
                                </tr>
                                <tr>
                                    <td>低级配置</td>
                                    <td>64位win10</td>
                                    <td>i5 7500</td>
                                    <td>GTX1050及以上</td>
                                    <td>4G</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="zj_soft_bg">
                <div class="box">
                    <span class="title">3D—AI设计系统</span>
                    <span class="remark">让设计变得如此简单</span>
                    <span class="r">最新版本<?= $soft->version; ?>  发布时间<?= date('Y.m', $soft->publishDate) ?></span>
                    <?php if(strpos($soft->link, 'http') === false) { ?>
                        <a href="<?= \frontend\components\CacheConfig::getConfigCache("endpoint") . $soft->link; ?>" target="_blank"></a>
                    <?php }else{ ?>
                        <a href="<?= $soft->link; ?>" target="_blank"></a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="row visible-xs">
            <div class="zj_soft_mobile_2">
                <div class="title">
                    配置需求
                </div>
                <div class="table">
                    <ul>
                        <li>
                            <span></span>
                            <span>推荐配置</span>
                            <span>低级配置</span>
                        </li>
                        <li class="c">
                            <span>系统</span>
                            <span>64位win10</span>
                            <span>64位win10</span>
                        </li>
                        <li class="c">
                            <span>CPU</span>
                            <span>i7 8500</span>
                            <span>i5 7500</span>
                        </li>
                        <li class="c">
                            <span>显卡</span>
                            <span>GTX1060 <br>3G及以上</span>
                            <span>GTX1050 <br>及以上</span>
                        </li>
                        <li class="c">
                            <span>内存</span>
                            <span>8G</span>
                            <span>4G</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row visible-xs">
            <div class="soft_remark">
                <span class="title">AI<sup>+</sup>3D云设计系统</span>
                <span class="remark">让设计变得如此简单</span>
                <span class="time">最新版本<?= $soft->version; ?>  发布时间<?= date('Y.m', $soft->publishDate) ?></span>
                <a href="javascript:;" id="downSoftByMobile"></a>
            </div>
        </div>
    </div>

    <div class="video" style="display: none;">
        <div style="height: 120px;" class="hidden-xs"></div>
        <div class="search" style="width: 1210px;margin: 0 auto;">
            <div class="search-div">
                <i></i>
                <input type="text" style="float: right;" id="keyword" value="<?= $keyword ?>">
            </div>
        </div>
        <div class="zj_videolist hidden-xs">
            <div class="left">
                <img src="images/6_slices/home.png" alt="">
                <span>全屋绘制</span>
            </div>
            <div class="right">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php
                        $typename = "qwhztype";
                        $tabList = getArrKeyValueList(\frontend\components\CacheConfig::getConfigCache($typename), ":");
                        $num = 0;
                        foreach ($tabList as $k => $v){
                    ?>
                    <li role="presentation" <?= $num == 0 ? 'class="active"' : ''; ?>><a href="#<?= $typename."-".$num; ?>" aria-controls="<?= $typename."-".$num; ?>" role="tab" data-toggle="tab"><?= $v['val'] ?></a></li>
                    <?php $num++; } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php
                        $num = 0;
                        foreach ($tabList as $k => $v){
                    ?>
                    <div role="tabpanel" class="tab-pane <?= $num == 0 ? 'active' : ''; ?>" id="<?= $typename."-".$num; ?>">
                        <ul>
                            <?php $t1 = false;$index = 0; ?>
                            <?php foreach ($video as $key => $val) { ?>
                                <?php if($val->bigtype == 1 && $val->type == $v['key']){ ?>
                                    <?php $t1 = true;$index++; ?>
                                    <li class="video_li" data-link="<?= $val->link; ?>">
                                        <a href="javascript:void(0);">
                                            <div class="a">
                                                <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$val->pic; ?>" alt="">
                                                <div class="cover"></div>
                                                <div class="play"></div>
                                                <span class="index">[<?= $index; ?>]</span>
                                                <span class="title"><?= $val->title; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                        <?= $t1?'':'<div class="qidai"><div>更新中... <br>敬请期待</div></div>' ?>
                    </div>
                    <?php $num++; } ?>
                </div>
            </div>
        </div>

        <div class="zj_videolist hidden-xs" style="margin-top: 250px;">
            <div class="left">
                <img src="images/6_slices/zx.png" alt="">
                <span>专项技能</span>
            </div>
            <div class="right">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php
                    $typename = "zxjntype";
                    $tabList = getArrKeyValueList(\frontend\components\CacheConfig::getConfigCache($typename), ":");
                    $num = 0;
                    foreach ($tabList as $k => $v){
                        ?>
                        <li role="presentation" <?= $num == 0 ? 'class="active"' : ''; ?>><a href="#<?= $typename."-".$num; ?>" aria-controls="<?= $typename."-".$num; ?>" role="tab" data-toggle="tab"><?= $v['val'] ?></a></li>
                        <?php $num++; } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php
                    $num = 0;
                    foreach ($tabList as $k => $v){
                        ?>
                        <div role="tabpanel" class="tab-pane <?= $num == 0 ? 'active' : ''; ?>" id="<?= $typename."-".$num; ?>">
                            <ul>
                                <?php $t1 = false;$index = 0; ?>
                                <?php foreach ($video as $key => $val) { ?>
                                    <?php if($val->bigtype == 2 && $val->type == $v['key']){ ?>
                                        <?php $t1 = true;$index++; ?>
                                        <li class="video_li" data-link="<?= $val->link; ?>">
                                            <a href="javascript:void(0);">
                                                <div class="a">
                                                    <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$val->pic; ?>" alt="">
                                                    <div class="cover"></div>
                                                    <div class="play"></div>
                                                    <span class="index">[<?= $index; ?>]</span>
                                                    <span class="title"><?= $val->title; ?></span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                            <?= $t1?'':'<div class="qidai"><div>更新中... <br>敬请期待</div></div>' ?>
                        </div>
                        <?php $num++; } ?>
                </div>
            </div>
        </div>

        <div class="zj_videolist hidden-xs" style="margin-top: 150px;">
            <div class="zj_study_title zj_yn_video_bg"></div>
            <div class="zj_study_list" id="ynVideo">
                数据加载中。。。
            </div>
            <div class="zj_study_papge pagger-box pagger" id="page3" <?php if($ynVideoCount<=10){echo 'style="display:none;"';} ?>></div>
        </div>

        <div class="zj_videolist hidden-xs" style="margin-top: 50px;">
            <div class="zj_study_title zj_zy_video_bg"></div>
            <div class="zj_study_list" id="zyVideo">
                数据加载中。。。
            </div>
            <div class="zj_study_papge pagger-box pagger" id="page4" <?php if($zyVideoCount<=10){echo 'style="display:none;"';} ?>></div>
        </div>

        <div class="zj_videolist hidden-xs" style="margin-top: 50px;">
            <div class="zj_study_title zj_yt_video_bg"></div>
            <div class="zj_study_list" id="ytVideo">
                数据加载中。。。
            </div>
            <div class="zj_study_papge pagger-box pagger" id="page5" <?php if($ytVideoCount<=10){echo 'style="display:none;"';} ?>></div>
        </div>

        <div class="row visible-xs zj_mobile_video">
            <div class="zj_mobile_video_list">
                <div class="title">全屋绘制</div>
                <?php
                    $typename = "qwhztype";
                    $tabList = getArrKeyValueList(\frontend\components\CacheConfig::getConfigCache($typename), ":");
                    foreach ($tabList as $k => $v){
                ?>
                <div class="video_box">
                    <div class="t"><span><?= $v['val'] ?></span></div>
                    <div class="list">
                        <ul>
                            <?php $t1 = false;$index = 0; ?>
                            <?php foreach ($video as $key => $val) { ?>
                                <?php if($val->bigtype == 1 && $val->type == $v['key']){ ?>
                                    <?php $t1 = true;$index++; ?>
                                        <li class="video_li" data-link="<?= $val->link; ?>">
                                            <a href="javascript:;">
                                                <div class="a">
                                                    <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$val->pic; ?>" alt="">
                                                    <div class="play"></div>
                                                    <span class="index">[<?= $index; ?>]</span>
                                                    <span class="title"><?= $val->title; ?></span>
                                                </div>
                                            </a>
                                        </li>
                            <?php }} ?>
                            <?php
                                if($index <= 0){
                            ?>
                                <div class="chabei">更新中。。敬请期待</div>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>


            <div class="zj_mobile_video_list">
                <div class="title">专项技能</div>
                <?php
                $typename = "zxjntype";
                $tabList = getArrKeyValueList(\frontend\components\CacheConfig::getConfigCache($typename), ":");
                foreach ($tabList as $k => $v){
                    ?>
                    <div class="video_box">
                        <div class="t"><span><?= $v['val'] ?></span></div>
                        <div class="list">
                            <ul>
                                <?php $t1 = false;$index = 0; ?>
                                <?php foreach ($video as $key => $val) { ?>
                                    <?php if($val->bigtype == 2 && $val->type == $v['key']){ ?>
                                        <?php $t1 = true;$index++; ?>
                                        <li class="video_li" data-link="<?= $val->link; ?>">
                                            <a href="javascript:;">
                                                <div class="a">
                                                    <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$val->pic; ?>" alt="">
                                                    <div class="play"></div>
                                                    <span class="index">[<?= $index; ?>]</span>
                                                    <span class="title"><?= $val->title; ?></span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php }} ?>
                                <?php
                                if($index <= 0){
                                    ?>
                                    <div class="chabei">更新中。。敬请期待</div>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="zj_mobile_video_list">
                <div class="title">疑难问题</div>
                <div class="video_box">
                    <div class="list">
                        <ul id="ynMobile"></ul>
                    </div>
                </div>
            </div>

            <div class="zj_mobile_video_list">
                <div class="title">专业问题</div>
                <div class="video_box">
                    <div class="list">
                        <ul id="zyMobile"></ul>
                    </div>
                </div>
            </div>

            <div class="zj_mobile_video_list">
                <div class="title">云台专项</div>
                <div class="video_box">
                    <div class="list">
                        <ul id="ytMobile"></ul>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 50px;" class="hidden-xs"></div>
    </div>
    <?php echo $this->render('/common/_footer'); ?>

    <?php echo $this->render('/common/_m_area',[
        'fuzeren'=>$fuzeren
    ]); ?>
    <?php echo $this->render('/common/_m_erweima'); ?>
</div>

<?= Html::cssFile("@web/css/paging.css") ?>
<?= Html::jsFile("@web/js/paging.js") ?>

<script>
    $(function () {
        $("#tab ul li").click(function () {
            var index = $(this).index();
            $("#tab ul li").removeClass("current");
            $(this).addClass("current");
            if(index == 0){
                $(".video").hide();
                $(".downsoft").show();
            }else if(index == 1){
                $(".video").show();
                $(".downsoft").hide();
            }
        });

        $("#tab_mobile ul li").click(function () {
            var index = $(this).index();
            $("#tab_mobile ul li").removeClass("current");
            $(this).addClass("current");
            if(index == 0){
                $(".video").hide();
                $(".downsoft").show();
            }else if(index == 1){
                $(".video").show();
                $(".downsoft").hide();
            }
        });

        $("#downSoftByMobile").click(function () {
            layer.confirm('确定要下载吗？', function(index){
                <?php if(strpos($soft->link, 'http') === false) { ?>
                    window.location.href = "<?= \frontend\components\CacheConfig::getConfigCache("endpoint") . $soft->link; ?>";
                <?php }else{ ?>
                    window.location.href = "<?= $soft->link; ?>";
                <?php } ?>
            });
        });

        function getRequest() {
            var str = window.location.href;
            var num = str.indexOf("#");
            str = str.substr(num + 1);
            return str;
        }

        document.onkeydown = function(event) {
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if(e && e.keyCode==13){ // enter 键
                var keyword = $("#keyword").val();
                window.location.href = "/soft.html?keyword="+keyword+"#"+getRequest();
            }
        }

        if(getRequest() === "video"){
            $("#tab ul li").removeClass("current");
            $("#tab ul").find("li").eq(1).addClass("current");
            $(".video").show();
            $(".downsoft").hide();
        }

        $("#downSoft").click(function () {
            $("#tab ul li").removeClass("current");
            $("#tab ul").find("li").eq(0).addClass("current");
            $(".video").hide();
            $(".downsoft").show();
        });

        $("#videoPlay").click(function () {
            $("#tab ul li").removeClass("current");
            $("#tab ul").find("li").eq(1).addClass("current");
            $(".video").show();
            $(".downsoft").hide();
        });

        $(document).on('click', '.video_li', function () {
            var url = $(this).data('link');
            var title = $(this).find("span.title").html();
            if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
                layer.open({
                    type: 2,
                    title: title,
                    maxmin: false,
                    shadeClose: true, //点击遮罩关闭层
                    close:false,
                    area : ['100%' , '100%'],
                    content: 'video-play.html?type=1',
                    success: function(layero, index) {
                        var body = layer.getChildFrame('body', index);
                        var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
                        if(url.indexOf("zhenjia") != -1){
                            url = "<?= \frontend\components\CacheConfig::getConfigCache("endpoint") ?>" + url;
                        }
                        body.find('.yy_video').attr('src', url);
                        var index = url.lastIndexOf("/");
                        var filename = url.slice(index + 1);
                    }
                });
            }else{
                layer.open({
                    type: 2,
                    title: title,
                    maxmin: false,
                    shadeClose: true, //点击遮罩关闭层
                    area: ['1000px', '800px'],
                    content: '/video-play.html',
                    success: function(layero, index) {
                        var body = layer.getChildFrame('body', index);
                        var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
                        if(url.indexOf("zhenjia") != -1){
                            url = "<?= \frontend\components\CacheConfig::getConfigCache("endpoint") ?>" + url;
                        }
                        body.find('.yy_video').attr('src', url);
                        var index = url.lastIndexOf("/");
                        var filename = url.slice(index + 1);
                    }
                })
            }
        });

        var keywords = '<?= $keyword ?>';
        var setTotalCount = <?= $ynVideoCount ?>;
        $('#page3').paging({
            initPageNo: 1, // 初始页码
            totalPages: Math.ceil(setTotalCount/10), //总页数
            slideSpeed: 600, // 缓动速度。单位毫秒
            callback: function(page) { // 回调函数
                var content = '<ul>';
                $.getJSON('/video/list/api', {page:page, type:3, keywords:keywords}, function (data) {
                    if(data.data.length > 0){
                        $.each(data.data, function (k, v) {
                            var index = (page-1)*10+(k+1);
                            content += '<li class="video_li" data-link="'+v.link+'">' +
                                '                            <a href="javascript:;">' +
                                '                                <div class="a">' +
                                '                                    <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname"); ?>'+v.pic+'" alt="">' +
                                '                                    <div class="cover"></div>' +
                                '                                    <div class="play"></div>' +
                                '                                    <span class="index">['+index+']</span>' +
                                '                                    <span class="title">'+v.title+'</span>' +
                                '                                </div>' +
                                '                            </a>' +
                                '                        </li>';
                        });
                        content += "</ul>";
                        $("#ynVideo").html(content);
                        $("#ynMobile").html(content);
                    }else{
                        $("#ynVideo").html('<div class="qidai2"><div>更新中... <br>敬请期待</div></div>');
                        $("#ynMobile").html('<div class="qidai"><div>更新中... <br>敬请期待</div></div>');
                    }
                })
            }
        });


        var setTotalCount2 = <?= $zyVideoCount ?>;
        $('#page4').paging({
            initPageNo: 1, // 初始页码
            totalPages: Math.ceil(setTotalCount2/10), //总页数
            slideSpeed: 600, // 缓动速度。单位毫秒
            callback: function(page) { // 回调函数
                var content = '<ul>';
                $.getJSON('/video/list/api', {page:page, type:4, keywords:keywords}, function (data) {
                    if(data.data.length > 0){
                        $.each(data.data, function (k, v) {
                            var index = (page-1)*10+(k+1);
                            content += '<li class="video_li" data-link="'+v.link+'">' +
                                '                            <a href="javascript:;">' +
                                '                                <div class="a">' +
                                '                                    <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname"); ?>'+v.pic+'" alt="">' +
                                '                                    <div class="cover"></div>' +
                                '                                    <div class="play"></div>' +
                                '                                    <span class="index">['+index+']</span>' +
                                '                                    <span class="title">'+v.title+'</span>' +
                                '                                </div>' +
                                '                            </a>' +
                                '                        </li>';
                        });
                        content += "</ul>";
                        $("#zyVideo").html(content);
                        $("#zyMobile").html(content);
                    }else{
                        $("#zyVideo").html('<div class="qidai2"><div>更新中... <br>敬请期待</div></div>');
                        $("#zyMobile").html('<div class="qidai"><div>更新中... <br>敬请期待</div></div>');
                    }
                })
            }
        })

        var setTotalCount3 = <?= $ytVideoCount ?>;
        $('#page5').paging({
            initPageNo: 1, // 初始页码
            totalPages: Math.ceil(setTotalCount3/10), //总页数
            slideSpeed: 600, // 缓动速度。单位毫秒
            callback: function(page) { // 回调函数
                var content = '<ul>';
                $.getJSON('/video/list/api', {page:page, type:5, keywords:keywords}, function (data) {
                    if(data.data.length > 0){
                        $.each(data.data, function (k, v) {
                            var index = (page-1)*10+(k+1);
                            content += '<li class="video_li" data-link="'+v.link+'">' +
                                '                            <a href="javascript:;">' +
                                '                                <div class="a">' +
                                '                                    <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname"); ?>'+v.pic+'" alt="">' +
                                '                                    <div class="cover"></div>' +
                                '                                    <div class="play"></div>' +
                                '                                    <span class="index">['+index+']</span>' +
                                '                                    <span class="title">'+v.title+'</span>' +
                                '                                </div>' +
                                '                            </a>' +
                                '                        </li>';
                        });
                        content += "</ul>";
                        $("#ytVideo").html(content);
                        $("#ytMobile").html(content);
                    }else{
                        $("#ytVideo").html('<div class="qidai2"><div>更新中... <br>敬请期待</div></div>');
                        $("#ytMobile").html('<div class="qidai"><div>更新中... <br>敬请期待</div></div>');
                    }
                })
            }
        })

    })
</script>