<?php

use Panlogic\Factories\ApplicantFactory;
use Panlogic\Factories\RoleFactory;
use Panlogic\Factories\ResponseFactory;
use Panlogic\Factories\AnswerFactory;

class AnswerUnitTest extends PHPUnit_Framework_TestCase
{
    protected $response;
    protected $applicant;
    protected $answer;

    public function setUp() {
        $faker = Faker\Factory::create();

        $applicantFactory = new ApplicantFactory();
        $this->applicant = $applicantFactory->make(['phone' => $faker->phoneNumber()]);

        // Create Response.
        $this->responseFactory = new ResponseFactory();
        $this->response = $this->responseFactory->make(['grade' => 10]);

        // Create Answer.
        $answerFactory = new AnswerFactory();
        $this->answer = $answerFactory->make(['content' => 'My name is Bob']);

        // Glue everything together.
        $this->response->setApplicant($this->applicant);
        $this->response->setAnswer($this->answer);
    }

    /** @test */
    function can_create_answer() {
        $this->assertEquals('My name is Bob', $this->answer->getContent());
    }

    /** @test */
    function response_has_answer() {
        $this->assertEquals($this->answer, $this->response->getAnswer());
    }
}
