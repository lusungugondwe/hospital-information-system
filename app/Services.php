<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'name',
        'Price'
    ];

    public function Visitation(){
        return $this ->belongsToMany(Visitation::class,'services_offereds','service_id','visitation_id'
        );
    }


}
