<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowabout extends Model
{
    public function studentpersonal()
    {
        return $this->hasOne('App\Studentpersonal');
    }
}
