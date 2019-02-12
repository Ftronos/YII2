<?php

  use yii\db\Migration;

  /**
   * Handles the creation of table `{{%user}}`.
   */
  class m190212_094733_create_user_table extends Migration
  {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
	  $this->createTable('{{%user}}', [
		'id' => $this->primaryKey(),
		'username' => $this->string()->notNull(),
		'password' => $this->string()->notNull()
	  ]);
	  $this->batchInsert('user', ['username', 'password'], [['admin', 'admin'], ['user1', '1111'], ['user2', '2222']]);
	  $this->addForeignKey('fk_user_id', 'tasks', 'user_id', 'user', 'id');
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
	  $this->dropTable('{{%user}}');
	}
  }
