<?php

namespace frontend\controllers;

use app\models\Work;
use frontend\models\PublishForm;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * demo controller
 */
class DemoController extends Controller
{

    public $layout = 'demoLayouts';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWorks()
    {
        $model = new Work();
        $result = $model::find()->all();
        return $this->render('works', ['result' => $result]);
    }

    public function actionPublish()
    {
        $model = new PublishForm();
        if ($model->load(Yii::$app->request->post()) && $model->publish()){
            $model = new Work();
            $result = $model::find()->all();
            return $this->render('works', ['result' => $result]);
        }
        return $this->render('publish', ['model' => $model]);
    }

}
