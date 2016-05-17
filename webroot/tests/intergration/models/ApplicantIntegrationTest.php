<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Panlogic\Models\Eloquent\Applicant;

class ApplicantIntegrationTest extends TestCase
{

	use DatabaseMigrations;

    public function setUp(){
        parent::setUp();
        $this->setupDatabase();
    }
    public function setupDatabase()
    {
        dd('rm ' . __DIR__ . '/database/testing/testing.sqlite');
        //exec('rm ' . __DIR__ . '/../database/testing/testing.sqlite');
        //exec('cp ' . __DIR__ . '/../database/testing/seeder.sqlite ' . __DIR__ .'/../database/testing/testing.sqlite');
    }

    /** @test */
    function it_adds_an_applicant()
    {
    	$applicant = [
    		'phone' => '447777777777',
    	];

    	Applicant::create($applicant);

    	$applicants = Applicant::all();

    	$this->assertCount(1,$applicants);
    }

}