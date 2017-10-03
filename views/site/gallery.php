<?php

/**
 * @var $this yii\web\View
 * @var \app\models\Album $album
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="n"> <ul>
        <li><a href="<?= Url::toRoute(['/']); ?>">главная</a></li> /
        <li><a href="<?= Url::toRoute(['site/gallery']); ?>">галерея</a></li>
    </ul></div>
<div class="main-2 ">
    <div class="container-fluid r">
        <div class="container">
            <section class="container gg">
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

                                        <img class="img-responsive" src="/img/<?= $item['src'] ?>">
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
                </div>
            </section>
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
