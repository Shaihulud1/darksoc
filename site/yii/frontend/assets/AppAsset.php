<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/vars.css',
    ];
    public $js = [
        'js/fontawesome.js',
        'js/common.js',
        'js/popper.js',
    ];
    public $depends = [
        'frontend\assets\FontsAsset',
        'frontend\assets\VueAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
