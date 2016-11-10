<?php

namespace Panlogic\Repositories;

use Panlogic\Repositories\AnswerRepository;
use Panlogic\Interfaces\AnswerInterface;
use Panlogic\Models\Answer;

class AnswerRepository extends AbstractRepository implements AnswerInterface {

	protected $model;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Answer $model = null) {
		$this->model = $model ?: new Answer;
	}

}