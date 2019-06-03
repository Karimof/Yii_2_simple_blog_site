<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

/* @var $this \yii\web\View */
/* @var $dataProvider bool|\yii\data\ActiveDataProvider */
$this->title = 'Qidiruv sahifasi';
?>
<style>
    #p1 {background-color:rgba(0, 0, 0, 0.8);}
    #a {color:red;}
</style>
<p id="p1" style="height:100px"></p>
<br>

<div class="container"  style="min-height: 500px">

    <?php if (isset($model_news)) {?>
        <?php foreach ($model_news as $news_item): ?>

        <h4><a id="a" href="/site/view_news?id=<?= $news_item->id ?>">

                <?= $news_item->mavzu; ?></a></h4>

        <p><?= $news_item->matn; ?></p>

        <hr>
        <? endforeach; ?>
    <?php }?>

    <?php if (isset($model_product)) {?>
        <?php foreach ($model_product as $product_item): ?>

            <h4><a id="a" href="/site/view_product?id=<?= $product_item->id ?>">

                    <?= $product_item->product_name; ?></a></h4>

            <p><?= $product_item->product_text; ?></p>

            <hr>
        <? endforeach; ?>
    <?php }?>
</div>

