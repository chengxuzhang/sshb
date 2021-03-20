<?php
use yii\helpers\Html;

if (Yii::$app->controller->action->id === 'login') {
    /**
     * Do not use this code in your template. Remove it.
     * Instead, use the code  $this->layout = '//main-login'; in your controller.
     */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script type="text/javascript">
            var myeditor;
        </script>
        <?php $this->head() ?>
        <style>
            html,body{
                overflow-x: hidden;
                overflow-y: hidden;
            }
            .grid-view{
                padding-top: 10px;
            }
            .control-label{
                height: 34px;
                line-height: 34px;
                text-align: right;
                font-weight: 400;
                overflow: hidden;
            }
            .skin-blue .main-header .navbar{
                background-color: white;
                border-bottom: 1px solid #EEEEEE;
            }
            .skin-blue .main-header .navbar .sidebar-toggle{
                color: #000000;
            }
            .skin-blue .main-header .navbar .sidebar-toggle:hover {
                background-color: #ffffff;
                color: #000000;
            }
            .skin-blue .main-header .navbar .nav>li>a{
                color: #000000;
            }
            .skin-blue .main-header .navbar .nav>li>a:hover, .skin-blue .main-header .navbar .nav>li>a:active, .skin-blue .main-header .navbar .nav>li>a:focus, .skin-blue .main-header .navbar .nav .open>a, .skin-blue .main-header .navbar .nav .open>a:hover, .skin-blue .main-header .navbar .nav .open>a:focus, .skin-blue .main-header .navbar .nav>.active>a {
                background: #ffffff;
                color: #000000;
            }
            .skin-blue .main-header .logo{
                background-color: #222d32;
                border-bottom: 1px solid #000000;
            }
            .skin-blue .main-header .logo:hover {
                background-color: #222d32;
            }
            .skin-blue .main-header .navbar .nav-header-btn{
                float: left;
                background-color: transparent;
                background-image: none;
                padding: 15px 15px;
                font-family: fontAwesome;
            }
            .skin-blue .main-header li.user-header{
                background-color: #222d32;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
