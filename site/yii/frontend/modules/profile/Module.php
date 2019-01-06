<?php

namespace app\modules\profile;
use Yii;

/**
 * profile module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\profile\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        
        // custom initialization code goes here
        Yii::$app->user->loginUrl = ['/site/signup'];
    }
}
