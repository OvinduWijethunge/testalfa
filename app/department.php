<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable = [
        'name',
         'depHeadName', 
         
    ];

    public function User()
    {

        return $this->hasMany('App\User');
    }

    public function asset()
    {
     return $this->hasMany('App\asset');

    }

    public function assetRequest()
    {

        return $this->hasMany('App\assetRequest');
    }

    public function resign()
    {

        return $this->hasMany('App\resign');
    }
}
