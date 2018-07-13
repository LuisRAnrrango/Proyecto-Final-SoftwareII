<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cajeros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cajeros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CEDULARUC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APELLIDOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHANACIMIENTO')->textInput() ?>

    <?= $form->field($model, 'CIUDADNACIMIENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    
      <?= $form->field($model, 'ESTADO')->dropDownList(['ACTIVO'=>'ACTIVO','INACTIVO'=>'INACTIVO']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
