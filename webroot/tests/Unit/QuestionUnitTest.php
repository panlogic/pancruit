<?php

use Panlogic\Factories\ApplicantFactory;
use Panlogic\Factories\RoleFactory;
use Panlogic\Factories\QuestionFactory;
use Panlogic\Factories\AnswerFactory;
use Panlogic\Factories\ResponseFactory;


class QuestionUnitTest extends PHPUnit_Framework_TestCase
{
    protected $role;
    protected $applicant;
    protected $question;
    protected $response;

    public function setUp() {
        $faker = Faker\Factory::create();

        // Create applicant.
        $applicantFactory = new ApplicantFactory();
        $this->applicant = $applicantFactory->make(['phone' => $faker->phoneNumber]);

        // Create Answer.
        $answerFactory = new AnswerFactory();
        $this->answer = $answerFactory->make(['content' => $faker->paragraph]);

        // Create Response.
        $this->responseFactory = new ResponseFactory();
        $this->response = $this->responseFactory->make(['grade' => 10]);

        // Create role.
        $roleFactory = new RoleFactory();
        $this->role = $roleFactory->make([
            'enabled' => true,
            'name' => $faker->name,
            'content' => $faker->paragraph
        ]);

        $questionFactory = new QuestionFactory();
        $this->question = $questionFactory->make([
            'enabled' => true,
            'name' => 'name',
            'content' => 'What is your name?'
        ]);

        // Glue everything together.
        // Attach role to applicant.
        $this->applicant->setRole($this->role);
        $this->applicant->setResponse($this->response);
        // Do I need attach role again? If not set, it's empty when I check $this->applicant->getResponse()
        $this->response->setRole($this->role);
        $this->response->setApplicant($this->applicant);
        $this->response->setAnswer($this->answer);

        // Again, to not see empty values I need to set these ...
        $this->answer->setQuestion($this->question);
        $this->answer->setResponse($this->response);

        // Again I need to set role to not see empty values?
        $this->question->setRole($this->role);
        $this->question->setAnswer($this->answer);
    }

    /** @test */
    function can_create_question() {
        $this->assertEquals('What is your name?', $this->question->getContent());
    }

    /** @test */
    function check_question_relationships() {
        // Get Question via applicant.
        $this->assertEquals($this->question, $this->applicant->getResponse()->getAnswer()->getQuestion());

        // Get Applicant via question.
        $this->assertEquals($this->applicant, $this->question->getAnswer()->getResponse()->getApplicant());
    }
}
