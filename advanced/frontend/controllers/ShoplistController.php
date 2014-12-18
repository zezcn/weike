<?php

namespace frontend\controllers;

class ShoplistController extends \yii\web\Controller
{
    public function actionShoplist()
    {
	    $this->layout='@app/views/layouts/colume.php';
        return $this->render('shoplist');
    }

}
