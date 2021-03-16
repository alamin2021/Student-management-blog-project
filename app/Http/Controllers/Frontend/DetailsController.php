<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Posts;
use App\Admin\Categories;
use App\Frontend\Comments;


class DetailsController extends Controller
{
    public function details($id){
        $data = Posts::find($id);
            // get the current user
    

    // get previous user id
    $previous = Posts::where('id', '<', $data->id)->max('id');

    // get next user id
    $next = Posts::where('id', '>', $data->id)->min('id');

        $comments = Comments::where('posts_id',$id)->paginate(3);
        $data->view = $data->view + 1;
        $data->save();
       return view('frontend.blog.details',compact('data','comments','previous','next'));
   }
}
