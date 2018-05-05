<?php

use Faker\Generator as Faker;

$factory->define(App\OtherTreatment::class, function (Faker $faker) {
    return [
        //      $table->string('description');
        'practioner_details' => $faker->paragraph ,// secret
        'description' => $faker->sentence ,// secret
        'health_history_id' => function() {
            return factory(App\HealthHistory::class)->create()->id;
        },
    ];
});
