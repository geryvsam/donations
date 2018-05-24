<?php 

use yii\helpers\Html;
//$project

$this->title = "Projects";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a Project.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Project',['/project/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php foreach($project as $projects) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($projects->name, [
                '/project/view',
                'id'=>$projects->id]); ?>
        </td>    
        <td><?= $projects->description ?></td>     
    </tr>
    <?php endforeach; ?>
</table>
