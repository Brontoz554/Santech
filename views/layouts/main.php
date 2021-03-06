<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="../../image/plumber.png" type="image/x-icon"/>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Экспрес-сантехник',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-dark navbar-fixed-top',
        ],
    ]);
    ?>
    <section class="section navbar-left">
        <label class="phone">
            <img src="../../image/phone.svg" alt="phone">
            8-909-544-34-44
        </label>
    </section>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            Yii::$app->user->isGuest ? (
//            ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
    ]);
    NavBar::end();
    ?>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<footer class="footer">
    <div class="container footer-items">
        <label class="phone">
            <img src="../../image/phone.svg" alt="phone">
            8-909-544-34-44
        </label>
        <p class="pull-right">&copy; express-santehnik</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
