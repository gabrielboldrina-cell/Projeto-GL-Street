<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends Factory<Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paid = $this->faker->boolean();
        return [
            'user_id' => User::factory(),
            'type' => $this->faker->randomElement(['B', 'C', 'P']),
            'paid' => $paid,
            'value' => $this->faker->randomFloat(10, 1000, 10000),
            'payment_date' => $paid ? $this->faker->randomElement([$this->faker->dateTimeThisMonth()]) : null,
        ];
    }
}
