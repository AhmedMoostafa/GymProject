<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Classes;
use Faker\Generator as Faker;

$factory->define(Classes::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'description'=>$faker->sentence(),
        'level'=>$faker->sentence(),
        'link'=>$faker->sentence(),
        'capacity'=>5,
        'price'=>1,
        'duration'=>1,
        'date'=>$faker->date(),
    ];
});
