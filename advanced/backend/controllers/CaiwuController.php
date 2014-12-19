<?php

namespace backend\controllers;

class CaiwuController extends \yii\web\Controller
{
	//财务概括
    public function actionCaiwu_gaikuo()
    {
        return $this->renderpartial('caiwu_gaikuo');
    }

    //财务明细
    public function actionCaiwu_mingxi()
    {
        return $this->renderpartial('caiwu_mingxi');
    }

	//财务分析
    public function actionCaiwu_fenxi()
    {
        return $this->renderpartial('caiwu_fenxi');
    }

    //充值审核
    public function actionCaiwu_congzhi()
    {
        return $this->renderpartial('caiwu_congzhi');
    }

    //提现审核
    public function actionCaiwu_tixian()
    {
        return $this->renderpartial('caiwu_tixian');
    }

    //手机充值
    public function actionPhone_congzhi()
    {
        return $this->renderpartial('phone_congzhi');
    }


}
