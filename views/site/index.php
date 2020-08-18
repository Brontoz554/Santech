<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>

<section class="plumber-block">
    <article class="plumber-text">
        <h1>Услуги сантехника в Томской области</h1>
        <span>
                Поломки сантехнического оборудования дело не частое,
                и доверять своё оборудование стоит только профессионалам. <br>
                Доверьте вашу сантехнику профессионалам - оставьте свою заявку и мастер свяжется с вами.
            </span>
        <span class="buttons">
                <?php
                Modal::begin([
                    'toggleButton' => ['label' => 'Оставить заявку'],
                    'header' => '<h3>Оставьте заявку и мастер свяжется с вами</h3>',
                    'class' => 'btn btn-dark',
                ]);

                $form = ActiveForm::begin() ?>
                <?= $form->field($modal, 'name')->textInput() ?>
                <?= $form->field($modal, 'phone')->textInput() ?>
                <?= Html::submitButton('Оставить заявку', ['class' => 'modal-btn']) ?>
                <?php ActiveForm::end();

                Modal::end();
                ?>
            </span>
    </article>
</section>
<section class="main container col-12">
    <h2>Наши преимущества</h2>
    <div class="column">
        <div class="col-lg-4">
            <h2>Оплата после приема работ</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>

        <div class="col-lg-4">
            <h2>Система контроля качества</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>

        <div class="col-lg-4">
            <h2>Работа по договору</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>
    </div>
</section>

