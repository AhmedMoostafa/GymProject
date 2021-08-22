<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plan;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
    return [
        //
        'title' => $this->faker->word(),
        'description' => $this->faker->paragraph(),
        //'nutritionist_id' => factory(App\Nutritionist::class),
    ];
});
