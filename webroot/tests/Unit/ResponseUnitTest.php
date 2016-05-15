<?php

use Panlogic\Factories\RoleFactory;
use Panlogic\Factories\ApplicantFactory;
use Panlogic\Factories\ResponseFactory;

class ResponseUnitTest extends PHPUnit_Framework_TestCase
{
    protected $applicant;
    protected $response;
    protected $role;

    public function setUp() {
        $faker = Faker\Factory::create();

        // Create Applicant
        $this->applicantFactory = new ApplicantFactory();
        $this->applicant = $this->applicantFactory->make(['phone' => $faker->phoneNumber]);

        // Create Role.
        $this->roleFactory = new RoleFactory();
        $this->role = $this->roleFactory->make([
            'enabled' => true,
            'name' => $faker->name,
            'content' => $faker->paragraph
        ]);

        // Create Response.
        $this->responseFactory = new ResponseFactory();
        $this->response = $this->responseFactory->make(['grade' => 10]);

        // Attach Role and Applicant to Answer.
        $this->response->setApplicant($this->applicant);
        $this->response->setRole($this->role);
    }

    /** @test */
    public function can_create_response() {
        // Check if Applicant is properly set.
        $this->assertEquals($this->applicant->getPhone(), $this->response->getApplicant()->getPhone());

        // Check if Role is properly set
        $this->assertEquals($this->role->getName(), $this->response->getRole()->getName());

        // Check response grade.
        $this->assertEquals(10, $this->response->getGrade());
    }
}
