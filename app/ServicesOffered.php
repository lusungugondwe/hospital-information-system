<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesOffered extends Model
{
    protected $fillable = [
        'visitation_id',
        'service_id'
    ];
    // this function attachess a service offered by the hospital to a patients visitation
    public function Visitation(){
        return $this->belongsTo(Visitation::class);
    }


}
