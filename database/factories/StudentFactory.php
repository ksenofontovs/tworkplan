<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'subgroup' => $faker->randomElement([1,2]),
    ];
});
