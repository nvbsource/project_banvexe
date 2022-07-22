<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RangeOfVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\RangeOfVehicle::factory()->create([
            'type' => 'Ghế Ngồi'
        ]);
        \App\Models\RangeOfVehicle::factory()->create([
            'type' => 'Limousine'
        ]);
        \App\Models\RangeOfVehicle::factory()->create([
            'type' => 'Giường nằm'
        ]);
        \App\Models\RangeOfVehicle::factory()->create([
            'type' => 'Du lịch'
        ]);
        \App\Models\RangeOfVehicle::factory()->create([
            'type' => 'Hàng hoá'
        ]);
    }
}