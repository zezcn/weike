<?php

namespace frontend\controllers;
use app\models\KekeWitkeyArticle;
use app\models\KekeWitkeyArticleCategory;
use Yii;
use yii\db\Query;
use yii\data\Pagination;

use yii\data\ActiveDataProvider;
class ArticleController extends \yii\web\Controller
{
    public function actionArticle()
    {	
        $model=new Query(); 
        $data = $model->from(['keke_witkey_article','keke_witkey_article_category'])->where(
         "keke_witkey_article.art_id=keke_witkey_article_category.art_cat_id")->all();
         //var_dump($data);die;
         $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>4]);
         $data=$model->offset($pages->offset)->limit($pages->limit)->all();
                 
         $this->layout='@app/views/layouts/colume.php';
         return $this->render('article',["data"=>$data,'pages'=>$pages]);
    }
    public function actionYuedu()
    {   
        $this->layout='@app/views/layouts/colume.php';
        $art_id=$_GET['art_id'];
        //echo $art_id;die;
        //$dal=  KekeWitkeyArticle::find()->where($art_id)->all();
        $data["content"]=  KekeWitkeyArticle::find()->where("art_id =".$art_id)->one();
        //var_dump($data["content"]["art_title"]);die;
        $data["nextid"]=  KekeWitkeyArticle::find()->where("art_id > $art_id")->limit(1)->one();
        $data["oldid"]=  KekeWitkeyArticle::find()->where("art_id < $art_id")->limit(1)->one();
        //var_dump($data);
        return $this->render('yuedu',["data"=>$data]);     
    }

}



