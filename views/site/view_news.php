<style>

    #p1 {background-color:rgba(0, 0, 0, 0.8);}
</style>
<div style="min-height: 570px">
<p id="p1" style="height:100px"></p>
    <div class="container" style="max-width: 700px;font-family: Arial; font-size: 12pt">
        <div class="blog">
            <div class="clear"></div>
            <img  style="width: 500px;" src="/uploads/<?= $model->photo?>" alt="" class="img_inner fleft"><br><br>
            <div class="" style="color:red; font-size: 14pt" ><?= $model->mavzu ?></div><br>
            <div class="extra_wrapper" >
                <?= $model->matn; ?>
                <hr>
                <time style="text-align: right" datetime="2014-01-01"><span class="glyphicon glyphicon-calendar"></span><?= $model->sana_vaqt ?>
                    <i style="padding-left: 40px" class="glyphicon glyphicon-eye-open" ><?=$model->counter ?></i>
                </time>
            </div>
        </div>
    </div>
</div>

