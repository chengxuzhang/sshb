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
                        <div class="com-cnt page-content"> <h1>
                                四顺环保</h1>
                            <p>
                                &nbsp;</p>
                            <?= CacheConfig::getConfigCache('footer_remark') ?><br />
                            公司电话：<?= CacheConfig::getConfigCache('phone') ?><br />
                            公司传真：<?= CacheConfig::getConfigCache('tel') ?><br />
                            公司邮箱：<?= CacheConfig::getConfigCache('email') ?><br />
                            公司地址：<?= CacheConfig::getConfigCache('address') ?><br />
                            <p>乘车路线：<?= CacheConfig::getConfigCache('bus') ?></p>
                            <br><br><br>
                            <p>
                                <img src="<?= Url::to('@web/images/contact.jpg') ?>" />
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