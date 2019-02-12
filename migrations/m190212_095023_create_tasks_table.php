<?php

  use yii\db\Migration;

  /**
   * Handles the creation of table `{{%tasks}}`.
   */
  class m190212_095023_create_tasks_table extends Migration
  {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
	  $this->createTable('{{%tasks}}', [
		'id' => $this->primaryKey(),
		'name' => $this->string()->notNull(),
		'description' => $this->string()->notNull(),
		'user_id' => $this->integer(),
		'responsible_id' => $this->integer(),
		'deadline' => $this->date(),
		'status_id' => $this->integer(),
	  ]);
	  $this->batchInsert('tasks', ['name', 'description', 'user_id', 'responsible_id', 'deadline', 'status_id'],
		[['Task 1', 'Task1Task1Task1', 2, 1, '2019-02-13', 1],
		  ['Task 2', 'Task2Task2Task2', 2, 1, '2019-02-13', 1],
		  ['Task 3', 'Task3Task3Task3', 3, 1, '2019-02-13', 1]]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
	  $this->dropTable('{{%tasks}}');
	}
  }
