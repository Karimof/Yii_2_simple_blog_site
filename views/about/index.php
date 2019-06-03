<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'About Models');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create About Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'about:ntext',
            'address',
            'photoHome',
            'photo1',
            'photo2',
            'photo3',
            'create_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
