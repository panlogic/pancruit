<?php

namespace Panlogic\Repositories;

use Panlogic\Repositories\QuestionRepository;
use Panlogic\Interfaces\QuestionInterface;
use Panlogic\Models\Question;

class QuestionRepository extends AbstractRepository implements QuestionInterface {

	protected $model;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Question $model = null) {
		$this->model = $model ?: new Question;
	}

}