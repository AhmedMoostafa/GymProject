<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invitation;
use Faker\Generator as Faker;

$factory->define(Invitation::class, function (Faker $faker) {
    return [
          'user_id' => factory(App\User::class),
        'name' => $faker->name,
        'number' => "012345667",
    ];
});
