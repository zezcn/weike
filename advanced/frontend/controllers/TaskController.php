<?php

namespace frontend\controllers;
use app\models\Industry;
use app\models\Task;
use app\models\Model;
use yii\data\Pagination;
use yii\db\Query;
use yii\data\ActiveDataProvider;

class TaskController extends \yii\web\Controller
{
	//public $enableCsrfValidation = false;
    public function actionIndex(){
        //echo ";fdfsdf";die;
    	$this->layout='@app/views/layouts/colume.php';
    	$data["indu"] = Industry::find()->where(['indus_pid' => '0'])->all();    	
        $data["model"] = Model::find()->all();
        $list = Task::find()->where([]); 
        $count = clone $list; 
        $pages = new Pagination(['totalCount' =>$count->count(), 'pageSize' => '2']);
        $data['list'] = $list->offset($pages->offset)->where('1=1')->limit($pages->limit)->all();    
        $data["indus_id"]=0; 
    	$data["model_id"]=0;
    	$data["small"]=0;
    	$data["big"]=0;
        $data["is_auto"] = 0;
        $data["task_status"] = 0;
    	$data["is_top"]=0;
        return $this->render('index',array("data"=>$data,"pages"=>$pages));
    }
    public function actionSearch(){
        $this->layout='@app/views/layouts/colume.php';
    	$where = " 1=1";
        @$title = $_GET['title'];
    	@$indus_id = $_GET['indus_id'];
    	@$model_id = $_GET["model_id"];
    	@$task_status = $_GET["task_status"];
    	@$small = $_GET['small'];
    	@$big = $_GET['big'];
        @$is_auto = $_GET["is_auto"];
        @$is_top  = $_GET["is_top"];
    	if(!empty($indus_id)){
    		$data["indus_id"] = $_GET["indus_id"];
    	}else{
    		$data["indus_id"] = "0";
    	}    	
    	if(!empty($model_id)){
    		$data["model_id"] = $_GET["model_id"];
    		//$where.=" and model_id=".$model_id;
    	}else{
    		$data["model_id"] = 0;
    	}
    	if(!empty($small)){
    		$data['small'] = $_GET["small"];
    	}else{
    		$data['small'] = 0;
    	}	
    	if(!empty($big)){
    		$data["big"] = $_GET['big'];
    	}else{
    		$data["big"] = 0;
    	}
    	if(!empty($task_status)){
    		$data["task_status"] = $_GET["task_status"];
    		//$where.=" and model_id=".$model_id;
    	}else{
    		$data["task_status"] = 0;
    	}
    	if(!empty($is_auto)){
    		$data['is_auto'] = $_GET['is_auto'];
    	}else{
    		$data["is_auto"] = 0;
    	}
        if(!empty($is_top)){
            $data['is_top'] = $_GET['is_top'];
        }else{
            $data["is_top"] = 0;
        }
        if(!empty($title)){
            $data["title"]=$_GET['title'];
        }else{
            $data['title'] = 0;
        }
    	$where = " 1=1";
        if($data["title"]){
            $where.=" and task_title like '%".$data['title']."%'";
        }
    	if($data["indus_id"]){
    		$where.=" and indus_id=".$data["indus_id"];
    	}
    	if($data["model_id"]){
    		$where.=" and model_id =".$data['model_id'];
    	}
    	if($data['small']&&$data['big']){
    		$where.=" and task_cash between ".$data['small']." and ".$data['big'];
    	}
    	if($data["task_status"]){
    		$where.=" and task_status =".$data["task_status"];
    	}
        if($data['is_auto']){
            $where.=" and is_auto_bid =".$data["is_auto"];
        }
        if($data["is_top"]){
            $where.=" and is_top =".$data["is_top"];
        }
        //echo $where;die;
    	$sql = "select * from keke_witkey_task where ".$where;
    	//$Task = new Task();
    	$data["indu"] = Industry::find()->where(['indus_pid' => '0'])->all();
    	$data["model"] = Model::find()->all(); 
        $list=Task::find()->where($where);
        $count = Task::find()->where($where)->count();
        $pages = new Pagination(['totalCount' =>$count, 'pageSize' => '2']);
        //print_r($pages);die;
        $data['list'] = $list->offset($pages->offset)->where("$where")->limit($pages->limit)->all();    
    	return $this->render('index',array("data"=>$data,"pages"=>$pages));
    }

    public function actiontaskadd(){

    } 
}
