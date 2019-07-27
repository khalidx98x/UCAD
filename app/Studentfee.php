<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentfee extends Model
{
	protected $fillable = [
        'student_id', 'semester_id', 'type', 'feetype_id', 'value','receipt_number'
    ];    
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
    public function semester()
    {
        return $this->belongsTo('App\Semester');
    }
    public function feetype()
    {
        return $this->belongsTo('App\Feetype');
    }
}
