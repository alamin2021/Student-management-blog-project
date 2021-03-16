<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Categories;
use App\Admin\Posts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Posts::join('categories','posts.category_id','=','categories.id')->select('posts.*','categories.category_name')->get();
        return view('backend.post.post-view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        return view('backend.post.post-create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'post_image' => 'required',
            'tag' => 'required',
        ]);
        $data = new Posts;
        if($request->hasFile('post_image')){
            $image = $request->file('post_image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000,560);
            $image_resize->save('images/post/'.$file_name);
            $data->post_image = $file_name;
        }
        

        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->tag = $request->tag;
        $data->save();

        return back()->with('success','Post Add Successfully !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        $category = Categories::all();
        return view('backend.post.post-edit',compact('post','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Posts::find($id);
        if($request->hasFile('post_image')){
            $image = $request->file('post_image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            // remove previous image file 
            
            $old_image = $data->post_image;
            if($old_image !=""){
                $path = "images/post/$old_image";
                unlink($path);
            }
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000,560);
            $image_resize->save('images/post/'.$file_name);
            $data->post_image = $file_name;
        }
        

        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->tag = $request->tag;
        $data->save();

        return back()->with('success','Post Add Successfully !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Posts::find($id);
       
       $old_image = $data->post_image;
        if( $old_image != ""){
            $path = "images/post/$old_image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success','Post Data Has Been Success fully Deleted ');
    }
}
