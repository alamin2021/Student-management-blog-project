<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['category_name','category_code'];

    public function posts()
    {
        return $this->hasMany('App\admin\Posts', 'category_id');
    }

}
