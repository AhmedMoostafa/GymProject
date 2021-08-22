<?php

/** @var Factory $factory */

use App\Models\Member;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'is_checked' => $faker->boolean,
        'start_date' => $faker->date,
        'end_date'=> $faker->date,
        'medical_physical_history'=> $faker->sentence,
        'medical_allergic_history'=> $faker->sentence,
        'available_frozen_days'=> $faker->randomDigit(),
        'available_membership_days'=> $faker->randomDigit(),
        'active_days'=> $faker->randomDigit()
    ];
});
