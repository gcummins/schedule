<?php

use App\Bay;
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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Stage::class, function (Faker\Generator $faker) {
    return [
        'number' => $faker->randomDigit,
        'description' => $faker->catchPhrase,
        'work_type' => $faker->realText(15),
        'start' => $faker->dateTime(),
        'complete' => $faker->dateTime(),
        'hours' => $faker->randomDigit(),
        'pending' => false,
        'order_id' => 1,
        'bay_id' => Bay::orderByRaw("RAND()")->first()->id,
    ];
});
