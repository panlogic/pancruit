<?php

namespace Panlogic\Libraries;

class Applicant {

	private $phone;

	public function __construct(array $components = []) {
		$this->phone = isset($components['phone']) ? $components['phone'] : '';
	}

	public function getPhone() {
		return $this->phone;
	}

	public function toArray() {
		return [
			'phone' => $this->phone,
		];
	}
}