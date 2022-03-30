<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Medication;
use App\Prescription;
class Visitation extends Model
{
    // function declares parameters for the model that can be passed on from the API route 
    protected $fillable = [
        'patient_id' ,
        'user_id',
        'Description',
        'Test_Order',
        'Status',
        'lab_results',
        'visit_day'

    ];
    // this function attaches a client hospital visit to a client record 
    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    // this fucntion attaches a client hospital visit to the user who has recorded that visit
    public function user(){
        return $this->hasOne(User::class);
    }
    //this function assign ownership of a patient visit to a prescription that has been assignined during that visit
    public function Prescription(){
        return $this ->hasMany(Prescription::class);
    }
    //this function creates a pivot table services_offereds for the many to many relationship between the visit and the services table
    public function Services(){
        return $this ->belongsToMany(Services::class,'services_offereds','visitation_id',
        'service_id');
    }
    //this function creates a pivot table prescriptions for the many to many relationship between the visit and the Medications table
    public function Medication(){
        return $this->belongsToMany(Medication::class,'prescriptions','visitation_id',
        'medications_id');
    }
}
