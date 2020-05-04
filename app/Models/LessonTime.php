<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonTime extends Model
{

    protected $fillable = [
        'time_start', 'time_end',
    ];
}
