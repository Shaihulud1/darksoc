<?php

namespace app\modules\profile\controllers;

use yii\web\Controller;
use frontend\controllers\AppController;

/**
 * Default controller for the `profile` module
 */
class ProfileController extends AppController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('self-profile');
    }

    public function actionView($id)
    {
        return $this->render('other-profile');
    }
}
