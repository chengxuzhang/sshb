<?php
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;
use frontend\components\Html;
use yii\helpers\Url;
?>


<nav id="mmenu" class="noDis">
    <div class="mmDiv">
        <div class="MMhead"> <a href="#mm-0" class="closemenu noblock">X</a> <a href="http://www.weibo.com/gooxao" target="_blank" class="noblock"><i class="fa fa-weibo"></i></a> <a href="http://t.qq.com/gooxao2" target="_blank" class="noblock"><i class="fa fa-tencent-weibo"></i></a> </div>
        <div class="mm-search">
            <form  class="mm-search-form" name="formsearch" action="/plus/search.php">
                <input type="hidden" name="kwtype" value="0" />
                <input type="text" autocomplete="off" value="" name="q" class="side-mm-keyword" placeholder="输入关键字..."/>
            </form>
        </div>
        <ul>
            <li class="m-Lev1 m-nav_0"><a href="/">网站首页</a></li>
            <li class="m-Lev1 m-nav_43"> <a href="/a/about/" class="m-menu1">关于我们</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/about/jianjie/" class="m-menu2">公司简介</a> </li>

                    <li class="Lev2"> <a href="/a/about/qiyuan/" class="m-menu2">品牌起源</a> </li>

                    <li class="Lev2"> <a href="/a/about/xiangce/" class="m-menu2">公司相册</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/product/" class="m-menu1">产品系列</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/product/p1/" class="m-menu2">金融贸易</a> </li>

                    <li class="Lev2"> <a href="/a/product/p2/" class="m-menu2">信息科技</a> </li>

                    <li class="Lev2"> <a href="/a/product/p3/" class="m-menu2">医疗保健</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/case/" class="m-menu1">定制案例</a>
                <ul class="m-submenu">

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/news/" class="m-menu1">新闻资讯</a>
                <ul class="m-submenu">

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/youshi/" class="m-menu1">服务优势</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/youshi/tuandui/" class="m-menu2">专业的服务团队</a> </li>

                    <li class="Lev2"> <a href="/a/youshi/shigong/" class="m-menu2">专业的施工团队</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/team/" class="m-menu1">精英团队</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/team/sheji/" class="m-menu2">设计团队</a> </li>

                    <li class="Lev2"> <a href="/a/team/shigong/" class="m-menu2">施工团队</a> </li>

                    <li class="Lev2"> <a href="/a/team/guanli/" class="m-menu2">管理团队</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/contact/" class="m-menu1">联系我们</a>
                <ul class="m-submenu">

                </ul>
            </li>
        </ul>
    </div>
</nav>