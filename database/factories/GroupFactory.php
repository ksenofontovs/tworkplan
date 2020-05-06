<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    $level = $faker->randomElement([1, 2]);
    $specialization = $faker->randomElement(['Дизайнер', 'Дизайнер костюма']);
    $year = $faker->randomElement([2019, 2020]);
    $title = $specialization .' ' . $year . ' ' . Group::$levels[$level];
    return [
        'specialization' => $specialization,
        'level' => $level,
        'year' => $year,
    ];
});
