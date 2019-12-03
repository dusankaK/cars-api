<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->word,
        'model' => $faker->word,
        'year' => $faker->numberBetween(1999, 2019),
        'maxSpeed' => $faker->numberBetween(20,300),
        'isAutomatic' => $faker->boolean,
        'engine' => $faker->word,
        'numberOfDoors' => $faker->numberBetween(2,6)
    ];
});
