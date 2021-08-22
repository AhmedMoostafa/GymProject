<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
  return [
    'description' => $faker->paragraph(),
    // 'coach_id' => Coach::all()->random()->id,  
    'coach_id' => 1,

  ];
});
