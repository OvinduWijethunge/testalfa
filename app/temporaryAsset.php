<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class temporaryAsset extends Model
{
    protected $fillable = [
        'startDate',
        'expireDate',
        'noOfExpand',
        'user_id',
        'asset_id', 
         
         
    ];

    public function User()
    {

        return $this->belongsTo('App\User');
    }

    public function asset()
    {

        return $this->belongsTo('App\asset');
    }
}
