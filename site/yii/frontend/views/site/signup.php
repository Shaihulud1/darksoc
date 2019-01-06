<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
use yii\helpers\Url;
use yii\helpers\Html;?>
<div class="sign-in-wrapper" id="sign-in-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav nav-pills nav-justified sign-in-nav">
                  <a class="nav-item nav-link" v-on:click="activetab=1" v-bind:class="[ activetab === 1 ? 'active' : '' ]" href="#">Log In</a>
                  <a class="nav-item nav-link" v-on:click="activetab=2" v-bind:class="[ activetab === 2 ? 'active' : '' ]" href="#">Sign In</a>
                </nav>
                <form class="sign-in-form auth" v-if="activetab === 1" action="<?=Url::toRoute('/site/signup')?>" method="post">
                    <?=Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []);?>
                    <input type="hidden" name="TYPE" value="login">
                      <div class="form-group row">
                          <label for="inputLogin" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputLogin" name="LoginForm[username]" placeholder="Email">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                              <input type="password" class="form-control" name="LoginForm[password]" id="inputPassword" placeholder="Password">
                          </div>
                     </div>
                     <div class="form-group field-loginform-rememberme">
                         <div class="checkbox">
                             <label for="loginform-rememberme">
                                 <input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                 Remember Me
                             </label>
                             <p class="help-block help-block-error"></p>
                         </div>
                     </div>
                     <?if(!empty($arErrors['LOGIN'])){?>
                        <?foreach($arErrors['LOGIN'] as $error){
                            foreach($error as $errMess){?>
                                 <p style="color:red;"><?=$errMess?></p>
                            <?}
                        }
                     }?>
                     <button type="submit" class="btn btn-sign-in auth" name="signup-button">Log In</button>
                </form>
                <form id="form-signup" class="sign-in-form regist" v-if="activetab === 2" action="<?=Url::toRoute('/site/signup')?>" method="post">
                    <?=Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []);?>
                    <input type="hidden" name="TYPE" value="sign">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" name="SignupForm[email]" placeholder="Email">
                        </div>
                    </div>
                      <div class="form-group row">
                          <label for="inputLogin" class="col-sm-2 col-form-label">Login</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputLogin" name="SignupForm[username]" placeholder="Login">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword" name="SignupForm[password]" placeholder="Password">
                          </div>
                     </div>
                     <?if(!empty($arErrors['SIGN'])){?>
                        <?foreach($arErrors['SIGN'] as $error){
                            foreach($error as $errMess){?>
                                 <p style="color:red;"><?=$errMess?></p>
                            <?}
                        }
                     }?>
                     <button type="submit" class="btn btn-sign-in regist" name="signup-button">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>
