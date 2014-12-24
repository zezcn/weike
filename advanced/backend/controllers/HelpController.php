<?php

namespace backend\controllers;

class HelpController extends \yii\web\Controller
{
	//帮助管理
    public function actionHelp_list()
    {
        return $this->renderpartial('help_list');
    }

    //帮助分类
     public function actionHelp_cate()
    {
        return $this->renderpartial('help_cate');
    }

}
