<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donor".
 *
 * @property int $id
 * @property string $name
 * @property string $country
 *
 * @property Donations[] $donations
 */
class Donor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'donor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country'], 'required'],
            [['name', 'country'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'country' => 'Country',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonations()
    {
        return $this->hasMany(Donations::className(), ['donor_id' => 'id']);
    }
}
