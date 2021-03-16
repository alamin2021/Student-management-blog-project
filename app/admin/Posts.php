<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['category_id','title','description','post_image','tag'];

    public function categories()
    {
        return $this->belongsTo('App\Admin\Categories', 'category_id');
    }
    public function comments(){
        return $this->hasMany('App\Frontend\Comments');
    }
}
