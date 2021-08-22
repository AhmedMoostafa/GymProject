<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'member_id'=> factory(\App\User::class),
        'price'=> 100,
        'type'=> $faker->word,
    ];
});
