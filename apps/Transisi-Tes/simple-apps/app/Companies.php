<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    public function epmloyees()
    {
        return $this->hasMany('App\Employees');
    }
}
