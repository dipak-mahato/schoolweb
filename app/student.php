<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function standard(){
    return $this->belongsTo('App\standard','c_id');
}
}
