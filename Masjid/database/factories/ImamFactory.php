<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imam>
 */
class ImamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => '01' .$this->faker->numberBetween(300000000 , 999999999),
            'photo' => 'imams/default.png',
            'address' => $this->faker->optional()->address(),
            'salary' => $this->faker->numberBetween(10000 , 15000),
            'joining_date' => $this->faker->dateTimeBetween('-5 years' , 'now')->format('Y-m-d'),
            'is_active' => $this->faker->boolean(90),

        ];
    }
}
