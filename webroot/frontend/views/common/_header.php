<?php

use frontend\components\CacheConfig;
use frontend\models\Category;
use yii\helpers\Url;


$controller = Yii::$app->controller->id;
$category = Category::find()->all();
$productType = getConfigList(CacheConfig::getConfigCache('product_type'), ":");

?>
<header id="header-sec" class="header">
    <div class="search-box">
        <div class="container">
            <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <form  class="t-search-form" name="formsearch" action="/plus/search.php">
                    <input type="hidden" name="kwtype" value="0" />
                    <input type="text" value="" name="q" class="search-input" placeholder="输入关键字"/>
                    <button type="submit" class="search-btn"><i class="icon icon-Search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-lg-offset-0 col-md-offset-4 logo">
                <a href="/">
                    <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("logo") ?>" alt="Logo"/>
                </a> </div>
            <a class="mmenu-btn noDis" href="#mmenu"><i class="fa fa-bars"></i></a>
            <nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container" id="navigation">
                <ul class="top-icons-wrap pull-right">
                    <li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
                </ul>
                <ul class="mainmenu pull-right">
                    <li  class='Lev1 <?= $controller == 'site' ? 'current' : '' ?>' > <a href="/" class="menu1 hvr-overline-from-left">网站首页</a></li>
                    <li class="Lev1 <?= $controller == 'about' ? 'current' : '' ?>"> <a href="/about.html" class="menu1 hvr-overline-from-left">关于我们</a></li>
                    <li class="Lev1 dropdown <?= $controller == 'product' ? 'current' : '' ?>"> <a href="/product.html" class="menu1 hvr-overline-from-left">产品系列 <i class="fa fa-caret-down"></i></a>
                        <ul class="submenu dr-menu2">
                            <?php foreach($productType as $pk => $pt) { ?>
                                <li class="Lev2"> <a href="/product/<?= $pk ?>/1.html" class="menu2"><?= $pt ?></a> </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="Lev1 dropdown <?= $controller == 'news' ? 'current' : '' ?>"> <a href="/news.html" class="menu1 hvr-overline-from-left">新闻资讯 <i class="fa fa-caret-down"></i></a>
                        <ul class="submenu dr-menu2">
                            <?php foreach($category as $cate) { ?>
                            <li class="Lev2"> <a href="/news/<?= $cate->id ?>/1.html" class="menu2"><?= $cate->title ?></a> </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="Lev1 <?= $controller == 'video' ? 'current' : '' ?>"> <a href="/video.html" class="menu1 hvr-overline-from-left">企业视频</a></li>
                    <li class="Lev1 <?= $controller == 'contact' ? 'current' : '' ?>">
                        <a href="/contact.html" class="menu1 hvr-overline-from-left">联系我们 </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>