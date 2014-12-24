<?php

namespace frontend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
//模型
use \app\models\KekeWitkeyTask;
use \app\models\KekeWitkeyModel;
//两表联查
use yii\db\Query;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

class PromController extends \yii\web\Controller
{
	//新手任务
    public function actionProm()
    {	$this->layout='@app/views/layouts/colume.php';
        return $this->render('prom');
    }

    //任务推广
    public function actionProm_task()
    {	
        $this->layout='@app/views/layouts/colume.php';
        $model = new Query();
        $info=$model->from(['keke_witkey_task','keke_witkey_model'])
             ->where('keke_witkey_task.model_id=keke_witkey_model.model_id');
         
             //分页
             $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '15']);           
             $data = $info->offset($pages->offset)->limit($pages->limit)->all();                 
             return $this->render("prom_task",['data'=>$data,'pages'=>$pages]);
    }

    //新手推广
    public function actionProm_new()
    {	
        $this->layout='@app/views/layouts/colume.php';
        $model = new Query();
        $info=$model->from(['keke_witkey_service','keke_witkey_model'])
             ->where('keke_witkey_service.model_id=keke_witkey_model.model_id');
         
             //分页
             $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '10']);           
             $data = $info->offset($pages->offset)->limit($pages->limit)->all();                 
             return $this->render("prom_new",['data'=>$data,'pages'=>$pages]);

    }

}
