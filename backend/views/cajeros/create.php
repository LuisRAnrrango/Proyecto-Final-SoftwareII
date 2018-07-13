<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cajeros */

$this->title = 'Create Cajeros';
$this->params['breadcrumbs'][] = ['label' => 'Cajeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cajeros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
