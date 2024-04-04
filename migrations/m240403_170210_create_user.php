<?php

use yii\db\Migration;

/**
 * Class m240403_170210_create_user
 */
class m240403_170210_create_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(), // Change 'authKey' to 'auth_key'
            'verification_token' => $this->string(255)->defaultValue(null), // Add this line
            'pass_hash' => $this->string(255)->notNull(), // Change 'password' to 'passhash'
            'pass_reset_token' => $this->string(255)->unique(), // Add this line
            'email' => $this->string(255)->notNull()->unique(), // Add this line
            'status' => $this->tinyInteger(2)->notNull()->defaultValue(10), // Add this line
            'created_at' => $this->integer()->notNull(), // Add this line
            'updated_at' => $this->integer()->notNull(), // Add this line
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240403_170210_create_user cannot be reverted.\n";

        return false;
    }

    function rules()
    {

    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240403_170210_create_user cannot be reverted.\n";

        return false;
    }
    */
}
