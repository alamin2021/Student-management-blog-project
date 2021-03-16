<?php

namespace App\Http\Controllers\Admin\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
use App\Students;
use Image;
use DB;
use App\Admin\Divisions;
use App\Admin\Districts;
use App\Admin\Upazilas;
use App\Admin\Courses;

class StudentController extends Controller
{
   


    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $data = Students::join('departments','students.departments_id','=','departments.id')
        ->join('divisions','students.divisions_id','=','divisions.id')
        ->select('students.*','departments.dpt_name','divisions.division_name')->get();

        // $data = Students::join('students','students.departments_id','=','departments.id')->select('students.*','departments.dpt_name')->get();

        return view('backend.student-management.student.student-view',compact('data'));
    }

    public function create()
    {
        $data = Department::all();
        $division = Divisions::all();
        return view('backend.student-management.student.student-create',compact('data','division'));
    }

    public function store(Request $request)
    {
        $data = new Students;

        if($request->hasfile('image')){
            $image = $request->file('image');
            $file_name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300,300);
            $image_resize->save('images/'.$file_name);
            // $request->image->move('images/',$file_name);
            $data->image=$file_name; 
        }
        // code Increment Student Id
        $department = Department::where('id',$request->departments_id)->first();
        $student = Students::where('departments_id',$request->departments_id)->get();

        $nubRow = count($student) + 1 ;
        if($nubRow < 10){
            $std_id = $department->dpt_name.'-'.date('Y').'-'."00".$nubRow;
        }
        elseif($nubRow >= 10 && $nubRow <= 99 ){
            $std_id = $department->dpt_name .'-'.date('Y').'-'."0".$nubRow;
        }
        elseif( $nubRow <= 100 ){
            $std_id = $department->dpt_name .'-'.date('Y').'-'.$nubRow;
        }

        $data->f_name = $request->f_name;
        $data->l_name = $request->l_name;
        $data->u_name = $request->u_name;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->divisions_id = $request->divisions_id;
        $data->districts_id = $request->districts_id;
        $data->upazilas_id = $request->upazilas_id;
        $data->unions = $request->unions;
        $data->village = $request->village;
        $data->wordno = $request->wordno;
        $data->departments_id = $request->departments_id;
        $data->course_id = $request->course_id;
        $data->std_id = $std_id;
        
        $data->save();
        return back()->with('success',"Add Student Data Has been Successfully Added,<br> Student Id is $std_id ");
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
        $student = Students::find($id);
        $division = Divisions::all();
        $upazila = Upazilas::where('districts_id', '=', $student->districts_id)->get();
        $district = Districts::where('divisions_id', '=', $student->divisions_id)->get();
        $department = Department::all();
        $course = Courses::where('departments_id', '=', $student->departments_id)->get();
        // $data = Department::join('Students','departments.id','=','students.departments_id')->select('departments.*','students.id')->get();
        // $department = DB::table('students')->join('departments','students.departments_id','departments.id')->get();

        
        // $student_data = Students::join('departments','students.departments_id','=','departments.id')->select('students.*','departments.dpt_name')->where('id',$id);

        // join('students','students.departments_id','=','departments.id')->select('students.*','departments.dpt_name');
        return view('backend.student-management.student.student-edit',compact('student','department','division','district','upazila','course'));
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
       $data = Students::find($id);
       if($request->hasFile('image')){
           $image = $request->file('image');
           $file_name = time().'.'.$image->getClientOriginalExtension();
           // remove previous image file 
           $old_image = $data->image;
           if( $old_image != ""){
               $path = "images/$old_image";
               unlink($path);
           }
           $image_resize = Image::make($image->getRealPath());
           $image_resize->resize(300,300);
           
           $image_resize->save('images/'.$file_name);
           
           $data->image = $file_name;
           
       }
       $data->f_name = $request->f_name;
       $data->l_name = $request->l_name;
       $data->u_name = $request->u_name;
       $data->mobile = $request->mobile;
       $data->email = $request->email;
       $data->password = $request->password;
       $data->divisions_id = $request->divisions_id;
       $data->districts_id = $request->districts_id;
       $data->upazilas_id = $request->upazilas_id;
       $data->unions = $request->unions;
       $data->village = $request->village;
       $data->wordno = $request->wordno;
       $data->departments_id = $request->departments_id;
       $data->course_id = $request->course_id;
    //    $data->std_id = $std_id;
        $data->save();
        return redirect('student/view-student')->with('success',"Student Data Update Successfully !!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Students::find($id);
       
       $old_image = $data->image;
        if( $old_image != ""){
            $path = "images/$old_image";
            unlink($path);
        }
        $data->delete();
        return back()->with('success','Student Data Has Been Success fully Deleted ');
    }
}
