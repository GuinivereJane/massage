<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'address' => $faker->address,
        'occupation' => $faker->jobTitle,
        'phone_number' => $faker->phoneNumber,
        'dob' => $faker->date
    ];
});
