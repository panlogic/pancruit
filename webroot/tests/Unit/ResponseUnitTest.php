<?php

use Panlogic\Factories\RoleFactory;
use Panlogic\Factories\ApplicantFactory;
use Panlogic\Factories\ResponseFactory;
use Panlogic\Repositories\ApplicantRepository;
use Panlogic\Repositories\RoleRepository;
use Panlogic\Repositories\ResponseRepository;

class ResponseUnitTest extends TestCase
{
    protected $response;
    protected $applicant;
    protected $role;

    public function setUp() {
        parent::setUp();

        $faker = Faker\Factory::create();

        // Create Applicant
        $applicantFactory = new ApplicantFactory();
        $this->applicant = (new ApplicantRepository)->create(
            $applicantFactory->make(['phone' => $faker->phoneNumber])
        )->first();

        // Create Response.
        $responseFactory = new ResponseFactory();
        $this->response = (new ResponseRepository)->create(
            $responseFactory->make(['grade' => 10])
        )->first();

        // Create Role.
        $roleFactory = new RoleFactory();
        $this->role = (new RoleRepository)->create(
            $roleFactory->make([
                'enabled' => true,
                'name' => $faker->name,
                'content' => $faker->paragraph
            ])
        )->first();
        $this->role->save();

        // Attach role to response.
        $this->response->role()->associate($this->role);
        $this->response->save();

        // Attach response to applicant.
        $this->applicant->response()->save($this->response);
    }

    /** @test */
    public function can_create_response() {
        // Check if Applicant is properly set.
        $this->assertEquals($this->applicant->phone, $this->response->applicant->phone);

        // Check if Role is properly set
        $this->assertEquals($this->role->name, $this->response->role->name);

        // Check response grade.
        $this->assertEquals(10, $this->response->grade);
    }
}
