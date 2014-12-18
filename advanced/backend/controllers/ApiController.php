<?php

namespace backend\controllers;

class ApiController extends \yii\web\Controller
{
	//oauth登录
    public function actionOauth()
    {
        return $this->renderpartial('oauth');
    }

    //地图接口
    public function actionDitu()
    {
        return $this->renderpartial('ditu');
    }

    //短信配置
	public function actionDuanxin_config()
    {
        return $this->renderpartial('duanxin_config');
    }

    //短信模板
    public function actionDuanxin_moban()
    {
        return $this->renderpartial('duanxin_moban');
    }

    //支付接口
    public function actionPay()
    {
        return $this->renderpartial('pay');
    }


}
