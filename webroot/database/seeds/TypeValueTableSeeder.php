<?php

use Illuminate\Database\Seeder;

class TypeValueTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		factory(Panlogic\Models\Eloquent\TypeValue::class, 1)->create();
	}
}