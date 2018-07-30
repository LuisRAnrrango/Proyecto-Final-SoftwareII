<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model backend\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cajeros-form">

    
    <?php $form = ActiveForm::begin(); 
 Pjax::begin();
    ?>


          <h1>No tienes peromisos para acceder a este contenido</h1>
          <h2>Para mas Información consulta con Administrador</h2>
          <a href="http://localhost:81/Software/backend/web/index.php?r=site%2Flogin"><button class="btn-danger">Regresar</button></a>

<?php
Pjax::end();
?>
   
    
</div>
