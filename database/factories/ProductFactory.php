<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' 	        => $faker->sentence,
        'description'  	=> $faker->text(30),
        'price'	        => $faker->numberBetween(5000,30000)
    ];
});
