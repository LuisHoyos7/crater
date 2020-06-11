<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'nit' => $faker->word,
        'name' => $faker->name,
        'business_name' => $faker->word,
        'legal_representative' => $faker->word,
        'comercial_activity' => $faker->word,
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->word,
        'logo' => $faker->word,
        'location_id' => factory(\App\Location::class),
    ];
});
