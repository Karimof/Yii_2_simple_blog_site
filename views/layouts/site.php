<?php
    use app\assets\SiteAsset;
    use yii\helpers\Html;
    use \yii\bootstrap\Nav;

    SiteAsset::register($this);
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->registerCsrfMetaTags() ?>
        <?php $this->head() ?>

    </head>
    <body>
<?php $this->beginBody() ?>
<!--header-->
<header  id="header">
    <div class="bg-color">
        <!--nav-->
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="" style="padding-right: 50px;padding-left: 50px">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed"
                                data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
                        <?= Html::a('Web.uz','/site/index', ['class' =>'navbar-brand']) ?>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mynavbar">

                        <?= Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => [
                        ['label' => Yii::t('app','Home'), 'url' => ['/site/index']],
                        ['label' => Yii::t('app','News'),'url' => ['/site/news'],
//                            'visible' => !Yii::$app->user->isGuest
                        ],
                        ['label' => Yii::t('app','Products'), 'url' => ['/site/products']],
                        ['label' => Yii::t('app','Gallery'), 'url' => ['/site/gallery']],
                        //['label' => Yii::t('app','Pagination'), 'url' => ['/site/pagination']],
                        ['label' => Yii::t('app','Contact'), 'url' => ['/site/contact']],
                        ['label' => Yii::t('app','About'), 'url' => ['/site/about']],
                        '<form class="navbar-form navbar-left" action="/site/search" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="key" value="" placeholder='. Yii::t('app','Search') . ' required>
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>',
                        Yii::$app->user->isGuest ? (
                        ['label' => Yii::t('app','Login'), 'url' => ['/site/login']]
                        ) : (
                        '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                            Yii::t('app','Logout') . ' (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                            )
                        . Html::endForm()
                        . '</li>'
                        )



                        ],

                        ]); ?>
                        <div style="position: absolute;top: -35px;right: 0;">
                        <?php
                        echo Html::a('UZ', ['site/change-lang', 'lang_id'=>'uz'],['class' => 'btn btn-default']) . ' <font color="#fff8dc"> | </font> '
                            .Html::a('RU', ['site/change-lang', 'lang_id'=>'ru'],['class' => 'btn btn-default']) . ' <font color="#fff8dc"> | </font> '
                            .Html::a('EN', ['site/change-lang', 'lang_id'=>'en'],['class' => 'btn btn-default'])
                        ?>
                        </div>
                    </div>

                </div>

            </div>

        </nav>
        <!--/ nav-->
</header>

    <!-- CONTENT BEGIN -->
        <?php echo $content; ?>
    <!-- CONTENT END -->

</div>



<footer id="footer" style="height: 80px">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 footer-copyright">
                © Bethany Theme - All rights reserved
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="col-sm-5 footer-social">
                <div class="pull-right hidden-xs hidden-sm">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody(); ?>

    </body>
</html>

<?php $this->endPage(); ?>
