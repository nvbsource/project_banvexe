<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassengerCarCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Phương Trang",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Tuấn Tú",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Như Quỳnh",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Liên Hưng",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Đăng Nhân",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Thiện Trí",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Hưng Phú Thịnh",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Tân Hoàng Anh",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Quốc Trung",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Quê Hương",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Anh Khôi",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
        \App\Models\PassengerCarCompany::factory()->create([
            'name' => "Phước Thiện",
            'phone' => fake()->numerify("###-####-####"),
            'numberLicense' => fake()->numberBetween(),
            'imageLicense' => NULL,
        ]);
    }
}