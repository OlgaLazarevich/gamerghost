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
        <li><a href="<?= Url::toRoute(['site/gallery']); ?>">галерея</a></li> /
        <li><a href="<?= Url::toRoute(['site/arts','id'=>$item['id']]); ?>">альбом: призраки</a></li>
  </ul></div>




 <div class="main-2 ">
 <div class="g-menu text-center">
    <ul>
<!--        <li class="act"><a href="gallery-1.html">призраки</a></li>-->
<!--        <li><a href="gallery-2.html">другие работы</a></li>-->
<!--        <li><a href="gallery-3.html">фото</a></li>-->
        <?php foreach ($album as $item): ?>
            <li><a href="<?= Url::toRoute(['site/arts','id'=>$item['id']]); ?>"><?= $item['name'] ?></a></li>
         <?php endforeach; ?>
    </ul>
</div>


<!--     --><?php //foreach ($art as $item): ?>
<!---->
<!--         <img src="/img/--><?//= $item['src'] ?><!--" alt="1" width="30">-->
<!--         <p> --><?//= $item['name'] ?><!--</p>-->
<!--     --><?php //endforeach; ?>



<div class="container-fluid r">




<section class="container g">
    <div class="row">
        <div class="col-sm-12">
            <!--<div class="container">-->
            <!--<div class="row">-->
            <section id="pinBoot">

                <?php foreach ($art as $item): ?>

                    <div class="item">
                        <a data-fancybox="gallery" href="/img/<?= $item['src'] ?>">
                            <img src="/img/<?= $item['src'] ?>" alt="<?= $item['name'] ?>" title="<?= $item['name'] ?>">
                        </a>
                    </div>

                <?php endforeach; ?>

<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="/img/doctor.jpg">-->
<!--                        <img src="/img/doctor.jpg" alt="1">-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="imggal/1.jpg">-->
<!--                        <img src="http://via.placeholder.com/350x150" alt="1">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="http://via.placeholder.com/3500x2000" title="test">-->
<!--                        <img src="http://via.placeholder.com/350x200" alt="2" title="test">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="http://via.placeholder.com/3500x2000" title="test">-->
<!--                        <img src="http://via.placeholder.com/350x200" alt="2" title="test">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="http://via.placeholder.com/3500x2000" title="test">-->
<!--                        <img src="http://via.placeholder.com/350x200" alt="2" title="test">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="http://via.placeholder.com/3500x2000" title="test">-->
<!--                        <img src="http://via.placeholder.com/350x200" alt="2" title="test">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/350x300" alt="3"></div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/300x250" alt="4"></div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/350x150" alt="5"></div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/300x150" alt="6"></div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/350x100" alt="7"></div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/300x150" alt="8"></div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/350x150" alt="9"></div>-->
<!--                <div class="item"><img src="http://via.placeholder.com/350x150" alt="10"></div>-->

            </section>
            <hr>
        </div>

        <!--</div>-->
        <!--</div>-->
    </div>
</section>

     </div></div>



