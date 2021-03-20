<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i>在线</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => '菜单列表', 'options' => ['class' => 'header']],
                    // ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    // ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>
<?php
use mdm\admin\components\MenuHelper; 
use backend\components\Menu;
 
$callback = function($menu){ 
    $data = json_decode($menu['data'], true); 
    $items = $menu['children']; 
    $return = [ 
        'label' => $menu['name'], 
        'url' => [$menu['route']], 
    ]; 
    //处理我们的配置 
    if ($data) { 
        //visible 
        isset($data['visible']) && $return['visible'] = $data['visible']; 
        //icon 
        isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon'];
        //url
        isset($data['url']) && $data['url'] && $return['url'] = array('/' . $data['url']);
        //other attribute e.g. class... 
        $return['options'] = $data; 
    } 
    //没配置图标的显示默认图标 
    (!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'fa fa-circle-o'; 
    $items && $return['items'] = $items; 
    return $return; 
}; 
//这里我们对一开始写的菜单menu进行了优化
echo Menu::widget( [ 
    'options' => ['class' => 'sidebar-menu'], 
    'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback), 
] ); ?>

    </section>

</aside>
