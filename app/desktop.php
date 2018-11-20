<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desktop extends Model
{
    protected $fillable = [
        'moniterType',
        'computer_id', 
         
         
    ];

    public function computer()
    {
        return $this->belongsTo('App\computer');
    }
}
