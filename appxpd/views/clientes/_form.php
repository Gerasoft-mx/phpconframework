<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'EMail')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'Telefono')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'RFC')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'Domicilio')->textarea(['rows' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
