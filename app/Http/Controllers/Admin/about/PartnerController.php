<?php

namespace App\Http\Controllers\Admin\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Partners;
use Image;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Partners::all();
        return view('backend.about.partner.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.partner.create');
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
            'soft_image' => 'required',
            'image' => 'required',
        ]);

        $data = new Partners;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = rand().'.'.$image->getClientOriginalExtension();
            // $request->image->move('images/about/',$file_name);
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(380,450);
            $image_resize->save('images/about/'.$file_name);
            $data->image = $file_name;
        }

        if($request->hasFile('soft_image')){
            $image = $request->file('soft_image');
            $file_name = rand().'.'.$image->getClientOriginalExtension();
            // $request->soft_image->move('images/about/',$file_name);
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(380,450);
            $image_resize->save('images/about/'.$file_name);
            $data->soft_image = $file_name;
        }
        
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
        $data = Partners::find($id);
        return view('backend.about.partner.edit',compact('data'));
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
        $data = Partners::find($id);
        
        if($request->hasFile('soft_image')){
            $image = $request->file('soft_image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            // remove previous image file 
            
            $old_image = $data->soft_image;
            if($old_image !=""){
                $path = "images/about/$old_image";
                unlink($path);
            }
            // $request->soft_image->move('images/about/',$file_name);

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(380,450);
            $image_resize->save('images/about/'.$file_name);
            $data->soft_image = $file_name;
        }

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

            $request->image->move('images/about/',$file_name);
            $data->image = $file_name;
        }

        

        $data->save();
        return back()->with('success','Slider Photo Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Partners::find($id);
        $old_image = $data->image;
        if($old_image !=""){
            $path = "images/about/$old_image";
            unlink($path);
        }

        $old_image = $data->soft_image;
        if($old_image !=""){
            $path = "images/about/$old_image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success','Slider Image Deleted Successfully');
    }
}
