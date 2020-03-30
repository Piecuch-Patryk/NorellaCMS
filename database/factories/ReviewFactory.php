<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Review;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'content' => $faker->text($maxNbChars = 50),
    ];
});
