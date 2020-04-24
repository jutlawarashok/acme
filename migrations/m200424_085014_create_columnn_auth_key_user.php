<?php

use yii\db\Migration;

/**
 * Class m200424_085014_create_columnn_auth_key_user
 */
class m200424_085014_create_columnn_auth_key_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','auth_key',$this->string(60)->notNull()->unique()->after('contact_phone'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'auth_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200424_085014_create_columnn_auth_key_user cannot be reverted.\n";

        return false;
    }
    */
}
