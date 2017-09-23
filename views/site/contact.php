<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="n"> <ul>
        <li><a href="index.html">главная</a></li> /
        <li><a href="gallery.html">контакты</a></li>
    </ul></div>




<div class="container contact text-center">
    <div class="row">
        <h3>Вы всегда можете найти меня в социальных сетях
            а также связаться со мной по почте:</h3>
    </div>
</div>

<div class='container text-center cont'>



    <div class='map map-1' style="background-image:url('images/5.png')">
        <div class="c">ПОЧТА</div>
        <i class="fa fa-google" aria-hidden="true" ></i>
    </div>
    <div class='map map-2' style="background-image:url('images/4.png')">
        <div class="c">INSTAGRAM</div>
        <i class="fa fa-instagram" ></i>
    </div>
    <div class='map map-3' style="background-image:url('images/3.png')">
        <div class="c">VK</div>
        <i class="fa fa-vk"></i>
    </div>
    <div class='map map-5' style="background-image:url('images/2.png')">
        <div class="c">FACEBOOK</div>
        <i class="fa fa-facebook-square" ></i>
    </div>

    <div class='map map-4' style="background-image:url('images/1.png')">
        <div class="c">TWITTER</div>
        <i class="fa fa-twitter-square" ></i>
    </div>

</div>

