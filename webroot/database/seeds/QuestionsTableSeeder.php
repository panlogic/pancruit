<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		factory(Panlogic\Models\Eloquent\Question::class, 5)->create()->each(function($a) {
			$a->solutions()->save(factory(Panlogic\Models\Eloquent\Solution::class)->make());
		});
	}
}