<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keke_witkey_weibo".
 *
 * @property integer $weibo_id
 * @property integer $obj_id
 * @property string $obj_type
 * @property string $obj_cash
 * @property string $obj_username
 * @property integer $obj_uid
 * @property string $detail_type
 * @property string $obj_title
 * @property string $op_type
 * @property integer $op_uid
 * @property string $op_username
 * @property integer $leave_num
 * @property integer $focus_num
 * @property integer $work_num
 * @property integer $on_time
 */
class KekeWitkeyWeibo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keke_witkey_weibo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['obj_id', 'obj_uid', 'op_uid', 'leave_num', 'focus_num', 'work_num', 'on_time'], 'integer'],
            [['obj_cash'], 'number'],
            [['obj_type', 'obj_username', 'detail_type', 'op_type', 'op_username'], 'string', 'max' => 20],
            [['obj_title'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'weibo_id' => 'Weibo ID',
            'obj_id' => 'Obj ID',
            'obj_type' => 'Obj Type',
            'obj_cash' => 'Obj Cash',
            'obj_username' => 'Obj Username',
            'obj_uid' => 'Obj Uid',
            'detail_type' => 'Detail Type',
            'obj_title' => 'Obj Title',
            'op_type' => 'Op Type',
            'op_uid' => 'Op Uid',
            'op_username' => 'Op Username',
            'leave_num' => 'Leave Num',
            'focus_num' => 'Focus Num',
            'work_num' => 'Work Num',
            'on_time' => 'On Time',
        ];
    }
}
