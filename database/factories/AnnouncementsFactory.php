<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Announcements;
use Faker\Generator as Faker;

$factory->define(Announcements::class, function (Faker $faker) {
    return 
    [
        'title'=> $faker->sentence,
        'description'=> $faker->paragraph,
        'datetime'=> $faker->datetime,
        'sender_id'=> factory(\App\User::class),
        'receiver_type'=> $faker->word,
    ];
});
