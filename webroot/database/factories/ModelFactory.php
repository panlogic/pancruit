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

$factory->define(Panlogic\Models\Eloquent\Answer::class, function (Faker\Generator $faker) {
    return [
        'question_id' => rand(1,5),
        'response_id' => rand(1,5),
        'content' => $faker->text,
    ];
});

$factory->define(Panlogic\Models\Eloquent\Applicant::class, function (Faker\Generator $faker) {
    return [
        'phone' => $faker->randomNumber,
        'passcode' => $faker->randomNumber,
    ];
});

$factory->define(Panlogic\Models\Eloquent\Question::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->text,
        'role_id' => rand(1,2),
        'type_id' => 1,
    ];
});

$factory->define(Panlogic\Models\Eloquent\Response::class, function (Faker\Generator $faker) {
    return [
        'role_id' => rand(1,2),
        'applicant_id' => rand(1,5),
        'grade' => 1,
    ];
});

$factory->define(Panlogic\Models\Eloquent\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->text,
    ];
});

$factory->define(Panlogic\Models\Eloquent\Solution::class, function (Faker\Generator $faker) {
    return [
        'question_id' => rand(1,5),
        'weight' => $faker->randomDigitNotNull,
        'content' => $faker->text,
    ];
});

$factory->define(Panlogic\Models\Eloquent\Type::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(Panlogic\Models\Eloquent\TypeValue::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->name,
    ];
});