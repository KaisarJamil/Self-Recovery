<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    //
    public function appointment(){
        return $this->belongsTo('App\appointment');
    }
}
