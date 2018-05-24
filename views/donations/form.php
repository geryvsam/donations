<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'donor_id')->textInput(); ?>

    <?= $form->field($model, 'Amount')->textInput(); ?>

     <?= $form->field($model, 'project_id')->textInput(); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
