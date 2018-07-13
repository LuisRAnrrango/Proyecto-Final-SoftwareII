<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Detallefactura */

$this->title = 'Create Detallefactura';
$this->params['breadcrumbs'][] = ['label' => 'Detallefacturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallefactura-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
