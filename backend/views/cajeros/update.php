<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cajeros */

$this->title = 'Update Cajeros: ' . $model->IDCAJERO;
$this->params['breadcrumbs'][] = ['label' => 'Cajeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDCAJERO, 'url' => ['view', 'id' => $model->IDCAJERO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cajeros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
