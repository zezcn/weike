<?php
namespace frontend\controllers;
use \app\models\KekeWitkeySpace;
class LoginController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
    public function actionLogin()
    {
        $this->layout='@appiews/layouts/colume.php';
       
		if(!empty($_POST)){ 
                    //print_r($_POST);
                    //echo 12;die;
                     $username=$_POST['txt_account'];
                     $password=$_POST['pwd_password'];
                     //$login=new KekeWitkeySpace();
                     /ar_dump($login);die;
                     $info = KekeWitkeySpace::find()->where("username = '".$username."'")->one();
                     /ar_dump($info);die;
                     if($info){
                         if(md5($password)==$info['password']){
                             //echo "登陆成功";
                             $this->redirect(array('index/index'));
                             SESSION_START();
                             $_SESSION["username"]=$username;
                             //echo $_SESSION["username"];die;
                       }else{
                             echo "密码错误";
                        }
                      }else{
                        echo "用户名不存在";
                      }
               }
		//echo 1234;
          return $this->render('login');  
          

    }

}
