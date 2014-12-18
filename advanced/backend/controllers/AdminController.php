<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
class AdminController extends Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

	//管理首页
	 public function actionGlsy()
    {
        return $this->renderpartial('glsy');
    }

}
