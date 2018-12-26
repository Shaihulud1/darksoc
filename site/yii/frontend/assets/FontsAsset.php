<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class FontsAsset extends AssetBundle
{
    public $sourcePath  = '@frontend/assets';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou',
        'https://fonts.googleapis.com/css?family=Play',
    ];
}
