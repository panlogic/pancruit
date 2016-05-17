<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(RolesTableSeeder::class);
    	$this->call(ApplicantsTableSeeder::class);
    	$this->call(TypeTableSeeder::class);
    	$this->call(QuestionsTableSeeder::class);
    	$this->call(AnswersTableSeeder::class);
    }
}