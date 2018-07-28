<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Search\DetallefacturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detallefacturas';

?>
<div class="detallefactura-index">

    <h1><?= Html::encode($this->title) ?></h1>
   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDDETALLEFACTURA',
            'IDPRODUCTO',
            'CANTIDAD',
            'TOTAL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
     <?= Html::a('Generar PDF', ['gen-pdf'], ['class' => 'btn btn-primary']) ?>

</div>