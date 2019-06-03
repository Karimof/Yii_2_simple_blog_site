<?php
use yii\helpers\Html;
//@var $this yii\web\View;

  $this->title = 'web.uz';
?>
<div class="main-header">
  <div class="container text-center">
    <div class="wrapper wow fadeInUp delay-05s">
      <h3 class="title">Web.uz</h3>
      <h4 class="sub-title"><?= Yii::t('app','Submit ALL WEB SITE AND WEB DESCRIPTION') ?></h4>
    </div>
  </div>
</div>
<div class="container"><hr>

    <p style="font-size: 16pt" class="sec-para">So'ngi yangiliklar</p>

    <div class="row">
        <?php foreach ($model as $model_item):?>
        <div class="container">
        <div class="col-sm-10">
            <div class="col-sm-12">
                <div class="col-sm-4" style="">
                    <img style="width: 260px" src="/uploads/<?= $model_item->photo_thumb ?>">
                </div>
                <div class="col">
                    <div class="col-sm-4">
                        <h4 style="color:red"><?=Yii::t('app', $model_item->mavzu)?></h4>
                    </div>
                    <div class="col-sm-5">
                        <?=Yii::t('app', $model_item->matn)?>
                    </div>
                    <div  class="col-sm-6" style="position: absolute; right: 0px; top: 220px">
                        <?= Html::a(Yii::t('app','More'),['/site/view?id='.$model_item->id],['class'=>'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <hr>
        <?endforeach;?>

    </div>

<!--    <div class="row">-->
<!--        --><?php //foreach ($model as $model_item):?>
<!--        <div class="col-sm-7">-->
<!--            <div class="col-sm-4">-->
<!--                <img src="/uploads/--><?//=$model_item->photo_thumb?><!--">-->
<!--            </div>-->
<!--            <div class="col-sm-4">-->
<!--                <p  class="sec-para">--><?//= $model_item->mavzu?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        --><?// endforeach; ?>
<!--    </div>-->


</div>
<section id="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">Features</h2>
                    <hr class="botm-line">
                    <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-md-6 wow fadeInRight delay-02s">
                    <div class="icon">
                        <i class="fa fa-paint-brush"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">Easy to Learn and Design</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-02s">
                    <div class="icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">Bootstrap 3.3.2</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-04s">
                    <div class="icon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">Responsive Design</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-04s">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">No Coding, No Shortcodes</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-06s">
                    <div class="icon">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">High Coversion</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight delay-06s">
                    <div class="icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="icon-text">
                        <h3 class="txt-tl">Save Tons of Time</h3>
                        <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>