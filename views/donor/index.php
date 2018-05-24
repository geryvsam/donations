<?php 

use yii\helpers\Html;
//$donor

$this->title = "Donors";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a donor.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Donor',['/donor/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Name</th>
        <th>Country</th>
    </tr>
    <?php foreach($donor as $donors) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($donors->name, [
                '/donor/view',
                'id'=>$donors->id]); ?>
        </td>    
        <td><?= $donors->country ?></td>     
    </tr>
    <?php endforeach; ?>
</table>
