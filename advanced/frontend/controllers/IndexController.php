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
use app\models\KekeWitkeyAd;
use yii\web\Session;

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
        $data["ad"] = $this->actionAd();
        $data["task"] = $this->actionTesklist();
		$data["TastType"] = $this->actionTasttype();
        $data["shopType"] = $data["TastType"];
        return $this->render('index',["data"=>$data]);
    }
    public function actionAd(){   
       $ad = KekeWitkeyAd::find()->where("ad_position = 'global'")->all();
       return $ad;
    }
    public function actionTesklist(){
        $task = \app\models\KekeWitkeyTask::find()->orderBy("start_time desc ")->limit("15")->where("1=1")->all();
        return $task;
    }
	public function actionTasttype(){
		 $TastTypeinfo =\app\models\KekeWitkeyIndustry::findBySql('SELECT indus_id,indus_pid,indus_name FROM keke_witkey_industry')->asArray()->all();
		 foreach($TastTypeinfo as $key=>$val){
                    if($val['indus_pid']==0){
                    $Tastparent[] = $val;
                 }
        }
		foreach($Tastparent as $key=>$val){
                    foreach($TastTypeinfo as $k=>$v){
                        if($val['indus_id']==$v["indus_pid"]){
                            $Tastparent[$key][] = $v;
                        }
                    }
		}
		return $Tastparent;
	}
        public function actionService(){
          //  KekeWitkey
        }
}
