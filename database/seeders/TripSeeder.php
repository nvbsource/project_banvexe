<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Trip::factory()->create([
            "start_date" => now(),
            "end_date" => now(),
            "price" => 200000,
            "status" => "pending",
            "route_id" => fake()->numberBetween(1, Route::get()->count()),
            "vehicle_id" => 1,
        ]);
        \App\Models\Trip::factory()->create([
            "start_date" => now(),
            "end_date" => now(),
            "price" => 350000,
            "status" => "pending",
            "route_id" => fake()->numberBetween(1, Route::get()->count()),
            "vehicle_id" => 2,
        ]);
        \App\Models\Trip::factory()->create([
            "start_date" => now(),
            "end_date" => now(),
            "price" => 160000,
            "status" => "pending",
            "route_id" => fake()->numberBetween(1, Route::get()->count()),
            "vehicle_id" => 3,
        ]);
    }
}
