<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\animal */

$this->title = 'Update Animal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="animal-update">

    <h1><?= Html::encode($this->title) ?></h1>


</div>
