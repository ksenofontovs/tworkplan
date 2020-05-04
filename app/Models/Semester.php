<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{

    protected $fillable = [
        'date_start', 'date_end'
    ];

    protected $appends = ['dates'];

    public function getDatesAttribute()
    {
        return $this->date_start . ' - ' . $this->date_end;
    }
}
