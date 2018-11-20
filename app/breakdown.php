<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class breakdown extends Model
{
    protected $fillable = [
        'status',
        'gatepassConfiremed',
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

    public function gatepass()
    {

        return $this->hasMany('App\gatepass');
    }
}
