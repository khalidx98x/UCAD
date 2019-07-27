<?php

namespace App;

use App\Notifications\StudentResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $with =['studentpersonal','studentacademic',
        'studentbridging','studenthighschool'];


    public function studentpersonal()
    {
        return $this->hasOne('App\Studentpersonal');
    }

    public function studentacademic()
    {
        return $this->hasOne('App\Studentacademic');
    }

    public function studentbridging()
    {
        return $this->hasOne('App\Studentbridging');
    }

    public function studenthighschool()
    {
        return $this->hasOne('App\Studenthighschool');
    }

    public function studentfee()
    {
        return $this->hasMany('App\Studentfee');
    }

    public function volunteerhours()
    {
        return $this->hasMany('App\Volunteerhours');
    }

    public function externaltr()
    {
        return $this->hasMany('App\Externaltr');
    }

    public function studentsemesteravg()
    {
        return $this->hasMany('App\Studentsemesteravg');
    }

    public function mark()
    {
        return $this->hasMany('App\Mark');
    }

    public function studentrequest()
    {
        return $this->hasMany('App\Studentrequest');
    }

    public function studentminimumcharge()
    {
        return $this->hasMany('App\Studentminimumcharge');
    }

    public function studentexemption()
    {
        return $this->hasMany('App\Studentexemption');
    }

    public function stdstatus()
    {
        return $this->belongsTo('App\Stdstatus');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPassword($token));
    }
}
