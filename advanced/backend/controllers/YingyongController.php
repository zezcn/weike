<?php

namespace backend\controllers;
use app\models\KekeWitkeyWeibo;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
class YingyongController extends \yii\web\Controller
{
    public function actionYingyong_zhongxin()
    {
        return $this->renderpartial('yingyong_zhongxin');
    }

    public function actionMianfei(){
    	$list = KekeWitkeyWeibo::find()->where("")->all();
    	print_r($list);die;
    	$count = clone $list;
    	$pages = new Pagination(['totalCount' =>$count->count(), 'pageSize' => '20']);
        $data['list'] = $list->offset($pages->offset)->limit($pages->limit)->all();
        print_r($data["list"]);die;
    	return $this->renderpartial("mianfei");
    }

    public function actionDongtai(){
    	return $this->renderpartial("dongtai");
    }
}
