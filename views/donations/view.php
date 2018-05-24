<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Donations */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sold-items-view">

    <h1><?= Html::encode($this->title) ?></h1>
<?php if(Yii::$app->user->isGuest): ?>
            <br><br>
            Please <?= Html::a('login',['/site/login'])?> to make 
            a comment.
        <?php else: ?>

            <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
            <?php ActiveForm::end(); ?>

        <?php endif; ?>
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'donor_id',
          	'date',  
          	'Amount',
            'project_id',
            
        ],

    ]) ?>

</div>
