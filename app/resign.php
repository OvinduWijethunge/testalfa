<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resign extends Model
{
    protected $fillable = [
        'reson',
        'assetHandOverd',
        'confirmed',
        'user_id',
        'department_id', 
         
         
    ];

    public function User()
    {

        return $this->belongsTo('App\User');
    }

    public function department()
    {

        return $this->belongsTo('App\department');
    }

}
