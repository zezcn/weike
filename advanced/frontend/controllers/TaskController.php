<?php

namespace frontend\controllers;
use app\models\Industry;
use app\models\Task;
use app\models\Model;
use yii\data\Pagination;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use app\models\kekeWitkeyTask;
use yii\web\Session;

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
        //echo $data["title"];
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
        
        //$sql = "select * from keke_witkey_task where ".$where;
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

    public function actionTaskadd1(){
        $session = new Session();
        $session->open();
        if(empty($session["uid"])){
            $this->redirect(array('login/login'));
        }
        $this->layout='@app/views/layouts/colume.php';
        return $this->render("add1");
    }
    public function actionTaskadd1pro(){
        $model = new Task();
        $session = new Session();
        $session->open();
        $end_time = $_GET["end_time"];
        $model->uid = $session["uid"];
        $model->username = $session["username"];
        $model->start_time = time();
        $model->end_time = time($end_time);
        $model->task_cash = $_GET['price'];
        $model->model_id = $_GET['model_id'];
        if($model->insert()){
            echo $model->primaryKey;
        }else{
            echo 2;
        }
        
    }
    public function actionIndus(){
        $indus_pid = $_GET["indus_pid"];
        $info = Industry::find()->where(['indus_pid' => "$indus_pid"])->all();
        $str = "<option value=''>请选择子分类</option>";
        foreach($info as $key=>$val){
            $str.="<option value='".$val["indus_id"]."'>".$val['indus_name']."</option>";
        }
        echo $str;
    }
    public function actionAddtwopro(){
        $model = new Task();
        $task_id = $_GET["t_id"];
        $indus_pid = $_GET["indus_pid"];
        $indus_id = $_GET["indus_id"];
        $task_title = $_GET["title"];
        $task_desc = $_GET["content"];
        $contact = $_GET["mobile"];
        if($model->updateall(['indus_pid'=>$indus_pid,"indus_id"=>$indus_id,"task_title"=>$task_title,"task_desc"=>$task_desc,"contact"=>$contact],["task_id"=>$task_id])){
            echo $task_id;
        }else{
            echo 2;
        }
    }
    public function actionAddthree(){
        $task_id = $_GET["task_id"];
        $info = Task::find()->where(['task_id' => "$task_id"])->all();
        $data["title"] = $info[0]["task_title"];
        $data["price"] = $info[0]["task_cash"];
        $data["task_id"] = $task_id;
        $this->layout='@app/views/layouts/colume.php';
        return $this->render("addthree",array("data"=>$data));
    }
    public function actionTaskadd2(){
        $session = new Session();
        $session->open();
        if(empty($session["uid"])){
            $this->redirect(array('login/login'));
        }
        $this->layout='@app/views/layouts/colume.php';
        return $this->render("add2");
    }

    public function actionTaskadd2pro(){

        $model = new Task();
        $session = new Session();
        $session->open();
        $end_time = $_GET["end_time"];
        $model->uid = $session["uid"];
        $model->username = $session["username"];
        $model->start_time = time();
        $model->end_time = time($end_time);
        $model->task_cash = $_GET['price'];
        $model->model_id = $_GET['model_id'];
        $model->work_num = $_GET["num"];
        $model->cash_cost = $_GET["gprice"];
        if($model->insert()){
            echo $model->primaryKey;
        }else{
            echo 2;
        }
        
    }

    public function actionTaskadd3(){
        $session = new Session();
        $session->open();
        if(empty($session["uid"])){
            $this->redirect(array('login/login'));
        }
        $this->layout='@app/views/layouts/colume.php';
        return $this->render("add3");
    }
    public function actionTaskadd3pro(){

        $model = new Task();
        $session = new Session();
        $session->open();
        $end_time = $_GET["end_time"];
        $model->uid = $session["uid"];
        $model->username = $session["username"];
        $model->start_time = time();
        $model->end_time = time($end_time);
        $model->task_cash = $_GET['price'];
        $model->model_id = $_GET['model_id'];
        $model->work_num = $_GET["prize_num"];
        $model->cash_cost = $_GET["prize_cash"];
        if($model->insert()){
            echo $model->primaryKey;
        }else{
            echo 2;
        }
        
    }
    public function actionAddtwo(){
        $this->layout='@app/views/layouts/colume.php';
        $data['task_id'] = $_GET["task_id"];
        $data["indu"] = Industry::find()->where(['indus_pid' => '0'])->all();
        return $this->render("addtwo",array("data"=>$data));
    }
    public function actionSucc(){
        $task_id = $_GET["task_id"];
        $this->layout='@app/views/layouts/colume.php';
        return $this->render("succ",array("task_id"=>$task_id));
    }

    public function actionShow(){
         $this->layout='@app/views/layouts/colume.php';
        $task_id = $_GET["task_id"];
        $data = Task::find()->where(["task_id"=>"$task_id"])->one();
        return $this->render("show",array("data"=>$data));
    }

}
