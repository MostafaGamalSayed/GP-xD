<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code', 'title', 'description', 'course_language', 'start_date', 'end_date',
        'course_specialization',  'commitment', 'course_department',
        'how_to_pass','instructor_id'
    ];

}
