<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gatepass extends Model
{
    protected $fillable = [
        'startDate',
        'expireDate',
        'breakdown_id', 
         
         
    ];

    public function breakdown()
    {

        return $this->belongsTo('App\breakdown');
    }
}
