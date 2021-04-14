<?php
use frontend\components\CacheConfig;
use frontend\components\Html;
use frontend\models\News;


$news = News::find()->limit(4)->orderBy('create_time desc')->all();
?>

<footer id="footer-sec" class="footer">
    <div class="container">
        <div class="row hidden-sm hidden-xs">
            <div class="col-lg-12 col-md-12">
                <div class="request-for-qoute-wrap"><a href="contact.html" class="request-for-qoute wow slideInDown hvr-bounce-to-right">四顺环保——精益求精</a></div>
                <nav class="footer-menu">
                    <button class="footer-nav-toggler hvr-bounce-to-right">Footer Menu <i class="fa fa-bars"></i></button>
                    <ul>
                        <li><a href="/">网站首页</a></li>
                        <li><a href="/about.html">关于我们</a></li>
                        <li><a href="/product.html">产品系列</a></li>
                        <li><a href="/news.html">新闻资讯</a></li>
                        <li><a href="/video.html">企业视频</a></li>
                        <li><a href="/contact.html">联系我们</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs widget foot-about">
                <h3 class="dark-title"><a href="/about.html">公司简介</a> </h3>
                <div class="f-about">
                    <p>
                        <?= CacheConfig::getConfigCache('footer_remark'); ?>
                    </p>
                </div>
                <a href="/about.html" class="read-more">查看更多 <i class="fa fa-angle-double-right"></i></a>
                <ul class="social">
                    <li><a href="http://www.weibo.com/gooxao" class="hvr-radial-out" target="_blank"><i class="fa fa-weibo"></i></a></li>
                    <li><a href="http://t.qq.com/gooxao2" class="hvr-radial-out" target="_blank"><i class="fa fa-tencent-weibo"></i></a></li>
                    <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=XXX&amp;site=qq&amp;menu=yes" class="hvr-radial-out" target="_blank"><i class="fa fa-qq"></i></a></li>
                    <li><a href="https://www.tmall.com/" class="hvr-radial-out" target="_blank"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget hidden-sm hidden-xs">
                <h3 class="dark-title"><a href="/news.html">新闻资讯</a> </h3>
                <ul class="popular-post">
                    <?php foreach($news as $key => $val) { ?>
                    <li> <a href="/news/detail/<?= $val->id ?>.html">
                            <h5 title="<?= $val->title ?>"><i class="fa fa-angle-right"></i> &nbsp;&nbsp; <?= $val->title ?></h5>
                        </a>
                        <p class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= date('Y-m-d', $val->create_time) ?></p>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget foot-contact hidden-sm hidden-xs">
                <h3 class="dark-title"><a href="/contactus.html">联系信息</a></h3>
                <ul class="contact-info">
                    <li> <i class="fa fa-map-marker"></i> 公司地址：<?= CacheConfig::getConfigCache('address') ?> </li>
                    <li> <i class="fa fa-phone"></i> 电话：<?= CacheConfig::getConfigCache('phone') ?> </li>
                    <li> <i class="fa fa-envelope-o"></i> 传真：<?= CacheConfig::getConfigCache('phone') ?> </li>
                    <li> <i class="fa fa-globe"></i> 邮箱：<?= CacheConfig::getConfigCache('email') ?> </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget foot-qrcode hidden-sm hidden-xs">
                <h3>扫描二维码</h3>
                <div class="f-qrcode"> <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("qrcode") ?>"/> </div>
            </div>
        </div>
    </div>
</footer>
<section id="bottom-bar">
    <div class="container">
        <div class="row">
            <div class="copyright pull-left" style="width:100%;text-align:center;">
                <p> Copyright &copy; 2021  版权所有 </p>
            </div>
            <div class="credit pull-right hidden-sm hidden-xs" style="z-index:100;">
                <p><a href="http://beian.miit.gov.cn/" target="_blank">鲁ICP备2021011841号</a></p>
            </div>
        </div>
    </div>
</section>

<?= Html::jsFile('@web/js/sshb/wow.js') ?>
<?= Html::jsFile('@web/js/sshb/owl.carousel.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.themepunch.tools.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.themepunch.revolution.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.fancybox.pack.js') ?>
<?= Html::jsFile('@web/js/sshb/custom.js') ?>
<?php echo $this->render('/common/_nav'); ?>
<?= Html::cssFile('@web/css/sshb/jquery.mmenu.all.css') ?>
<?= Html::jsFile('@web/js/sshb/jquery.mmenu.all.min.js') ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var mmenu=$('nav#mmenu').mmenu({
            slidingSubmenus: true,
            classes		: 'mm-white', //mm-fullscreen mm-light
            extensions	: [ "theme-white" ],
            offCanvas	: {
                position: "right", //left, top, right, bottom
                zposition: "front" //back, front,next
                //modal		: true
            },
            searchfield		: false,
            counters		: false,
            //navbars		: {
            //content : [ "prev", "title", "next" ]
            //},
            navbar 		: {
                title : "网站导航"
            },
            header			: {
                add		: true,
                update	: true,
                title	: "网站导航"
            }
        });
        $(".closemenu").click(function() {
            var mmenuAPI = $("#mmenu").data( "mmenu" );
            mmenuAPI.close();
        });

        layui.use(['layer'], function () {
            layer = layui.layer;

            // 查看视频
            $(".see-video").click(function (){
                var url = $(this).data('link');
                var title = $(this).data('title');
                if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
                    layer.open({
                        type: 2,
                        title: title,
                        maxmin: false,
                        shadeClose: true, //点击遮罩关闭层
                        close:false,
                        area : ['100vw' , '100vh'],
                        content: '/video-play.html?vt=1',
                        success: function(layero, index) {
                            var body = layer.getChildFrame('body', index);
                            var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
                            if(url.indexOf("http") === -1){
                                url = "<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") ?>" + url;
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
                        area: ['1000px', '660px'],
                        content: '/video-play.html',
                        success: function(layero, index) {
                            var body = layer.getChildFrame('body', index);
                            var iframeWin = window[layero.find('iframe')[0]['name']]; //得到iframe页的窗口对象，执行iframe页的方法：iframeWin.method();
                            if(url.indexOf("http") === -1){
                                url = "<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") ?>" + url;
                            }
                            body.find('.yy_video').attr('src', url);
                            var index = url.lastIndexOf("/");
                            var filename = url.slice(index + 1);
                        }
                    })
                }
            })
        });
    });
</script>