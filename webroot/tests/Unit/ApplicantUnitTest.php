<?php

use Panlogic\Factories\ApplicantFactory;

class ApplicantUnitTest extends PHPUnit_Framework_TestCase
{
	protected $applicantFactory;

	protected $applicant;

	public function setUp()
	{
		$this->applicantFactory = new ApplicantFactory();
		$this->applicant = $this->applicantFactory->make(['phone' => '447777777777']);
	}

	/** @test */
	function a_applicant_has_a_phone_number()
	{
		$this->assertEquals('447777777777', $this->applicant->getPhone());
	}
}
