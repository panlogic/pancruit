<?php

namespace Panlogic\Libraries;

use Panlogic\Libraries\AbstractLibrary;

class Applicant extends AbstractLibrary {

	protected $phone;

	protected $passcode;

	public function __construct(array $components = []) {
		$this->phone = isset($components['phone']) ? $components['phone'] : '';
		$this->passcode = isset($components['passcode']) ? $components['passcode'] : '';
	}

	public function setPhone($phone = '') {
		return $this->phone = $phone;
	}

	public function setPasscode($passcode = '') {
		return $this->passcode = $passcode;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function getPasscode() {
		return $this->passcode;
	}
}