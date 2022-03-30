<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = [
        'name',
        'Type',
        'Price'
    ];

    // this function declares are relationship that one Visitation can have many medications
    public function Visitation(){
        return $this ->belongsToMany(Visitation::class,'prescriptions','medications_id','visitation_id');
    }


}
