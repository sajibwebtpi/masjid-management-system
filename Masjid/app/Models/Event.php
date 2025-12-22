<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'event_date',
        'start_time',
        'end_time',
        'speaker',
        'location'
    ];
}
