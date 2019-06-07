<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = ['name', 'description', 'user_id', 'pet_type_id', 'pet_size_id'];


    public function user() {
        return $this->belongsTo('App\User');
    }
    public function pet_type() {
        return $this->belongsTo('App\PetTypes');
    }

    public function pet_size() {
        return $this->belongsTo('App\PetSize');
    }
}
