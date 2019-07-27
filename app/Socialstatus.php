<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialstatus extends Model
{
    public function studentpersonal()
    {
        return $this->hasMany('App\Studentpersonal');
    }

    public function employeepersonal()
    {
        return $this->hasMany('App\Employeepersonal');
    }
}
