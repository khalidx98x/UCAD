<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = [
        'semester_id', 'year', 'start_date', 'end_add_date', 'end_remove_date','end_withdrawal_date', 'final_date', 'minimumcharge', 'active'
    ];
    public function mark()
    {
        return $this->hasMany('App\Mark');
    }
    public function studentrequest()
    {
        return $this->hasMany('App\Studentrequest');
    }
    public function availablecourse()
    {
        return $this->hasMany('App\Availablecourse');
    }
    public function studentminimumcharge()
    {
        return $this->hasMany('App\Studentminimumcharge');
    }
    public function studentexemption()
    {
        return $this->hasMany('App\Studentexemption');
    }
    public function studentsemesteravg()
    {
        return $this->hasMany('App\Studentsemesteravg');
    }

    public function studentfee()
    {
        return $this->hasMany('App\Studentfee');
    }
}
