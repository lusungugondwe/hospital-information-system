<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'id',
        'firstname',
        'surname',
        'Gender',
        'Phonenumber',
        'next_of_kin_contact',
        'blood_group',
        'Medical_scheme',
        'Dob',
        'address'

    ];
    // this function is there to define the relationship that a client (patient) can have many instances of the visitation model
    public function Visitation(){
        return $this ->hasMany(Visitation::class);
    }

}
