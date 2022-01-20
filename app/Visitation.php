<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Medication;
use App\Prescription;
class Visitation extends Model
{
    protected $fillable = [
        'patient_id' ,
        'Description',
        'lab_results',
        'visit_day'

    ];
    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function Prescription(){
        return $this ->hasMany(Prescription::class);
    }

    public function Services(){
        return $this ->belongsToMany(Services::class,'services_offereds','visitation_id',
        'service_id');
    }

    public function Medication(){
        return $this->belongsToMany(Medication::class,'prescriptions','visitation_id',
        'medications_id');
    }
}
