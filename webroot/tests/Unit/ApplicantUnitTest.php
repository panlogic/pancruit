<?php

use Panlogic\Factories\ApplicantFactory;
use Panlogic\Factories\RoleFactory;

class ApplicantUnitTest extends PHPUnit_Framework_TestCase
{
	protected $applicantFactory;
	protected $applicant;
	protected $role;
  protected $roleFactory;

	public function setUp()
	{
		$this->applicantFactory = new ApplicantFactory();
		$this->applicant = $this->applicantFactory->make(['phone' => '447777777777']);

		$this->roleFactory = new RoleFactory();
    $this->role = $this->roleFactory->make([
        'enabled' => true,
        'name' => 'Developer',
        'content' => 'To be a developer, one must have to like F1'
    ]);

    // Set Applicant role.
    $this->applicant->setRole($this->role);
	}

	/** @test */
	function a_applicant_has_a_phone_number()
	{
		$this->assertEquals('447777777777', $this->applicant->getPhone());
		$this->assertEquals($this->role->getName(), $this->applicant->getRole()->getName());
	}
}
