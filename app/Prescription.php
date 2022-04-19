<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    /**
     * 
     * Specifies all the parameters that can be writen into our Prescription model object
     */
    protected $fillable = [
        'visitation_id',
        'medications_id',
        'Qauntity',
        'Status',
    ];
    /**
     * Prescription model belongs to one Visitation model
     */
    public function Visitation(){
        return $this->belongsTo(Visitation::class);
    }
    /**
     * Prescription model belongs to many Medication Model with a pivot Prescription
     */
    public function Medication(){
        return $this->belongsToMany(Medication::class,'prescriptions');
    }
}
