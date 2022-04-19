<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesOffered extends Model
{
    /**
     * 
     * Specifies all the parameters that can be writen into our ServicesOffered model object
     */
    protected $fillable = [
        'visitation_id',
        'service_id'
    ];
    /**
     * ServicesOffered model belongs to a one Visitation model instance
     */
    public function Visitation(){
        return $this->belongsTo(Visitation::class);
    }


}
