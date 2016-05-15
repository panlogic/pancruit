<?php

namespace Panlogic\Libraries;

use Panlogic\Libraries\AbstractLibrary;

class Applicant extends AbstractLibrary {

	protected $phone;
	protected $passcode;
	protected $role;

	public function __construct(array $components = []) {
		$this->phone = isset($components['phone']) ? $components['phone'] : '';
		$this->passcode = isset($components['passcode']) ? $components['passcode'] : '';
		$this->role = isset($components['role']) ? $components['role'] : '';
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

	public function getPhone() {
		return $this->phone;
	}

	public function getPasscode() {
		return $this->passcode;
	}

	public function getRole() {
		return $this->role;
	}
}
