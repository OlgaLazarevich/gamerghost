<?php

/**
 * @var $this yii\web\View
 * @var \app\models\Album $album
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\LinkPager;

$this->title = 'Галерея: изображения : gamerGhost art';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'рисую комикс о призраке',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'призрак, рисунки, комиксы, artwork, мемы, comics, ghost, призрак комиксы',
]);
$this->params['breadcrumbs'][] = $this->title;
?>

<style> .a {color: #cfaa34 !important;}</style>

<div class="n"> <ul>
        <li><a href="<?= Url::toRoute(['/']); ?>">главная</a></li> /
        <li><a href="<?= Url::toRoute(['site/gallery']); ?>">галерея</a></li> /
        <li><a href="<?= Url::toRoute(['site/arts','id'=>$item['id']]); ?>">альбом: призраки</a></li>
  </ul></div>




 <div class="main-2 ">
 <div class="g-menu text-center">
    <ul>
        <?php $request = Yii::$app->request;?>
        <?php $id = $request->get('id'); ?>
        <?php foreach ($album as $item): ?>
            <?php $isActive = $id == $item['id']; ?>
            <li><a <?= $isActive ? 'class="a"' : '';?> href="<?= Url::toRoute(['site/arts','id'=>$item['id']]); ?>"><?= $item['name'] ?></a></li>
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

                <?php foreach ($articles as $item): ?>

                    <div class="item">
                        <a data-fancybox="gallery" href="/img/<?= $item['src'] ?>">
                            <img src="/img/<?= $item['src'] ?>" alt="<?= $item['name'] ?>" title="<?= $item['name'] ?>">
                        </a>
                    </div>

                <?php endforeach; ?>



            </section>
            <hr>
        </div>
        <div class="col-md-12 text-center">
            <?php echo LinkPager::widget([
                'pagination' => $pagination,
                'registerLinkTags' => true
            ]);?>
        </div>
    </div>
</section>

     </div></div>



