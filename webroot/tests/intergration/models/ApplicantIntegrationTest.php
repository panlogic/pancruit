<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Panlogic\Models\Eloquent\Applicant;

class ApplicantIntegrationTest extends TestCase
{

    public function setUp(){
        parent::setUp();
        $this->setupDatabase();
    }
    public function setupDatabase()
    {
        exec('rm ' . storage_path() . '/database/testing.sqlite');
        exec('cp ' . storage_path() . '/database/seeder.sqlite ' . storage_path() .'/database/testing.sqlite');
    }

    /** @test */
    function it_adds_an_applicant()
    {
        $model = new Applicant();

    	$applicants = $model->all();

        $this->assertCount(5,$applicants);
    }

}