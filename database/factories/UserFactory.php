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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => str_random(10), // secret
        'remember_token' => str_random(10),
        'address' => $faker->address,
        'occupation' => $faker->jobTitle,
        'phone_number' => $faker->phoneNumber,
        'dob' => $faker->date
    ];
});