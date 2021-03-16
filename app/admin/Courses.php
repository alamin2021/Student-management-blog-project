<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = ['course_name','course_code','course_credit','departments_id'];
}
