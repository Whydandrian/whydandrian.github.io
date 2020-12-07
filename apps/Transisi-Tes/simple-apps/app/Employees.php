<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public function companies()
    {
        return $this->belongsTo('App\Companies');
    }
}
