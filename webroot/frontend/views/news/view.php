<?php

use frontend\components\Html;
use yii\helpers\Url;
use zhang\comment\ActiveComment;
use frontend\components\ActiveSmarty;

$this->title = $model->title;
?>

<?php echo Html::cssFile('@web/css/viewer.min.css') ?>
<?php echo Html::jsFile('@web/js/viewer-jquery.min.js') ?>

<div id="wrapper">
            <div id="sitetopbar">
                <!-- LOGO开始 -->
                <?php echo $this->render('/common/_logo'); ?>
                <!-- LOGO结束 -->

                <!-- 左侧菜单开始 -->
                <?php echo $this->render('/common/_category'); ?>
                <!-- 左侧菜单结束 -->
            </div>
            <div id="main">
                <div class="wrap">
                    <div class="post">
                        <div class="posttitle-img ">
                            <div class="breadcrumb">
                                <span typeof="v:Breadcrumb">
                                    <a rel="v:url" property="v:title" href="<?= Url::to(['document/index','category_id'=>$model->category['id']]) ?>">
                                        <?= $model->category['title'] ?>
                                    </a>
                                </span>
                            </div>
                            <!-- .breadcrumbs -->
                        </div>
                        <div class="post-title">
                            <h1 class="title">
                                <?= $model->title ?>
                            </h1>
                            <div class="post_icon">
                                <span class="mr10 postuser">
                                    <i class="icon-user"></i>
                                    <a href="#">
                                        <?= $model->userinfo['username'] ?>
                                    </a>
                                </span>
                                <span class="mr10 postclock">
                                    <i class="icon-clock"></i>
                                    <?= T($model->create_time) ?>
                                </span>
                                <span class="mr10">
                                    <i class="icon-bookmark">
                                    </i>
                                    <a href="<?= Url::to(['document/index','category_id'=>$model->category_id]) ?>">
                                        <?= $model->category['title'] ?>
                                    </a>
                                </span>
                                <span class="mr10 posteye">
                                    <i class=" icon-eye"></i>
                                    <?= $model->view ?>
                                </span>
                                <span class="mr10 postcomment">
                                    <i class="icon-comment"></i>
                                    <a href="javascript:;" title="评论"><?= $commentCounts['comments'] ?></a>
                                </span>
                                <span>
                                    <a title="" href="javascript:;" data-action="ding" data-id="<?= $model->id ?>" class="favorite" data-original-title="喜欢就赞一个！">
                                        <i class=" icon-thumbs-up" style="color:#f66">
                                        </i>
                                        <span class="count">
                                            <?= $model->level ?>
                                        </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="post-content" id="post-content">
                            <?= $model->documentarticle['content'] ?>
                        </div>
                        <div class="post-share clearfix">
                            <span class="like">
                                <a title="" href="javascript:;" data-action="ding" data-id="<?= $model->id ?>" class="favorite" data-original-title="喜欢就赞一个！">
                                    <i class="icon-thumbs-up"></i>赞
                                    <span class="count">
                                        <?= $model->level ?>
                                    </span>
                                </a>
                            </span>
                            <div class="clear">
                            </div>
                        </div>
                        <div class="postmetadata">
                            <i class="icon-share-squared">
                            </i>
                            转载请注明来自
                            <a href="<?= Url::to(['/']) ?>" title="代码功">
                                代码功
                            </a>
                            ，本文标题：
                            <a href="javascript:void(0);" title="<?= $model->title ?>">
                                <?= $model->title ?>, 转载请保留本声明！
                            </a>
                            <div class="post-tags">
                                <div class="tags">
                                    <i class=" icon-bookmark"></i>
                                    标签：
                                    <?php foreach ($tags as $key => $val) : ?>
                                    <a href="<?= Url::to(['tags/index','id'=>$val['tid']]) ?>" rel="tag">
                                        <?= $val['tagInfo']['name'] ?>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!--作者信息-->
                        <div class="ad700">
                            <?php $bottomAdSmarty = ActiveSmarty::begin([
                                'options' => [
                                    'id' => 2,
                                    'keyCache' => 'viewBottomAd',
                                ],
                            ]); ?>
                            <?= $bottomAdSmarty->getAd(); ?>
                            <?php ActiveSmarty::end(); ?>
                        </div>
                        <div class="clear">
                        </div>
                        <div id="related">
                            <div class="related_about">
                                <span>
                                    相关文章
                                </span>
                            </div>
                            <ul class="related_img">
                                <?php foreach ($likeDocument as $key => $val) : ?>
                                <li class="related_box">
                                    <a href="<?= Html::toUrl($val) ?>" title="<?= $val['title'] ?>" target="_blank">
                                        <?= Html::ossImg('shape',$val['coverinfo'],'thumb176_116') ?>
                                        <h3>
                                            <?= $val['title'] ?>
                                        </h3>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                    <?php /* $myComment = ActiveComment::begin([
                        'type' => 'duoshuo',
                        'options' => [
                            'id' => $model->id,
                            'title' => $model->title,
                            'url' => $currentUrl,
                            'short_name' => 'laog',
                            // 'list_path' => 'http://gongxin.com/story/webroot/apiend/web/comments/documentComment',
                            // 'submit_path' => 'http://gongxin.com/story/webroot/apiend/web/comments',
                        ],
                    ]); */ ?>
                    <?php // ActiveComment::end(); ?>
                    <?php $myComment = ActiveComment::begin([
                        'type' => 'xin',
                        'options' => [
                            'id' => $model->id,
                            'title' => $model->title,
                            'url' => $currentUrl,
                        ],
                    ]); ?>
                    <?php ActiveComment::end(); ?>
                    <div class="clear">
                    </div>
                </div>
            </div> 
            <div class="sidebar">
                <div class="widget widget_suxingme_search affix" style="top: 20px;">
                    <?php echo $this->render('/common/_search'); ?>
                </div>
                <div class="widget widget_suxingme_note affix" style="top: 85px;">
                    <?php echo $this->render('/common/_gg'); ?>
                </div>
                <div class="widget widget_suxingme_ad affix" style="top: 279px;">
                    <?php echo $this->render('/common/_ad'); ?>
                </div>
                <div class="widget widget_text">
                    <?php echo $this->render('/common/_weixin'); ?>
                </div>

                <div id="hotcomment">
                    <div id="cyReping" role="cylabs" data-use="reping"></div>
                </div> 
            </div>
        </div>
        
        <!-- 底部开始 -->
        <?php echo $this->render('/common/_footer'); ?>
        <!-- 底部结束 -->

        <?= Html::jsFile('@web/laod/index/bootstrap.js') ?>
        <?= Html::jsFile('@web/laod/index/jquery-ias.min.js') ?>
        <?= Html::jsFile('@web/laod/index/traveler.js') ?>
        <script type="text/javascript">
            var ias = $.ias({
                container: ".posts",
                item: ".content",
                pagination: ".post-read-more",
                next: ".post-read-more a",
            });
            ias.extension(new IASTriggerExtension({
                text: '加载更多',
                offset: 1,
            }));
            ias.extension(new IASSpinnerExtension());
            ias.extension(new IASNoneLeftExtension({
                text: '<a>加载完成</a>',
            }));
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.postLike = function() {
                    if ($(this).hasClass('done')) {
                        alert("您已经赞过啦:-)");
                        return false;
                    } else {
                        $(this).addClass('done');
                        var id = $(this).data("id"),
                        action = $(this).data('action'),
                        rateHolder = $(this).children('.count');
                        var ajax_data = {
                            'id': id,
                        };
                        $.getJSON("<?= Url::to(['document/favorite']) ?>", ajax_data, function(data) {
                            $(rateHolder).html(data.data.level);
                        });
                        return false;
                    }
                };
                $(document).on("click", ".favorite", function() {
                    $(this).postLike();
                });
            });
        </script>
        <script>
            window.jui = {
                uri: '',
                roll: ["1", "2", "3"]
            }
        </script>
        <?= Html::jsFile('@web/laod/index/affix.js') ?>
        <?= Html::jsFile('@web/laod/index/responsiveslides.min.js') ?>
        <script>
            $(function() {
                $('#suxingmeslider').responsiveSlides({
                    pager: true,
                    nav: true,
                    namespace: 'centered-btns',
                });
            });
        </script>
        <?= Html::jsFile('@web/laod/index/suxingme.js') ?>
        <script type="text/javascript">
            $(function(){
                layui.use('code', function(){ //加载code模块
                    layui.code({
                        title:'代码展示',
                        elem: 'pre', //默认值为.layui-code
                        about:false,
                    }); //引用code方法
                });

                $('#post-content').viewer({
                    url: 'data-original',
                });
            })
        </script>