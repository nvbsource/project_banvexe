<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CustomerSeeder::class,
            PassengerCarCompanySeeder::class,
            DriverSeeder::class,
            AssistantDriverSeeder::class,
            RangeOfVehicleSeeder::class,
            VehicleSeeder::class,
            EvaluateSeeder::class,
            SeatSeeder::class,
            ProvinceSeeder::class,
            DistrictSeeder::class,
            RoleSeeder::class,
            TicketOfficeSeeder::class,
            AccountSeeder::class,
            RouteSeeder::class,
            TripSeeder::class,
            AdminSeeder::class,
        ]);
    }
}