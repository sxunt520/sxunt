<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="MyVerifyCode">{image}{input}</div>',
					'options' => ['class' => 'ipt','placeholder'=>"验证码"]
                ])->label(false) ?>

                <div style="color:#999;margin:1em 0">
                    如果忘记了密码，你可以 <?= Html::a('重置密码', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

                    <?= Html::a('去注册', ['site/signup'], ['class' => 'btn btn-warning']) ?>
                </div>
                <!--第三方登录-->
                <div class="form-group">
                    <?= yii\authclient\widgets\AuthChoice::widget([
                        'id' => 'auth-login',
                        'baseAuthUrl' => ['site/auth'],
                        'popupMode' => true,
                    ]) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
