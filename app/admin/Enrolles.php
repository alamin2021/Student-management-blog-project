<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Enrolles extends Model
{
    protected $fillable = ['student_name','std_usr','std_eamil','dpt_name','course_id','teachers_id','course_credit','course_code','t_credit'];
}
