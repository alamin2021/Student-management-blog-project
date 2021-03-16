<?php

namespace App\Http\Controllers\Admin\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Admin\SkillDetails;

class SkilldetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SkillDetails::all();
        return view('backend.about.skill.skill-details-view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.skill.skill-details-create');
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
        $data = new SkillDetails;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000,620);
            $image_resize->save('images/project/'.$file_name);
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
        $data = SkillDetails::find($id);
        return view('backend.about.skill.skill-details-edit',compact('data'));
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

        $data = SkillDetails::find($id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $old_image = $data->image;
            if($old_image != ""){
                $path = "images/project/$old_image";
                unlink($path);
            }
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000,620);
            $image_resize->save('images/project/'.$file_name);
            $data->image = $file_name;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return back()->with('success','Skill Detials update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SkillDetails::find($id);
        $image = $data->image;
        if($image != ""){
            $path = "images/project/$image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success',"The skill details has been successfully deleted ");
    }
}
