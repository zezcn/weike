<?php

namespace backend\controllers;

class TaskController extends \yii\web\Controller
{
	//单人悬赏（任务管理）
    public function actionTask_list()
    {
        return $this->renderpartial('task_list');
    }

	//单人悬赏（任务配置）
    public function actionTask_config()
    {
        return $this->renderpartial('task_config');
    }

    //多人悬赏（任务管理）
    public function actionList()
    {
        return $this->renderpartial('list');
    }

	//多人悬赏（任务配置）
    public function actionConfig()
    {
        return $this->renderpartial('config');
    }

    //计件悬赏（任务管理）
    public function actionJijian_list()
    {
        return $this->renderpartial('jijian_list');
    }

	//计件悬赏（任务配置）
    public function actionJijian_config()
    {
        return $this->renderpartial('jijian_config');
    }

	//普通招标（任务管理）
    public function actionPutong_list()
    {
        return $this->renderpartial('putong_list');
    }

	//普通招标（任务配置）
    public function actionPutong_config()
    {
        return $this->renderpartial('putong_config');
    }

    //定金招标（任务管理）
    public function actionDingjin_list()
    {
        return $this->renderpartial('dingjin_list');
    }

	//定金招标（任务配置）
    public function actionDingjin_config()
    {
        return $this->renderpartial('dingjin_config');
    }




}
