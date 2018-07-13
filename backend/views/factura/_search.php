<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Search\FacturaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDFACTURA') ?>

    <?= $form->field($model, 'IDCLIENTE') ?>

    <?= $form->field($model, 'IDCAJERO') ?>

    <?= $form->field($model, 'IDDETALLEFACTURA') ?>

    <?= $form->field($model, 'FECHAFACTURA') ?>

    <?php // echo $form->field($model, 'NUMEROFACTURA') ?>

    <?php // echo $form->field($model, 'TOTALFACTURA') ?>

    <?php // echo $form->field($model, 'ESTADO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
