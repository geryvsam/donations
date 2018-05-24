<?php
use yii\widgets\DetailView;
use yii\helpers\Html;
//$projects

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label'=>'Project', 'url'=>['/project/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to update project.</span>
<?php else: ?>

<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this project?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php endif; ?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'description'
    ]
]);