<?php

namespace frontend\controllers;
use app\models\KekeWitkeyWeibo;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
class SquareController extends \yii\web\Controller
{
    public function actionSquare(){	
    	$this->layout='@app/views/layouts/colume.php';
    	$list = KekeWitkeyWeibo::find()->addOrderBy("on_time");
    	$count = clone $list;
    	$pages = new Pagination(['totalCount' =>$count->count(), 'pageSize' => '20']);
        $data['list'] = $list->offset($pages->offset)->where('1=1')->limit($pages->limit)->all();      
        return $this->render('square',array("data"=>$data,"pages"=>$pages));
    }

}
