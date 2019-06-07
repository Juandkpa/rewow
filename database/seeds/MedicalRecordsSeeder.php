<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\MedicalRecord;

class MedicalRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedicalRecord::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            MedicalRecord::create([
                'name' => $faker->firstName,
                'description' => $faker->paragraph,
                'user_id' => rand(1, 5),
                'pet_type_id' => rand(1,4),
                'pet_size_id' => rand(1,3),
            ]);
        }
    }
}
