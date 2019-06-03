<?php
namespace app\components;
use yii\base\BootstrapInterface;
class LanguageSwitcher implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if($app->session->has('language')) {
            $app->language = $app->session->get('language');
        }
    }
}