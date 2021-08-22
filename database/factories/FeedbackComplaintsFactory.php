<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FeedbackComplaints;
use Faker\Generator as Faker;

$factory->define(FeedbackComplaints::class, function (Faker $faker) {
    return 
    [
        'user_id'=> factory(\App\User::class),
        'description'=> $faker->paragraph,
        'title'=> $faker->sentence,
        'type'=> $faker->word,
    ];
});
