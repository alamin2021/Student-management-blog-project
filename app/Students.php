<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['f_name','l_name','u_name','mobile','email','password','image','divisions_id','districts_id','upazilas_id','village','unions','wordno','departments_id','course_id','std_id'] ;
}
