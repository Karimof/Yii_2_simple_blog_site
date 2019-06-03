<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-model-index">



    <p>
        <?= Html::a(Yii::t('app','Create news'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'mavzu',
            'matn:html',
            'sana_vaqt',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

    ?>


</div>
