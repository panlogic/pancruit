<?php

namespace Panlogic\Repositories;

use Panlogic\Repositories\RoleRepository;
use Panlogic\Interfaces\RoleInterface;
use Panlogic\Models\Role;

class RoleRepository extends AbstractRepository implements RoleInterface {

	protected $model;

	/**
	 * Construct the class
	 * @param model
	 */
	public function __construct(Role $model) {
		$this->model = $model;
	}

}