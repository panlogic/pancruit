<?php

namespace Panlogic\Criteria;

use Panlogic\Interfaces\CriteriaInterface;

class EnabledCriteria implements CriteriaInterface {

	protected $value;

	public function __construct($value = true)
	{
		$this->value = $value;
	}

	public function apply($model) {
		$query = $model->where('enabled',$this->value);
		return $query;
	}

}