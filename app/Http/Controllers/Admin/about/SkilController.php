<?php

namespace App\Http\Controllers\Admin\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Skils;
class SkilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Skils::all();
        return view('backend.about.skill.skill-view',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.skill.skill-create');
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
        'skill' => 'required|max:25',
        'skill_value' => 'required',
        ]);
        $data = $request->all();
        Skils::create($data);
        return back()->with('success','Skill Add Successfully');
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
        $data = Skils::find($id);
        return view('backend.about.skill.skill-edit',compact('data'));
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
            'skill' => 'required',
            'skill_value' => 'required',
        ]);
        $data = Skils::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','Skill Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Skils::find($id);
        $data->delete();
        return back()->with('success','Skils Data Has been Delete Successfully');
    }
}
