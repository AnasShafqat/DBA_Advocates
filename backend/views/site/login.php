<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php">District Bar Association</a>
        </div>
        <div class="login-box-body">
            <a href="index.php">
                <img src="dist/img/logo.jpg" width="320px" height="200px">
            </a>
            <p class="login-box-msg">Sign in to start your session</p>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username', ['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group field-loginform-username has-feedback required'
                        ],
                        'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    {error}{hint}'
                    ])->textInput(['placeholder'=>'Username','autofocus' => true]) ?>
                <?= $form->field($model, 'password', ['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group field-loginform-username has-feedback required'
                        ],
                        'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    {error}{hint}'
                    ])->passwordInput(['placeholder'=>'Password','autofocus' => true]) ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-success btn-block btn-flat', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>    
        </div>
    </div>
</div>