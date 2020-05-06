<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    const LEVEL_SPO = 1; // СПО
    const LEVEL_VPO = 2; // ВПО

    public static array $levels = [
        1 => 'СПО',
        2 => 'ВПО',
    ];

    protected $fillable = [
        'specialization', 'level', 'year',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    protected $appends = ['title'];

    public function getTitleAttribute()
    {
        return $this->specialization . ' ' . $this->year . ' ' . self::$levels[$this->level];
    }
}
