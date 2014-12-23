<?php

namespace backend\controllers;

class SuccessController extends \yii\web\Controller
{
	//成功案例
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

}
