<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discardAsset extends Model
{
   
    protected $fillable = [
        'description',
        'asset_id', 
         
         
    ];

    public function asset()
    {

        return $this->belongsTo('App\asset');
    }
}
