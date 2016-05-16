<?php

namespace Panlogic\Repositories;

use Panlogic\Interfaces\ApplicantInterface;
use Panlogic\Models\Applicant;

class ApplicantRepository implements ApplicantInterface {

	protected $model;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Applicant $model) {
		$this->model = $model;
	}

}