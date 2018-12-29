<?php

use Faker\Generator as Faker;

$factory->define(\App\Client::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'email'     => $faker->unique->safeEmail,
        'age'       => $faker->randomNumber(2),
        'photo'     => $faker->imageUrl(),
        'user_id'   => 1
    ];
});
