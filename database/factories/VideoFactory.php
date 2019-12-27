<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->colorName,
        'description' => $faker->paragraph,
        'episode_id' => $faker->numberBetween(1,15),
        'series_id' => $faker->numberBetween(1,10),
        
    ];
});
