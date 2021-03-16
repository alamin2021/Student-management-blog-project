<?php

namespace App\Frontend;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable=['posts_id','name','email','comment'];
}
