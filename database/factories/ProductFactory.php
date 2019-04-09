<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' 	        => $faker->sentence,
        'description'  	=> $faker->text(30),
        'price'	        => $faker->numberBetween(5000,30000)
    ];
});
