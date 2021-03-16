<?php

namespace App\Http\Controllers\Admin\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\AboutDetails;
use Image;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = AboutDetails::all();
         return view('backend.about.about-view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.about-details-create');
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
            'title' => 'required',
            'description' => 'required',
        ]);
        $data = new AboutDetails;
        // if($request->hasFile('front_image')){
        //     $image = $request->file('front_image');
        //     $file_name = time().'.'.$image->getClientOriginalExtension();
        //     $image_resize = Image::make($image->getRealPath());
        //     $image_resize->resize(62,62);
        //     $image_resize->save('images/about/'.$file_name);
        //     $data->front_image = $file_name;
        // }

        if($request->hasFile('back_image')){
            $image = $request->file('back_image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1920,700);
            $image_resize->save('images/about/'.$file_name);
            $data->back_image = $file_name;
        }
        
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('success','Details Add Successfully !');

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
        $data = AboutDetails::find($id);
        return view('backend.about.about-edit',compact('data'));
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
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $data = AboutDetails::find($id);
        if($request->hasFile('front_image')){
            $image = $request->file('front_image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
             // remove previous image file 
            
             $old_image = $data->front_image;
             if($old_image !=""){
                 $path = "images/about/$old_image";
                 unlink($path);
             }
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(62,62);
            $image_resize->save('images/about/'.$file_name);
            $data->front_image = $file_name;
        }

        if($request->hasFile('back_image')){
            $image = $request->file('back_image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
             // remove previous image file 
            
             $old_image = $data->back_image;
             if($old_image !=""){
                 $path = "images/about/$old_image";
                 unlink($path);
             }
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1920,700);
            $image_resize->save('images/about/'.$file_name);
            $data->back_image = $file_name;
        }
        
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('success','Details Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AboutDetails::find($id);
       
        $old_image = $data->front_image;
         if( $old_image != ""){
             $path = "images/about/$old_image";
             unlink($path);
         }
        $old_image = $data->about_image;
         if( $old_image != ""){
             $path = "images/about/$old_image";
             unlink($path);
         }
         $data->delete();
         return back()->with('success','Post Data Has Been Success fully Deleted ');
     }
    
}
