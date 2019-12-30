<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Coupon;
use Faker\Generator as Faker;

$factory->define(Coupon::class, function (Faker $faker) {
    return [
        //
        'code' => $faker->unique()->randomNumber($nbDigits = 5),
        'expirationdate' => $faker->dateTimeBetween('+0 days', '+1 year'),
        'discount' => $faker->unique()->randomNumber($nbDigits = 2),
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null),
    ];
});
