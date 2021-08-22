<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\WorkoutSummary;
use Faker\Generator as Faker;

$factory->define(WorkoutSummary::class, function (Faker $faker) {
    return [
        'calories_burnt' => $faker->randomFloat(3, 0, 1000),
        'member_id' => $faker->randomDigit,
      //  'member_id' => Member::all()->random()->id,    //this gets random id from the table Members into workout summary
        'duration' => $faker->randomFloat(3, 0, 1000),
    ];
});
