<?php

use yii\db\Migration;

/**
 * Handles the creation of table `donor`.
 */
class m180523_033224_create_donor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('donor', [
            'id' => $this->primaryKey(),
            'name' => $this->string(191)->notNull(),
            'country' => $this->string(191)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('donor');
    }
}
