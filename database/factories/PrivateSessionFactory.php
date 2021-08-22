<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PrivateSession;
use Faker\Generator as Faker;

$factory->define(PrivateSession::class, function (Faker $faker) {
  return [
    'title' => $faker->sentence(),
    'description' => $faker->paragraph(),
    'link' => $faker->url(),
    'duration' => $faker->time('H:i', 'now'),
    'datetime' => $faker->dateTimeBetween('now', '+1 months'),
    'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 50),
    'coach_id' => 1,
    // 'coach_id' => Coach::all()->random()->id, 


  ];
});
