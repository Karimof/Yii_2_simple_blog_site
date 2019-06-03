<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<style>
    #p1 {background-color:rgba(0, 0, 0, 0.8);}
</style>
<p id="p1" style="height: 100px"></p>
<div class="row" style="min-height: 500px">
    <?php foreach ($models as $model_item):?>
        <!--    --><?php //var_dump($pages); exit;?>
        <div class="container">
            <div class="col-sm-10">
                <div class="col-sm-12">
                    <div class="col-sm-4" style="">
                        <img style="width: 260px" src="/uploads/<?= $model_item->product_photo_thumb ?>">
                    </div>
                    <div class="col">
                        <div class="col-sm-4">
                            <h4 style="color:red"><?=Yii::t('app', $model_item->product_name)?></h4>
                        </div>
                        <div class="col-sm-5">
                            <?=Yii::t('app', $model_item->product_text)?>
                        </div>
                        <div  class="col-sm-6" style="position: absolute; right: 120px; top: 220px">
                            <?=$model_item->price?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <?= Html::a(Yii::t('app','More'),['/site/view_product?id='.$model_item->id],['class'=>'btn btn-info']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    <?endforeach;?>
</div>
<?=
LinkPager::widget([
    'pagination' => $pages
])
?>


