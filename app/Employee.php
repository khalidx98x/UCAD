<?php

namespace App;

use App\Notifications\EmployeeResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function employeepersonal()
    {
        return $this->hasOne('App\Employeepersonal','employee_id');
    }
    public function employeeacademic()
    {
        return $this->hasOne('App\Employeeacademic','employee_id');
    }

    public function semesterinstructor()
    {
        return $this->hasMany('App\Semesterinstructor','employee_id');
    }

    public function emplyeegroup()
    {
        return $this->hasMany('App\Employeegroup','employee_id');
    }
    public function userpermission()
    {
        return $this->hasMany('App\Userpermission','employee_id');
    }
    public function major()
    {
        return $this->hasMany('App\Major');
    }
    public function department()
    {
        return $this->hasMany('App\Department');
    }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new EmployeeResetPassword($token));
    }
}
