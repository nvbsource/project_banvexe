<?php

namespace Database\Factories;

use App\Models\PassengerCarCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssistantDriver>
 */
class AssistantDriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->numerify("###-####-####"),
            'address' => fake()->streetAddress(),
            'idCard' => fake()->numberBetween(),
            'path_avatar' => NULL,
            'passenger_car_company_id' => fake()->numberBetween(1, PassengerCarCompany::get()->count())
        ];
    }
}
