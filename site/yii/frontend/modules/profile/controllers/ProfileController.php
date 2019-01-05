<?php

namespace app\modules\profile\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
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

    public function behaviors()
    {
         return [
             'access' => [
                 'class' => AccessControl::className(),
                 'rules' => [
                     [
                         'actions' => ['logout', 'index'],
                         'allow' => true,
                         'roles' => ['@'],
                     ],
                 ],
             ],
         ];
    }

    public function actionIndex()
    {
        $user_id = Yii::$app->user->id;
        $c = Yii::$app->authManager->getRolesByUser($user_id);
        return $this->render('self-profile', ['c' => $c]);
    }

    public function actionView($id)
    {
        return $this->render('other-profile');
    }
}
