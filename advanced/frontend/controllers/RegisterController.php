<?php

namespace frontend\controllers;
use  \app\models\KekeWitkeySpace;
use yii\captcha\Captcha;
use yii\captcha\CaptchaAction;
class RegisterController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionRegister()
    {	
        $this->layout='@app/views/layouts/colume.php';
        // $this->widget('CCaptcha');
        $model = new KekeWitkeySpace();
        if(!empty($_POST)){  
          $model->password = md5($_POST["data"]["password"]);
          $model->username = $_POST["data"]["username"];
          $model->email = $_POST["data"]["email"];
          //$this->createAction('captcha')->validate($_POST["txt_code"], true);
          //print_r($_POST["data"]);die;
          $info = $model->insert();
          var_dump($info);die;
          $this->redirect(array('index/index'));
        }
        //
         return $this->render('register',["model"=>$model]);
  }
     
public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

     
    
 
    
    

    

}
