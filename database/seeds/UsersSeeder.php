<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => $faker->password              
            ]);
        }

    }
}
