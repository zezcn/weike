<?php

namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
//模型
use app\models\Space;
use \app\models\KekeWitkeyMember;
use \app\models\KekeWitkeyMemberGroup;
//两表联查
use yii\db\Query;
//分页
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

class UserController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
	//添加用户
    public function actionAdd_user()
    {
        $arr=KekeWitkeyMemberGroup::find()->all(); 
        return $this->renderpartial("add_user",['arr'=>$arr]);
    }

    //添加处理
    public function actionAdd_user_do(){
        $model = new Space();
        //print_r($_POST);die;
        $model->username = $_POST['username'];
        $model->password = md5($_POST['password']);
        $model->email = $_POST['email'];
        $model->group_id = $_POST['group_id'];
        if($model->insert()){
             $this->redirect("index.php?r=user/user_list");
                   }else{
                        $this->redirect("index.php?r=user/user_list");
                   }    
         }

    //用户管理
    public function actionUser_list()
    {
        $model = new Query();
        $info=$model->from(['keke_witkey_space','keke_witkey_member_group'])
             ->where('keke_witkey_space.group_id=keke_witkey_member_group.group_id
              order by reg_time desc');
         
             //分页
             $pages = new Pagination(['totalCount' =>$info->count(), 'pageSize' => '5']);           
             $data = $info->offset($pages->offset)->limit($pages->limit)->all();                 
             return $this->renderpartial("user_list",['data'=>$data,'pages'=>$pages]);
    }

    //删除用户
     public function actionDel(){
         $uid=$_GET['uid'];
         $res=Space::deleteAll(['uid'=>$uid]);
         if($res){
           $this->redirect("index.php?r=user/user_list");
        }
     
    }

    //编辑用户
    public function actionUpd(){
         $uid=$_GET['uid'];
         $data=Space::find()->andWhere(['uid'=>$uid])->one();
         $model=New Query();
         $info=$model->from(['keke_witkey_space','keke_witkey_member_group'])
         ->where('keke_witkey_space.group_id=keke_witkey_member_group.group_id')
         ->andWhere(['keke_witkey_space.uid'=>$uid])->all();
         $arr=KekeWitkeyMemberGroup::find()->all();        
         return $this->renderPartial("upd",['data'=>$data,'info'=>$info,'arr'=>$arr]);
         }
          
    //编辑处理页面
    public function actionUpd_do(){ 
         $uid=$_POST['uid'];
         $username=$_POST['username'];
         $password=md5($_POST['password']);
         $email=$_POST['email'];
         $group_id=$_POST['group_id'];
         $model=new Space();
         $rows=$model->updateall(['username'=>$username,'password'=>$password,"email"=>$email,"group_id"=>$group_id],["uid"=>$uid]);
         if($rows){
            $this->redirect("index.php?r=user/user_list");
         }
     }

    //用户组
    public function actionUser_group()
    {
        return $this->renderpartial('user_group');
    }

    //系统组管理
    public function actionSystem_list()
    {
        return $this->renderpartial('system_list');
    }

    //添加系统组
    public function actionAdd_system()
    {
        return $this->renderpartial('add_system');
    }

   

}
