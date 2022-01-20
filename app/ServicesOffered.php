<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesOffered extends Model
{
    protected $fillable = [
        'visitation_id',
        'service_id'
    ];
    public function Visitation(){
        return $this->belongsTo(Visitation::class);
    }


}
