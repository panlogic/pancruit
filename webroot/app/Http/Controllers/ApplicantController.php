<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Panlogic\Factories\ApplicantFactory;
use Panlogic\Repositories\ApplicantRepository;

class ApplicantController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Applicant Controller
	|--------------------------------------------------------------------------
	|
	*/

	/**
	 *
	 *
	 */
	protected $applicantFactory;

	/**
	 *
	 *
	 */
	protected $applicantRepository;

	/**
	 *
	 *
	 * @return Response
	 */
	public function __construct(ApplicantFactory $applicantFactory, ApplicantRepository $applicantRepository)
	{
		$this->applicantFactory = $applicantFactory;
		$this->applicantRepository = $applicantRepository;
	}

	public function index()
	{

		// Collect array of values to make an Applicant
		$applicant = [
			'phone' => '447841206889',
		];

		// Turn the values into a new Applicant Object
		$applicantFactory = $this->applicantFactory->make($applicant);

		// do stuff if necessary

		// Persist the applicant object to the database and return the database applicant class
		$applicant = $this->applicantRepository->create([ $applicantFactory ]);

		dd($applicant);
	}
}