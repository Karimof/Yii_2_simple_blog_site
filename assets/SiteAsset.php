<?php
/**
 * Created by PhpStorm.
 * User: Karimof
 * Date: 15.05.2019
 * Time: 15:35
 */

namespace app\assets;

use yii\web\AssetBundle;

class SiteAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web/site';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery.easing.min.js',
        'js/bootstrap.min.js',
        'js/wow.js',
        'js/custom.js',
        'contactform/contactform.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}