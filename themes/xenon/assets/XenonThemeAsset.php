<?php

namespace app\themes\xenon\assets;

class XenonThemeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/themes/xenon/assets/dist';
    public $css = [
        YII_ENV_DEV ? 'css/all.css' : 'css/all.min.css'
    ];
    public $js = [
        YII_ENV_DEV ? 'js/all.js' : 'js/all.min.js'
    ];
}