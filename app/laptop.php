<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    protected $fillable = [
        'displaySize',
        'computer_id', 
         
         
    ];

    public function computer()
    {
        return $this->belongsTo('App\computer');
    }
}
