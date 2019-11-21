<?php

namespace frontend\models;

use app\models\Work;
use Cassandra\Time;
use Yii;
use yii\base\Model;
use function GuzzleHttp\Psr7\copy_to_string;

/**
 * PublishForm is the model behind the publish form.
 */
class PublishForm extends Model
{
    public $author;
    public $content;
    public $title;
    public $type;
    public $satisfy;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // author and content are required
            [['author', 'content', 'title', 'type'], 'required'],
        ];
    }

    public function publish(){
        $workModel = new Work();
        $workModel->title = $this->title;
        $workModel->author = $this->author;
        $workModel->content = $this->content;
        $workModel->type = $this->type;
        $workModel->satisfy = 100;
        $workModel->publicDate = date("Y-m-d");
        $workModel->save();
        return true;
    }
}
