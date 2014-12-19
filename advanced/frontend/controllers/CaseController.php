<?php

namespace frontend\controllers;

class CaseController extends \yii\web\Controller
{
    public function actionCase()
    {	$this->layout='@app/views/layouts/colume.php';
        return $this->render('case');
    }

}
