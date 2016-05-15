<?php

use Panlogic\Factories\ApplicantFactory;
use Panlogic\Factories\RoleFactory;

class ApplicantUnitTest extends PHPUnit_Framework_TestCase
{
	protected $applicant;
	protected $role;

	public function setUp()
	{
		$faker = Faker\Factory::create();

		$this->applicantFactory = new ApplicantFactory();
		$this->applicant = $this->applicantFactory->make(['phone' => '447777777777']);

		$this->roleFactory = new RoleFactory();
    $this->role = $this->roleFactory->make([
        'enabled' => true,
        'name' => $faker->name,
        'content' => $faker->paragraph
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
