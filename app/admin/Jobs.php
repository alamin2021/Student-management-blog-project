<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = ['title','description','image'];
}
