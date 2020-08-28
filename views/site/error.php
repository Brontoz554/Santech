<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container">
    <img src="../../image/404.png" class="pnf" alt="page not found">
    <?= Html::a('На главную', ['/site/index'], ['class' => 'btn']) ?>
</div>
