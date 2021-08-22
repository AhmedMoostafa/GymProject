<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Meal;
use Faker\Generator as Faker;

$factory->define(Meal::class, function (Faker $faker) {
    return [
        //
        'title' => $this->faker->unique()->word(),
        //'nutritionist_id' => factory(App\Models\Nutritionist::class),
    ];
});
