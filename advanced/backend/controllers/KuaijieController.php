<?php

namespace backend\controllers;

class KuaijieController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

}
