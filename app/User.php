<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         'email', 
         'password',
         'department_id',
    ];

    public function department()
    {

        return $this->belongsTo('App\department');
    }


    public function assetRequest()
    {

        return $this->hasMany('App\assetRequest');
    }

    public function resign()
    {

        return $this->hasOne('App\resign');
    }

    public function breakdown()
    {

        return $this->hasMany('App\breakdown');
    }

    public function temporaryAsset()
    {

        return $this->hasMany('App\temporaryAsset');
    }

    public function activityHistory()
    {

        return $this->hasMany('App\activityHistory');
    }

    public function breakdownHistory()
    {

        return $this->hasMany('App\breakdownHistory');
    }

    


    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
