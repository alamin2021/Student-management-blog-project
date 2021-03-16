<?php

namespace App\Http\Controllers\Admin\about;

use App\Admin\Projects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Image;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Projects::all();
        return view('backend.about.project-view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.project-create');
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
            'project_count' => 'required',
            'project_title' => 'required',
            'project_description' => 'required',
            'image' => 'required',
        ]);
        $data = new Projects;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(62,62);
            $image_resize->save('images/project/'.$file_name);
            $data->image = $file_name;
        }
        $data->project_count = $request->project_count;
        $data->project_title = $request->project_title;
        $data->project_description = $request->project_description;
        $data->save();
        return back()->with('success','Project Data Add Successfully');
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
        $data = Projects::find($id);
        return view('backend.about.project-edit',compact('data'));
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
            'project_count' => 'required',
            'project_title' => 'required',
            'project_description' => 'required',
            'image' => 'required',
        ]);
        $data = Projects::find($id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            // remove previous image file 
            
            $old_image = $data->image;
            if($old_image !=""){
                $path = "images/project/$old_image";
                unlink($path);
            }
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000,560);
            $image_resize->save('images/project/'.$file_name);
            $data->image = $file_name;
        }
        $data->project_count = $request->project_count;
        $data->project_title = $request->project_title;
        $data->project_description = $request->project_description;
        $data->save();
        return back()->with('success','Project Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Projects::find($id);
        $old_image = $data->image;
        if($old_image !=""){
            $path = "images/project/$old_image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success','Projects Data Has been Delete Successfully');
    }
}
