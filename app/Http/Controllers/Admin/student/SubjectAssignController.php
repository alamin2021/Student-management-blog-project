<?php

namespace App\Http\Controllers\Admin\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
use App\Admin\Semisters;
use App\Admin\SubjectAssigns;

class SubjectAssignController extends Controller
{
   
    public function index()
    {
        return view('public.backend.student-management.subject-assign.create');
    }

    public function create()
    {
        $department = Department::all();
        $semister = Semisters::all();
        return view('backend.student-management.subject-assign.create',compact('department','semister'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'semisters_id' => 'required',
            'departments_id' => 'required',
            'subjects_id' => 'required|unique:subject_assigns'
        ],);
        $data = $request->all();
        SubjectAssigns::create($data);
        return back()->with('success','Subject Assign Successfully');
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
