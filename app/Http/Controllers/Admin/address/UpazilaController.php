<?php

namespace App\Http\Controllers\Admin\address;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Divisions;
use App\Admin\Districts;
use App\Admin\Upazilas;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $data = Upazilas::join('divisions','upazilas.divisions_id','=','divisions.id')
         ->join('districts','upazilas.districts_id','=','districts.id')
         ->select('upazilas.*','divisions.division_name','districts.district_name')->get();

        return view('backend.address.upazila.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division = Divisions::all();
        return view('backend.address.upazila.create',compact('division'));
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
            'districts_id' => 'required',
            'upazila_name' => 'required|unique:Upazilas|max:25',
        ]);
        
        $data = $request->all();
        Upazilas::create($data);
        return back()->with('success','Upazila Added Successfully');
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
        $district = Districts::all();
        $upazila = Upazilas::find($id);
        return view('backend.address.upazila.edit',compact('division','district','upazila'));
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
            'districts_id' => 'required',
            'upazila_name' => 'required|unique:Upazilas|max:25',
        ]);
        $data = Upazilas::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','Upazilla Data Update Successfully');
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
