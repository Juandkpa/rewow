<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PetTypes;

class PetTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        PetTypes::truncate();
        
        PetTypes::create([
            'name'=>'Cat'
        ]);
        PetTypes::create([
            'name'=>'Dog'
        ]);
        PetTypes::create([
            'name'=>'Fish'
        ]);
        PetTypes::create([
            'name'=>'Other'
        ]);
    }
}
