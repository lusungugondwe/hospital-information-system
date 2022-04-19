<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * 
     * Specifies all the parameters that can be writen into our Pateint model object
     */
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
    /**
     * Patient model has many Visitiation models
     */
    public function Visitation(){
        return $this ->hasMany(Visitation::class);
    }

}
