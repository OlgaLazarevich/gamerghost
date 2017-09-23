<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--<nav class="navbar navbar-default menu">-->
<!--    <div class="container-fluid">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"-->
<!--                    data-target="#bs-example-navbar-collapse-1">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="index.html">gamer<span>Ghost</span> art</a>-->
<!--        </div>-->
<!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active text-center"><img src="./images/ghost.png" alt="logo"></li>-->
<!--                <li class="active"><a href="index.html">Главная</a></li>-->
<!--                <li><a href="#">Обо мне</a></li>-->
<!--                <li><a href="gallery.html">Галерея</a></li>-->
<!--                <li><a href="blog.html">Блог</a></li>-->
<!--                <li><a href="contact.html">Контакты</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<?php
NavBar::begin([
    'brandLabel' => 'gamer<span>Ghost</span> art',
    'brandUrl' => '@web',
    'innerContainerOptions' => ['class' => 'container-fluid'],
    'options' => [
        'class' => 'navbar navbar-default menu',
    ],
]);
echo Nav::widget([
    'encodeLabels' => false,
    'options' => [
        'class' => 'nav navbar-nav',
//        'id' => 'bs-example-navbar-collapse-1'
    ],
    'items' => [
        '<li class="active text-center"><img src="/images/ghost.png" alt="logo"></li>',
//        ['label' => Html::img('./images/ghost.png'), 'options' => ['class' => 'active text-center']],
        ['label' => 'Главная', 'url' => ['/'], 'options' => ['class' => 'active']],
        ['label' => 'Обо мне', 'url' => ['/about']],
        ['label' => 'Галерея', 'url' => ['/gallery']],
        ['label' => 'Блог', 'url' => ['/blog']],
        ['label' => 'Контакты', 'url' => ['/contact']],
    ],
]);
NavBar::end();
?>


<div class="main-container">
    <?= $content ?>

</div>

<!--footer сайта-->
<div class="fon-footer">
    <div class="fon-forest">
        <div class="container-fluid ff">
            <div class="container footer">
                <div class="row ">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4 f-menu">
                        <div class="row">
                            <div class="col-md-12 f-logo">
                                <p>gamer<span>Ghost</span> art</p>
                            </div>
                            <div class="col-md-12">
                                <a href="index.html">главная</a>
                            </div>
                            <div class="col-md-12">
                                <a href="#">обо мне</a>
                            </div>
                            <div class="col-md-12">
                                <a href="gallery.html">галерея</a>
                            </div>
                            <div class="col-md-12">
                                <a href="blog.html">блог</a>
                            </div>
                            <div class="col-md-12">
                                <a href="contact.html">kонтакты</a></div>
                        </div>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="row">
                            <div class="col-md-12 ">
                                <p class="seti">Ccылки на социальные сети:</p>
                            </div>

                            <div class="col-md-12">
                                <a href="#" class="i i-v"></a>
                                <a href="#" class="i i-f"></a>
                                <a href="#" class="i i-i"></a>
                                <a href="#" class="i i-t"></a>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12 text-center"><img src="/images/ghost.png" alt=""></div>
                    <div class="col-md-12 text-center cop">
                        <h5>COPYRIGHT © 2017 ОЛЬГА ЛАЗАРЕВИЧ</h5>
                        <p>Права на все работы, размещенные на сайте, принадлежат их автору.<br>
                            <a href="#">helgalazarevich@gmail.com</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
