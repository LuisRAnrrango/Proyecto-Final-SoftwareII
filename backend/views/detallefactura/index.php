<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Search\DetallefacturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detallefacturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallefactura-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detallefactura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
</div>
