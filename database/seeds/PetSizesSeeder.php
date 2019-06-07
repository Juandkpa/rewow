<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PetSize;

class PetSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        PetSize::truncate();        

        PetSize::create([
            'name'=>'small'
        ]);
        PetSize::create([
            'name'=>'medium'
        ]);
        PetSize::create([
            'name'=>'big'
        ]);
        
    }
}
