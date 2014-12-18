<?php

namespace frontend\controllers;

class SellerController extends \yii\web\Controller
{
    public function actionSellerlist()
    {	$this->layout='@app/views/layouts/colume.php';
        return $this->render('sellerlist');
    }

}
