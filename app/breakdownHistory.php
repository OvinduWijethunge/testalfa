<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class breakdownHistory extends Model
{
    protected $fillable = [
        'type',
         'user_id', 
         
    ];

    public function User()
    {

        return $this->belongsTo('App\User');
    }


}
