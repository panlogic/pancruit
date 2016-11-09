<?php

namespace Panlogic\Repositories;

use Panlogic\Repositories\ResponseRepository;
use Panlogic\Interfaces\ResponseInterface;
use Panlogic\Models\Response;

class ResponseRepository extends AbstractRepository implements ResponseInterface {

	protected $model;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Response $model = null) {
		$model = $model ?: new Response;
		$this->model = $model;
	}

}