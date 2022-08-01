<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Route::factory()->create([
            "departure_district_id" => 1,
            "destination_district_id" => 50,
            "departure_name" => "Văn phòng Bình Chánh",
            "destination_name" => "Văn phòng Bình Chánh",
            "departure_address" => "Văn phòng Thanh Oai",
            "destination_address" => "Văn phòng Thanh Oai",
            "passenger_car_company_id" => 1,
        ]);
        \App\Models\Route::factory()->create([
            "departure_district_id" => 25,
            "destination_district_id" => 79,
            "departure_name" => "Văn phòng Ba Đình",
            "destination_name" => "Văn phòng Ba Đình",
            "departure_address" => "Văn phòng Trảng Boom",
            "destination_address" => "Văn phòng rảng Boom",
            "passenger_car_company_id" => 1,
        ]);
        \App\Models\Route::factory()->create([
            "departure_district_id" => 98,
            "destination_district_id" => 122,
            "departure_name" => "Văn phòng Hồng Bàn",
            "destination_name" => "Văn phòng Hồng Bàn",
            "departure_address" => "Văn phòng Đại Lộc",
            "destination_address" => "Văn phòng Đại Lộc",
            "passenger_car_company_id" => 1,
        ]);
    }
}
