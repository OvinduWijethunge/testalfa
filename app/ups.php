<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ups extends Model
{
    protected $fillable = [
        'capacity',
        'asset_id', 
         
         
    ];

    public function asset()
    {
        return $this->belongsTo('App\asset');
    }
}
