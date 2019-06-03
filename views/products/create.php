<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsModel */

$this->title = Yii::t('app', 'Create Products Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload' => $model_upload
    ]) ?>

</div>
