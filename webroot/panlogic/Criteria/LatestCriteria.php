<?php

namespace Panlogic\Criteria;

use Panlogic\Libraries\AbstractCriteria;
use Panlogic\Interfaces\CriteriaInterface;

class LatestCriteria extends AbstractCriteria {

	protected $value;

	public function __construct($value = 'id')
	{
		$this->value = $value;
	}

	public function apply($model) {
		$query = $model->orderBy($this->value,'DESC');
		return $query;
	}

}