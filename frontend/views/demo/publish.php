<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PublishForm*/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Publish';
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>填写发布的文章</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'publish-form']); ?>

                <?= $form->field($model, 'title')->textInput() ?>

                <?= $form->field($model, 'content')->textarea(['row' => 100])->hint('put your article here') ?>
                <?= $form->field($model, 'author')->textInput()?>
                <?= $form->field($model, 'type')->textInput()->hint('Primary or Middle')?>


                <div class="form-group">
                    <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => 'publish-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
