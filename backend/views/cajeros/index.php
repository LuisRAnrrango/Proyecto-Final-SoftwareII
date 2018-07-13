<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Search\CajerosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cajeros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cajeros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cajeros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDCAJERO',
            'CEDULARUC',
            'NOMBRES',
            'APELLIDOS',
            'FECHANACIMIENTO',
            //'CIUDADNACIMIENTO',
            //'DIRECCION',
            //'TELEFONO',
            //'EMAIL:email',
            //'ESTADO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
