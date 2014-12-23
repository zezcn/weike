<?php

namespace backend\controllers;

class ArticleController extends \yii\web\Controller
{
	//网站公告
    public function actionGonggao()
    {
        return $this->renderpartial('gonggao');
    }

    //网站介绍
    public function actionJieshao()
    {
        return $this->renderpartial('jieshao');
    }

    //文章管理
    public function actionArticle_list()
    {
        return $this->renderpartial('article_list');
    }

    //文章分类
    public function actionArticle_cate()
    {
        return $this->renderpartial('article_cate');
    }

}
