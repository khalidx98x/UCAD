<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feetype extends Model
{
     public function Studentfee()
    {
        return $this->hasMany('App\Studentfee');
    }
}
