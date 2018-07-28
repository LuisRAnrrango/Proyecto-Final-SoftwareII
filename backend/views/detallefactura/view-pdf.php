<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = $model -> IDDETALLEFACTURA;

?>
<div class="detallefactura-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDDETALLEFACTURA',
            'IDPRODUCTO',
            'CANTIDAD',
            'TOTAL',
        ],
    ]) ?>

</div>
