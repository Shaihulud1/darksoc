<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);
$this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="main-wrapper">
        <div class="upper-head logo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#">
                            <h2>NEON STYLE</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?= $content ?>
    </div>
    <div class="modal fade modal-dialogs" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-dialog-wrap">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your Dialogs</h5>
                    <button type="button" class="close close-dialog" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-choose">
                                    <div class="profile-item media">
                                        <img src="images/background-city.jpg" class="media-left" alt="">
                                        <h5 class="media-body nickname">NickName</h5>
                                    </div>
                                    <div class="profile-item media">
                                        <img src="images/background-city.jpg" class="media-left" alt="">
                                        <h5 class="media-right nickname">NickName</h5>
                                    </div>
                                    <div class="profile-item media">
                                        <img src="images/background-city.jpg" class="media-left" alt="">
                                        <h5 class="media-right nickname">NickName</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="dialog-history">
                                    <div class="other mess-item">
                                        <h6>Killer228</h6>
                                        <p class="date">18-12-2019 2:30</p>
                                        <p class="mess">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                    </div>
                                    <div class="me mess-item">
                                        <h6>Shaihulud</h6>
                                        <p class="date">18-12-2018 12:30</p>
                                        <p class="mess">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                    </div>
                                    <div class="me mess-item">
                                        <h6>Shaihulud</h6>
                                        <p class="date">18-12-2018 12:30</p>
                                        <p class="mess">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                    </div>
                                    <div class="me mess-item">
                                        <h6>Shaihulud</h6>
                                        <p class="date">18-12-2018 12:30</p>
                                        <p class="mess">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form class="sign-in-form send-mess justify-content-between w-100" action="index.html" method="post">
                        <div class="form-group mr-auto">
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
