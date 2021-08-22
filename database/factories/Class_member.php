<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Class_member;
use Faker\Generator as Faker;

$factory->define(Class_member::class, function (Faker $faker) {
    return [
        'class_id'=>factory(\App\classs::class),
       // 'member_id'=>factory(\App\members::class),
        'favourite'=>$faker->sentence()
    ];
});
