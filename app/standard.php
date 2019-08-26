<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class standard extends Model
{
	    protected $primaryKey="c_id";

    public function student(){
    	return $this->hasMany('App\student','c_id','c_id');
    }
}
