<?php

use Illuminate\Database\Seeder;

class SolutionsTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		factory(Panlogic\Models\Eloquent\Solution::class, 2)->create();
	}
}