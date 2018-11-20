<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activityHistory extends Model
{
    protected $fillable = [
        'activityType',
        'date',
        'user_id', 
         
         
    ];

    public function User()
    {

        return $this->belongsTo('App\User');
    }

}
