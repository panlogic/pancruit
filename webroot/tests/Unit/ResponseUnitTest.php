<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Panlogic\Factories\RoleFactory;
use Panlogic\Factories\ApplicantFactory;
use Panlogic\Factories\ResponseFactory;

class ResponseUnitTest extends PHPUnit_Framework_TestCase
{
    protected $applicant;
    protected $response;
    protected $role;

    public function setUp() {
        // Create Applicant
        $this->applicantFactory = new ApplicantFactory();
        $this->applicant = $this->applicantFactory->make(['phone' => '447777777777']);

        // Create Role.
        $this->roleFactory = new RoleFactory();
        $this->role = $this->roleFactory->make([
            'enabled' => true,
            'name' => 'Developer',
            'content' => 'To be a developer, one must have to like F1'
        ]);

         // Create Response.
        $this->responseFactory = new ResponseFactory();
        $this->response = $this->responseFactory->make([
            'grade' => 10,
        ]);

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
