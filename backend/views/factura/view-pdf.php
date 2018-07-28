<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Factura */

$this->title = $model->IDFACTURA;
?>
<div class="factura-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDFACTURA',
            'IDCLIENTE',
            'IDCAJERO',
            'IDDETALLEFACTURA',
            'FECHAFACTURA',
            'NUMEROFACTURA',
            'TOTALFACTURA',
            'ESTADO',
        ],
    ]) ?>

</div>
