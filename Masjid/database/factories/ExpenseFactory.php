<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'Electricity Bill' ,
                'Water Bill' ,
                'Imam Salary' ,
                'Muezzin Salary',
                'Cleaning Services',
                'Maintenance',
                'Stationery'
            ]),
            'amount' => $this->faker->randomFloat(2, 100, 50000),
            'expenses_date'=> $this->faker->dateTimeBetween('-2 months', 'now')->format('y-m-d'),
            'note' =>$this->faker->optional()->sentence(),
            'created_by' => User::inRandomOrder()->value('id') ?? User::factory(),
        ];
    }
}
