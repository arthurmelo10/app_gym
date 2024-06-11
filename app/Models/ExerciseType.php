<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExerciseType extends Model
{
    protected $fillable = [
        'name',
        'exercise'
    ];

    protected $rules = [
        'name' => ['required,string'],
        'exercise' => ['required, string']
    ];
}
