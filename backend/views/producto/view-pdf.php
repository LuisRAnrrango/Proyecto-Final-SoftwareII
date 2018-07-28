<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = $model -> NOMBREPRODUCTO;

?>
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

