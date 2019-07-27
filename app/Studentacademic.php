<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentacademic extends Model
{
    protected $fillable = [
        'department_id','pass_hours' ,'study_hours','major_id', 'plan_id', 'departmentplan','student_id' , 'credit_value', 'graduation_id'
    ];
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

	public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
    public function plan2()
    {
        return $this->belongsTo('App\Plan', 'departmentplan');
    }
    public function major()
    {
        return $this->belongsTo('App\Major');
    }
    public function graduation()
    {
        return $this->belongsTo('App\Graduation');
    }
}
