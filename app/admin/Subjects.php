<?php

namespace App\Admin;

use App\Department;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $fillable = ['subject_name','departments_id'];

    public function user(){
        return $this->belongsTo('App\Department');
    }
}
