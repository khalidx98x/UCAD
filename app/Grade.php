<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function employeepersonal()
    {
        return $this->hasMany('App\Employeepersonal');
    }

    public function department()
    {
        return $this->hasMany('App\Department');
    }
}
