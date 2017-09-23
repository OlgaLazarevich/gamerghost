<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use \yii\web\UrlManager;

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fon-blog">
    <div class="n">
        <ul>
            <li><a href="index.html">главная</a></li>
            /
            <li><a href="blog.html">блог</a></li>
        </ul>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 sections">
                <h2>Разделы:</h2>

<!--                --><?php //var_dump($blog) ?>
                <?php foreach ($sections as $item): ?>
                    <a href="/blog/<?= $item['id'] ?>"><?= $item['name'] ?></a>
                <?php endforeach; ?>
            </div>
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

        </div>
    </div>
</div></div>
