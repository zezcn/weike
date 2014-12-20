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
          $this->createAction('captcha')->validate($txt_code, false);
        //print_r($_POST);die;
         // $username=$_POST['register_frm'];
          //$password=$_POST['']    
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
