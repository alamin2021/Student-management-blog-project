<?php

namespace App\Http\Controllers\Frontend;

use App\Admin\Categories;
use App\Admin\Posts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function index($id){
        $category=Categories::find($id);
        $post = Posts::where('category_id',$id)->paginate(3);
        return view('frontend.blog.category-post',compact('post','category'));
    }
}
