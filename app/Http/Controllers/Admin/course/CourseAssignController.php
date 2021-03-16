<?php

namespace App\Http\Controllers\Admin\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Teachers;
use App\Department;
use App\Admin\Courses;
use App\Admin\CourseAssigns;

class CourseAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CourseAssigns::join('departments','course_assigns.departments_id','=','departments.id')
        ->join('teachers','course_assigns.teachers_id','=','teachers.id')
        ->join('courses','course_assigns.course_id','=','courses.id')
        ->select('course_assigns.*','departments.dpt_name','teachers.name','courses.course_name')->get();
        return view('backend.assign-course.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Teachers::all();
        $department = Department::all();

        return view('backend.assign-course.create',compact('teacher','department'));
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
            'departments_id' => 'required',
            'course_id' => 'required',
            'teachers_id' => 'required',
        ]);
        $data = $request->all();
        
        if($request->course_credit){
            $teacher_id = $request->teachers_id;
            $teacher = Teachers::where('id','=',$teacher_id)->first();
            if(($teacher->t_credit = $teacher->t_credit + $request->course_credit)<= $teacher->max_credit ){
                // $teacher->t_credit = $teacher->t_credit + $request->course_credit ;
                $teacher->save();
            }else{
                return back()->with('error',"The Teacher Dose not Get This Course ! You have to give within $teacher->max_credit Credit !!!! ");
            }
        }
        CourseAssigns::create($data);
        return back()->with('success','Course Assign Successfully');
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
        $teacher = Teachers::all();
        $department = Department::all();
        $course = Courses::all();
        $course_assign = CourseAssigns::find($id);
        $all_data = Teachers::join('course_assigns','teachers.id','=','course_assigns.teachers_id')
        ->join('courses','course_assigns.course_id','=','courses.id')
        ->select('teachers.*','course_assigns.course_id','courses.course_name')->get();
        return view('backend.assign-course.edit',compact('course_assign','teacher','department','course','all_data'));
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
            'departments_id' => 'required',
            'course_id' => 'required',
            'teachers_id' => 'required',
        ]);
        $data = CourseAssigns::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','Assigned Course Updeted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CourseAssigns::find($id);
        $data->delete();
        return back()->with('success','Assigned Course Updeted Successfully');
    }
}
