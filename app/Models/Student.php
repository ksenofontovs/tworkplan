<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    const SUBGROUP_A = 1;
    const SUBGROUP_B = 2;

    protected $fillable = [
        'name', 'group_id', 'subgroup',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
