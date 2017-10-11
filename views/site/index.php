<?php

/**
 * @var $this yii\web\View
 * @var \app\models\Album $album
 */


use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'Главная : gamerGhost art';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'рисую комикс о призраке',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'призрак, рисунки, комиксы, artwork, мемы, comics, ghost, призрак комиксы',
]);
?>

<div class="top-link text-center">
    <a href="#" class="fa fa-facebook-square"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-twitter-square"></a>
    <a href="#" class="fa fa-vk"></a>
</div>

<div class="main">

    <div class="container-fluid">

        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->


            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>gamerGhost art</h1>
                            <h3>сайт о творчестве художника-илюстратора</h3>
                        </hgroup>

                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>gamerGhost art</h1>
                            <h3>рисую комиксы о призраке</h3>
                        </hgroup>

                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>gamerGhost art</h1>
                            <h3>сайт о творчестве художника-илюстратора</h3>
                        </hgroup>

                    </div>
                </div>
            </div>
        </div>


    </div>


</div>


<div class="main-2 ">

    <div class="container-fluid r">
        <div class="container ">
    
<!--            --><?php //var_dump($album) ?>






            <h1>мои работы</h1>

            <div class="row active-with-click">
                <?php foreach ($album as $item): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Light-Green">
                            <h2>
                                <span><?= $item['name'] ?></span>
                                <strong>
                                    <a href="<?= Url::toRoute(['site/arts','id'=>$item['id']]); ?>" class="a-gall">Перейти к галерее</a>
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/<?= $item['art_src'] ?>">
                                </div>
                                <div class="mc-description">
                                    <?= $item['description']; ?>
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    <?= $item['name'] ?>
                                </h4>
                                <a class="text-center" href="<?= Url::toRoute(['site/arts','id'=>$item['id']]); ?>">&#9658;</a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>



                <div class="row">
                    <div class="col-md-12">
                        <h1>мой блог</h1>
                        <h3>последние новости</h3>


                    <?php foreach ($blog as $item): ?>

                        <div class="col-md-4">
                            <div class="single-blog-item">
                                <div class="blog-thumnail">
                                    <a href=""><img src="/img/blog/2.jpg" alt="blog-img"></a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="<?= Url::toRoute(['site/post','id'=>$item['id']]); ?>"><?= $item['name'] ?></a></h4>
                                    <p><?= $item['description'] ?></p>
                                    <a href="<?= Url::toRoute(['site/post','id'=>$item['id']]); ?>" class="more-btn">Читать</a>
                                </div>
                                <span class="blog-date"><?= $item['date'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
<!--                    <div class="col-md-4">-->
<!--                            <div class="single-blog-item">-->
<!--                            <div class="blog-thumnail">-->
<!--                                <a href=""><img src="img/blog/2.jpg" alt="blog-img"></a>-->
<!--                            </div>-->
<!--                            <div class="blog-content">-->
<!--                                <h4><a href="#">Название статьи</a></h4>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita-->
<!--                                    exercitationem-->
<!--                                    nostrum, eligendi quis, esse quos atque in molestias animi.</p>-->
<!--                                <a href="" class="more-btn">Читать</a>-->
<!--                            </div>-->
<!--                            <span class="blog-date">Май 03, 2015</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4">-->
<!--                        <div class="single-blog-item">-->
<!--                            <div class="blog-thumnail">-->
<!--                                <a href=""><img src="img/blog/2.jpg" alt="blog-img"></a>-->
<!--                            </div>-->
<!--                            <div class="blog-content">-->
<!--                                <h4><a href="#">Название статьи</a></h4>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita-->
<!--                                    exercitationem-->
<!--                                    nostrum, eligendi quis, esse quos atque in molestias animi.</p>-->
<!--                                <a href="" class="more-btn">Читать</a>-->
<!--                            </div>-->
<!--                            <span class="blog-date">Май 03, 2015</span>-->
<!--                        </div>-->
<!--                    </div>-->


                </div>
            </div>
        </div>

    </div>

    </div>
</div>


    <div class="slogan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                </div>
            </div>
        </div>
    </div>


    <script>
        function ready() {
            $(function () {
                $('.material-card > .mc-btn-action').click(function () {
                    var card = $(this).parent('.material-card');
                    var icon = $(this).children('i');
                    icon.addClass('fa-spin-fast');

                    if (card.hasClass('mc-active')) {
                        card.removeClass('mc-active');

                        window.setTimeout(function () {
                            icon
                                .removeClass('fa-arrow-left')
                                .removeClass('fa-spin-fast')
                                .addClass('fa-bars');

                        }, 800);
                    } else {
                        card.addClass('mc-active');

                        window.setTimeout(function () {
                            icon
                                .removeClass('fa-bars')
                                .removeClass('fa-spin-fast')
                                .addClass('fa-arrow-left');

                        }, 800);
                    }
                });
            });
        }

        document.addEventListener("DOMContentLoaded", ready);


    </script>

    <!--    --><?php //foreach ($album as $item): ?>
    <!--        <div>-->
    <!--            <!--            <img src="--><? // //= ?><!--<!--" alt="">-->
    <!--            <h2>--><? //= $item->name ?><!--</h2>-->
    <!--            <p>--><? //= $item->description ?><!--</p>-->
    <!--        </div>-->
    <!--    --><?php //endforeach; ?>


    <!--    <div class="jumbotron">-->
    <!--        <h1>--><?php //echo $key; ?><!--</h1>-->
    <!--        <h3>--><?php //echo $sum; ?><!--</h3>-->
    <!--<!--          <h3>--><?php ////echo $userr->Name; ?><!--</h3>-->
    <!--           --><?php //foreach ($userr as $item): ?>
    <!--            <p>--><?php //echo $item->Name; ?><!--</p>-->
    <!--             <p>--><? //= $item->Meil; ?><!--</p>-->
    <!--           --><?php //endforeach ; ?>
    <!---->
    <!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
    <!---->
    <!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    <!--    </div>-->

    <!--    <div class="body-content">-->
    <!---->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--            --><?php //
    //echo CKEditor::widget([
    //    'editorOptions' => [
    //        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
    //        'inline' => false, //по умолчанию false
    //
    //    ] ,
    //'name' => 'red'
    //
    //]);
    //                ?>
    <!---->
    <!--              -->
    <!--            </div>-->
    <!--           -->
    <!-- -->
    <!--        </div>-->
    <!---->
    <!--    </div>-->

