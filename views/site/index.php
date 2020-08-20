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
                    'footer' => 'Вы можете сразу позвонить нам: 8-888-888-88-88',
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
            <p>Оплата выполненных мастером работ производится только после приёма работы.</p>
        </div>
        <div class="col-lg-4 col-md-12 mt-2">
            <img src="../../image/successfully.png" alt="plumber" class="successfully">
            <h2>Только опытные и квалифицированные мастера</h2>
            <p>Наши мастера проверены временем и способны выполнять работы любых сложностей.
                За плечами каждого из них больше 1000 выполненных работ.</p>
        </div>

        <div class="col-lg-4 col-md-12 mt-3">
            <img src="../../image/time.png" alt="plumber" class="time">
            <h2>Выезд мастера в удобное вам время</h2>
            <p>Вы указываете удобное вам время и мастер прибудет точно в определённый срок.</p>
        </div>
    </div>
</section>
<section class="information-block container">
    <div class="column">
        <div class="service-one">
            <article class="col-lg-4 col-md-12 mt-3">
                <div class="waterfall">
                </div>
                <div class="category-name">
                    <h2>Установка водоснабжения</h2>
                </div>
            </article>

            <article class="col-lg-4 col-md-12 mt-3">
                <div class="heating_system">
                </div>
                <div class="category-name">
                    <h2>Монтаж систем отопления, опрессовка зданий</h2>
                </div>
            </article>
        </div>
        <article class="col-lg-4 col-md-12 mt-3">
            <div class="sewerage">
            </div>
            <div class="category-name">
                <h2>Канализационные работы</h2>
            </div>
        </article>
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

