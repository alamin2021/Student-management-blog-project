<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Teachers;
use Image;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teachers::join('departments','teachers.departments_id','=','departments.id')->select('teachers.*','departments.dpt_name')->get();
        return view('backend.teacher.teacher-view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('backend.teacher.teacher-create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Teachers;
        $validatedData = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|unique:teachers',
            'password' => 'required',
            'departments_id' => 'required',
        ]);
        if($request->hasfile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300,300);
            $image_resize->save('images/teacher/'.$file_name);
            // $request->image->move('images/',$file_name);
            $data->image=$file_name; 
        }

        // code Increment Teacher Id
        $department = Department::where('id',$request->departments_id)->first();
        $teacher = Teachers::where('departments_id',$request->departments_id)->get();

        $nubRow = count($teacher) + 1 ;
        if($nubRow < 10){
            $teacher_id = $department->dpt_name.'-'.date('Y').'-'."00".$nubRow;
        }
        elseif($nubRow >= 10 && $nubRow <= 99 ){
            $teacher_id = $department->dpt_name .'-'.date('Y').'-'."0".$nubRow;
        }
        elseif( $nubRow <= 100 ){
            $teacher_id = $department->dpt_name .'-'.date('Y').'-'.$nubRow;
        }

        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->max_credit = $request->max_credit;
        $data->departments_id = $request->departments_id;
        $data->teacher_id = $teacher_id;
        
        $data->save();
        return back()->with('success',"Add Teacher Data Has been Successfully Added, Teacher Id is $teacher_id");
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
        $teacher = Teachers::find($id);
        $department = Department::all();
        return view('backend.teacher.teacher-edit',compact('teacher','department'));
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
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'departments_id' => 'required',
        ]);
        $data = Teachers::find($id);

        if($request->hasfile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $old_image = $data->image;
            if($old_image != ""){
                $path = "images/teacher/$old_image";
                unlink($path);
            }
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300,300);
            $image_resize->save('images/teacher/'.$file_name);
            // $request->image->move('images/',$file_name);
            $data->image=$file_name; 
        }

        // code Increment Teacher Id
        $department = Department::where('id',$request->departments_id)->first();
        $teacher = Teachers::where('departments_id',$request->departments_id)->get();

        $nubRow = count($teacher) + 1 ;
        if($nubRow < 10){
            $teacher_id = $department->dpt_name.'-'.date('Y').'-'."00".$nubRow;
        }
        elseif($nubRow >= 10 && $nubRow <= 99 ){
            $teacher_id = $department->dpt_name .'-'.date('Y').'-'."0".$nubRow;
        }
        elseif( $nubRow <= 100 ){
            $teacher_id = $department->dpt_name .'-'.date('Y').'-'.$nubRow;
        }

        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->departments_id = $request->departments_id;
        $data->t_credit = $request->t_credit;
        $data->teacher_id = $teacher_id;
        
        $data->save();
        return back()->with('success',"Add Teacher Data Has been Updated, Teacher Id is $teacher_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Teachers::find($id);
        $image = $data->image;
        if($image != ""){
            $path = "images/teacher/$image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success',"The Teacher id has been successfully deleted . Delete id is $data->teacher_id ");
    }
}
