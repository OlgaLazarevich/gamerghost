<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Блог: статья : gamerGhost art';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'рисую комикс о призраке',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'призрак, рисунки, комиксы, artwork, мемы, comics, ghost, призрак комиксы',
]);
?>
<div class="fon-blog">

    <div class="n">
        <ul>
            <li><a href="<?= Url::toRoute(['/']); ?>">главная</a></li> /
            <li><a href="blog.html">блог</a></li> /
            <li><a href="b-1.html">статья </a></li>
        </ul>
    </div>


    <div class="container post">


        <div class="row">

            <div class="col-md-12">

                <span class="blog-date"><?= $blog1->date ?></span>
            </div>
            <div class="col-md-12">

                <h4><a href="#"><?= $blog1->name ?></a></h4>
            </div>
            <div class="col-md-12">
                <img src="./img/2222.png" alt="blog-img">


                <p><?= $blog1->text ?></p>

            </div>
            <div class="col-md-12">
                <h3>Рубрика:<?= $blog1->section_id ?></h3>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 d">Читайте также другие статьи:</div>
            <?php foreach ($blog as $item): ?>



                <div class="col-md-4">
                    <div class="single-blog-item">
                        <div class="blog-thumnail">
                            <a href=""><img src="img/blog/2.jpg" alt="blog-img"></a>
                        </div>
                        <div class="blog-content">
                            <h4><a href="#"><?= $item['name'] ?></a></h4>
                            <p><?= $item['description'] ?></p>
                            <a href="" class="more-btn">Читать</a>
                        </div>
                        <span class="blog-date"><?= $item['date'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div></div>
