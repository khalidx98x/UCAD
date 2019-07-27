<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function studentacademic()
    {
        return $this->hasMany('App\Studentacademic');
    }
    public function studentacademic2()
    {
        return $this->hasMany('App\Studentacademic','departmentplan');
    }
    public function courseplan()
    {
        return $this->hasMany('App\Courseplan');
    }
    public function major()
    {
        return $this->belongsTo('App\Major');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
