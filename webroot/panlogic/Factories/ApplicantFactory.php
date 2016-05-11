<?php

namespace Panlogic\Factories;

use Panlogic\Interfaces\FactoryInterface;
use Panlogic\Libraries\Applicant;

class ApplicantFactory implements FactoryInterface {

	function make($components) {
		return new Applicant($components);
	}

}