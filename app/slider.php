<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //




    public function getCreatedAtAttribute($date)
{
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
}

public function getUpdatedAtAttribute($date)
{
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
}
}
