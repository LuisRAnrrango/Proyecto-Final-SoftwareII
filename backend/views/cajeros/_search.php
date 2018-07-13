<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Search\CajerosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cajeros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDCAJERO') ?>

    <?= $form->field($model, 'CEDULARUC') ?>

    <?= $form->field($model, 'NOMBRES') ?>

    <?= $form->field($model, 'APELLIDOS') ?>

    <?= $form->field($model, 'FECHANACIMIENTO') ?>

    <?php // echo $form->field($model, 'CIUDADNACIMIENTO') ?>

    <?php // echo $form->field($model, 'DIRECCION') ?>

    <?php // echo $form->field($model, 'TELEFONO') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'ESTADO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
