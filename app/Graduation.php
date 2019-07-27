<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
    public function studentacademic()
    {
        return $this->hasOne('App\Studentacademic');
    }
}
