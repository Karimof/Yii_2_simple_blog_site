
<style>
    #p1 {background-color:rgba(0, 0, 0, 0.8);}
</style>
<p id="p1" style="height:100px"></p>
<div style="min-height: 500px">
    <?php

    /* @var $this yii\web\View */

    use yii\helpers\Html;



    $this->title = 'About';
    //$this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="site-about">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            This is the About page. You may modify the following file to customize its content:
        </p>

        <code></code>
    </div>
</div>


