<?php
namespace frontend\controllers;
use \app\models\KekeWitkeySpace;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\KekeWitkeyAd;

class LoginController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
    public function actionLogin()
    {
        $this->layout='@app/views/layouts/colume.php';
		if(!empty($_POST)){ 
			 $username=$_POST['txt_account'];
			 $password=$_POST['pwd_password'];
			 $info = KekeWitkeySpace::find()->where("username = '".$username."'")->one();
			 if($info){
				 if(md5($password)==$info['password']){
					 $this->redirect(array('index/index'));
					 SESSION_START();
					 $_SESSION["username"]=$username;
			   }else{
					 echo "密码错误";
				}
			  }else{
				echo "用户名不存在";
			  }
	   }
	return $this->render('login');  


    }

}
