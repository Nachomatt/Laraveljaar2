<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Shoppingcart;
use Faker\Generator as Faker;

$factory->define(Shoppingcart::class, function (Faker $faker) {
    return [
        //
        'product_id' => $faker->numberBetween(1,50),
        'user_id' => $faker->numberBetween(1,50),
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null),
    ];
});
