<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutModel */

$this->title = Yii::t('app', 'Create About Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload1' => $model_upload1,
        'model_upload2' => $model_upload2,
        'model_upload3' => $model_upload3,
        'model_upload4' => $model_upload4
    ]) ?>

</div>
