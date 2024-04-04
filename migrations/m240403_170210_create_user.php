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
            'auth_key' => $this->string(32)->notNull(),
            'verification_token' => $this->string(255)->defaultValue(null),
            'pass_hash' => $this->string(255)->notNull(),
            'pass_reset_token' => $this->string(255)->unique(),
            'email' => $this->string(255)->notNull()->unique(),
            'status' => $this->tinyInteger(2)->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
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
