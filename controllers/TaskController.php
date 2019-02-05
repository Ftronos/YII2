<?php
  /**
   * Created by PhpStorm.
   * User: DK
   * Date: 05.02.2019
   * Time: 12:45
   */

  namespace app\controllers;


  use app\models\Task;
  use yii\web\Controller;

  class TaskController extends Controller
  {
    public function actionIndex() {
      echo "Не было вызвано других функций";
      exit();
	}

	public function actionShow()
	{
	  return $this->render("show");
	}

	public function actionTask() {
      $model = new Task();

      $model -> setAttributes([
		'name' => 'Познакомиться с Yii2',
		'description' => 'Создать model и пройти валидацию',
		'time' => '0',
		'priority' => '1',
		'author' => 'Leonid',
		'performer' => 'Leonid',
		'observer' => '',
		'creationDate' => '2019-05-02',
		'updateDate' => '2019-05-02'
	  ], false);

	  var_dump($model->validate());
	  var_dump($model->getErrors());

	  exit;

      var_dump($model);
      exit();
	}
  }