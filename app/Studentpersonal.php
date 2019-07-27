<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentpersonal extends Model
{

//    protected $guarded =[];

    protected $fillable = [
        'student_id', 'first_name_en', 'second_name_en', 'third_name_en', 'fourth_name_en',
        'gender', 'ssn', 'mobile', 'guardian', 'guardian_type',
        'guardian_mobile', 'home_phone', 'country_id', 'dob', 'city_id', 'region_id',
        'street', 'healthstatus_id', 'socialstatus_id', 'religion_id', 'nationality',
            'image', 'specialneed_id', 'knowabout_id'
    ];


    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function regiontype()
    {
        return $this->belongsTo('App\Regiontype');
    }

    public function specialneed()
    {
        return $this->belongsTo('App\Specialneed');
    }

    public function religion()
    {
        return $this->belongsTo('App\Religion');
    }

    public function knowabout()
    {
        return $this->belongsTo('App\Knowabout');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function country2()
    {
        return $this->belongsTo('App\Country', 'nationality');
    }

    public function healthstatus()
    {
        return $this->belongsTo('App\Healthstatus');
    }

    public function socialstatus()
    {
        return $this->belongsTo('App\Socialstatus');
    }


}
