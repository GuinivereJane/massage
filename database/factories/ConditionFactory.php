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

$factory->define(App\Condition::class, function (Faker $faker) {
    return [
        'condition_category_id' => rand(1,5),
        'health_history_id' => function() {
            return factory(App\HealthHistory::class)->create()->id;
        },
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'family_history' => $faker->boolean
    ];
});
