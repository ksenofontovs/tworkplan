<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'specialization' => $faker->randomElement(['Дизайнер', 'Дизайнер костюмов']),
        'level' => $faker->randomElement([1, 2]),
        'year' => 2019,
    ];
});
