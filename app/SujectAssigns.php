<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectAssigns extends Model
{
    protected $fillable = ['semisters_id','departments_id','subjects_id'];
}
