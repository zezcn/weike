<?php

namespace frontend\controllers;

class PromController extends \yii\web\Controller
{
    public function actionProm()
    {	$this->layout='@app/views/layouts/colume.php';
        return $this->render('prom');
    }

}
