<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['departments_id','book_name','book_code','author_name','author_code','description','self_location','copy'];
}
