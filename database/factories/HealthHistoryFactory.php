<?php

use Faker\Generator as Faker;



$factory->define(App\HealthHistory::class, function (Faker $faker) {
    return [
        'first_massage' => $faker->boolean ,// secret
        'client_id' => function() {
            return factory(App\Client::class)->create()->id;
        },

    ];

});
