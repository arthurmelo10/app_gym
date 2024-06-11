<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'repetitions',
        'quantity_of_series',
        'amount_of_load',
        'type'
    ];

    protected $rules = [
        'name' => 'required, string',
        'repetitions' => 'required|integer|min:1',
        'quantity_of_series' => 'required|integer|min:1',
        'amount_of_load' => 'required|integer|min:1',
        'type' => 'required,string'
    ];
}
