<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Donor */

$this->title = 'Create Donor';
$this->params['breadcrumbs'][] = ['label' => 'Donor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
