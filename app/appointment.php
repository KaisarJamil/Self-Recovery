<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //
    public function time(){
        return $this->belongsTo('App\time');
    }
}
