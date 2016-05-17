<?php

use Illuminate\Database\Seeder;

class ApplicantsTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		factory(Panlogic\Models\Eloquent\Applicant::class, 5)->create()->each(function($a) {
			$a->response()->save(factory(Panlogic\Models\Eloquent\Response::class)->make());
		});
	}
}