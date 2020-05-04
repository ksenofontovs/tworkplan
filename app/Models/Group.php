<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    const LEVEL1 = 1; // СПО
    const LEVEL2 = 2; // ВПО

    protected $fillable = [
        'specialization', 'level', 'year',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
