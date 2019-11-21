<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string|null $id
 * @property string|null $account
 * @property string|null $password
 * @property string|null $userName
 * @property string|null $mail
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'account', 'password', 'userName', 'mail'], 'string', 'max' => 255],
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
