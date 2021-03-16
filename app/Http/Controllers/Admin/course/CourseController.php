<?php

namespace App\Http\Controllers\Admin\course;

use App\Admin\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Courses::join('departments','courses.departments_id','=','departments.id')->select('courses.*','departments.dpt_name')->get();
        return view('backend.course.course-view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('backend.course.course-create',compact('department'));
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
            'course_name' => 'required',
            'course_code' => 'required',
            'course_credit' => 'required',
            'departments_id' => 'required',
        ]);
        $data = $request->all();
        Courses::create($data);
        return back()->with('success','Course Data Add Successfully');
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
        $course = Courses::find($id);
        $department = Department::all();
        return view('backend.course.course-edit',compact('course','department'));
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
            'course_name' => 'required',
            'course_code' => 'required',
            'course_credit' => 'required',
            'departments_id' => 'required',
        ]);
        $data = Courses::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','Course Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Courses::find($id);
        $data->delete();
        return back()->with('success','Course Data Has been Delete Successfully');
    }
}
