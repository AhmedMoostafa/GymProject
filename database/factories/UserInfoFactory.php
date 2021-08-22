<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserInfo;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class),
        'gender'=>$faker->word(),
        'photo'=>$faker->filePath(),
        'bio'=>$faker->paragraph(),
        'branch_id'=>factory(\App\Branch::class),
    ];
});
