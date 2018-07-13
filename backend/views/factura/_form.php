<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Factura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDCLIENTE')->textInput() ?>

    <?= $form->field($model, 'IDCAJERO')->textInput() ?>

    <?= $form->field($model, 'IDDETALLEFACTURA')->textInput() ?>

    <?= $form->field($model, 'FECHAFACTURA')->textInput() ?>

    <?= $form->field($model, 'NUMEROFACTURA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TOTALFACTURA')->textInput() ?>

    <?= $form->field($model, 'ESTADO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
