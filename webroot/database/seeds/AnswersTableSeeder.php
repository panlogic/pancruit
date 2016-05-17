<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		factory(Panlogic\Models\Eloquent\Answer::class, 2)->create();
	}
}