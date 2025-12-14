<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committe extends Model
{
    protected $fillable = [
        'name',
        'role',
        'phone',
        'email',
        'address',
    ];
}
