<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    protected $fillable = [
        'type',
        'asset_id', 
         
         
    ];

    public function asset()
    {
        return $this->belongsTo('App\asset');
    }

}
