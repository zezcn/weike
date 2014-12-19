<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\Session;
use app\models\Space;
header("content-type='text/html' charset='utf-8'");

class AdminController extends Controller
{
	public $enableCsrfValidation = false;
    public function actionIndex()
    {
    	$session = new Session();
    	$session ->open();

    	if($session['uid']==''){
    		  $this->redirect("index.php?r=admin/login");
    	}else{
 	  		  return $this->renderpartial('index');
    	}
      
    }

	//管理首页
	 public function actionGlsy()
    {
        return $this->renderpartial('glsy');
    }

    //登录
     public function actionLogin()
    {
        return $this->renderpartial('login');
    }
    //登录处理页面
     public function actionLogin_do()
    {   
    	$session = new Session();
    	$session ->open();

		$username=$_POST["username"];
		$password=md5($_POST["password"]);
		$res=Space::find()->andWhere(['username'=>$username])->one();
		if($res){
			if($res['password']==$password){
				$session['uid']=$res['uid'];
				$session['username']=$res['username'];
				//echo $_SESSION['uid'];die;
						echo "<script>location.href='index.php?r=admin/index'</script>";
					}else{
						echo "<script>location.href='index.php?r=admin/login'</script>";
					}

					}else{
						echo "<script>alert('No permission');location.href='index.php?r=admin/login'</script>";
				}
    }


    //退出
    /* public function actionLogout()
    {
    	 unset($session['username']);
         $this->redirect("index.php?r=admin/login");
    }*/

}
