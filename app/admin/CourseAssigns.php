<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class CourseAssigns extends Model
{
    protected $fillable = ['departments_id','teachers_id','course_id','course_credit'];
}
