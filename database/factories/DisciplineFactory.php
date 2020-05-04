<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Discipline;
use Faker\Generator as Faker;

$factory->define(Discipline::class, function (Faker $faker) {
    return [
        'title' => $faker->words(2, true),
        'level' => $faker->randomElement([1, 2]),
    ];
});
