<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = $model -> NOMBREPRODUCTO;

?>

 <h2 aling="centre"> DETALLE DE LOS PRODUCTO SELECCIONADOS </h2>
    <H3 ALING ="rigth"> BANCO JEISSON</H3>
<div class="detallefactura-view">

    <h1><?= Html::encode($this->title) ?></h1>
   
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDPRODUCTO',
            'NOMBREPRODUCTO',
            'DESCRIPCIONPRODUCTO',
            'PRECIOUNITARIO',
        ],
    ]) ?>
</div>
