<?php

$this->title = $model->title;
?>

<?php echo $this->render('/common/_check'); ?>
<div class="preloader"></div>
<div id="page-body-wrap">
    <?php echo $this->render('/common/_topbar'); ?>
    <?php echo $this->render('/common/_header'); ?>

    <section id="page-title" style="background-image:url('/images/news.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h1>新闻资讯</h1>
                    </div>
                    <div class="page-breadcumb">
                        <i class="fa fa-map-marker"></i> &nbsp;
                        <span>当前位置：
                            <a href='/'>主页</a> >
                            <a href='/news.html'>新闻资讯</a> >
                            <a href='/news/<?= $model->category->id ?>/1.html'><?= $model->category->title ?></a> >
                            <a href='javascript:;'><?= $model->title ?></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-container" id="innerpage-wrap">
        <div class="container">
            <div class="row">
                <div class="main col-md-9 inner-left" role="main">
                    <div class="blog-post blog-post-wrap">
                        <h3 class="text-center bp-title"><?= $model->title ?></h3>
                        <small class="text-center bp-desc"><i class="fa fa-tag"></i> &nbsp;
                            <a href="/news/<?= $model->category->id ?>/1.html"><?= $model->category->title ?></a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-calendar"></i> &nbsp;<?= date('Y-m-d H:i', $model->create_time) ?></small>
                        <div class="com-cnt page-content bp-content">
                            <?= $model->article->content ?>
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