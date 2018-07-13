<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Search\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDCLIENTE') ?>

    <?= $form->field($model, 'CEDULARUC') ?>

    <?= $form->field($model, 'NOMBRES') ?>

    <?= $form->field($model, 'APELLIDOS') ?>

    <?= $form->field($model, 'FECHANACIMIENTO') ?>

    <?php // echo $form->field($model, 'CIUDADNACIMIENTO') ?>

    <?php // echo $form->field($model, 'TIPOCLIENTE') ?>

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
