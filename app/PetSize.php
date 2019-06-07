<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetSize extends Model
{
    public function medicalRecords()
    {
        return $this->hasMany('App\MedicalRecord');
    }
}
