<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cajeros */

$this->title = $model->NOMBRES;
?>

    <h1><?= Html::encode($this->title) ?></h1>

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
