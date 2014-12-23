<?php

namespace backend\controllers;

class ZhanzhangController extends \yii\web\Controller
{
    public function actionShujuku_guanli()
    {
        return $this->renderpartial('shujuku_guanli');
    }

}
