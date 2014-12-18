<?php

namespace backend\controllers;

class WeikeController extends \yii\web\Controller
{

	//威客作品（订单管理）
    public function actionIndent()
    {
        return $this->renderpartial('indent');
    }

    //作品管理
    public function actionShop()
    {
        return $this->renderpartial('shop');
    }

    //订单配置
    public function actionConfig()
    {
        return $this->renderpartial('config');
    }

    //威客服务（订单管理）
    public function actionFuwu_indent()
    {
        return $this->renderpartial('fuwu_indent');
    }

    //作品管理
    public function actionFuwu_shop()
    {
        return $this->renderpartial('fuwu_shop');
    }

    //订单配置
    public function actionFuwu_config()
    {
        return $this->renderpartial('fuwu_config');
    }

}
