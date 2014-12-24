<?php

namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
//模型
use \app\models\KekeWitkeyArticle;
use \app\models\KekeWitkeyArticleCategory;
//两表联查
use yii\db\Query;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

class ArticleController extends \yii\web\Controller
{
	//网站公告列表
    public function actionGonggao()
    {
        $model=new Query();
        $res=$model->from(['keke_witkey_article','keke_witkey_article_category'])
        ->where("keke_witkey_article.art_cat_id= keke_witkey_article_category.art_cat_id")
        ->all();
        $pages = new Pagination(['totalCount' =>$model->count(), 'pageSize' => '10']);
        $data = $model->offset($pages->offset)->limit($pages->limit)->all();
        return $this->renderpartial('gonggao',['data'=>$data,'pages' => $pages]);
    }

    //添加网站公告
    public function actionGonggao_add()
    {
        return $this->renderpartial("gonggao_add");
    }
    //添加处理页面
    public function actionGonggao_add_do()
    {
        $model = new KekeWitkeyArticle();
        //print_r($_POST);die;
        $model->art_title = $_POST['art_title'];
        $model->listorder = $_POST['listorder'];
        $model->username = $_POST['username'];
        $model->art_source = $_POST['art_source'];
        $model->is_recommend = $_POST['is_recommend'];
        $model->content = $_POST['content'];
        $model->seo_title = $_POST['seo_title'];
        $model->seo_keyword = $_POST['seo_keyword'];
        $model->seo_desc = $_POST['seo_desc'];
        if($model->insert()){
            $this->redirect("index.php?r=article/gonggao");
               }else{
                    $this->redirect("index.php?r=article/gonggao");
               }  
    }

    //公告的浏览
    public function actionGonggao_show($art_id)
    {
        $model=new KekeWitkeyArticle();
        $data[]=$model::findOne($art_id);
        //print_r($data);die;
        return $this->renderPartial('gonggao_show',['data'=>$data]);
    }

    //

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
