<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Account::factory()->create([
            'email' => "nvbluutru@gmail.com",
            'name' => "Nguyễn Văn Bảo",
            'username' => "admin",
            'password' => '$2a$12$lj7idpHXqdMqLPFGFt5SauRoOCKAK8.MleN5FyfWt2WNI4csv4kBW',
            'role' => 'manager',
            'passenger_car_company_id' => 1,
            'ticket_office_id' => null,
            'remember_token' => Str::random(10),
        ]);
        \App\Models\Account::factory()->create([
            'email' => "loclocloc@gmail.com",
            'name' => "Nguyễn Xuân Lộc",
            'username' => "loc123",
            'password' => '$2a$12$lj7idpHXqdMqLPFGFt5SauRoOCKAK8.MleN5FyfWt2WNI4csv4kBW',
            'role' => 'bus',
            'passenger_car_company_id' => 1,
            'ticket_office_id' => 1,
            'remember_token' => Str::random(10),
        ]);
        \App\Models\Account::factory()->create([
            'email' => "phuongphuongphuong@gmail.com",
            'name' => "Phan thanh phương",
            'username' => "phuong123",
            'password' => '$2a$12$lj7idpHXqdMqLPFGFt5SauRoOCKAK8.MleN5FyfWt2WNI4csv4kBW',
            'role' => 'ticket',
            'passenger_car_company_id' => 1,
            'ticket_office_id' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}