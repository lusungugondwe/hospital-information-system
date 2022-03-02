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
    public function Visitation(){
        return $this->belongsTo(Visitation::class);
    }

    public function Medication(){
        return $this->belongsToMany(Medication::class,'prescriptions');
    }
}
