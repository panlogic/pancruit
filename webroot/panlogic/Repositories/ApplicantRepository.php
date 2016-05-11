<?php

namespace Panlogic\Repositories;

use Panlogic\Repositories\AbstractRepository;
use Panlogic\Interfaces\ApplicantInterface;
use Panlogic\Models\Applicant;

class ApplicantRepository extends AbstractRepository implements ApplicantInterface {

	protected $model;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Applicant $model) {
		$this->model = $model;
	}

}