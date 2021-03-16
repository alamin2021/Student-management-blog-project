<?php

namespace App\Http\Controllers\Admin\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Jobs;
use Image;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jobs::all();
        return view('backend.about.job.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.job.create');
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
            'image' => 'required',
        ]);
        $data = new Jobs;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(380,450);
            $image_resize->save('images/about/'.$file_name);
            $data->image = $file_name;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return back()->with('success','Skill Detials Add Successfully');
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
        $data = Jobs::find($id);
        return view('backend.about.job.edit',compact('data'));
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
        $data = Jobs::find($id);
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            // remove previous image file 
            
            $old_image = $data->image;
            if($old_image !=""){
                $path = "images/about/$old_image";
                unlink($path);
            }

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(380,450);
            $image_resize->save('images/about/'.$file_name);
            $data->image = $file_name;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return back()->with('success','Skill Detials Add Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jobs::find($id);
        $old_image = $data->image;
        if($old_image !=""){
            $path = "images/about/$old_image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success','Job Details Deleted Successfully');
    }
}
