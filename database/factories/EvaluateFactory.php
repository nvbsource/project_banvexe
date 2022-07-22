<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PassengerCarCompany;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluate>
 */
class EvaluateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rating' => fake()->numberBetween(1, 5),
            'comment' => fake()->text(30),
            'passenger_car_company_id' => fake()->numberBetween(1, PassengerCarCompany::get()->count()),
            'customer_id' => fake()->numberBetween(1, Customer::get()->count()),
        ];
    }
}