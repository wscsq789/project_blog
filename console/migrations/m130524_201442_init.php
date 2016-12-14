<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
	const TBL_NAME = '{{%user}}';
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(self::TBL_NAME, [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
		//参数依次表示 索引名称 表 字段 是否是唯一性
    	//$this->createIndex('user', self::TBL_NAME ,{'username'}, true);
    	//$this->createIndex('email', self::TBL_NAME ,{'email'}, true);
	}

    public function down()
    {
        $this->dropTable(self::TBL_NAME);
    }
}
