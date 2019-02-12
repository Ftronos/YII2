<?php
  namespace app\models\tables;
  use Yii;
  /**
   * This is the model class for table "tasks".
   *
   * @property int $id
   * @property string $name
   * @property string $description
   * @property int $user_id
   * @property int $responsible_id
   * @property string $deadline
   * @property int $status_id
   *
   * @property Users $user
   */
  class Tasks extends \yii\db\ActiveRecord
  {
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
	  return 'tasks';
	}
	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
	  return [
		[['name', 'description'], 'required'],
		[['user_id', 'responsible_id', 'status_id'], 'integer'],
		[['deadline'], 'safe'],
		[['name', 'description'], 'string', 'max' => 255],
		[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
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
		'description' => 'Description',
		'user_id' => 'User ID',
		'responsible_id' => 'Responsible ID',
		'deadline' => 'Deadline',
		'status_id' => 'Status ID',
	  ];
	}
	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
	  return $this->hasOne(Users::className(), ['id' => 'user_id']);
	}
  }