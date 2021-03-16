<?php

namespace App\Http\Controllers\Admin\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\CourseAssigns;
use App\Admin\Courses;
use App\Admin\Enrolles;
use App\Department;
use App\Students;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Enrolles::join('courses','enrolles.course_id','=','courses.id')->select('enrolles.*','courses.course_name')->get();
        return view('backend.enroll.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('backend.enroll.create');
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
            'course_id' => 'required',
            'teachers_id' => 'required'
        ]);
        $data = $request->all();
        Enrolles::create($data);
        return back()->with('success','Course Enrolles Successfully');
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
        $enroll  = Enrolles::find($id);
        $course = Courses::where('id', '=', $enroll->course_id)->get();
        // $district = Districts::where('divisions_id', '=', $student->divisions_id)->get();
        // $department = Department::all();
        // $course = Courses::where('departments_id', '=', $student->departments_id)->get();
        return view('backend.enroll.edit',compact('enroll','course'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
