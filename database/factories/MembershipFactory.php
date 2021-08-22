<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Membership;
use Faker\Generator as Faker;

$factory->define(Membership::class, function (Faker $faker) {
    return [
        'duration'=>1000,
        'description'=>$faker->sentence(),
        'price'=>1000,
        'limit_of_frozen_days'=>$faker->randomDigit(),
        'available_classes'=>$faker->randomDigit(),
        'discount'=>1000,
    ];
});
