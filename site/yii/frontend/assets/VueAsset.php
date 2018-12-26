<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class VueAsset extends AssetBundle
{
    public $sourcePath  = '@frontend/assets';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/vue.js',
        'js/vue-components.js',
    ];
}
