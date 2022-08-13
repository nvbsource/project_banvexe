<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory()->create([
            'email' => "nvbluutru@gmail.com",
            'name' => "Nguyễn Văn Bảo",
            'username' => "admin",
            'password' => '$2a$12$lj7idpHXqdMqLPFGFt5SauRoOCKAK8.MleN5FyfWt2WNI4csv4kBW',
        ]);
    }
}
