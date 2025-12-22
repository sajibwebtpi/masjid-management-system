<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{

    public function definition(): array

    {
    $startTime = $this->faker->time('H:i');
    $endTime = date('H:i' , strtotime($startTime . '+1 hours'));
        return [
            'title' => $this->faker->randomElement([
                'Weekly Islamic Lecture',
                'Jumuah Bayan',
                'Quran Tafsir Session',
                'Youth Islamic Program',
                'Ramadan Islamic Program',
                'Eid Celebration Event'
            ]),
            'description' => $this->faker->paragraph(3),
            'event_date' => $this->faker->dateTimeBetween('now' , '+2 months')->format('Y-m-d'),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'speaker' => $this->faker->optional()->name(),
            'location' => $this->faker->optional()->randomElement([
                'Main Prayer Hall',
                'Conference Room',
                'Community Center',
                'Outdoor Area'
            ])
        ];
    }
}
