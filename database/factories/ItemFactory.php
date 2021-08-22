<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        //
        'cal' => $this->faker->numberBetween($min = 100, $max = 10000),
        'title' => $this->faker->unique()->word(),
        'level' => $this->faker->randomElement($array = array ('red','green','yellow')),
        //'nutritionist_id' => factory(App\Models\Nutritionist::class),
    ];
});
