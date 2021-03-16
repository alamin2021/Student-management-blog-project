<?php

namespace App\Http\Controllers\Admin\library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Books;
use App\Department;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();
        $data = Books::all();
        return view('backend.library.book.view',compact('data','department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        $book = Books::latest()->first();
        return view('backend.library.book.create',compact('department','book'));
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
            'book_name' => 'required',
            'book_code' => 'required|unique:Books',
            'author_name' => 'required',
            'author_code' => 'required|unique:Books',
            'description' => 'required',
            'self_location' => 'required',
            'copy' => 'required',
        ]);
        $data = new Books;
        $data->departments_id = $request->departments_id;
        $data->book_name = $request->book_name;
        $data->book_code = $request->book_code;
        $data->author_name = $request->author_name;
        $data->author_code = $request->author_code;
        $data->description = $request->description;
        $data->self_location = $request->self_location;
        $data->copy = $request->copy;
        $data->total_copy = $request->total_copy + $request->copy;
        $data->save();
        return back()->with('success','Books Added Successfully');
    }

    public function find(){
        // $book = Books::where('b');
        return view('backend.library.book.find');
    }
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
        $data = Books::find($id);
        return view('backend.library.book.edit',compact('data'));
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
            'book_name' => 'required',
            'book_code' => 'required|unique:Books',
            'author_name' => 'required',
            'author_code' => 'required|unique:Books',
        ]);
        $data = Books::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','Books Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Books::find($id);
        $data->delete();
        return back()->with('success','Books Data Has been Delete Successfully');
    }
}
