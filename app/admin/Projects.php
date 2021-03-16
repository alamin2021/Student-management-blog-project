<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ['image','project_count','project_title','project_description'];
}
