<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imam extends Model
{
    protected $fillable =[
        'name',
        'phone',
        'address',
        'salary',
        'photo',
        'joining_date',
        'is_active',
    ];
}
