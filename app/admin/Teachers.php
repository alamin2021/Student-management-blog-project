<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $fillable = ['name','mobile','email','password','image','t_credit','max_credit','departments_id','teacher_id'];
}
