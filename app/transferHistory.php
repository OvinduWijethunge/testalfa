<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transferHistory extends Model
{
    protected $fillable = [
        'from',
        'to',
        'asset_id',
        
         
         
    ];

    public function asset()
    {
        return $this->belongsTo('App\asset');
    }

}
