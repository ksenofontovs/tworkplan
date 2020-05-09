<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Semester;
use Faker\Generator as Faker;

$factory->define(Semester::class, function (Faker $faker) {
    $date = $faker->date('Y-m-d', '+1 year');
    $dateEnd = new DateTime($date);
    $dateEnd->add(new DateInterval('P4M'));
    return [
        'date_start' => $date,
        'date_end' => $dateEnd->format('Y-m-d'),
    ];
});
