<?php
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;
use frontend\components\Html;
use frontend\models\News;
use yii\helpers\Url;


$news = News::find()->limit(4)->orderBy('create_time desc')->all();
?>

<aside class="sidebar col-md-3 inner-right" role="complementary">
    <section class="widget side-search">
        <h3 class="title">站内搜索</h3>
        <form class="searchform" name="formsearch" action="/search.html">
            <input type="hidden" name="kwtype" value="0"/>
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
                    <?php foreach($news as $val) { ?>
                    <li>
                        <figure>
                            <a href="/news/detail/<?= $val->id ?>.html">
                                <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . $val->cover_url ?>"/>
                            </a>
                        </figure>
                        <div class="sn-wrapper">
                            <p class="s-desc"><a href="/news/detail/<?= $val->id ?>.html" title="<?= $val->title ?>"><?= $val->title ?></a>
                            </p>
                            <span class="comments">
                                <i class="fa fa-calendar"></i> &nbsp;<?= date('Y-m-d', $val->create_time) ?>
                            </span>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
</aside>