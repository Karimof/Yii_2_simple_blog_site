<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\NewsModel;
use app\models\GalleryModel;
use app\models\ProductsModel;
class SiteController extends Controller
{
    //ozlarimiz yaratdik

    public function actionView_news($id)
    {
        $model = $this->findModel($id);
        $model->counter += 1;
        $model->update();

        return $this->render('view_news', [
            'model' => $model
        ]);
    }

    public function actionView_product($id)
    {
        $model = $this->findModelProducts($id);
        $model->counter += 1;
        $model->update();

        return $this->render('view_product', [
            'model' => $model
        ]);
    }

    protected function findModelProducts($id)
    {
        if (($model = ProductsModel::findOne($id)) !== null) {
            return $model;
        }

    }

    protected function findModel($id)
    {
        if (($model = NewsModel::findOne($id)) !== null) {
            return $model;
        }

    }


    public function actionSearch($key = null)
    {
//        $dataProvider = false;
//        Yii::info($key, 'izlash');
        if ($key != null) {
            $model_news =NewsModel::find()
                ->where(['LIKE', 'mavzu', $key])
                ->orWhere(['LIKE', 'matn', $key])->all();
            $model_product = ProductsModel::find()
                ->where(['LIKE', 'product_name', $key])
                ->orWhere(['LIKE', 'product_text', $key])->all();


//            $dataProvider = new ActiveDataProvider([
//                'query' => $search_query
//            ]);
//            $dataProviderProduct = new ActiveDataProvider([
//                'query' => $search_product
//            ]);
            //Yii::info($search_query, 'search_result');
        }
        return $this->render('search', [
            'model_news' => $model_news,
            'model_product' => $model_product
        ]);
    }

    Public $layout = 'site';

    public function actionNews()
    {
        $query = NewsModel::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)->limit(5)->all();

        return $this->render('news', [
            'models'  => $models,
            'pages'   => $pages
        ]);
    }

    public function actionProducts()
    {
        $query = ProductsModel::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)->limit(5)->all();

        return $this->render('products', [
            'models'  => $models,
            'pages'   => $pages
        ]);
    }

    public function actionGallery()
    {

        $model = GalleryModel::find()->All();
        return $this->render('gallery', [
            'model' => $model
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'delete', 'create', 'update', 'logout'],
                        'allow' => true,
                        'roles' => ['@']
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
     * {@inheritdoc}
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
        $model = NewsModel::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
//        $model->id = new Expression('NOW()');

        return $this->render('index',[
            'model' => $model
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
            return $this->redirect(['/news/index']);
        }

        $model->password = '';
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
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
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




    public function actionChangeLang($lang_id)
    {
        Yii::$app->session->set('language', $lang_id);
        return $this->goBack((
            !empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null
        ));
    }

    public function actionPagination()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => NewsModel::find(),
        ]);

//        return $this->render('pagination', [
//            'dataProvider' => $dataProvider,
//        ]);
    }
}
