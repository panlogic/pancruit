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

	public function setPhone($phone = '') {
		$this->phone = $phone;
	}

	public function setPasscode($passcode = '') {
		$this->passcode = $passcode;
	}

	public function setRole($role = '') {
		$this->role = $role;
	}

	public function setResponse($response = '') {
		$this->response = $response;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function getPasscode() {
		return $this->passcode;
	}

	public function getRole() {
		return $this->role;
	}

	public function getResponse() {
		return $this->response;
	}
}
