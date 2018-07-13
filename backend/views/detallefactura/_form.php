<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Detallefactura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallefactura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPRODUCTO')->textInput() ?>

    <?= $form->field($model, 'CANTIDAD')->textInput() ?>

    <?= $form->field($model, 'TOTAL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
