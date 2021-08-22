<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Equipments;
use Faker\Generator as Faker;

$factory->define(Equipments::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(),
        'description'=>$faker->sentence(),
        'picture'=>$faker->sentence(),
    ];
});
