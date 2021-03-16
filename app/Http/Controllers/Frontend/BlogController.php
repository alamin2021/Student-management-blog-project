<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Posts;
use App\Admin\Categories;
use App\Frontend\Comments;

class BlogController extends Controller
{
    public function view(){
        $post = Posts::orderBy('id','desc')->paginate(3);
        // post count --
        $category = Categories::with('posts')->get();
        return view('frontend.blog.blog-view',compact('post','category'));
    }
  
}
