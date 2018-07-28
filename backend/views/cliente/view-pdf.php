<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cliente */

$this->title = $model->NOMBRES;

?>
<div class="cliente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDCLIENTE',
            'CEDULARUC',
            'NOMBRES',
            'APELLIDOS',
            'FECHANACIMIENTO',
            'CIUDADNACIMIENTO',
            'TIPOCLIENTE',
            'DIRECCION',
            'TELEFONO',
            'EMAIL:email',
            'ESTADO',
        ],
    ]) ?>

</div>
