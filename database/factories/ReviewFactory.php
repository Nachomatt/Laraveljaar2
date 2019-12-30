<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'review' => $faker->text(150),
        'stars' => $faker->numberBetween(1,5),
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null),
        ];
});
