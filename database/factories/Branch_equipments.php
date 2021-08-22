<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Branch_equipments;
use Faker\Generator as Faker;

$factory->define(Branch_equipments::class, function (Faker $faker) {
    return [
        'branch_id'=>factory(\App\Models\Branch_equipments::class),
        'equipment_id'=>factory(\App\Models\Branch_equipments::class),
        'quantity'=>$faker->randomDigit()
    ];
});
