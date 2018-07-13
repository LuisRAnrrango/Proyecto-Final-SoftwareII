<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cajeros */

$this->title = $model->IDCAJERO;
$this->params['breadcrumbs'][] = ['label' => 'Cajeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cajeros-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDCAJERO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDCAJERO], [
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
            'IDCAJERO',
            'CEDULARUC',
            'NOMBRES',
            'APELLIDOS',
            'FECHANACIMIENTO',
            'CIUDADNACIMIENTO',
            'DIRECCION',
            'TELEFONO',
            'EMAIL:email',
            'ESTADO',
        ],
    ]) ?>

</div>
