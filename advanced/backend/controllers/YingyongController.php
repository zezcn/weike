<?php

namespace backend\controllers;

class YingyongController extends \yii\web\Controller
{
    public function actionYingyong_zhongxin()
    {
        return $this->renderpartial('yingyong_zhongxin');
    }

}
