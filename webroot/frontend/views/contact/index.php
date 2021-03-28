<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

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
                    <div class="page-breadcumb"> <i class="fa fa-map-marker"></i> &nbsp;<span>当前位置： <a href='0/'>主页</a> > <a href='/contact.html'>联系我们</a></span> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-container" id="innerpage-wrap">
        <div class="container">
            <div class="row">
                <div class="main col-md-9 inner-left" role="main">
                    <div class="about-page-wrap">
                        <div class="com-cnt page-content"> <p>
                                四顺环保</p>
                            <p>
                                &nbsp;</p>
                            独创高端车载按摩垫、研发成功智能全自动按摩椅智能按摩沙发、腿部按摩仪、足部按摩仪，腰部按摩仪、颈椎按摩仪、高端智能足浴盆，瘦身按摩带、全功能按摩披肩等产品系列。<br />
                            服务热线：400-888-8899<br />
                            公司电话：020-66889888<br />
                            公司传真：020-66889777<br />
                            邮政编码：570000<br />
                            公司地址：广东省广州市番禺经济开发区58号<br />
                            <p>
                                乘车路线：乘坐轨道交通68号地铁在体育西站下，出站100米到</p>
                            <p>
                                &nbsp;</p>
                            <p>
                                <img src="<?= Url::to('@web/images/contact.jpg') ?>" />
                            </p>
                        </div>
                        <div id="contact-wrap">
                            <h3 class="msg-title">给我们留言</h3>
                            <form class="add-msg-form" action="/plus/diy.php" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="action" value="post" />
                                <input type="hidden" name="diyid" value="1" />
                                <input type="hidden" name="do" value="2" />
                                <div class="row">
                                    <div class="cf-column col-md-6">
                                        <input name="zt" id="zt" type="text"  placeholder="主题" />
                                    </div>
                                    <div class="cf-column col-md-6">
                                        <input name="name" id="name" type="text" placeholder="名字" />
                                    </div>
                                    <div class="cf-column col-md-6">
                                        <input name="email" id="email" type="text"  placeholder="邮箱" />
                                    </div>
                                    <div class="cf-column col-md-6">
                                        <input name="tel" id="tel" type="text"  placeholder="电话/手机"/>
                                    </div>
                                    <div class="cf-column col-md-12 cf-tarea">
                                        <textarea name="content" id="content"  placeholder="留言内容"></textarea>
                                    </div>
                                    <input type="hidden" name="dede_fields" value="name,text;tel,text;email,text;content,multitext;zt,text" />
                                    <input type="hidden" name="dede_fieldshash" value="765d8900319f5e96e60d178955626807" />
                                    <div class="cf-column col-md-12 submit-column">
                                        <button type="submit" id="submit-btn" class="submit-button">立即提交</button>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript" src="/skin/js/jquery.artdialog.js"></script>
                            <script type="text/javascript" src="/skin/js/iframetools.js"></script>
                        </div>
                    </div>
                </div>
                <aside class="sidebar col-md-3 inner-right" role="complementary">
                    <section class="widget side-search">
                        <h3 class="title">站内搜索</h3>
                        <form  class="searchform" name="formsearch" action="/plus/search.php">
                            <input type="hidden" name="kwtype" value="0" />
                            <div class="sform-div">
                                <label class="screen-reader-text" for="s"></label>
                                <input type="text" value="" name="q" placeholder="输入关键字" id="s"/>
                                <input type="submit" id="searchsubmit" value=""/>
                            </div>
                        </form>
                    </section>
                    <section class="widget side-news">
                        <h3 class="title">热点新闻</h3>
                        <div class="tabbed custom-tabbed">
                            <div class="block current">
                                <ul class="widget-list">
                                    <li>
                                        <figure><a href="/a/news/74.html">
                                                <img src="<?= Url::to('@web/images/news.jpg') ?>" />
                                            </a></figure>
                                        <div class="sn-wrapper">
                                            <p class="s-desc"><a href="/a/news/74.html" title="办公室装修设计中您是否忽略了“光健康">办公室装修设计中您是否忽略了“光健康</a></p>
                                            <span class="comments"><i class="fa fa-calendar"></i> &nbsp;2018-02-24</span> </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
    <div class="for-bottom-padding"></div>
    <?php echo $this->render('/common/_footer'); ?>
</div>
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
    });
</script>
<script>
    $(function(){
        $('#submit-btn').click(function(){
            if($('#name').val()==''){alert('请输入姓名！');return false;}
            if ($("#tel").val() == "") { alert("请输入你的手机！"); $("#tel").focus(); return false; }
            if (!$("#tel").val().match(/^(((13[0-9]{1})|147|150|151|152|153|154|155|156|158|157|159|170|180|181|182|183|184|185|186|187|188|189)+\d{8})$/)) { alert("手机号码格式不正确！"); $("#tel").focus(); return false;}
            if($('#content').val()==''){alert('请输入留言内容！');return false;}
        })
    })
</script>