<?php 
use yii\helpers\Url;
use frontend\components\ActiveSmarty;

$getData = Yii::$app->request->get();
if(isset($getData['category_id']) && $getData['category_id']){
    $category_id = $getData['category_id'];
}else{
    $category_id = null;
}
?>

<div role="navigation" class="site-nav left-menu">
    <h1 class="minimenu-text">
        <i class="icon-align-justify">
        </i>
    </h1>
    <ul id="menu-navigation" class="menu">
        <li <?= is_null($category_id)?'class="current-menu-item"':'' ?> >
            <a href="<?= Url::to(['/']) ?>">
                <i class="icon-home-1"></i>主页
            </a>
        </li>
        <?php $categorySmarty = ActiveSmarty::begin([
            'options' => [],
        ]); ?>
        <?php $category = $categorySmarty->getCategory(); ?>
        <?php foreach ($category as $key => $val) : ?>
        <li <?= (!is_null($category_id) && $category_id == $val['id'])?'class="current-menu-item"':'' ?> >
            <a href="<?= Url::to(['document/index','category_id'=>$val['id']]) ?>">
                <i class="<?= $val['icon'] ?>"></i>
                <?= $val['title'] ?>
            </a>
        </li>
        <?php endforeach; ?>
        <?php ActiveSmarty::end(); ?>

        <?php $urlSmarty = ActiveSmarty::begin([
            'options' => [],
        ]); ?>
        <?php $urlList = $urlSmarty->getUrlList(); ?>
        <?php if(is_array($urlList) && $urlList) : ?>
        <li class=" submenu">
            <a href="javascript:;"><i class="icon-list"></i>查看更多<span class="sign "></span></a>
            <ul class="sub-menu">
                <?php foreach ($urlList as $key => $val) : ?>
                <li>
                    <a href="<?= $val['url'] ?>" <?= (isset($val['type']) && $val['type'] == 1)?'target="_blank"':'target="_self"' ?>><?= $val['title'] ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php ActiveSmarty::end(); ?>
    </ul>
</div>