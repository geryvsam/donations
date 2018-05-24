<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donations".
 *
 * @property int $id
 * @property int $donor_id
 * @property string $date
 * @property string $Amount
 * @property int $project_id
 *
 * @property Donor $donor
 * @property Project $project
 */
class Donations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'donations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['donor_id', 'project_id'], 'integer'],
            [['date'], 'safe'],
            [['Amount'], 'required'],
            [['Amount'], 'string', 'max' => 191],
            [['donor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Donor::className(), 'targetAttribute' => ['donor_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'donor_id' => 'Donor ID',
            'date' => 'Date',
            'Amount' => 'Amount',
            'project_id' => 'Project ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonor()
    {
        return $this->hasOne(Donor::className(), ['id' => 'donor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
}
