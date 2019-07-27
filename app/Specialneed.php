<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialneed extends Model
{
    public function studentpersonal()
    {
        return $this->hasOne('App\Studentpersonal');
    }
}
