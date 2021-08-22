<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nutritionist;
use Faker\Generator as Faker;

$factory->define(Nutritionist::class, function (Faker $faker) {
    return [
        //
        'is_checked'=> $faker->boolean()
    ];
});
