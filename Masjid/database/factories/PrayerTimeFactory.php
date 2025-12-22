<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrayerTime>
 */
class PrayerTimeFactory extends Factory
{

    public function definition(): array
    {
        return [
            'date' => now()->toDateString(),
            'fajr' => '06:00',
            'dhuhr' => '01:30',
            'asr' => '04:00',
            'magrib' => '05:30',
            'isha' => '07:00',
            'jumuah' => now()->isFriday() ? '01:30' : null,
        ];
    }
}
