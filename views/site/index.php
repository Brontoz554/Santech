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
        <h1>Услуги сантехника</h1>
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
                <?= $form->field($modal, 'phone')->textInput(
                    [
                        'placeholder' => '8-123-456-78-91',
                    ]) ?>
                <?= $form->field($modal, 'comment')->textarea(['rows' => 8]) ?>

                <?= Html::submitButton('Оставить заявку', ['class' => 'modal-btn']) ?>
                <?php ActiveForm::end();

                Modal::end();
                ?>
            </span>
    </article>
</section>
<section class="main container">
    <h2>Наши преимущества</h2>
    <div class="column">
        <div class="col-lg-4 col-md-12 mt-3">
            <img src="../../image/pay.png" alt="payment" class="payment">
            <h2>Оплата после приема работ</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>

        <div class="col-lg-4 col-md-12 mt-2">
            <img src="../../image/successfully.png" alt="plumber" class="successfully">
            <h2>Система контроля качества</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>

        <div class="col-lg-4 col-md-12 mt-3">
            <img src="../../image/time.png" alt="plumber" class="time">
            <h2>Выезд мастера в удобное вам время</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>
    </div>
</section>
<section class="question-block container">
    <article class="question-detail">
        <h2>Сомниваетесь или остались какие либо вопросы?</h2>
        <h3>Укажите ваш номер телефона и специалист свяжется с вами</h3>
        <article class="question-form">
            <?php $form = ActiveForm::begin() ?>
            <?= $form->field($question, 'name')->textInput() ?>
            <?= $form->field($question, 'phone')->textInput(
                [
                    'placeholder' => '8-123-456-78-91',
                ]) ?>

            <?= Html::submitButton('Оставить заявку', ['class' => 'question-btn']) ?>
            <?php ActiveForm::end(); ?>
        </article>
    </article>
</section>

