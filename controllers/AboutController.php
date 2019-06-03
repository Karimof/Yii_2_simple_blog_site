<?php

namespace app\controllers;

use Yii;
use app\models\AboutModel;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ImageUpload1;
use yii\web\UploadedFile;

/**
 * AboutController implements the CRUD actions for AboutModel model.
 */
class AboutController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AboutModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AboutModel::find()->orderBy(['id' => SORT_DESC]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AboutModel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AboutModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AboutModel();
        $model->create_time = new Expression('NOW()');
        $model_upload1 = new ImageUpload1();
        $model_upload2 = new ImageUpload1();
        $model_upload3 = new ImageUpload1();
        $model_upload4 = new ImageUpload1();

        if (Yii::$app->request->isPost) {
            $model_upload1->imageFile = UploadedFile::getInstance($model_upload1,'imageFile');
            $model_upload2->imageFile = UploadedFile::getInstance($model_upload2,'imageFile');
            $model_upload3->imageFile = UploadedFile::getInstance($model_upload3,'imageFile');
            $model_upload4->imageFile = UploadedFile::getInstance($model_upload4,'imageFile');
            $images1 = $model_upload1->upload();
            $images2 = $model_upload2->upload();
            $images3 = $model_upload3->upload();
            $images4 = $model_upload4->upload();
            if ($images1 && $images2 && $images3 && $images4){
                $model->photoHome = $images1['full_name'];
                $model->photo1 = $images2['full_name'];
                $model->photo2 = $images3['full_name'];
                $model->photo3 = $images4['full_name'];
            }

            if($model_upload1->imageFile && $model_upload1->validate()){
                $model_upload1->imageFile->saveAs('/uploads/' . $model_upload1->imageFile->baseName .  '.');
                $model_upload2->imageFile->saveAs('/uploads/' . $model_upload2->imageFile->baseName .  '.');
                $model_upload3->imageFile->saveAs('/uploads/' . $model_upload3->imageFile->baseName .  '.');
                $model_upload4->imageFile->saveAs('/uploads/' . $model_upload4->imageFile->baseName .  '.');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'model_upload1' => $model_upload1,
            'model_upload2' => $model_upload2,
            'model_upload3' => $model_upload3,
            'model_upload4' => $model_upload4
        ]);
    }

    /**
     * Updates an existing AboutModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->create_time = new Expression('NOW()');
        $model_upload1 = new ImageUpload1();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'model-upload' => $model_upload1
        ]);
    }

    /**
     * Deletes an existing AboutModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AboutModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AboutModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AboutModel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
