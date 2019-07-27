<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function studentpersonal()
    {
        return $this->hasMany('App\Studentpersonal');
    }

    public function employeepersonal()
    {
        return $this->hasMany('App\Employeepersonal');
    }


    public function region()
    {
        return $this->hasMany('App\Region');
    }

}
