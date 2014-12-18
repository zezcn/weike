<?php

namespace backend\controllers;

class UserController extends \yii\web\Controller
{
	//添加用户
    public function actionAdd_user()
    {
        return $this->renderpartial('add_user');
    }

    //用户管理
    public function actionUser_list()
    {
        return $this->renderpartial('user_list');
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
