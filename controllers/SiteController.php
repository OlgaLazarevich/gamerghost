<?php

namespace app\controllers;

use app\models\Album;
use app\models\Art;
use app\models\Blog;
use app\models\Sections;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Helga;
use app\models\DataForm;
use app\component\ImageHelper;
use yii\data\Pagination;




class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
//        $a = 5;
//        $b = 7;
//        $red = "Hello world";
//        $sum = ' $a+$b = ' . ($a + $b);
////        $helga = Helga::find(One(29));
//        $helga = Helga::find()->all();
//        return $this->render('index', [
//            'key' => $red,
//            'sum' => $sum,
//            'userr' => $helga
//        ]);
        $album = (new \yii\db\Query())
            ->select('album.*, src')
            ->from('album')
            ->leftJoin('art', 'album.art_id = art.id')
            ->where(['album.visible' => 1])
            ->all();

        $blog = (new \yii\db\Query())
            ->select('blog.*')
            ->from('blog')
            ->limit('3')
            ->orderBy(['date' => SORT_DESC])
            ->all();


        return $this->render('index', [
            'album' => $album,
            'blog' => $blog
        ]);

    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');

//            return $this->refresh();
//        }
        return $this->render('contact');
    }

    /**
     * Displays about page.
     *
     * @return string
     */

    public function actionAbout()
    {


        return $this->render('about');
    }


    public function actionBlog($id = 0)
    {
//        $blog = (new \yii\db\Query())
//            ->select('blog.*')
//            ->from('blog');
//        if ($id != 0) {
//            $blog = $blog->where('section_id = :id')
//                ->addParams(['id' => $id]);
//        }
//
//
//        $blog = $blog->orderBy(['date' => SORT_DESC])
//            ->all();
//
//        $sections = (new \yii\db\Query())
//            ->select('sections.*')
//            ->from(Sections::tableName())
//            ->all();
//
//
            $blog = (new \yii\db\Query())
                ->select('blog.*')
                ->from('blog');
            if ($id != 0) {
                $blog = $blog->where('section_id = :id')
                    ->addParams(['id' => $id]);
            }

        $count = $blog->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 2]);


            $articles = $blog->offset($pagination->offset)
                ->limit($pagination->limit)
                ->orderBy(['date' => SORT_DESC])
                ->all();

            $sections = (new \yii\db\Query())
                ->select('sections.*')
                ->from(Sections::tableName())
                ->all();



        return $this->render('blog', ['articles' => $articles,
            'sections' => $sections,
            'pagination' => $pagination]);
    }

    public function actionPost($id)
    {
//        var_dump($id);

        $blog1 = Blog::findOne($id);

        $blog = (new \yii\db\Query())
            ->select('blog.*')
            ->from('blog')
            ->limit('3')
            ->orderBy(['date' => SORT_DESC])
            ->all();

        return $this->render('post', ['blog1' => $blog1, 'blog' => $blog]);
    }

    public function actionGallery()
    {

        $album = (new \yii\db\Query())
            ->select('album.*, src')
            ->from('album')
            ->leftJoin('art', 'album.art_id = art.id')
            ->where(['album.visible' => 1])
            ->all();


//        $blog = Blog::find()->all();


        return $this->render('gallery', ['album' => $album]);
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionArts($id = 0)
    {

//        $album = (new \yii\db\Query())
//            ->select('album.*, src')
//            ->from('album')
//            ->leftJoin('art', 'album.art_id = art.id')
//            ->where(['album.visible' => 1])
//            ->all();
//
//        $art = (new \yii\db\Query())
//            ->select('art.*')
//            ->from('art');
//        if ($id != 0) {
//            $art = $art->where('album_id = :id')
//                ->addParams(['id' => $id]);}
//        $art = $art->orderBy(['update_at' => SORT_DESC])
//            ->all();


//        $album = (new \yii\db\Query())
//            ->select('album.*, src')
//            ->from('album')
//            ->leftJoin('art', 'album.art_id = art.id')
//            ->where(['album.visible' => 1])
//            ->all();
//
//        $art = (new \yii\db\Query())
//            ->select('art.*')
//            ->from('art');
//        if ($id != 0) {
//            $art = $art->where('album_id = :id')
//                ->addParams(['id' => $id]);}
//        $art = $art->orderBy(['update_at' => SORT_DESC])
//            ->all();



        $album = (new \yii\db\Query())
            ->select('album.*, src')
            ->from('album')
            ->leftJoin('art', 'album.art_id = art.id')
            ->where(['album.visible' => 1])
            ->all();

        $art = (new \yii\db\Query())
            ->select('art.*')
            ->from('art');
        if ($id != 0) {
            $art = $art->where('album_id = :id')
                ->addParams(['id' => $id]);}

        $count = $art->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 10]);


        $articles = $art->offset($pagination->offset)
            ->limit($pagination->limit)
            ->orderBy(['update_at' => SORT_DESC])
            ->all();
        return $this->render('arts', ['articles' => $articles, 'album' => $album, 'pagination' => $pagination]);
    }


}