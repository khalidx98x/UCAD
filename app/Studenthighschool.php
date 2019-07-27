<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studenthighschool extends Model
{
	protected $fillable = [
        'student_id','highschoolsource_id', 'high_school_number', 'highschoolbranch_id', 'high_school_name', 'high_school_year'
    ];
 	public function student()
    {
        return $this->belongsTo('App\Student');
    }
 	public function highschoolsource()
    {
        return $this->belongsTo('App\Highschoolsource');
    }
 	public function highschoolbranch()
    {
        return $this->belongsTo('App\Highschoolbranch');
    }

}
