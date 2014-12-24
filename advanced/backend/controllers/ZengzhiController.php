<?php

namespace backend\controllers;

class ZengzhiController extends \yii\web\Controller
{
	//服务项管理
    public function actionFuwuxiang()
    {
        return $this->renderpartial('fuwuxiang');
    }

    //购买记录
    public function actionBuy()
    {
        return $this->renderpartial('buy');
    }

}
