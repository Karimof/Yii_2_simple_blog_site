<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GalleryModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-model-form">

    <?php $form =  ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>

    <?=  $form->field($model_upload, 'imageFile')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
