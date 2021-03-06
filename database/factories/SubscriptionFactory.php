<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Subscription::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1,25),
        'type' => $faker->word,
        'amount' => $faker->numberBetween(10, 1000),
        'start_date' => $faker->dateTimeThisYear,
        'end_date' => $faker->dateTimeThisYear
    ];
});
