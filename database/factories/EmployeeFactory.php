<?php

use Faker\Generator as Faker;
use App\Employee;
use App\Company;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'company_id' => factory(Company::class)->create()->id,
        'name'       => $faker->firstName,
        'last_name'  => $faker->lastName,
        'email'      => $faker->unique()->safeEmail,
        'phone'      => $faker->e164PhoneNumber,
    ];
});
