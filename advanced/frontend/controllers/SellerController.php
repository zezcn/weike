<?php
namespace frontend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
//模型
use app\models\Space;
use app\models\KekeWitkeyShop;
use app\models\KekeWitkeyIndustry;
use yii\db\Query;
//分页
use yii\data\Pagination;
use yi\data\ActiveDataProvider;

class SellerController extends \yii\web\Controller
{	
	//查询服务商
    public function actionSellerlist()
    {	
    	$this->layout='@app/views/layouts/colume.php';
        
        $where = "keke_witkey_space.uid=keke_witkey_shop.uid and 1=1";
       	$data["indu"] = KekeWitkeyIndustry::find()->where(['indus_pid' => '0'])->all();   
        $model = new Query();
        $info=$model->from(['keke_witkey_space','keke_witkey_shop'])
             ->where($where);
        $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '4']);           
        $data['model'] = $info->offset($pages->offset)->where("$where")->limit($pages->limit)->all();                 
        
        $data["indus_id"] = 0;
        $data["shop_type"] = 0; 
        return $this->render('sellerlist',array('data'=>$data,'pages'=>$pages));
    }

    //服务商搜索
    public function actionSellersearch()
    {	
    	$this->layout='@app/views/layouts/colume.php';
    	$where = "keke_witkey_space.uid=keke_witkey_shop.uid and 1=1";
    	$indus_id = $_GET["indus_id"];
    	$shop_type = $_GET["shop_type"];
    	
    	if(!empty($_GET['indus_id'])){
    		$data["indus_id"] = $_GET["indus_id"];
    	}else{
    		$data["indus_id"] = 0;
    	}

    	if(!empty($_GET['shop_type'])){
    		$data["shop_type"] = $_GET["shop_type"];
    	}else{
    		$data["shop_type"] = 0;
    	}
        //print_r($data);die;
        $where = "keke_witkey_space.uid=keke_witkey_shop.uid and 1=1";
    	if($data["indus_id"]){
    		$where.=" and indus_id=".$data["indus_id"];
    	}

    	if($data["shop_type"]){
    		$where.=" and shop_type=".$data["shop_type"];    	
    	}
        //echo $where;die;
        $model = new Query();
        $info=$model->from(['keke_witkey_space','keke_witkey_shop'])
             ->where($where);
         
        $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '4']);           
        $data['model'] = $info->offset($pages->offset)->where("$where")->limit($pages->limit)->all();                 
     
        $data["indu"] = KekeWitkeyIndustry::find()->where(['indus_pid' => '0'])->all();    	
       	/*$data["model"] = KekeWitkeyShop::find()->all();
        $list=KekeWitkeyShop::find()->where($where);
        $count = KekeWitkeyShop::find()->where($where)->count();
        $pages = new Pagination(['totalCount' =>$count, 'pageSize' => '3']);
        $data['list'] = $list->offset($pages->offset)->where("$where")->limit($pages->limit)->all(); 
        */   
        return $this->render('sellerlist',array("data"=>$data,"pages"=>$pages));

    }

}
