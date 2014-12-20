<?php
namespace frontend\controllers;
use Yii;
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
use app\models\Service;
/**
 * Index controller
 */
class IndexController extends Controller
{
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
    }
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/colume.php';
        if(@$_GET['do']){
            $do = $_GET["do"];
            $path = $_GET["path"];
            $title = $_GET["search_key"];            
            $this->redirect(array($do."/search","title"=>$title));                    
        }       
        return $this->render('index');  
        
    }
   
}
