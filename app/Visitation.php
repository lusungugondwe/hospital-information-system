<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Medication;
use App\Prescription;
class Visitation extends Model
{
    /**
     * 
     * Specifies all the parameters that can be writen into our Visitation model object
     */
    protected $fillable = [
        'patient_id' ,
        'user_id',
        'Description',
        'Test_Order',
        'Status',
        'lab_results',
        'visit_day'

    ];
    /**
     * The Visitation model belongs to a single Patient model object 
     */
    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    /**
     * The visitation model belongs to a single user model object
     */
    public function user(){
        return $this->hasOne(User::class);
    }
    
    /**
     * The visitation model has many instances of the Prescription model
     */
    public function Prescription(){
        return $this ->hasMany(Prescription::class);
    }
    /**
     * 
     * The Visitation model has many instances of the Services model with a pivot Services_offereds 
     */
    public function Services(){
        return $this ->belongsToMany(Services::class,'services_offereds','visitation_id',
        'service_id');
    }
    /**
     * The Visitation model has many instances of the medication model with a pivot prescriptions
     */
    public function Medication(){
        return $this->belongsToMany(Medication::class,'prescriptions','visitation_id',
        'medications_id');
    }
}
