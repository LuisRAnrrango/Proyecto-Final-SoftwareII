<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Cliente;
use backend\models\Cajeros;
/* @var $this yii\web\View */
/* @var $model backend\models\Factura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factura-form">

    <?php $form = ActiveForm::begin(); ?>


      
    <?= $form->field($model, 'IDCLIENTE')->dropDownList(
    ArrayHelper::map(Cliente::find()->all(), 'IDCLIENTE', 'NOMBRES'),
            ['promt'=>'Select CLIENTE']) ?>

    <?= $form->field($model, 'IDCAJERO')->dropDownList(
    ArrayHelper::map(Cajeros::find()->all(), 'IDCAJERO', 'NOMBRES'),
            ['promt'=>'Select CAJERO']) ?>

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
