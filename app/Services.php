<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    /**
     * 
     * Specifies all the parameters that can be writen into our Services model object
     */
    protected $fillable = [
        'name',
        'Price'
    ];
    /**
     * Services model belongs to many Visitation model with a pivot Services_offereds
     */
    public function Visitation(){
        return $this ->belongsToMany(Visitation::class,'services_offereds','service_id','visitation_id'
        );
    }


}
