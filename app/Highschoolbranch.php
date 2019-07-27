<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highschoolbranch extends Model
{
    public function studenthighschool()
    {
        return $this->hasMany('App\Studenthighschool');
    }
}
