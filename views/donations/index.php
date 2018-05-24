<?php 

use yii\helpers\Html;
//$donations

$this->title = "Donations";
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a Donations.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Donations',['/donations/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Donor Id</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Project Id</th>
    </tr>
    <?php foreach($donations as $donation) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($donation->donor_id, [
                '/donations/view',
                'id'=>$donation->id]); ?>
        </td>    
        <td><?= $donation->date ?></td> 
        <td><?= $donation->Amount ?></td>
        <td><?= $donation->project_id ?></td>    
    </tr>
    <?php endforeach; ?>
</table>