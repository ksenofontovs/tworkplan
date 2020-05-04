<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    $groupId = \App\Models\Group::inRandomOrder()->first()->id;
    $disciplineId = \App\Models\Discipline::inRandomOrder()->first()->id;
    $lessonTypeId = \App\Models\LessonType::inRandomOrder()->first()->id;
    $semesterId = \App\Models\Semester::inRandomOrder()->first()->id;
    $lessonTimeId = \App\Models\LessonTime::inRandomOrder()->first()->id;
    $lessonDayId = \App\Models\LessonDay::inRandomOrder()->first()->id;
    return [
        'group_id' => $groupId,
        'discipline_id' => $disciplineId,
        'lesson_type_id' => $lessonTypeId,
        'odd_even_id' => 0,
        'half_lesson' => 0,
        'semester_id' => $semesterId,
        'lesson_day_id' => $lessonDayId,
        'lesson_time_id' => $lessonTimeId,
        'audience' => $faker->numberBetween(1, 400),
    ];
});
