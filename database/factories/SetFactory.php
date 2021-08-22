<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Set;
use Faker\Generator as Faker;

$factory->define(Set::class, function (Faker $faker) {
  return [
    'title' => $faker->sentence(),
    'description' => $faker->paragraph(),
    // 'coach_id' => Coach::all()->random()->id,
    'coach_id' => 1,

  ];
});
