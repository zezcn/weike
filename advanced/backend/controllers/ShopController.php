<?php

namespace backend\controllers;

class ShopController extends \yii\web\Controller
{
    public function actionShop_list()
    {
        return $this->renderpartial('shop_list');
    }

}
