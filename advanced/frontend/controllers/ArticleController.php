<?php

namespace frontend\controllers;

class ArticleController extends \yii\web\Controller
{
    public function actionArticle()
    {	$this->layout='@app/views/layouts/colume.php';
        return $this->render('article');
    }

}
