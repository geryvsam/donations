<?php

use yii\db\Migration;

/**
 * Handles the creation of table `donations`.
 */
class m180523_042156_create_donations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('donations', [
            'id' => $this->primaryKey(),
            'donor_id' => $this->integer(),
            'date' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'Amount' => $this->string(191)->notNull(),
            'project_id' => $this->integer(),

        ]);
        $this->createIndex(
            'idx-donations-donor_id',
            'donations', 'donor_id');
        $this->addForeignKey(
            'fk-donations-donor',
            'donations','donor_id',
            'donor','id'
        );

         $this->createIndex(
            'idx-donations-project_id',
            'donations', 'project_id');
          $this->addForeignKey(
            'fk-donations-project',
            'donations','project_id',
            'project','id'
            );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-donations-donor','donations');
        $this->dropForeignKey('fk-donations-project','donations');
        $this->dropIndex('idx-donations-donor_id','donations');
        $this->dropIndex('idx-donations-project_id','donations');
        $this->dropTable('donations');
    }
}
