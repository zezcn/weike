<?php

namespace backend\controllers;

class HangyeController extends \yii\web\Controller
{
    public function actionHangye_list()
    {
        return $this->renderpartial('hangye_list');
    }

     public function actionJineng_list()
    {
        return $this->renderpartial('jineng_list');
    }


}
