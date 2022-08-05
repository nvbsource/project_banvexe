<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Vehicle::get() as $vehicle) {
            for ($i = 1; $i <= $vehicle->countSeat; $i++) {
                \App\Models\Seat::factory()->create([
                    'name' => "G" . $i,
                    'vehicle_id' => $vehicle->id
                ]);
            }
        }
    }
}