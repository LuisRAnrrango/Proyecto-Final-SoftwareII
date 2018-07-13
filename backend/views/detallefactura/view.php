<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Detallefactura */

$this->title = $model->IDDETALLEFACTURA;
$this->params['breadcrumbs'][] = ['label' => 'Detallefacturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallefactura-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDDETALLEFACTURA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDDETALLEFACTURA], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
