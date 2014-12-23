<?php

namespace backend\controllers;

class ConfigController extends \yii\web\Controller
{
    public function actionConfig()
    {
        return $this->renderpartial('config');
    }

    public function actionMoxing_guanli()
    {
    	 return $this->renderpartial('moxing_guanli');
    }

     public function actionHuiyuan_zhenghe()
    {
    	 return $this->renderpartial('huiyuan_zhenghe');
    }

     public function actionDaohang()
    {
    	 return $this->renderpartial('daohang');
    }

     public function actionHuilv_config()
    {
    	 return $this->renderpartial('huilv_config');
    }

}
