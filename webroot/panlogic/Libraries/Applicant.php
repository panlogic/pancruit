<?php

namespace Panlogic\Libraries;

use Panlogic\Libraries\AbstractLibrary;

class Applicant extends AbstractLibrary {

	protected $phone;
	protected $passcode;
	protected $role;
	protected $response;

	public function __construct(array $components = []) {
		$this->phone = isset($components['phone']) ? $components['phone'] : '';
		$this->passcode = isset($components['passcode']) ? $components['passcode'] : '';
		$this->role = isset($components['role']) ? $components['role'] : '';
		$this->response = isset($components['response']) ? $components['response'] : '';
	}
}
