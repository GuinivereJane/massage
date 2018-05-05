<?php

use Faker\Generator as Faker;

$factory->define(App\MedicationInfo::class, function (Faker $faker) {
    return [
        //
        'reason' => $faker->paragraph ,// secret
        'medication_id' => rand(0,49),    
    ];
});
