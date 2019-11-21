<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property string|null $id
 * @property string|null $account
 * @property string|null $password
 * @property string|null $userName
 * @property string|null $mail
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'account', 'userName'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 128],
            [['mail'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account' => 'Account',
            'password' => 'Password',
            'userName' => 'User Name',
            'mail' => 'Mail',
        ];
    }
}
