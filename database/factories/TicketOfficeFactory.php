<?php

namespace Database\Factories;

use App\Models\TicketOffice;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketOfficeFactory extends Factory
{
    protected $model = TicketOffice::class;
    public function definition()
    {
        return [
            "name" => fake()->name(),
            "address" => fake()->address(),
            "phone_official" => fake()->phoneNumber(10),
            "phone_reserved" => fake()->phoneNumber(10),
            "passenger_car_company_id" => 1
        ];
    }
}