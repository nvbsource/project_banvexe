<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::factory()->create([
            "role" => "mananger",
            "name" => "Quản lý công ty"
        ]);
        \App\Models\Role::factory()->create([
            "role" => "ticket",
            "name" => "Nhân viên bán vé"
        ]);
        \App\Models\Role::factory()->create([
            "role" => "bus",
            "name" => "Nhân viên điều hành xe"
        ]);
        \App\Models\Role::factory()->create([
            "role" => "contact",
            "name" => "Nhân viên chăm sóc khách hàng"
        ]);
    }
}