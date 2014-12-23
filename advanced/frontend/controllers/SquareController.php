<?php

namespace frontend\controllers;

class SquareController extends \yii\web\Controller
{
    public function actionSquare()
    {	$this->layout='@app/views/layouts/colume.php';
        return $this->render('square');
    }

}
