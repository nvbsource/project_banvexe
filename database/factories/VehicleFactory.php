<?php

namespace Database\Factories;

use App\Models\PassengerCarCompany;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RangeOfVehicle;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrayCountSeatLimousine = array(22, 32, 34);
        $arrayCountSeatNormal = array(40, 41, 42, 44);
        $rangeOfVehicle = fake()->numberBetween(1, 5);
        if (RangeOfVehicle::find($rangeOfVehicle)->type === "Limousine") {
            $countSeat = $arrayCountSeatLimousine[array_rand($arrayCountSeatLimousine)];
        } else {
            $countSeat = $arrayCountSeatNormal[array_rand($arrayCountSeatNormal)];
        }
        $passengerCarCompany = fake()->numberBetween(1, PassengerCarCompany::get()->count());
        return [
            'name' => PassengerCarCompany::find($passengerCarCompany)->name,
            'licensePlates' => fake()->numerify("##-##-#####"),
            'countSeat' => $countSeat,
            'rangeOfVehicle_id' => $rangeOfVehicle,
            'passenger_car_company_id' => $passengerCarCompany
        ];
    }
}
