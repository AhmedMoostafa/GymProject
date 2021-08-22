<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        //
        'cal' => $this->faker->randomNumber(),
        'title' => $this->faker->word(),
        'level' => $this->faker->randomElement($array = array ('red','green','yellow')),
        'title' => $this->faker->word(),
        //'nutritionist_id' => factory(App\Nutritionist::class),
    ];
});
