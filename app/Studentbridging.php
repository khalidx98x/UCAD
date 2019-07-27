<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentbridging extends Model
{
	protected $fillable = [
        'university_name', 'graduate_year', 'college', 'department', 'gpa','com_exam', 'student_id'
    ];
   	public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
