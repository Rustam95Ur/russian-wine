<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Wine;
use Faker\Generator as Faker;

$factory->define(Wine::class, function (Faker $faker) {
    return [
        'color_id' => $faker->numberBetween(1, 25),
        'winery_id' => $faker->numberBetween(1, 25),
        'title' => $faker->sentence(1, 3),
        'description' => $faker->paragraph(),
        'price' => $faker->numberBetween(0, 500000),
    ];
});
