<?php

namespace frontend\controllers;

class TasklistController extends \yii\web\Controller
{
    public function actionTasklist()
    {
		$this->layout='@app/views/layouts/colume.php';
        return $this->render('tasklist');
    }

}
