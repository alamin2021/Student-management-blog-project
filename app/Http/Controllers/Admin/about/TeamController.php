<?php

namespace App\Http\Controllers\Admin\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Teams;
use Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teams::all();
        return view('backend.about.team.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.team.create');
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
            'sub_title' => 'required',
            'image' => 'required',
        ]);
        $data = new Teams;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000,720);
            $image_resize->save('images/team/'.$file_name);
            $data->image = $file_name;
        }
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->fb = $request->fb;
        $data->twitter = $request->twitter;
        $data->linkdin = $request->linkdin;
        $data->skype = $request->skype;
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
        $data = Teams::find($id);
        return view('backend.about.team.edit',compact('data'));
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
        $data = Teams::find($id);
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            // remove previous image file 
            
            $old_image = $data->image;
            if($old_image !=""){
                $path = "images/team/$old_image";
                unlink($path);
            }

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000,620);
            $image_resize->save('images/team/'.$file_name);
            $data->image = $file_name;
        }
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->fb = $request->fb;
        $data->twitter = $request->twitter;
        $data->linkdin = $request->linkdin;
        $data->skype = $request->skype;
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
        $data = Teams::find($id);
        $old_image = $data->image;
        if($old_image !=""){
            $path = "images/team/$old_image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success','Team Member Deleted Successfully');
    }
}
