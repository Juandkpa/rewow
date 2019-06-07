<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetTypes extends Model
{
    public function medicalRecords()
    {
        return $this->hasMany('App\MedicalRecord');
    }
}
