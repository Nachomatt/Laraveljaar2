<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Suggestion;
use Faker\Generator as Faker;

$factory->define(Suggestion::class, function (Faker $faker) {
    return [
        'description' => $faker->text(150),
        'user_id' => $faker->numberBetween(1,50),
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null),
        ];
});
