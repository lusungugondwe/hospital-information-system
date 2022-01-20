<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'firstname',
        'surname',
        'Phonenumber',
        'next_of_kin_contact',
        'blood_group',
        'Medical_scheme',
        'Dob',
        'address'

    ];
    public function Visitation(){
        return $this ->hasMany(Visitation::class);
    }

}
