<?php

namespace App;

use App\Admin\Subjects;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['dpt_name','dpt_code'];
    public function subjects(){
        return $this->belongsTo('App\Admin\Subjects', 'foreign_key');
    }
}
