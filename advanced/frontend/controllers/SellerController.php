<?php
namespace frontend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
//模型
use app\models\KekeWitkeyShop;
//两表联查
use yii\db\Query;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

class SellerController extends \yii\web\Controller
{
    public function actionSellerlist()
    {	
    	$this->layout='@app/views/layouts/colume.php';
        return $this->render('sellerlist');
    }

    //服务商搜索
    public function actionSellersearch()
	{

	}
}
