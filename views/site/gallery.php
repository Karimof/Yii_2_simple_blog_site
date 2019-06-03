<?php
use yii\helpers\Html;
?>
<style>
    #p1 {background-color:rgba(0, 0, 0, 0.8);}
</style>
<p id="p1" style="height:100px"></p>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/site/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="/site/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/site/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container">
    <?php foreach ($model as $model_item):?>
        <?php $path_thumb = '/uploads/' . $model_item->photo_thumb;?>
        <?php $path       = '/uploads/' . $model_item->photo;?>

        <!-- Trigger the modal with a button -->
        <?= Html::a(Html::img($path_thumb), Html::img($path_thumb),['data-toggle' => 'modal', 'data-target' => '#myModal']) ?>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" align="center">
            <div style="width: 80%; text-align: center" >
                <div class="modal-content" style="text-align: center">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div >
                            <?=Html::img($path,['style' => 'width: 80%', 'class' => 'container'])?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?endforeach;?>
</div>


<!--<div class="container" style="min-height: 500px">-->
<!--    <div class="row">-->
<!--        --><?php //foreach ($model as $model_item):?>
<!--        --><?php //$path_thumb = '/uploads/' . $model_item->photo_thumb;?>
<!---->
<!--            <div class="col-sm-3">-->
<!--                --><?//= Html::a(, $path) ?>
<!--            </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
