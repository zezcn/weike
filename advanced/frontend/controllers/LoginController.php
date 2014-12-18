<?php

namespace frontend\controllers;

class LoginController extends \yii\web\Controller
{
    public function actionLogin()
    {
         $this->layout='@app/views/layouts/colume.php';
        return $this->render('login');
    }

}
