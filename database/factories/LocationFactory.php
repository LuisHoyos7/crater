<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'country_id' => factory(\App\Country::class),
        'state_id' => factory(\App\State::class),
        'city_id' => factory(\App\City::class),
        'address' => $faker->word,
        'description' => $faker->text,
    ];
});
