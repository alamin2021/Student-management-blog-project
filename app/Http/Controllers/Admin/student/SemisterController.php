<?php

namespace App\Http\Controllers\Admin\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Semisters;
class SemisterController extends Controller
{
    public function index()
    {
        $data = Semisters::all();
        return view('backend.student-management.semester.view',compact('data'));
    }

   
    public function create()
    {
        return view('backend.student-management.semester.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'semister_name' => 'required|unique:semisters|max:25',
        ]);
        $data = $request->all();
        Semisters::create($data);
        return back()->with('success','Semister Added Successfully');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = Semisters::find($id);
        return view('backend.student-management.semester.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'semister_name' => 'required|unique:semisters|max:25',
        ]);
        $data = Semisters::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','Semister Update Successfully');
    }

    
    public function destroy($id)
    {
        $data = Semisters::find($id);
        $data->delete();
        return back()->with('success','Semister Deleted Successfully');
    }
}
