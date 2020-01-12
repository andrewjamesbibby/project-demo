<?php

use Faker\Generator as Faker;
use App\Company;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name'    => $faker->company,
        'email'   => $faker->unique()->safeEmail,
        'website' => $faker->url,
    ];
});
