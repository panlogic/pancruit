<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Panlogic\Models\Answer::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->text,
    ];
});

$factory->define(Panlogic\Models\Applicant::class, function (Faker\Generator $faker) {
    return [
        'phone' => $faker->randomNumber,
        'passcode' => $faker->randomNumber,
    ];
});

$factory->define(Panlogic\Models\Question::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->text,
    ];
});

$factory->define(Panlogic\Models\Response::class, function (Faker\Generator $faker) {
    return [
        'role_id' => $faker->randomDigitNotNull,
        'applicant_id' => $faker->randomDigitNotNull,
        'grade' => 1,
    ];
});

$factory->define(Panlogic\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->text,
    ];
});

$factory->define(Panlogic\Models\Solution::class, function (Faker\Generator $faker) {
    return [
        'question_id' => $faker->randomDigitNotNull,
        'weight' => $faker->randomDigitNotNull,
        'content' => $faker->text,
    ];
});