<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    const LESSON_HALF_FIRST = 1; // первая половина пары
    const LESSON_HALF_SECOND = 2; // вторая половина пары

    const LESSON_EVEN = 1; // четный
    const LESSON_ODD = 2; // нечетный

    const TYPE_LOAD_BASIC = 1; // Основная
    const TYPE_LOAD_HOUR = 2; // Почасовая

    protected $fillable = [
        'user_id',
        'group_id',
        'subgroup',
        'discipline_id',
        'lesson_type_id',
        'even_odd',
        'half_lesson',
        'semester_id',
        'lesson_day_id',
        'lesson_time_id',
        'type_load',
        'audience',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function lessonType()
    {
        return $this->belongsTo(LessonType::class);
    }

    public function lessonDay()
    {
        return $this->belongsTo(LessonDay::class);
    }

    public function lessonTime()
    {
        return $this->belongsTo(LessonTime::class);
    }
}
