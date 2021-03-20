<?php 

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\NextUrlPager;

$this->title = $getData['title'] . '_代码功';
?>

<style>
    font.red{color:red;font-weight:bold;}
</style>

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
                    <div class="breadcrumb">
                        <span class="current">
                            <?= $getData['title'] ?>
                        </span>
                    </div>
                    <!-- .breadcrumbs -->
                    <div class="posts">
                    <?php foreach ($list as $key => $val) : ?>
                            <div class="content">
                                <div class="content-header">
                                    <a href="<?= Url::toRoute(['document/view','name'=>$val['name']]) ?>" title="<?= $val['title'] ?>"
                                    target="_blank">
                                        <h2>
                                            <?= isset($highlight[$val['id']]['title']) ? $highlight[$val['id']]['title'][0] : $val['title'] ?>
                                        </h2>
                                    </a>
                                    <div class="content-info">
                                        <span class="mr10 postclock">
                                            <i class="icon-clock"></i>
                                            <?= T($val['create_time']) ?>
                                        </span>
                                        <span class="mr10 postuser">
                                            <i class="icon-user"></i>
                                            <a href="javascript:;">代码功</a>
                                        </span>
                                        <span class="mr10 posteye">
                                            <i class=" icon-eye"></i>0
                                        </span>
                                        <span>
                                            <a title="" href="javascript:;" data-action="ding" data-id="<?= $val['id'] ?>" class="favorite" data-original-title="喜欢就赞一个！">
                                                <i class=" icon-thumbs-up" style="color:#f66"></i>
                                                <span class="count">0</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="content-img">
                                    <a href="<?= Url::toRoute(['document/view','name'=>$val['name']]) ?>" title="<?= $val['title'] ?>" target="_blank">
                                        <?= Html::ossImg('shape',array('path'=>$val['cover_path'], 'md5'=>$val['cover_md5']),'thumb240_150') ?>
                                    </a>
                                </div>
                                <div class="content-note">
                                    <p><?= isset($highlight[$val['id']]['description']) ? $highlight[$val['id']]['description'][0] : $val['description'] ?></p>
                                    <span class="category-color">
                                        <a href="<?= Url::toRoute(['document/index','category_id'=>$val['category_id']]) ?>"><?= $val['category_name'] ?></a>
                                    </span>
                                    <div class="content-info-r">
                                        <span class="mr10">
                                            <a href="<?= Url::toRoute(['document/view','name'=>$val['name']]) ?>" title="<?= $val['title'] ?>" target="_blank">READ MORE</a>
                                            <i class=" icon-export-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="post-read-more clearfix mb30" style="display: none;">
                        <?= NextUrlPager::widget(['pagination' => $pages,]); ?>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="widget widget_suxingme_search affix-top" style="top: 0px;">
                    <?php echo $this->render('/common/_search'); ?>
                </div>
                <div class="widget widget_suxingme_note" style="top: 0px;">
                    <?php echo $this->render('/common/_gg'); ?>
                </div>
                <div class="widget widget_suxingme_ad" style="top: 0px;">
                    <?php echo $this->render('/common/_ad'); ?>
                </div>
                <div class="widget widget_text">
                    <?php echo $this->render('/common/_weixin'); ?>
                </div>
                <div class="widget widget_suxingme_comment">
                    <?php echo $this->render('/common/_comment'); ?>
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