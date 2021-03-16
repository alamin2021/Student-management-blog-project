<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = ['title','sub_title','fb','twitter','linkdin','skype','image'];
}
