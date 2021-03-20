<?php
$controller = Yii::$app->controller->id;

$session = Yii::$app->session;
$token = $session->set('view_type', "pc");
?>
<li class="zj_guwm_menu zj_bvmenu">
    <a href="/about.html" <?= ($controller=='about' || $controller == 'news')?'class="zj_color_current"':'' ?>>关于我们</a>
    <ul class="zj_bmenu">
        <li><a href="/news.html">新闻动态</a></li>
    </ul>
</li>
<li class="zj_about_menu zj_bvmenu">
    <a href="/soft.html" <?= $controller=='soft'?'class="zj_color_current"':'' ?>>下载与视频</a>
    <ul class="zj_bmenu">
        <li><a href="javascript:void(0);" id="downSoft">软件下载</a></li>
        <li><a href="javascript:void(0);" id="videoPlay">视频教程</a></li>
    </ul>
</li>
<li><a href="/store.html" <?= $controller=='store'?'class="zj_color_current"':'' ?>>智慧门店</a></li>
<li><a href="/business.html" <?= $controller=='business'?'class="zj_color_current"':'' ?>>招商加盟</a></li>
<li class="zj_bvmenu">
    <a href="/aivr.html" <?= $controller=='aivr'?'class="zj_color_current"':'' ?>>AI+VR云台</a>
    <ul class="zj_bmenu">
        <li><a href="/ai.html">AI<sup>+</sup>3D云设计系统</a></li>
        <li><a href="/vr.html">裸眼VR云台</a></li>
    </ul>
</li>
<li><a href="/design.html" <?= $controller=='design'?'class="zj_color_current"':'' ?>>智能设计</a></li>
<li><a href="/" <?= $controller=='site'?'class="zj_color_current"':'' ?>>首页</a></li>