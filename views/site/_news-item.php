<?php
    use yii\helpers\Html;
?>
<div class="row">

        <div class="container">
            <div class="col-sm-10">
                <div class="col-sm-12">
                    <div class="col-sm-4" style="">
                        <img style="width: 260px" src="/uploads/<?= $model ->photo_thumb ?>">
                    </div>
                    <div class="col">
                        <div class="col-sm-4">
                            <h4 style="color:red"><?=Yii::t('app', $model ->mavzu)?></h4>
                        </div>
                        <div class="col-sm-5">
                            <?=Yii::t('app', $model ->matn)?>
                        </div>
                        <div  class="col-sm-6" style="position: absolute; right: 0px; top: 220px">
                            <?= Html::a(Yii::t('app','More'),['/site/view?id='.$model->id],['class'=>'btn btn-info']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
</div>