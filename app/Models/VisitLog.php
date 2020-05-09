<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitLog extends Model
{

    protected $fillable = [
        'date', 'student_id', 'schedule_id', 'absent', 'mark',
    ];
}
