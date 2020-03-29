<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'content' => $faker->text($maxNbChars = 200) ,
        'amount'  => $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 900),
        'image'  => null,
    ];
});
