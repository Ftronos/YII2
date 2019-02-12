<?php
  /**
   * Created by PhpStorm.
   * User: DK
   * Date: 05.02.2019
   * Time: 13:06
   */

  namespace app\models;

  use yii\base\Model;

  class Task extends Model
  {
    public $name;
    public $description;
    public $time;
    public $priority;
	public $author;
    public $performer;
    public $observer;
    public $creationDate;
    public $updateDate;

	public function rules()
	{
	  return [
	    [['name', 'description', 'creationDate', 'time'], 'required'],
		[['name', 'author', 'performer', 'observer'], 'string'],
		[['description'], 'string', 'max' => 2000],
		[['creationDate', 'updateDate'], 'date', 'format' => 'php:Y-m-d'],
		[['time'], 'app\validators\WorktimeValidator']
	  ];
	}
  }