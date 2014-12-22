<?php

namespace frontend\controllers;
use app\models\Industry;
use app\models\Service;
use app\models\Model;
use yii\data\Pagination;
use yii\db\Query;
use yii\data\ActiveDataProvider;

class ShopController extends \yii\web\Controller
{
    //public $enableCsrfValidation = false;
    public function actionIndex(){
        //echo ";fdfsdf";die;
        $this->layout='@app/views/layouts/colume.php';
        $data["indu"] = Industry::find()->where(['indus_pid' => '0'])->all();       
        $list = Service::find()->where([]); 
        $count = clone $list;   
        $pages = new Pagination(['totalCount' =>$count->count(), 'pageSize' => '2']);
        $data['list'] = $list->offset($pages->offset)->where('1=1')->limit($pages->limit)->all();    
        //print_r($data["list"]);die;
        $data["indus_id"]=0; 
        $data["small"]=0;
        $data["big"]=0;
        $data["con_max"]=0;
        $data["service_status"]=0;
        return $this->render('index',array("data"=>$data,"pages"=>$pages));
    }
    public function actionSearch(){
        $this->layout='@app/views/layouts/colume.php';
        $where = " 1=1";
        $indus_id = $_GET['indus_id'];
        $con_max = $_GET["con_max"];
        $small = $_GET['small'];
        $big = $_GET['big'];
        if(!empty($indus_id)){
            $data["indus_id"] = $_GET["indus_id"];
        }else{
            $data["indus_id"] = 0;
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
        if(!empty($con_max)){
            $data["con_max"] = $_GET["con_max"];
            //$where.=" and model_id=".$model_id;
        }else{
            $data["con_max"] = 0;
        }
        $where = " 1=1";
        if($data["indus_id"]){
            $where.=" and indus_id=".$data["indus_id"];
        }

        if($data['small']&&$data['big']){
            $where.=" and price between ".$data['small']." and ".$data['big'];
        }
        if($data["con_max"]){
            $where.=" and confirm_max =".$data["con_max"];
        }
        $sql = "select * from keke_witkey_service where ".$where;
        //$service = new Service();
        $data["indu"] = Industry::find()->where(['indus_pid' => '0'])->all();
        $data["model"] = Model::find()->all(); 
        $list=Service::find()->where($where);
        $count = Service::find()->where($where)->count();
        $pages = new Pagination(['totalCount' =>$count, 'pageSize' => '2']);
        $data['list'] = $list->offset($pages->offset)->where("$where")->limit($pages->limit)->all();    
        return $this->render('index',array("data"=>$data,"pages"=>$pages));
    }
    public function actionBuy($sid) {
         session_start();
     
         if(!empty($_POST)){
             
             
         }
        $this->layout='@app/views/layouts/colume.php';
        //echo $sid;die;
         $data = Service::find()->where($sid)->one();
         return $this->render('buy',["data"=>$data]);
   }
       public function actionGoumai($sid) {
        $this->layout='@app/views/layouts/colume.php';
       //echo $sid;die;
         $data = Service::find()->where($sid)->one();
         return $this->render('shop_order',["data"=>$data]);
   }
   public function actionBuydo($sid) {
      $data = Service::find()->where($sid)->one();
       
   }
   
}
