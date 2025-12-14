<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerTime extends Model
{
    protected $fillable =[
        'date',
        'fajr',
        'dhuhr',
        'asr',
        'magrib',
        'isha',
        'jumuah'
    ];
}
