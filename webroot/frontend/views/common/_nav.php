<?php
use frontend\components\CacheConfig;
use frontend\models\Category;

$category = Category::find()->all();
$productType = getConfigList(CacheConfig::getConfigCache('product_type'), ":");
?>


<nav id="mmenu" class="noDis">
    <div class="mmDiv">
        <div class="MMhead">
            <a href="#mm-0" class="closemenu noblock">X</a>
            <a href="javascript:;" target="_blank" class="noblock"><i class="fa fa-weibo"></i></a>
            <a href="javascript:;" target="_blank" class="noblock"><i class="fa fa-tencent-weibo"></i></a>
        </div>
        <div class="mm-search">
            <form  class="mm-search-form" name="formsearch" action="/search.html">
                <input type="hidden" name="kwtype" value="0" />
                <input type="text" autocomplete="off" value="" name="q" class="side-mm-keyword" placeholder="输入关键字..."/>
            </form>
        </div>
        <ul>
            <li class="m-Lev1 m-nav_0"><a href="/">网站首页</a></li>
            <li class="m-Lev1 m-nav_43"> <a href="/about.html" class="m-menu1">关于我们</a></li>
            <li class="m-Lev1 m-nav_43"> <a href="/product.html" class="m-menu1">产品系列</a>
                <ul class="m-submenu">
                    <?php foreach($productType as $pk => $pt) { ?>
                        <li class="Lev2"> <a href="/product/<?= $pk ?>/1.html" class="m-menu2"><?= $pt ?></a> </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="m-Lev1 m-nav_43"> <a href="/news.html" class="m-menu1">新闻资讯</a>
                <ul class="m-submenu">
                    <?php foreach($category as $cate) { ?>
                        <li class="Lev2"> <a href="/news/<?= $cate->id ?>/1.html" class="m-menu2"><?= $cate->title ?></a> </li>
                    <?php } ?>
                </ul>
            </li>
            <li class="m-Lev1 m-nav_43"> <a href="/video.html" class="m-menu1">企业视频</a></li>
            <li class="m-Lev1 m-nav_43"> <a href="/contact.html" class="m-menu1">联系我们</a></li>
        </ul>
    </div>
</nav>