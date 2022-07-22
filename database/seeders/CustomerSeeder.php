<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::factory()->create([
            'name' => "Nguyễn Văn Bảo",
            'phone' => "0384427247",
            'email' => "nvbluutru@gmail.com",
            'birthday' => now(),
            'idCard' => "264576718",
            'activePhone' => true,
            'activeEmail' => true,
            'isBlocked' => false
        ]);
        \App\Models\Customer::factory(20)->create();
    }
}