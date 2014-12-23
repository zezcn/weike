<?php
namespace frontend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
//模型
use app\models\KekeWitkeyCase;
//分页
use yii\data\Pagination;
use yi\data\ActiveDataProvider;

class CaseController extends \yii\web\Controller
{
	//成功案例
    public function actionCase()
    {	
    	$this->layout='@app/views/layouts/colume.php';
    	$list = KekeWitkeyCase::find()->where([]); 
        $count = clone $list;   
        $pages = new Pagination(['totalCount' =>$count->count(), 'pageSize' => '5']);
        $data['list'] = $list->offset($pages->offset)->limit($pages->limit)->all();    
        return $this->render('case',array("data"=>$data,"pages"=>$pages));
    }

    //查看详情
    public function actionDetail(){
    	$this->layout='@app/views/layouts/colume.php';
    	$id = $_GET["id"];
    	$data['list'] = KekeWitkeyCase::find()->where(['case_id'=>$id])->all();
    	//print_r($data);die;
    	return $this->render('detail',array("data"=>$data));
    }

}
