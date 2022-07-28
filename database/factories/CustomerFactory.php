<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(10),
            'email' =>  fake()->unique()->safeEmail(),
            'birthday' => fake()->dateTimeBetween("-30 years"),
            'idCard' => fake()->numberBetween(9),
            'activePhone' => false,
            'activeEmail' => false,
            'isBlocked' => false
        ];
    }
}