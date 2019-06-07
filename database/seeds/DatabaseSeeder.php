<?php

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
        $this->call(PetSizesSeeder::class);
        $this->call(PetTypesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(MedicalRecordsSeeder::class);
    }
}
