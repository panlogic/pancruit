<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		factory(Panlogic\Models\Eloquent\Type::class, 1)->create()->each(function($t) {
			$t->types()->save(factory(Panlogic\Models\Eloquent\TypeValue::class)->make());
		});
	}
}