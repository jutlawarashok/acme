<?php

use yii\db\Migration;

/**
 * Class m200423_135228_create_table_user
 */
class m200423_135228_create_table_user extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function safeup()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey()->unsigned(),
            'uid' => $this->string(60)->unique()->notNull(),
            'username' => $this->string(45)->notNull(),
            'email' => $this->string(255)->unique()->notNull(),
            'password' => $this->string(60)->notNull(),
            'status' => $this->integer(4)->notNull()->defaultValue(0),
            'contact_email' => $this->boolean()->notNull()->defaultValue(0),
            'contact_phone' => $this->boolean()->notNull()->defaultValue(0),
            'created' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    public function safedown()
    {
        $this->dropTable('user');
    }
    
}
