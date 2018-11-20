<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assetRequest extends Model
{
    protected $fillable = [
        'type',
         'status', 
         'description',
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
