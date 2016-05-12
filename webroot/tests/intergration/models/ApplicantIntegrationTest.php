<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Panlogic\Models\Applicant;

class ApplicantIntegrationTest extends TestCase
{

	use DatabaseMigrations;

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