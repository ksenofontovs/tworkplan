<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{

    protected $fillable = [
        'title', 'level',
    ];

    protected $appends = ['title_level'];

    public function getTitleLevelAttribute()
    {
        return $this->title . ' ' . Group::$levels[$this->level];
    }

}
