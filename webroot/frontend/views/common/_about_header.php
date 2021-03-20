<?php
use frontend\components\ActiveSmarty;
?>

<div class="row vr_nav dhj_yy_nav">
    <div class="vr_nav_con">
        <div class="col-lg-3 col-xs-3 zj_logo hidden-xs"><h1><a href="/"><img src="../images/logo_bai.png"/></a></h1></div>
        <div class="col-lg-3 col-xs-3 zj_logo_m visible-xs"><h1><img src="../images/logo_bai.png"/></h1></div>
        <ul class="col-lg-9 col-xs-9 zj_menu hidden-xs">
            <!-- 头部开始 -->
            <?php echo $this->render('/common/_header'); ?>
            <!-- 头部结束 -->
        </ul>
    </div>
</div>