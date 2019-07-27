<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function country()
    {
        return $this->hasMany('App\Studentpersonal','country_id');
    }

    public function country2()
    {
        return $this->hasMany('App\Studentpersonal','nationality');
    }

    public function country3()
    {
        return $this->hasMany('App\Employeepersonal','country_id');
    }

    public function country4()
    {
        return $this->hasMany('App\Employeepersonal','nationality');
    }
    
}
