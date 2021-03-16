<?php

namespace App\Http\Controllers\Admin\address;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Divisions;

class DivisionController extends Controller
{
    
    public function index()
    {
        $division = Divisions::all();
        return view('backend.address.division.view',compact('division'));
    }

   
    public function create()
    {
        return view('backend.address.division.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'division_name' => 'required|unique:Divisions|max:25',
        ]);
        $data = $request->all();
        Divisions::create($data);
        return back()->with('success','Department Data Add Successfully');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = Divisions::find($id);
        return view('backend.address.division.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'division_name' => 'required|unique:Divisions|max:25',
        ]);
        $data = Divisions::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','Division Data Update Successfully');
    }

    
    public function destroy($id)
    {
        $data = Divisions::find($id);
        $data->delete();
        return back()->with('success','Division Data Deleted Successfully');
    }
}
