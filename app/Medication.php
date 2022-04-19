<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    /**
     * 
     * Specifies all the parameters that can be writen into our Medication model object
     */
    protected $fillable = [
        'name',
        'Type',
        'Price'
    ];

    /**
     * Medication model belongs to many Visitation models with a Pivot prescriptions
     */
    public function Visitation(){
        return $this ->belongsToMany(Visitation::class,'prescriptions','medications_id','visitation_id');
    }


}
