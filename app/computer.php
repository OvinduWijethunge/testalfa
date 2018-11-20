<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    protected $fillable = [
        'vga',
        'memory',
        'storageCapacity',
        'processor',
        'asset_id', 
         
         
    ];

    public function asset()
    {
        return $this->belongsTo('App\asset');
    }

    public function desktop()
    {
        return $this->hasOne('App\desktop');
    }

    public function laptop()
    {
        return $this->hasOne('App\laptop');
    }
}
