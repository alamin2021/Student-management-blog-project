<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = User::where('usertype','admin')->get();
        return view('admin.user.view',compact('data'));
    }

   
    public function create()
    {
        return view('admin.user.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class_name' => 'required|unique:User|max:25',
        ]);
        $data = $request->all();
        User::create($data);
        return back()->with('success','User Added Successfully');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.user.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'class_name' => 'required|unique:User|max:25',
        ]);
        $data = User::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','User Update Successfully');
    }

    
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return back()->with('success','User Deleted Successfully');
    }
}
