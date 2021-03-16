<?php

namespace App\Http\Controllers\Admin\address;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Divisions;
use App\Admin\Districts;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Districts::join('divisions','districts.divisions_id','=','divisions.id')->select('districts.*','divisions.division_name')->get();

        return view('backend.address.district.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division = Divisions::all();
        return view('backend.address.district.create',compact('division'));
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
            'divisions_id' => 'required',
            'district_name' => 'required|unique:Districts|max:25',
        ]);
        $data = $request->all();
        Districts::create($data);
        return back()->with('success','The District Add Successfully');
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
        $division = Divisions::all();
        $district = Districts::find($id);
        return view('backend.address.district.edit',compact('district','division'));
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
            'divisions_id' => 'required',
            'district_name' => 'required|unique:Districts|max:25',
        ]);
        $data = Districts::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','District Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Districts::find($id);
        $data->delete();
        return back()->with('success','Division Data Deleted Successfully');
    }
}
