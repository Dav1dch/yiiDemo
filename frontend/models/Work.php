<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property string|null $id
 * @property string|null $title
 * @property string|null $content
 * @property int|null $satisfy
 * @property string|null $author
 * @property string|null $publicDate
 * @property string|null $type
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['satisfy'], 'integer'],
            [['publicDate'], 'safe'],
            [['id', 'title'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 8000],
            [['author'], 'string', 'max' => 64],
            [['type'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'satisfy' => 'Satisfy',
            'author' => 'Author',
            'publicDate' => 'Public Date',
            'type' => 'Type',
        ];
    }
}
