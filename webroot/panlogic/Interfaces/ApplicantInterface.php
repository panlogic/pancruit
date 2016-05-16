<?php

namespace Panlogic\Interfaces;

interface ApplicantInterface {

	public function create($object);

	public function all(array $columns);

}