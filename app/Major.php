<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    public function studentacademic()
    {
        return $this->hasMany('App\Studentacademic');
    }

    public function plan()
    {
        return $this->hasMany('App\Plan');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
