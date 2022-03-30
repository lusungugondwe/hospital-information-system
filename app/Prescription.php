<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'visitation_id',
        'medications_id',
        'Qauntity',
        'Status',
    ];
    // this function declares the visit model ownership of an instance of the Prescription model
    public function Visitation(){
        return $this->belongsTo(Visitation::class);
    }
// this function declares that a medication instance can have many prescriptions
    public function Medication(){
        return $this->belongsToMany(Medication::class,'prescriptions');
    }
}
