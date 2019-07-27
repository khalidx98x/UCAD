<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function studentacademic()
    {
        return $this->hasMany('App\Studentacademic');
    }
    public function plan()
    {
        return $this->hasMany('App\Plan');
    }
    public function major()
    {
        return $this->hasMany('App\Major');
    }
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }


}
