<?php
  /**
   * Created by PhpStorm.
   * User: DK
   * Date: 06.02.2019
   * Time: 8:35
   */

  namespace app\validators;

  use yii\validators\Validator;

  class WorktimeValidator extends Validator
  {
    public function validateAttribute($model, $attribute) {
      $value = $model -> $attribute;

	  if ($value <= 0) {
		$this->addError($model, $attribute, 'ќценочное врем€ должно быть больше 0');
	  }
	}
  }