<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\ImageUpload;
use yii\web\UploadedFile;


class ImageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new ImageUpload();
        /* Begin Upload */
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile[]');
            if($model->upload()) {
                Yii::$app->session->setFlash('success', 'Yuklandi!');
                return $this->redirect(['image/index']);
            }
        }
        return $this->render('index', [
            'model' => $model
        ]);
    }
}