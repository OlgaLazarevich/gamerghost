<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use \yii\bootstrap\ActiveForm;


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="site-about">-->
<!--   --><?php //
//    echo CKEditor::widget([
//    'name' => 'qwerty',
//    'editorOptions' => [
//        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
//        'inline' => false, //по умолчанию false
//    ]
//]); ?>
<!---->
<!--</div>-->
<!---->
<!--<div class="row">-->
<!--        <div class="col-lg-12">-->
<!--            --><?php
//            $form = ActiveForm::begin([
//                'layout' => 'horizontal',
//                'fieldConfig' => [
//                    'template' => "{label}\n<div class=\"col-lg-8\">{input}</div>\n<div class=\"col-lg-3\">{error}</div>",
//                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
//                ],
//            ]);
//            ?>
<!--            <h2>Header</h2>-->
<!--            --><?php //echo $form->field($model, 'name')->textInput(['class' => 'foo']); ?>
<!--            --><?//= $form->field($model, 'data')->widget(CKEditor::className(), [
//                'editorOptions' => [
//                    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
//                    'inline' => false, //по умолчанию false
//                ],
//            ]); ?>
<!--            <input type="submit">-->
<!--            --><?php //$form::end(); ?>
<!--        </div>-->
<!--    </div>-->

<div class="n"> <ul>
        <li><a href="index.html">главная</a></li> /
        <li><a href="gallery.html">обо мне</a></li>
    </ul></div>




<div class="main-2 ">
    <div class="container-fluid r">
        <div class="container about">
            <div class="row">
                <div class="col-md-4"><img src="images/V17oeAkioFw.jpg" alt=""></div>
                <div class="col-md-8 text-right">
                    <p>Привет, меня зовут Ольга. Живу в Минске и стараюсь заниматься тем, что мне действительно нравится. В числе моих хобби выделю рисование, просмотр популярно-научных фильмов, путешествия и знакомство с разными культурами.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi dolore excepturi numquam natus, repellendus molestias aliquid beatae distinctio eius adipisci commodi quam accusamus provident minus enim eos, ullam quos ad!</p>
                </div>
                <div class="col-md-4"><img src="images/ipt10HlJzdk.jpg" alt=""></div>


            </div>
            <div class="row">

                <div class="col-md-12 cit"><h3 class="text-left">Любимые цитаты:</h3>
                    <div class="col-md-4 "> <p>"Я могу нарисовать это за несколько секунд, но на то, чтобы научиться рисовать это за несколько секунд, у меня ушло 34 года"</p>
                        <p class="text-center">Пола Шер</p></div>
                    <div class="col-md-4 "> <p>"Корабль не тонет, когда он в воде. Он тонет, когда вода в нём. Не так важно, что происходит вокруг нас. Важно то, что происходит внутри нас</p>
                    </div>
                    <div class="col-md-4">
                        <p>"В жизни нужно прочесть всего одну книгу, но чтобы понять какую, нужно прочесть тысячи"</p>
                    </div>
                </div>


            </div>




        </div>
        <div class="container-fluid">
            <div class="row  text-center  book"> <div class="container">

                </div>

            </div>
        </div>
    </div>
</div>
