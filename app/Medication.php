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

    public function Visitation(){
        return $this ->belongsToMany(Visitation::class,'prescriptions','medications_id','visitation_id');
    }


}
