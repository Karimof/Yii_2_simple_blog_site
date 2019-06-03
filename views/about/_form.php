<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AboutModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-model-form">

    <?php $form =  ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model_upload1, 'imageFile')->fileInput(['multiple' => true]) ?>

    <?=  $form->field($model_upload2, 'imageFile')->fileInput(['multiple' => true]) ?>

    <?=  $form->field($model_upload3, 'imageFile')->fileInput(['multiple' => true]) ?>

    <?=  $form->field($model_upload4, 'imageFile')->fileInput(['multiple' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
